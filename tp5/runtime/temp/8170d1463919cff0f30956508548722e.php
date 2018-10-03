<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/admin\view\cate\add.html";i:1538547718;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\header.html";i:1538470776;s:78:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\left_menu.html";i:1538471125;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加栏目</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/admin/css/main.css">
    <style>

    </style>
</head>

<body>

    <!--页头开始-->
    <header class="navbar navbar-default">
    <div class="mycontainer">
        <a href="<?php echo url('index/index'); ?>" class="navbar-brand" id="mylogo">MANGYU</a>
        <h4>后台管理</h4>
        <section class="logout">
            <a class="admin-aset" href="<?php echo url('admin/info'); ?>">
                <span class="glyphicon glyphicon-user"></span><?php echo \think\Request::instance()->session('username'); ?></a>

            <!--下拉更多分类开始-->
            <div class="dropdown admin-aset">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">设置
                    <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">设置1</a>
                    </li>
                    <li>
                        <a href="#">设置2</a>
                    </li>
                    <li>
                        <a href="#">设置3</a>
                    </li>
                </ul>
            </div>
            <!--下拉更多分类结束-->

            <a class="admin-aset" href="<?php echo url('admin/logout'); ?>">
                <span class="glyphicon glyphicon-log-out"></span>登出</a>
        </section>
    </div>
</header>
    <!--页头结束-->

    <div class="mycontainer">
        <div class="clearfix">

            <!--菜单列表开始-->
            <label id="toggle-label" class="visible-xs-inline-block" for="toggle-checkbox">
    <span class="glyphicon glyphicon-menu-hamburger"></span>
</label>
<input class="hidden" id="toggle-checkbox" type="checkbox">
<nav class="column leftul hidden-xs">
    <div>
        <div class="top-hidden"></div>
        <div class="search">
            <span class="glyphicon glyphicon-search"></span>
            <input type="text" class="form-control">
        </div>
        <ul id="ulNav">
            <li>
                <a>
                    <span class="glyphicon glyphicon-user left-icon"></span>管理员
                    <span class="glyphicon glyphicon-menu-right right-icon"></span>
                </a>
                <ul class="two-ul">
                    <li>
                        <a href="<?php echo url('admin/lst'); ?>">管理员列表
                            <!--   <span class="glyphicon glyphicon-menu-right right-icon"></span> -->
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('admin/add'); ?>">添加管理员
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <span class="glyphicon glyphicon-bookmark left-icon"></span>栏目
                    <span class="glyphicon glyphicon-menu-right right-icon"></span>
                </a>
                <ul class="two-ul">
                    <li>
                        <a href="<?php echo url('cate/lst'); ?>">栏目列表
                            <!--   <span class="glyphicon glyphicon-menu-right right-icon"></span> -->
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('cate/add'); ?>">添加栏目
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <span class="glyphicon glyphicon-list-alt left-icon"></span>博文
                    <span class="glyphicon glyphicon-menu-right right-icon"></span>
                </a>
                <ul class="two-ul">
                    <li>
                        <a href="<?php echo url('post/lst'); ?>">博文列表
                            <!--   <span class="glyphicon glyphicon-menu-right right-icon"></span> -->
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('post/add'); ?>">添加博文
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <span class="glyphicon glyphicon-link left-icon"></span>友情链接
                    <span class="glyphicon glyphicon-menu-right right-icon"></span>
                </a>
                <ul class="two-ul">
                    <li>
                        <a href="<?php echo url('links/lst'); ?>">链接列表
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('links/add'); ?>">添加链接
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a>
                    <span class="glyphicon glyphicon-cog left-icon"></span>系统
                    <span class="glyphicon glyphicon-menu-right right-icon"></span>
                </a>
                <ul class="two-ul">
                    <li>
                        <a href="<?php echo url('admin/info'); ?>">系统信息
                        </a>
                    </li>
                </ul>
            </li>
            <li class="hidden">
                <a href="<?php echo url('admin/logout'); ?>">
                    <span class="glyphicon glyphicon-log-out left-icon"></span>登出
                    <span class="glyphicon glyphicon-menu-right right-icon"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
   /* var twoli=document.querySelector('.active-two-li');
    var li=twoli.parentNode.parentNode;
    li.classList.add('active-liNav');*/
</script>
            <!--菜单列表结束-->

            <!--主内容开始-->
            <section class="top-title">
                <div class="col-md-12 column">
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo url('Index/index'); ?>">控制面板</a>
                        </li>
                        <li class="active">添加栏目</li>
                    </ol>
                </div>
            </section>
            <div class="rightbody">
                <div class="myform-form">
                    <form action="" method="post">
                    <div class="myform-line">
                        <label class="myform-left">栏目名：</label>
                        <div class="myform-right">
                             <input class="myform-input" name="catename" type="text" placeholder="栏目名称">
                        </div>
                    </div>
                    <div class="myform-line">
                        <label class="myform-left">栏目说明：</label>
                        <div class="myform-right">
                            <textarea class="myform-textarea" name="desc"></textarea>
                        </div>
                    </div>
                    <div class="myform-line">
                        <div class="myform-right">
                            <input class="myform-btn" type="submit" value="添加">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
            <!--右侧主内容结束-->
        </div>
    </div>
    <script src="http://127.0.0.1/test1/public/static/common/js/jquery.min.js"></script>
    <script src="http://127.0.0.1/test1/public/static/common/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1/test1/public/static/admin/js/main.js"></script>
    <script>

    </script>
</body>

</html>