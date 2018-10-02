<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/index\view\login\login.html";i:1538051577;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录注册</title>
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1/test1/public/static/index/css/bootstrap-theme.min.css">
    <style>
        .blur{
            background: url("http://127.0.0.1/test1/public/static/index/img/loginbg.jpg");
/*             -webkit-filter: blur(15px);
            -moz-filter: blur(15px);
            -o-filter: blur(15px);
            -ms-filter: blur(15px);
            filter: blur(15px); */
            width: 100%;
            height: 100%;
            position: fixed;
            z-index: -1;
            margin-top: -20px;
        }
        .title-logo{
            height: 180px;
        }
        .title-logo h2{
            font-size: 66px;
            font-weight: bold;
            text-align: center;
            line-height: 180px;
            background:-webkit-linear-gradient(left,#147B96,#fff 25%,#147B96 50%,#fff 75%,#147B96);
            color:transparent;
            -webkit-background-clip:text;
            background-size:200% 100%;
            animation:masked-animation 2.5s infinite linear;
        }
        @-webkit-keyframes masked-animation {
            0% {
            background-position:0 0;
            }
            100% {
                background-position:-100% 0;
            }
        }
        #login-body {
            background: rgba(0, 0, 0, .8);
            color: #fff;
            width: 100%;
            height: auto;
            border-radius: 5px;
            padding: 36px;
            box-shadow: 0 0 5px #000;
            margin:0 auto;
            margin-bottom: 50px;
        }

        #login-body h4 {
            font-weight: bold;
            font-size: 30px;
            margin-bottom: 30px;
        }

        .register {
            border-left: 1px solid #fff;
            padding-left: 50px;
            padding-right: 0;
        }
        .login{
            padding-right: 50px;
            padding-left: 0;
        }
        #login-body input[type="text"],
        #login-body input[type="password"] {
            width: 93.4%;
            margin-bottom: 20px;
            padding: 10px;
            background-color: transparent;
            border: 0;
            font-size: 15px;
            border-bottom: 1px solid #ccc;
            outline: 0;
            color: #fff;
        }
        #login-body input[type="submit"]{
            border: 1px solid #888;
            color: #ccc;
            background: transparent;
            padding: 10px;
            width: 50%;
            margin: 30px auto;
            display: block;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.5s ease-in-out;
        }
        #login-body input[type="submit"]:hover{
            background-color: #000;
            border: 1px solid #fff;
            color: #fff;
        }
        @media (max-width: 767px) {
            .login{
               padding-right: 0;
               padding-bottom: 20px;
               border-bottom: 1px solid #fff;
            }
            .register {
                margin-top: 50px;
               border-left: 0;
               padding-left: 0;
            }
        }
    </style>
</head>

<body>
    <div class="blur"></div>
    <div class="title-logo">
        <h2>MANGYU</h2>
    </div>
    <div class="login-center">
        <div class="col-md-3 column">
        </div>
        <div class="col-md-6 column">
            <div id='login-body' class="row clearfix">

                    <div class="col-md-6 column login">
                        <h4>登录</h4>
                        <form action="#" method="post">
                            <input type="text" Name="Name" placeholder="用户名" >
                            <input type="password" Name="Password" placeholder="密码" >
                            <input type="submit" value="登录">
                        </form>
                    </div>
                    <div class="col-md-6 column register">
                        <h4>注册</h4>
                        <form action="#" method="post">
                            <input type="text" Name="Name" placeholder="用户名" >
                            <input type="text" Name="Email" placeholder="邮箱" >
                            <input type="password" Name="Password" placeholder="密码">
                            <input type="password" Name="Doublepwd" placeholder="确认密码">
                            <input type="submit" value="注册">
                        </form>  
                    </div>
            </div>
        </div>
        <div class="col-md-3 column">
        </div>
    </div>
    <script src="http://127.0.0.1/test1/public/static/index/js/jquery.min.js"></script>
    <script src="http://127.0.0.1/test1/public/static/index/js/bootstrap.min.js"></script>
    <script>
        $(function () {

        })
    </script>
</body>

</html>