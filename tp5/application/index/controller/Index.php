<?php
namespace app\index\controller;

use app\index\Controller\Base;
use app\index\Model\Post as PostModel;  //名称冲突  as 取别名
class Index extends Base
{
    public function index()
    {
        $this->right();
        $list=PostModel::where('state',1)->order('click desc')->select();
        $this->assign('post',$list);
        return $this->fetch();
    }
}
