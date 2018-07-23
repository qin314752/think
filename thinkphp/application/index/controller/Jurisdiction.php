<?php
namespace app\index\controller;
use app\index\controller\Common;

class Jurisdiction extends Common
{
    public function jurisdiction()
    {

       return  $this->fetch();
    }
}
