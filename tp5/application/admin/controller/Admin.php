<?php
namespace app\admin\controller;

use  app\admin\model\Admin as AdminModel;  //名称冲突  as 取别名
use app\admin\controller\Base;
class Admin extends Base
{
    public function lst()
    {
        $list=AdminModel::order('id asc')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost()){
          //  dump(input('post.'));
            $data=[
                'username'=>input('username'),
                'password'=>input('password'),
            ];
            $validate=\think\Loader::validate('Admin');   //Admin 规则类名
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('admin')->insert($data)){
                return $this->success('添加管理员成功！','lst');
            }else{
                return $this->error('添加管理员失败！');
            }
            return;
        }
        return $this->fetch();
    }
    public function info()
    {
        return $this->fetch();
    }

    public function edit()
    {
        $id=input('id');                        //获取数据对象
        $admins=db('admin')->find($id);

        if(request()->isPost()){               //判断是否是提交数据请求
            $data=[
                'id'=>input('id'),
                'username'=>input('username')
            ];
            if(input('password')){             //判断密码是否为空
                $data['password']=input('password');
            }
            else{
                $data['password']=$admins['password'];
            }
                                               //数据格式规则判断
            $validate=\think\Loader::validate('Admin');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $save=db('Admin')->update($data);         //修改数据库数据
            if($save!==false){
                return $this->success('修改管理员成功！','lst');
            }else{
                return $this->error('修改管理员失败！');
            }
        }
                                               //传递数据对象
        $this->assign('admins',$admins);
        return $this->fetch();
    }

    public function del()
    {
        $id=input('id');
        if($id!=1){
            if(db('admin')->delete(input('id'))){
                 $this->success('删除管理员成功！','lst');
            }else{
                 $this->error('删除管理员失败！');
            }
        }else{
            $this->error('初始化管理员不能删除');
        }
    }

    public function logout(){
        session(null);
        $this->success('退出成功！','Login/index');
    }
}
