<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:87:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/index\view\publish\publish.html";i:1538560624;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\index\view\common\header.html";i:1538560769;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>发表博文</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/main.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/userblock.css">
    <!--直接用用户中心样式-->
    <style>
        .write-title {
            margin: 30px 0 15px;
            font-size: 18px;
            color: #666;
        }

        .write-post-title input,
        .write-post-content textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .write-post-title input {
            font-size: 19px;
            font-weight: bold;
        }

        .write-btn {
            text-align: center;
        }

        .write-btn .btn {
            font-size: 18px;
            padding: 8px 16px;
        }
    </style>
</head>

<body>
    <!--导航栏开始-->
    <div class="navbar navbar-default">
    <div class="container">

        <!--Logo开始-->
        <div class="navbar-header">
            <a href="<?php echo url('index/index'); ?>" class="navbar-brand" id="mylogo">MANGYU</a>
        </div>
        <!--Logo结束-->

        <!--响应式菜单按钮开始-->
        <label id="toggle-label" class="visible-xs-inline-block" for="toggle-checkbox">
            <span class="glyphicon glyphicon-menu-hamburger"></span>
        </label>
        <input class="hidden" id="toggle-checkbox" type="checkbox">
        <!--响应式菜单按钮结束-->
        <!--导航栏菜单开始-->
        <div class="hidden-xs">
            <!--左菜单-->
            <ul class="nav navbar-nav" id="navbar">
                <li>
                    <a href="<?php echo url('index/index'); ?>">首页</a>
                </li>
                <?php if(is_array($cateres) || $cateres instanceof \think\Collection || $cateres instanceof \think\Paginator): $i = 0; $__LIST__ = $cateres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                <li>
                    <a href="<?php echo url('cate/index',array('cateid'=>$vo['id'])); ?>"><?php echo $vo['catename']; ?></a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                <!--下拉更多分类开始-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                           <a href="#">推荐</a>
                       </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#">最新</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#">排行</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="#">其他</a>
                        </li>
                    </ul>
                </li>
                <!--下拉更多分类结束-->
            </ul>
            <!--右菜单-->
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-li-user">
                    <span class="glyphicon glyphicon-user"></span>
                    <a href="<?php echo url('login/index'); ?>" class="">登录</a>
                </li>
                <li>
                    <a href="<?php echo url('login/index'); ?>">登出</a>
                </li>
            </ul>
        </div>
        <!--导航栏菜单结束-->
    </div>
</div>
    <!--导航栏结束-->

    <!--页面内容开始-->
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="user-activity">
                    <h4 class="user-title">发表博文</h4>
                    <h5 class="write-title">博文标题</h5>
                    <p class="write-post-title">
                        <input type="text">
                    </p>
                    <h5 class="write-title">博文内容</h5>
                    <p class="write-post-content">
                        <textarea name="post" id="post" cols="30" rows="20"></textarea>
                    </p>
                    <p class="write-btn">
                        <span class="btn btn-primary">发表</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--页面内容结束-->

    <!--回到顶部按钮-->
    <div class="back-to-top">
        <span class="glyphicon glyphicon-chevron-up"></span>
        <p>TOP</p>
    </div>

    <script src="http://127.0.0.1/test1/public/static/common/js/jquery.min.js"></script>
    <script src="http://127.0.0.1/test1/public/static/common/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1/test1/public/static/index/js/main.js"></script>
    <script>
    </script>
</body>

</html>