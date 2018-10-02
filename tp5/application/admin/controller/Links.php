<?php
namespace app\Admin\controller;

use app\admin\controller\Base;
use  app\Admin\model\Links as LinksModel;  //名称冲突  as 取别名
class Links extends Base
{
    public function lst()
    {
        $list=LinksModel::order('id asc')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost()){
          //  dump(input('post.'));
            $data=[
                'title'=>input('title'),
                'url'=>input('url'),
                'desc'=>input('desc'),
            ];
            $validate=\think\Loader::validate('Links');   //Links 规则类名
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('Links')->insert($data)){
                return $this->success('添加链接成功！','lst');
            }else{
                return $this->error('添加链接失败！');
            }
            return;
        }
        return $this->fetch();
    }

    public function edit()
    {
        $id=input('id');                        //获取数据对象
        $links=db('Links')->find($id);

        if(request()->isPost()){               //判断是否是提交数据请求
            $data=[
                'id'=>input('id'),
                'title'=>input('title'),
                'url'=>input('url'),
                'desc'=>input('desc')
            ];
                                               //数据格式规则判断
            $validate=\think\Loader::validate('Links');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $save=db('Links')->update($data);         //修改数据库数据
            if($save!==false){
                return $this->success('修改链接成功！','lst');
            }else{
                return $this->error('修改链接失败！');
            }
        }
                                               //传递数据对象
        $this->assign('links',$links);
        return $this->fetch();
    }

    public function del()
    {
        $id=input('id');

        if(db('Links')->delete(input('id'))){
             $this->success('删除链接成功！','lst');
        }else{
             $this->error('删除链接失败！');
        }

    }
}
