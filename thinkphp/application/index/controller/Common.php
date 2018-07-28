<?php
namespace app\index\controller;
use \think\Controller;
use \think\Request;
use \think\Db;
use \think\Config;
use \think\Validate;

class Common extends Controller
{

    public function _initialize() {
		header("content-type:text/html;charset=utf-8");
		$this->assign("menu_top", $this->show_menu());
   

    }

    private function show_menu() {
       $admin_department = db('admin_department')->where(['tbid'=>'172','type'=>1])->find();
       $admin_department = str_replace('.', '/', $admin_department);
       // var_dump($admin_department);die;
		   $data = array();
		    require(explode('controller',__FILE__)[0]."menu.inc.php");
       		 foreach ($menu_left as $key => $value) {
          		$data[$key] = $value;
              // var_dump($key);
              // var_dump($value);
      		}
          return $data; 
    }
  
}
