<html xmlns:th="http://www.thymeleaf.org">
<head>
<!DOCTYPE html>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>管理员登录</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style/css/owl.carousel.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/css/responsive.css">
    <link type="text/css" rel="stylesheet" href="../style/reset.css">
    <link type="text/css" rel="stylesheet" href="../style/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>登录</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                        
                        <div class="loginBox">
    <div class="login_cont">
        <form action="doLogin.php" method="post">
        <ul class="login">
            <li class="l_tit">管理员帐号</li>
            <li class="mb_10"><input type="text" name="username" id="username" class="login_input user_icon"></li>
            <li class="l_tit">密码</li>
            <li class="mb_10"><input type="password" name="password" id="password" class="login_input user_icon"></li>
            <li class="l_tit">验证码</li>
            <li class="mb_10"><input type="text" name="verify" id="verify" class="login_input user_icon"></li>
            <li><img src="./getVerify.php" alt="" /></li>
            <li class="autoLogin"><input type="checkbox" id="a1" name="autoFlag" class="checked" value="1"><label for="a1">自动登陆</label></li>
            <li><input type="submit" value="登录" class="login_btn" /></li>
        </ul>
        </form>
        <div class="login_partners">
            <p class="l_tit">使用合作方账号登陆网站</p>
            <ul class="login_list clearfix">
                <li><a href="#">QQ</a></li>
                <li><span>|</span></li>
                <li><a href="#">网易</a></li>
                <li><span>|</span></li>
                <li><a href="#">新浪微博</a></li>
                <li><span>|</span></li>
                <li><a href="#">腾讯微薄</a></li>
                <li><span>|</span></li>
                <li><a href="#">新浪微博</a></li>
                <li><span>|</span></li>
                <li><a href="#">腾讯微薄</a></li>
            </ul>
        </div>
    </div>
    <a class="reg_link" href="#"></a>
</div>
            
        </div>
    </div>
</div> <!-- End main content area -->


<?php
include 'footer.php';
?>

</body>
</html>