<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/index\view\user\user.html";i:1538560624;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\index\view\common\header.html";i:1538560769;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>博客中心</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/main.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/userblock.css">
    <style>
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
            <!--左边内容开始-->
            <div class="col-md-4">
                <div class="user-info">
                    <div class="user-avatar">
                        <a href="usercenter.html">
                            <img src="http://127.0.0.1/test1/public/static/index/img/avatar.jpg" alt="头像">
                        </a>
                    </div>
                    <p class="user-name">MANGYU</p>
                    <p class="user-level">
                        <span class="label label-success">Lv 6</span>
                    </p>
                    <p class="user-todata">签名：
                        <span>该用户很懒，什么都没留下！</span>
                    </p>
                    <div class="user-fans">
                        <div class="user-fans-box">
                            <p class="user-fans-num">66</p>
                            <p>关注</p>
                        </div>
                        <div class="user-fans-box">
                            <p class="user-fans-num">666</p>
                            <p>粉丝</p>
                        </div>
                    </div>
                    <p class="user-todata">注册时间：
                        <span>2018-09-10</span>
                    </p>
                </div>
                <div class="user-info user-info-base">
                    <h4 class="user-title">基本信息</h4>
                    <p class="user-todata">性别：
                        <span>男</span>
                    </p>
                    <p class="user-todata">地址：
                        <span>绍兴文理学院</span>
                    </p>
                    <p class="user-todata">地址：
                        <span>绍兴文理学院</span>
                    </p>
                    <p class="user-todata">地址：
                        <span>绍兴文理学院</span>
                    </p>
                </div>
                <div class="user-info">
                    <h4 class="user-title">代表博文</h4>
                    <div class="media">
                        <a href="post.html" class="pull-left">
                            <img src="http://tx.tianyaui.com/logo/74972299" class="media-object" alt='' />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="post.html">Nested media heading</a>
                            </h4> Cras sit amet nibh libero, in gravida nulla. citudin commodo.
                        </div>
                    </div>
                    <div class="media">
                        <a href="post.html" class="pull-left">
                            <img src="http://tx.tianyaui.com/logo/74972299" class="media-object" alt='' />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="post.html">Nested media heading</a>
                            </h4> Cras sit amet nibh libero, in gravida nulla. citudin commodo.
                        </div>
                    </div>
                </div>
            </div>
            <!--左边内容结束-->

            <!--右边内容开始-->
            <div class="col-md-8">
                <div class="user-activity">
                    <h4 class="user-title">发表博文
                        <a href="#">更多</a>
                    </h4>
                    <table class="table table-hover">
                        <thead>
                            <tr class="success">
                                <th>博文名</th>
                                <th>版块</th>
                                <th>发表时间</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="post.html">人还是需要点精神的</a>
                                </td>
                                <td>文学</td>
                                <td>2018-06-06</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="post.html">人还是需要点精神的</a>
                                </td>
                                <td>文学</td>
                                <td>2018-06-06</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="post.html">人还是需要点精神的</a>
                                </td>
                                <td>文学</td>
                                <td>2018-06-06</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="post.html">人还是需要点精神的</a>
                                </td>
                                <td>文学</td>
                                <td>2018-06-06</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="post.html">人还是需要点精神的</a>
                                </td>
                                <td>文学</td>
                                <td>2018-06-06</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="user-activity">
                    <h4 class="user-title">我的随记
                        <a href="#">更多</a>
                    </h4>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">随记1标题</h3>
                        </div>
                        <div class="panel-body">
                            随记1内容
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">随记2标题</h3>
                        </div>
                        <div class="panel-body">
                            随记2内容
                        </div>
                    </div>
                </div>
                <div class="user-activity">
                    <h4 class="user-title">我的热度
                        <a href="#">更多</a>
                    </h4>
                    <table class="table table-hover">
                        <thead>
                            <tr class="success">
                                <th>博文名</th>
                                <th>点击</th>
                                <th>回复</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="post.html">人还是需要点精神的</a>
                                </td>
                                <td>666</td>
                                <td>66</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="post.html">人还是需要点精神的</a>
                                </td>
                                <td>666</td>
                                <td>66</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="post.html">人还是需要点精神的</a>
                                </td>
                                <td>666</td>
                                <td>66</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--右边内容结束-->
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