<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 7/04/16
 * Time: 03:30 AM
 */
class Login extends MY_Controller
{
public function index(){
    session_start();
    $fb = new Facebook\Facebook([
        'app_id' => '225532037803902', // Replace {app-id} with your app id
        'app_secret' => 'f1332f9dad72e39d0c45dd3e5603f8dc',
        'default_graph_version' => 'v2.2',
    ]);
    $helper = $fb->getRedirectLoginHelper();

    $permissions = ['email']; // Optional permissions
    $loginUrl = $helper->getLoginUrl(base_url() . '/fb-callback.php', $permissions);

    echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
}
}