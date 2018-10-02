<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:93:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/admin\view\admin_info\admin_info.html";i:1538054184;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\header.html";i:1538139594;s:78:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\left_menu.html";i:1538139374;}*/ ?>
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

        .myform-form-wd100 .myform-right {
            width: 80%;
        }

        .myform-form-wd100 .myform-left {
            width: 120px;
        }

        .myform-form .myform-btn {
            width: 100px;
            text-align: center;
            border: 1px solid #ddd;
            color: #fff;
            background-color: #22262e;
            border-radius: 5px;
            padding: 10px;
        }

        .myform-switch .myform-switch-label {
            position: relative;
            display: inline-block;
            width: 70px;
            background-color: #64bd63;
            border: 1px solid #64bd63;
            height: 40px;
            line-height: 40px;
            padding: 5px;
            color: #fff;
            border-radius: 50px;
            cursor: pointer;
            margin: 0;
            transition: all .3s ease-in-out;
        }

        .myform-switch .myform-switch-ring {
            position: absolute;
            top: 0px;
            right: 1px;
            height: 38px;
            width: 40px;
            background-color: #fff;
            border-radius: 50%;
            transition: all .3s ease-in-out;
        }

        #myform-switch-checkbox:checked+.myform-switch-label {
            background-color: #ccc;
            border: 1px solid #ccc;
        }

        #myform-switch-checkbox:checked+.myform-switch-label .myform-switch-ring {
            right: 28px;
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

    <!--页面内容开始-->
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
                <a href="#">
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
                <a href="#">
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
                <a href="#">
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

            <!--右侧主内容开始-->
            <section class="top-title">
                <div class="col-md-12 column">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">控制面板</a>
                        </li>
                        <li class="active">系统信息</li>
                    </ol>
                </div>
            </section>
            <div class="rightbody">
                <div class="myform-form myform-form-wd100">
                    <p class="myform-line">
                        <label class="myform-left">名称：</label>
                        <input class="myform-right" type="text" value="MANGYU">
                    </p>
                    <p class="myform-line">
                        <label class="myform-left">邮箱：</label>
                        <input class="myform-right" type="text" value=" ">
                    </p>
                    <p class="myform-line">
                        <label class="myform-left">电话：</label>
                        <input class="myform-right" type="text" value="10086">
                    </p>
                    <p class="myform-line">
                        <label class="myform-left">地址：</label>
                        <input class="myform-right" type="text" value="绍兴文理学院">
                    </p>
                    <p class="myform-line">
                        <label class="myform-left">状态：</label>
                        <span class="myform-switch">
                            <input class="hidden" type="checkbox" id="myform-switch-checkbox">
                            <label for="myform-switch-checkbox" class="myform-switch-label">
                                <span class="myform-switch-ring"></span>
                            </label>
                        </span>
                    </p>
                    <p class="myform-line">
                        <!--左边占宽-->
                        <label class="myform-left"></label>
                        <input class="myform-right myform-btn" type="submit" value="确定">
                    </p>
                </div>

            </div>
            <!--右侧主内容结束-->
        </div>
    </div>
    <!--页面内容结束-->
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