<!DOCTYPE html>
<html>
<head>
    <? $this->load->view('common/head') ?>
    <title>Shopping-app - Login</title>
</head>
<body>
<? $this->load->view('boxes/header') ?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="marg2 pad03-04 background-green">
                <form action="<?= site_url('/auth/login_fb') ?>">
                    <div class="form-group">
                        <a class="btn btn-block btn-social btn-lg btn-facebook">
                            <i class="fa fa-facebook"></i>
                            Log in with Facebook
                        </a>
                    </div>
                </form>
                <h4 class="center">OR</h4>
                <form action="/auth/login" method="post">
                    <div class="form-group ">
                        <label for="login">Email or login</label>
                        <input type="text" class="form-control" name="login" id="login"
                               value="<?= set_value('login') ?>" placeholder="Email or login">
                    </div>
                    <div class="form-group ">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Password" value="<?= set_value('password') ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="/auth/forgot_password">Forgot password</a>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>