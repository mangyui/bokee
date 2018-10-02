<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:83:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/admin\view\index\index.html";i:1538405648;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\header.html";i:1538470776;s:78:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\left_menu.html";i:1538471125;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>后台管理</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/admin/tocss/main.css">
    <style>
        /* 右侧主内容样式*/

        .top-block {
            padding: 10px;
            margin: 10px 10px;
            border-radius: 5px;
            color: #fff;
        }

        .to-block .column {
            padding: 0;
        }

        p {
            margin-bottom: 0;
        }

        .block-num {
            font-size: 36px;
        }

        .block-label {
            font-size: 12px;
        }

        .top-block .glyphicon {
            font-size: 48px;
            vertical-align: middle;
            line-height: 60px;
        }

        .block-red {
            background-color: #f78585;
        }

        .block-blue {
            background-color: #74b9e7;
        }

        .block-green {
            background-color: #70d399;
        }

        .block-light {
            background-color: #97d3c5;
        }

        .to-bigblock {
            padding-top: 2px;
        }

        .right-bigblock,
        .left-bigblock {
            padding-left: 0px;
            padding-right: 0px;
        }

        .bigblock {
            border: 1px solid;
            border-radius: 5px;
            overflow: hidden;
            margin: 10px 10px 20px;
        }

        .bigblock .bigblock-title {
            margin-bottom: 0;
            color: #fff;
            padding: 8px;
        }

        .bigblock .bigblock-content {
            height: 150px;
        }

        .bigblock .pv-data {
            background-color: #97d3c5;
            color: #fff;
            text-align: center;
            padding: 13px 0;
        }

        .bigblock-light {
            border-color: #97d3c5;
        }

        .bigblock-light .bigblock-title {
            background-color: #97d3c5;
        }

        .bigblock-yellow {
            border-color: #d1b993;
        }

        .bigblock-yellow .bigblock-title {
            background-color: #d1b993;
        }

        .bigblock-blue {
            border-color: #74b9e7;
        }

        .bigblock-blue .bigblock-title {
            background-color: #74b9e7;
        }
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

    <!--页面内容开始-->
    <div class="mycontainer">
        <!--取消使用默认的container样式-->
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
                 <!--<iframe id="_content" name="_content" src="<?php echo url('admin/lst'); ?>">-->
            <!--右侧主内容开始-->
            <section class="top-title">
                <div class="col-md-12 column">
                    <ol class="breadcrumb">
                        <li class="active">控制面板</li>
                    </ol>
                </div>
            </section>
            <div class="column rightbody">
                <div class="clearfix to-block">
                    <div class="col-md-3 column">
                        <div class="clearfix top-block block-red">
                            <div class="col-md-9 column">
                                <p class="block-num">107</p>
                                <p class="block-label">Orders</p>
                            </div>
                            <div class="col-md-3 column">
                                <span class="glyphicon glyphicon-bed"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 column">
                        <div class="clearfix top-block block-blue">
                            <div class="col-md-9 column">
                                <p class="block-num">24</p>
                                <p class="block-label">New Comments</p>
                            </div>
                            <div class="col-md-3 column">
                                <span class="glyphicon glyphicon-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 column">
                        <div class="clearfix top-block block-green">
                            <div class="col-md-9 column">
                                <p class="block-num">325</p>
                                <p class="block-label">New users</p>
                            </div>
                            <div class="col-md-3 column">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 column">
                        <div class="clearfix top-block block-light">
                            <div class="col-md-9 column">
                                <p class="block-num">45</p>
                                <p class="block-label">New images</p>
                            </div>
                            <div class="col-md-3 column">
                                <span class="glyphicon glyphicon-picture"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix to-bigblock">
                    <div class="col-md-6 column left-bigblock">
                        <div class="clearfix  bigblock bigblock-light">
                            <p class="bigblock-title">Page views</p>
                            <div class="bigblock-content"></div>
                            <div class="col-md-12 column pv-data">
                                <div class="clearfix">
                                    <div class="col-md-3 column">
                                        <p class="block-num">107</p>
                                        <p class="block-label">Orders</p>
                                    </div>
                                    <div class="col-md-3 column">
                                        <p class="block-num">69</p>
                                        <p class="block-label">Yesterday</p>
                                    </div>
                                    <div class="col-md-3 column">
                                        <p class="block-num">380</p>
                                        <p class="block-label">This Week</p>
                                    </div>
                                    <div class="col-md-3 column">
                                        <p class="block-num">1254</p>
                                        <p class="block-label">Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix  bigblock bigblock-yellow">
                            <p class="bigblock-title">Instagram activity
                                <span>@suggeElson</span>
                            </p>
                            <div class="bigblock-content"></div>
                            <div class="col-md-12 column">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 column right-bigblock">
                        <div class="clearfix  bigblock bigblock-blue">
                            <p class="bigblock-title">Week Earnings</p>
                            <div class="bigblock-content"></div>
                            <div class="col-md-12 column">

                            </div>
                        </div>
                        <div class="clearfix  bigblock bigblock-blue">
                            <p class="bigblock-title">Weather now</p>
                            <div class="bigblock-content"></div>
                            <div class="col-md-12 column">
                            </div>
                        </div>
                    </div>
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
            $('#ulNav>li').click(function () { //导航列表展开效果
                $(this).toggleClass('active-liNav');
            })
        })
    </script>
</body>

</html>