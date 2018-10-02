<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:80:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/admin\view\post\lst.html";i:1538467592;s:75:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\header.html";i:1538470776;s:78:"G:\phpStudy\PHPTutorial\WWW\test1\application\admin\view\common\left_menu.html";i:1538471125;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>博文列表</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/admin/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/admin/tocss/main.css">
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

            <!--右侧主内容开始-->
            <section class="top-title">
                <div class="col-md-12 column">
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo url('Index/index'); ?>">控制面板</a>
                        </li>
                        <li class="active">博文列表</li>
                    </ol>
                </div>
            </section>
            <div class="rightbody">
                <table class="mytable">
                    <tr>
                        <th class="">ID</th>
                        <th>博文名称</th>
                        <th >文章作者</th>
                        <th class="">是否推荐</th>
                        <th class="">缩略图</th>
                        <th class="">所属栏目</th>
                        <th class="wd20">操作</th>
                    </tr>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <td><?php echo $vo['id']; ?></td>
                        <td><?php echo $vo['title']; ?></td>
                        <td>
                            <?php if($vo['pic'] != ''): ?>
                            <?php echo $vo['author']; else: ?>
                            匿名
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($vo['state'] == 1): ?>
                            已推荐
                            <?php else: ?>
                            未推荐
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if($vo['pic'] != ''): ?>
                             <img src="http://127.0.0.1/test1/public/static<?php echo $vo['pic']; ?>" height="50"/>
                            <?php else: ?>
                            暂无缩略图
                            <?php endif; ?>
                        </td>
                        <td><?php echo $vo['cate']['catename']; ?></td>
                        <td>
                            <a href="<?php echo url('post/edit',array('id'=>$vo['id'])); ?>" class="label label-warning">
                                <span class="glyphicon glyphicon-edit"></span>编辑</a>
                            <a  onclick="layerwaring('确定要删除吗','<?php echo url('post/del',array('id'=>$vo['id'])); ?>')" class="label label-danger">
                                <span class="glyphicon glyphicon-trash"></span>删除</a>
                        </td>
                    </tr>
                   <?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
                <div class="fenye">
                    <?php echo $list->render(); ?>
                </div>
            </div>
            <!--右侧主内容结束-->
        </div>
    </div>
    <!--页面内容结束-->
    <script src="http://127.0.0.1/test1/public/static/admin/js/jquery.min.js"></script>
    <script src="http://127.0.0.1/test1/public/static/admin/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1/test1/public/static/admin/layer/layer.js"></script>
    <script>
        function layerwaring(mess,url) {
            layer.confirm(mess, {         //询问框
                btn: ['确定','取消'] //按钮
            }, function(){
                window.location.href=url;
            }, function(){
                layer.msg('取消成功', {icon: 1});
            });
        }
        $(function () {
            $('#ulNav>li').click(function () {
                $(this).toggleClass('active-liNav');
            });
        })
    </script>
</body>

</html>