<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/index\view\post\post.html";i:1538576144;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\index\view\common\header.html";i:1538560769;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>博文详情</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/main.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/userblock.css">
    <!--直接用用户中心样式-->
    <style>
        .post-info {
            margin: 10px 0;
            color: #888;
            margin-bottom: 24px;
        }

        .post-title,
        .post-info,
        .post-label {
            text-align: center;
        }

        .post-label {
            margin: 20px 0;
        }

        .post-label .label {
            font-weight: normal;
            font-size: 14px;
            margin: 0 5px;
        }

        .post-content {
            font-size: 17px;
            line-height: 200%;
            text-indent: 2em;
            margin-bottom: 20px;
        }

        .post-praise {
            text-align: center;
            margin: 30px 0;
        }

        .post-praise .btn {
            padding: 10px;
            width: 100px;
            border-radius: 50px;
            vertical-align: middle;
        }

        .post-praise .btn .glyphicon {
            font-size: 18px;
            margin-right: 10px;
            color: #666;
        }

        .post-comments {
            list-style: none;
            padding-left: 0;
            border-top: 1px solid #ccc;
        }

        .post-comments li {
            border-bottom: 1px dashed #ccc;
            display: flex;
            padding: 20px 0;
            position: relative;
        }

        .post-comments li img {
            width: 80px;
            height: 80px;
            margin-right: 10px;
        }

        .post-comments li .post-comments-body {
            width: 100%;
        }

        .post-comments li .post-comments-name {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        .post-comments li .post-comments-content {
            margin: 10px 0;
        }

        .post-comments li .post-comments-time {
            position: absolute;
            right: 0;
            top: 10px;
        }

        .post-comments li .post-comments-reply {
            float: right;
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
            <!--左边内容开始-->
            <div class="col-md-3">
                <div class="user-info">
                    <h4 class="user-title">博主信息</h4>
                    <div class="user-avatar">
                        <a href="<?php echo url('user/index'); ?>">
                            <img src="http://127.0.0.1/test1/public/static/index/img/avatar.jpg" alt="头像">
                        </a>
                    </div>
                    <p class="user-name"><?php echo $post['author']; ?></p>
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
                    <p class="user-btn">
                        <span class="btn btn-default">关注他</span>
                    </p>
                </div>

                <div class="user-info">
                    <h4 class="user-title">相关推荐</h4>
                    <?php if(is_array($recres) || $recres instanceof \think\Collection || $recres instanceof \think\Paginator): $i = 0; $__LIST__ = $recres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="media">
                        <a href="<?php echo url('post/index',array('postid'=>$vo['id'])); ?>" class="pull-left">
                            <img src="<?php if($vo['pic'] != ''): ?>http://127.0.0.1/test1/public/static<?php echo $vo['pic']; else: ?>http://127.0.0.1/test1/public/static/common/images/none.png<?php endif; ?>" class="media-object" alt='' />
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">
                                <a href="<?php echo url('post/index',array('postid'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>
                            </h4> <?php echo $vo['desc']; ?>
                        </div>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
            </div>
            <!--左边内容结束-->

            <!--右边内容开始-->
            <div class="col-md-9">
                <div class="user-activity">
                    <h4 class="user-title">博文内容</h4>
                    <h2 class="post-title"><?php echo $post['title']; ?></h2>
                    <p class="post-label">
                        <?php
                           $arr=explode(',',$post['keywords']);
                           foreach($arr as $k=>$v){
                              echo "<span class='label label-info'>$v</span>";
                           }
                        ?>
                    </p>
                    <p class="post-info">
                        <span><?php echo date("Y-m-d ⋅ H:i:s",$post['time']); ?></span> ⋅
                        <span><?php echo $post['click']; ?></span>预览 ⋅
                        <span>0</span>回复
                    </p>
                    <p class="post-content"><?php echo $post['content']; ?></p>
                    <div class="post-praise">
                        <p class="btn btn-default">
                            <span class="glyphicon glyphicon-thumbs-up"></span>
                            <span class="post-praise-num">66</span>
                        </p>
                    </div>

                </div>

                <div class="user-activity">
                    <h4 class="user-title">博文评论</h4>
                    <ul class="post-comments">
                        <li>
                            <img src="http://127.0.0.1/test1/public/static/index/img/avatar.jpg">
                            <div class="post-comments-body">
                                <h6 class="post-comments-name">的撒名</h6>
                                <p class="post-comments-content">的撒娇达拉斯的撒娇达拉斯的撒娇达拉斯的撒娇达拉斯的撒娇达拉斯的撒娇达拉斯的撒娇达拉斯的撒娇达拉斯的撒娇达拉斯</p>
                                <span class="post-comments-time">2018-09-11 21:10</span>
                                <a class="post-comments-reply" href="#">回复</a>
                            </div>
                        </li>
                        <li>
                            <img src="http://127.0.0.1/test1/public/static/index/img/avatar.jpg">
                            <div class="post-comments-body">
                                <h6 class="post-comments-name">的撒名</h6>
                                <p class="post-comments-content">的撒娇达拉斯</p>
                                <span class="post-comments-time">2018-09-11 21:10</span>
                                <a class="post-comments-reply" href="#">回复</a>
                            </div>
                        </li>
                    </ul>
                    <div>
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
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