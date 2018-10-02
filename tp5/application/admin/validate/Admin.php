<?php
namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected  $rule=[
        'username'=>'require|max:25|unique:admin',    //unique获取当前表名
        'password'=>'require',
    ];

    protected $message=[
        'username.require'=>'管理员名称必须填写',
        'username.max'=>'管理员名称长度不得大于25位',
        'username.unique'=>'管理员名称不能重复',
        'password.require'=>'管理员密码必须填写',
    ];

    protected $scene=[
        'add'=>['username','password'],
        'edit'=>['username']
    ];

}
