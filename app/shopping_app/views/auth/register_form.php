<!DOCTYPE html>
<html>
<head>
    <? $this->load->view('common/head') ?>
    <title>Shopping-app - Login</title>
</head>
<body>
<? $this->load->view('boxes/header') ?>
<div class="container">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="marg2 pad03-04 background-green">
            <form class="" action="<?= site_url('/auth/login_fb')?>">
                <div class="form-group">
                    <a class="btn btn-block btn-social btn-lg btn-facebook">
                        <i class="fa fa-facebook"></i>
                        Register with Facebook
                    </a>
                </div>
            </form>
            <p class="smaller">
                Nunca vamos a publicar cualquier cosa en Facebook, lo juramos! Al hacer clic en Registrarse, usted
                está de acuerdo con los <a href="#" class="">Terminos de Uso</a> y
                <a href="#" class="">Politica de Privacidad</a> de Shopping-App
            </p>
            <h4 class="center">OR</h4>
            <form action="/auth/register" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username"
                           value="<?= set_value('username')?>" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email"
                           value="<?= set_value('email')?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password"
                           placeholder="Password" value="<?= set_value('password')?>">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="confirm_password"
                           placeholder="Confirm Password" value="<?= set_value('confirm_password')?>">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>