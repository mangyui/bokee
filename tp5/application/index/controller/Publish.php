<?php
namespace app\index\controller;

use think\Controller;

class Publish extends Controller
{
    public function index()
    {
        return $this->fetch("publish");
    }
}
