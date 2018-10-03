<?php
namespace app\index\controller;

use app\index\Controller\Base;

class Post extends Base
{
    public function index()
    {
        $postid=input('postid');
        $postres=db('post')->find($postid);
        db('post')->where('id','=',$postid)->setInc('click');
        $cates=db('cate')->find($postres['cateid']);
        $recres=db('post')->where(array('cateid'=>$cates['id'],'state'=>1))->limit(6)->select();
        $this->assign(array(
            'post'=>$postres,
            'cates'=>$cates,
            'recres'=>$recres
            ));
        return $this->fetch("post");
    }
}
