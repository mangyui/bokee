<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"G:\phpStudy\PHPTutorial\WWW\test1\public/../application/admin\view\login\login.html";i:1538488777;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>管理员登录</title>
    <style>
        body {
            background: #055a5b;
        }

        .title-logo {
            height: 180px;
        }

        .title-logo h2 {
            font-size: 66px;
            font-weight: bold;
            text-align: center;
            line-height: 180px;
            background: -webkit-linear-gradient(left, #147B96, #fff 25%, #147B96 50%, #fff 75%, #147B96);
            color: transparent;
            -webkit-background-clip: text;
            background-size: 200% 100%;
            animation: masked-animation 2.5s infinite linear;
        }

        @-webkit-keyframes masked-animation {
            0% {
                background-position: 0 0;
            }
            100% {
                background-position: -100% 0;
            }
        }

        .login {
            width: 330px;
            height: auto;
            background-color: #fff;
            margin: 0 auto;
            border-radius: 5px;
            padding: 30px 50px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, .2);
        }

        @media (max-width: 767px) {
            .login {
                width: 83%;
            }
        }

        .login h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-input {
            width: 100%;
            overflow: hidden;
            margin: 30px 0;
        }

        .login-input label {
            color: #555;
        }

        .login-input input[type="text"],
        .login-input input[type="password"] {
            width: 100%;
            border: 0;
            display: block;
            padding: 5px;
            font-size: 15px;
            border-bottom: 1px solid #aaa;
        }

        .login-input input[type="text"]:focus,
        .login-input input[type="password"]:focus {
            outline: 0;
            border-bottom: 2px solid #055a5b;
        }

        .login-input input[type="submit"] {
            border: 1px solid #888;
            background: transparent;
            padding: 10px;
            width: 50%;
            margin: 0 auto;
            display: block;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 50px;
            transition: all 0.5s ease-in-out;
        }

        .login-input input[type="submit"]:hover {
            background-color: #055a5b;
            border: 1px solid #fff;
            color: #fff;
        }

        .mp30 {
            margin-top: 30px;
        }

        #vcode {
            width: 45%;
            margin-left: 0;
            margin-top: 20px;
        }
        #codeimg{
            width: 50%;
            float: right;
            height: 70px;
            cursor: pointer;
        }
        .nofocus:focus{
            outline: 0;
        }
    </style>
</head>

<body>
    <div class="title-logo">
        <h2>MANGYU</h2>
    </div>
    <div class="login">
        <h2>管理员登录</h2>
        <form action="" method="post">
            <p class="login-input">
                <label for="name">用户名</label>
                <input type="text" name="username" id="name">
            </p>
            <p class="login-input">
                <label for="pwd">密码</label>
                <input type="text" name="password" id="pwd">
            </p>
            <p class="login-input">
                <label for="vcode">验证码</label>
                <img id="codeimg" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random();" />
                <input type="text" name="vcode" id="vcode">
            </p>
            <p class="login-input mp30">
                <input class="nofocus" type="submit" value="登录">
            </p>
        </form>
    </div>
</body>

</html>