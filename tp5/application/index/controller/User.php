<?php
namespace app\index\controller;

use app\index\Controller\Base;
class User extends Base
{
    public function index()
    {
        return $this->fetch("user");
    }
}
