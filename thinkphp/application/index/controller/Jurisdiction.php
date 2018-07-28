<?php
namespace app\index\controller;
use app\index\controller\Common;
use app\index\model\Configs;
use \think\Config;

class Jurisdiction extends Common
{

	public function index()
	{
        $data = db('admin_department')->select();
        $this->assign('data',$data);
		return $this->fetch();
	}
    public function jurisdiction()
    {
		$admin_permissions = Config::get('admin_permissions');
 		$this->assign('admin_permissions',$admin_permissions);
       return  $this->fetch();
    }
    
     public function edit()
    {

        if(input('tbid')){
           $data = db('admin_department')->where('tbid',input('tbid'))->find();
           $authorizeInfo=$this->getAuthorizeInfo($data['authorizelist']);
           $data['authorizeInfo'] ='';
           foreach ($authorizeInfo as $key => $value) {
                $data['authorizeInfo'] .= '<span class="Jurisdiction_edit_span" style="line-height:2.2">'.$value.'</span> ';
           }
           $this->assign('data',$data);
        }
        return $this->fetch();
        
    }
    public  function jurisdiction_data(){
            $data = array(
                'name'=>input('name'),
                'authorizelist'=>input('authorizelist'),
            );
            if(input('post.tbid')){
                $str = db('admin_department')->where('tbid',input('post.tbid'))->update($data);
            }else{
                $str = db('admin_department')->insert($data);
            }
            if($str){
                echo json_encode('y');
            }else{
                echo json_encode('N');
            }
    }
    public function delete(){
        if(input('post.tbid')){
            $str = db('admin_department')->where('tbid',input('post.tbid'))->delete();
            if($str){
                echo json_encode('y');
            }else{
                echo json_encode('失败');
            }
        }else{
                echo json_encode('缺少参数');
        }
    }
    //权限管理匹配
    public  function getAuthorizeInfo($authorizelist,$str='')
    {
        $admin_permissions = Config::get('admin_permissions');
        $authorizelist = explode(',', $authorizelist);
        $cb = '';
        foreach($admin_permissions as $k => $v){
            $i = 0;
            foreach($v as $kk => $vv){
                if($i != 0){
                    if(in_array($k.'.'.$kk, $authorizelist)){
                        $cb[] = $v['_title'].'：'.$vv;
                    }
                }
                $i++;
            }
        }
        if($str){
            echo json_encode($cb);
        }else{
            return $cb;
        }
    }
}
