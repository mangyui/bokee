<?php
namespace app\index\controller;

use app\index\Controller\Base;

class Publish extends Base
{
    public function index()
    {
        return $this->fetch("publish");
    }
}
