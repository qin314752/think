<?php
namespace app\index\controller;
use app\index\controller\Common;
use \think\Config;

class Jurisdiction extends Common
{
	public function index()
	{
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
		return $this->fetch();

    }
}
