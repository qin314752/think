<?php
namespace app\index\validate;

use think\Validate;

class Token extends Validate
{

  protected $rule = [
        '__token__' => 'token',
        'name'  => 'require|length:3,20',
        'authorizelist'  => 'require',
    ];
    protected $message = [
        // '__token__'      => '不能重复提交',
        'name' => '用户名不能为空！',
        'authorizelist' => '用户名不能为空！2',


    ];
        // $validate = validate('Token');

        //     if(!$validate->check($data)){
        //        echo json_encode($validate->getError());
        //        die;
        //     }
}
?>