<?php if (!defined('THINK_PATH')) exit();?><!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>后台登录</title>
    <!-- Custom Theme files -->
    <link href="/Application/Admin/View/Login/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="后台登录" />
    <!--Google Fonts-->
    <!--<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    --><!--Google Fonts-->
</head>

<body>
<!--header start here-->
<div class="login-form">
    <div class="top-login">
        <span><img src="/Application/Admin/View/Login/images/group.png" alt=""/></span>
    </div>
    <h1>注册</h1>
    <div class="login-top">
        <form action="/index.php/?s=admin/login/doregister">
            <div class="login-ic">
                <i ></i>
                <input type="text"  value="用户名" name="user_name" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'User name';}"/>
                <div class="clear"> </div>
            </div>
            <div class="login-ic">
                <i class="icon"></i>
                <input type="password"  value="" name="password" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'password';}"/>
                <div class="clear"> </div>
            </div>
            <div class="login-ic">
                <i class="icon"></i>
                <input type="text"  value="邮箱" name="email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '邮箱';}"/>
                <div class="clear"> </div>
            </div>

            <div class="login-ic">
                <i class="icon"></i>
                <input type="text"  value="请输入验证码" name="yzm" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '验证码';}"/><img src="/index.php/Admin/Login/verify">
                <div class="clear"> </div>
            </div>


            <div class="log-bwn">
                <input type="submit"  value="注册" >
            </div>
        </form>
    </div>
    <p class="copy">© <?php echo (date(('Y-m-d H:i:s'),$time)); ?> <a href="#" target="_blank">pbwk</a></p>
</div>
<!--header start here-->
</body>
</html>