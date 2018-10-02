<?php
namespace app\Admin\controller;

use app\admin\controller\Base;
use  app\Admin\model\Cate as CateModel;  //名称冲突  as 取别名
class Cate extends Base
{
    public function lst()
    {
        $list=CateModel::order('id asc')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost()){
          //  dump(input('post.'));
            $data=[
                'catename'=>input('catename'),
                'desc'=>input('desc'),
            ];
            $validate=\think\Loader::validate('Cate');   //Cate 规则类名
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('Cate')->insert($data)){
                return $this->success('添加栏目成功！','lst');
            }else{
                return $this->error('添加栏目失败！');
            }
            return;
        }
        return $this->fetch();
    }

    public function edit()
    {
        $id=input('id');                        //获取数据对象
        $Cate=db('Cate')->find($id);

        if(request()->isPost()){               //判断是否是提交数据请求
            $data=[
                'id'=>input('id'),
                'catename'=>input('catename'),
                'desc'=>input('desc')
            ];
                                               //数据格式规则判断
            $validate=\think\Loader::validate('Cate');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $save=db('Cate')->update($data);         //修改数据库数据
            if($save!==false){
                return $this->success('修改栏目成功！','lst');
            }else{
                return $this->error('修改栏目失败！');
            }
        }
                                               //传递数据对象
        $this->assign('cate',$Cate);
        return $this->fetch();
    }

    public function del()
    {
        $id=input('id');

        if(db('Cate')->delete(input('id'))){
             $this->success('删除栏目成功！','lst');
        }else{
             $this->error('删除栏目失败！');
        }

    }
}
