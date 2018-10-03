<?php
namespace app\index\controller;

use app\index\Controller\Base;
use app\index\Model\Post as PostModel;  //名称冲突  as 取别名
class Search extends Base
{
    public function index()
    {
        $this->right();

        $keywords=input('keywords');
        if($keywords){
            $map['title']=['like','%'.$keywords.'%'];
         //   $searchres=db('post')->where($map)->order('id desc')->select();
            $list=PostModel::where($map)->order('id desc')->select();
            $this->assign(array(
                'search'=>$list,
                'keywords'=>$keywords,
            ));
        }else{
            $this->assign(array(
                'search'=>null,
                'keywords'=>"未输入",
            ));
        }
        return $this->fetch('search');
    }
}
