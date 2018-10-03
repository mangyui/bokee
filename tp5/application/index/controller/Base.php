<?php
namespace app\index\controller;

use think\Controller;

class Base extends Controller
{
    public function _initialize()
    {
        $cateres=db('cate')->order('id Asc')->select();
        $this->assign('cateres',$cateres);
    }

    public function right(){
        $clicks=db('post')->order('click desc')->limit(9)->select();
        $newres=db('post')->order('id desc')->limit(4)->select();
        $this->assign(array(
            'clicks'=>$clicks,
            'newres'=>$newres
        ));
    }
}
