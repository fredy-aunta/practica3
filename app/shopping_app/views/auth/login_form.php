<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="fr"> <![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>plantillas web</title>
    <!--BEGIN OF TERMS OF USE. DO NOT EDIT OR DELETE THESE LINES. IF YOU EDIT OR DELETE THESE LINES AN ALERT MESSAGE MAY APPEAR WHEN TEMPLATE WILL BE ONLINE-->
    <style>
        #free-flash-header a,#free-flash-header a:hover {
            color:#363636;
        }
        #free-flash-header a:hover {
            text-decoration:none
        }
    </style>
    <!--END OF TERMS OF USE-->
    <!-- Bootstrap -->
    <link href="/assets/css/reset.css" rel="stylesheet" type="text/css" media="all">
    <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <link href="/assets/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link href="/assets/css/font.css" rel="stylesheet" type="text/css" media="all">
    <link href="/assets/css/mobile.css" rel="stylesheet" type="text/css" media="all">
    <!-- end Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900,900italic,300italic,300,100italic,100' rel='stylesheet' type='text/css'>
    <!-- LightBox -->
    <link href="/assets/css/lightbox/vlightbox.css" rel="stylesheet" type="text/css" media="all">
    <link href="/assets/css/lightbox/visuallightbox.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" type="text/css" href="/assets/css/lightbox/style.css" />
    <!-- end LightBox -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>
<body>
<div class="global-container">
    <div class="page-container">
        <?$this->load->view('common/header')?>
        <div id="content" class="bg-gradient container no_left no_right">
            <form action="/auth/login" method="post">
                <div class="form-group">
                    <span for="login">Email or login</span>
                    <input type="text" class="form-control" name="login" id="login"
                           value="<?= set_value('login')?>" placeholder="Email or login">
                </div>
                <div class="form-group">
                    <span for="password">Password</span>
                    <input type="password" name="password" class="form-control" id="password"
                           placeholder="Password" value="<?= set_value('password')?>">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
                <a href="/auth/forgot_password">Forgot password</a>
            </form>
            <form class="" action="<?= site_url('/auth/login_fb')?>">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">

                            <button type="submit" class="btn btn-social btn-block btn-facebook btn-default">
                                Log In with Facebook
                            </button>

                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>