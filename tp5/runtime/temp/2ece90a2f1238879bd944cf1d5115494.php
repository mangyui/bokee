<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:91:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/admin\view\admin_add\admin_add.html";i:1538139745;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\header.html";i:1538139594;s:78:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\left_menu.html";i:1538139665;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员列表</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/admin/tocss/main.css">
    <style>
        .myform-form {
            width: 100%;
            font-size: 16px;
        }

        .myform-form .myform-line {
            width: 100%;
            margin: 26px 0;
        }

        .myform-form .myform-left {
            width: 150px;
            text-align: right;
            font-weight: normal;
            margin-right: 10px;
        }

        .myform-form .myform-right {
            width: 250px;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
        }

        .myform-form .myform-btn {
            width: 100px;
            text-align: center;
            color: #fff;
            background-color: #22262e;
            border-radius: 5px;
            padding: 10px;
        }
    </style>
</head>

<body>

    <!--页头开始-->
    <header class="navbar navbar-default">
    <div class="mycontainer">
        <a href="<?php echo url('index'); ?>" class="navbar-brand" id="mylogo">MANGYU</a>
        <h4>后台管理</h4>
        <section class="logout">
            <a class="admin-aset" href="<?php echo url('AdminInfo'); ?>">
                <span class="glyphicon glyphicon-user"></span>mangyu</a>

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

            <a class="admin-aset" href="<?php echo url('Login/index'); ?>">
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
                        <a href="<?php echo url('AdminList/index'); ?>">管理员列表
                            <!--   <span class="glyphicon glyphicon-menu-right right-icon"></span> -->
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo url('AdminAdd/index'); ?>">添加管理员
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
                        <a href="#">博文列表
                        </a>
                    </li>
                    <li>
                        <a href="#">添加博文
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
                        <a href="<?php echo url('AdminInfo/index'); ?>">系统信息
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="<?php echo url('Login/index'); ?>">
                    <span class="glyphicon glyphicon-log-out left-icon"></span>登出
                    <span class="glyphicon glyphicon-menu-right right-icon"></span>
                </a>
            </li>
        </ul>
    </div>
</nav>
            <!--菜单列表结束-->

            <!--主内容开始-->
            <section class="top-title">
                <div class="col-md-12 column">
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo url('Index/index'); ?>">控制面板</a>
                        </li>
                        <li class="active">添加管理员</li>
                    </ol>
                </div>
            </section>
            <div class="rightbody">
                <div class="myform-form">
                    <p class="myform-line">
                        <label class="myform-left">管理员账号：</label>
                        <input class="myform-right" type="text" placeholder="请输入管理员账号">
                    </p>
                    <p class="myform-line">
                        <label class="myform-left">管理员密码：</label>
                        <input class="myform-right" type="password" placeholder="请输入管理员密码">
                    </p>
                    <p class="myform-line">
                        <label class="myform-left">确认密码：</label>
                        <input class="myform-right" type="password" placeholder="请确认密码">
                    </p>
                    <p class="myform-line">
                        <label class="myform-left"> </label>
                        <!--左边占宽-->
                        <input class="myform-right myform-btn" type="submit" value="添加">
                    </p>
                </div>
            </div>
            <!--右侧主内容结束-->
        </div>
    </div>
    <script src="http://127.0.0.1/test1/public/static/admin/js/jquery.min.js"></script>
    <script src="http://127.0.0.1/test1/public/static/admin/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#ulNav>li').click(function () {
                $(this).toggleClass('active-liNav');
            })
        })
    </script>
</body>

</html>