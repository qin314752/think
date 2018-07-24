<?php
namespace app\index\controller;
use \think\Controller;
use \think\Db;
use \think\Config;

class Common extends Controller
{
    public function _initialize() {
      
		header("content-type:text/html;charset=utf-8");
		$this->assign("menu_top", $this->show_menu());
    }

    private function show_menu() {
		 $data = array();
		    require(explode('controller',__FILE__)[0]."menu.inc.php");
       		 foreach ($menu_left as $key => $value) {
          		$data[$key] = $value;
      		}
          return $data; 
    }
  
}
