<?php
namespace app\index\controller;

use app\index\Controller\Base;
use app\index\Model\Post as PostModel;  //名称冲突  as 取别名
class Cate extends Base
{
    public function index()
    {
        $this->right();
        $cateid=input('cateid');
        $cates=db('cate')->find($cateid);
        $this->assign('cates',$cates);
       // $postres=db('post')->where(array('cateid'=>$cateid))->paginate(3);
        $list=PostModel::where(array('cateid'=>$cateid))->paginate(3);
        $this->assign('post',$list);
        return $this->fetch('cate');
    }
}
