<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:85:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/index\view\search\search.html";i:1538580159;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\index\view\common\header.html";i:1538560769;s:74:"G:\phpStudy\PHPTutorial\WWW\test1\application\index\view\common\right.html";i:1538574410;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>搜索</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/common/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/main.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/index.css">
    <style>
        section.conent{
            margin: 0;
        }
        .container-header h4{
            background: none;
        }
        .container-header h4 .less{
            font-size: 17px;
            color: #444;
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
            <div class="col-md-12 column">
                <div class="container-header">
                    <h4><span class="less">搜索关键字： </span><?php echo $keywords; ?></h4>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <!--主页左边内容开始-->
            <div class="col-md-8 column">
                <!--轮播图开始-->

                <!--轮播图结束-->

                <!--主体热门博文开始-->
                <section class="conent">
                    <ul class="list-post">
                        <?php if(is_array($search) || $search instanceof \think\Collection || $search instanceof \think\Paginator): $i = 0; $__LIST__ = $search;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <li>
                            <div class="post">
                                <a href="<?php echo url('post/index',array('postid'=>$vo['id'])); ?>" class="post-left">
                                    <img src="<?php if($vo['pic'] != ''): ?>http://127.0.0.1/test1/public/static<?php echo $vo['pic']; else: ?>http://127.0.0.1/test1/public/static/common/images/none.png<?php endif; ?>" alt='' />
                                </a>
                                <div class="post-right">
                                    <h4 class="post-heading">
                                        <a href="<?php echo url('post/index',array('postid'=>$vo['id'])); ?>"><?php echo $vo['title']; ?></a>
                                    </h4>
                                    <span><?php echo date("Y-m-d ⋅ H:i:s",$vo['time']); ?></span> ⋅
                                    <span><?php echo $vo['click']; ?></span>预览 ⋅
                                    <span>0</span>回复</p>
                                    <p class="post-body"><?php echo $vo['desc']; ?></p>
                                    <span class="cate"><?php echo $vo['cate']['catename']; ?></span>
                                </div>
                            </div>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <div class="text-center">
                    </div>
                </section>
                <!--主体热门博文结束-->
            </div>
            <!--主页左边内容结束-->

            <!--主页右边内容开始-->
            <div class="col-md-4 column container-right">

    <!--搜索框位置-->
    <div class="search-bar mysearch">
        <form action="<?php echo url('Search/index'); ?>" method="get">
            <input type="search" class="form-control" name="keywords" placeholder="搜一下">
            <button class="btn mysearch-btn">搜索</button>
        </form>
    </div>

    <!--主页发表博文入口-->
    <section class="block block-right-top">
        <h3>有见识的人都在这里</h3>
        <p>表达网民立场,，记录个人生活，聚集意见领袖，众多草根精英，以我们的观点影响社会的进程 。</p>
        <a href="<?php echo url('publish/index'); ?>" class="btn btn-primary">发表博文</a>
    </section>

    <!--最新模块开始-->
    <section class="rightlist">
        <h4>最新博文</h4>
        <?php if(is_array($newres) || $newres instanceof \think\Collection || $newres instanceof \think\Paginator): $i = 0; $__LIST__ = $newres;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
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
    </section>
    <!--最新模块结束-->

    <!--博文排行开始-->
    <section class="rightlist ranking">
        <h4>博文排行</h4>
        <?php if(is_array($clicks) || $clicks instanceof \think\Collection || $clicks instanceof \think\Paginator): $i = 0; $__LIST__ = $clicks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <p class="ranking-data">
            <span class="ranking-no">02</span>
            <a href="<?php echo url('post/index',array('postid'=>$vo['id'])); ?>" class="ranking-title"><?php echo $vo['title']; ?></a>
            <span class="ranking-star"><?php echo $vo['click']; ?></span>
        </p>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </section>
    <!--博文排行结束-->
    <script>
        var no=document.querySelectorAll('.ranking-no');
        for(var i=0; i<no.length;i++)
        {
            no[i].innerText='0'+(i+1);
        }
    </script>
</div>
            <!--主页右边内容结束-->
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
    <!--回到顶部js文件-->
    <script>
        $(function () {

        })
    </script>
</body>

</html>