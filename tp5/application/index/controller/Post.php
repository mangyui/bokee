<?php
namespace app\index\controller;

use think\Controller;

class Post extends Controller
{
    public function index()
    {
        return $this->fetch("post");
    }
}
