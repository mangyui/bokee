<?php
namespace app\Admin\controller;

use app\admin\controller\Base;
use  app\Admin\model\Post as PostModel;  //名称冲突  as 取别名
class Post extends Base
{
    public function lst()
    {
        //$list=PostModel::order('id asc')->paginate(3);
       // $list=db('post')->alias('p')->join('cate c','c.id=p.cateid')->field('p.id,p.title,p.pic,p.author,p.state,c.catename')->order('id asc')->paginate(3);
        $list=PostModel::order('id asc')->paginate(3);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function add()
    {
        if(request()->isPost()){
         //   dump($_POST); die;
            $data=[
                'title'=>input('title'),
                'author'=>input('author'),
                'desc'=>input('desc'),
                'keywords'=>input('keywords'),
                'content'=>input('content'),
                'cateid'=>input('cateid'),
                'time'=>time(),
            ];
            if(input('state')=='on'){
                $data['state']=1;
            }else{
                $data['state']=0;
            }
            if($_FILES['pic']['tmp_name']){
                $file=request()->file('pic');
                $info=$file->move(ROOT_PATH.'public'.DS.'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }

            $validate=\think\Loader::validate('Post');   //Post 规则类名
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
                die;
            }
            if(db('Post')->insert($data)){
                return $this->success('添加博文成功！','lst');
            }else{
                return $this->error('添加博文失败！');
            }
            return;
        }
        $cates=db('cate')->select();
        $this->assign('cates',$cates);
        return $this->fetch();
    }

    public function edit()
    {
        $id=input('id');                        //获取数据对象
        $Post=db('Post')->find($id);

        if(request()->isPost()){               //判断是否是提交数据请求
            $data=[
                'id'=>input('id'),
                'title'=>input('title'),
                'author'=>input('author'),
                'desc'=>input('desc'),
                'keywords'=>input('keywords'),
                'content'=>input('content'),
                'cateid'=>input('cateid'),
                'time'=>time(),
            ];
            if(input('state')=='on'){
                $data['state']=1;
            }else{
                $data['state']=0;
            }
            if($_FILES['pic']['tmp_name']){
                $file=request()->file('pic');
                $info=$file->move(ROOT_PATH.'public'.DS.'static/uploads');
                $data['pic']='/uploads/'.$info->getSaveName();
            }
                                               //数据格式规则判断
            $validate=\think\Loader::validate('Post');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError()); die;
            }
            $save=db('Post')->update($data);         //修改数据库数据
            if($save!==false){
                return $this->success('修改博文成功！','lst');
            }else{
                return $this->error('修改博文失败！');
            }
        }
                                               //传递数据对象
        $this->assign('post',$Post);
        $cates=db('cate')->select();
        $this->assign('cates',$cates);
        return $this->fetch();
    }

    public function del()
    {
        $id=input('id');

        if(db('Post')->delete(input('id'))){
             $this->success('删除博文成功！','lst');
        }else{
             $this->error('删除博文失败！');
        }

    }
}
