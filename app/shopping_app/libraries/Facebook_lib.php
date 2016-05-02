<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 10/04/16
 * Time: 10:09 PM
 */
class Facebook_lib
{

    private $ci;
    private $facebook;
    private $access_token;
    private $redirect_login_helper;

    public function __construct()
    {
        session_start();
        $this->ci =& get_instance();
        $this->ci->load->config('facebook');
        $this->facebook = new Facebook\Facebook([
            'app_id'  => $this->ci->config->item('appId'),
            'app_secret' => $this->ci->config->item('secret'),
            'default_graph_version' => 'v2.5'
        ]);
        $this->redirect_login_helper = $this->facebook->getRedirectLoginHelper();
    }

    public function get_access_token()
    {
        if(empty($this->access_token)){
            $this->access_token = $this->build_access_token();
        }
        return $this->access_token;
    }

    public function build_access_token()
    {
        try {
            $accessToken = $this->redirect_login_helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        return $accessToken;
    }

    public function get_user_info()
    {
        try {
            $access_token = $this->get_access_token();
            $response = $this->facebook->get('/me?fields=id,name,email,first_name,last_name,link,birthday,gender,timezone,locale', $access_token->getValue());
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $user = $response->getGraphUser();
        return $user->all();
    }

    public function get_login_url($url)
    {
        $permissions = ['email','user_likes']; // Optional permissions
        $login_url = $this->redirect_login_helper->getLoginUrl($url, $permissions);
        return $login_url;
    }

    public function get_likes($after = ''){

        try {
            if(!empty($after)){
                $after = '&after=' . $after;
            }
            $access_token = $this->get_access_token();
            $response = $this->facebook->get('/me/likes?limit=100' . $after, $access_token->getValue());
        } catch(Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }
        $decoded_body = $response->getDecodedBody();
        $sub_result = array();
        if(!empty($decoded_body['paging']['cursors']['after'])){
            $sub_result = $this->get_likes($decoded_body['paging']['cursors']['after']);
        }
        $result = $decoded_body['data'];
        return array_merge($result, $sub_result);
    }

    public function search($array, $array_search)
    {
        $array = $this->extract($array);
        $arr_result = array();
        foreach($array_search as $category_id => $search_by_category){
            foreach($search_by_category as $row){
                if(empty($arr_result[$category_id])) $arr_result[$category_id] = array();
                $arr_result[$category_id] = array_merge($arr_result[$category_id],preg_grep("/$row/i",$array));
            }
        }
        return $arr_result;
    }

    private function extract($array){
        $arr = array();
        foreach($array as $row){
            $arr[] = $row['name'];
        }
        return $arr;
    }
}