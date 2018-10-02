<?php
namespace app\admin\controller;

use think\Controller;
use  app\admin\model\Admin;
class Login extends Controller
{
    public function index()
    {
        if(request()->isPost()){
            $admin=new Admin();
            $data=input('post.');
            $code=$admin->login($data);
            if($code==3){
                $this->success('身份正确，正在为您跳转...','index/index');
            }elseif($code==4){
                $this->error('验证码错误！');
            }else{
                $this->error('用户名或密码错误！');
            }
        }
        return $this->fetch("login");
    }
}
