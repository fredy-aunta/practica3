<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 10/04/16
 * Time: 08:54 PM
 */
class Account extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('categoria_dao'));
        $this->load->library(array('facebook_lib'));
        $this->_check_is_logged_in();
    }

    public function index()
    {
        $this->load->view('account_details', $this->data);
    }

    public function get_likes()
    {
        $accessToken = $this->facebook_lib->get_access_token();
        if(empty($accessToken)){
            $login_url = $this->facebook_lib->get_login_url(site_url('/account/get_likes'));
            header('Location: ' . $login_url);
            exit();
        }
        $tags_by_category = $this->categoria_dao->get_tags_by_category();
        $result = $this->facebook_lib->get_likes();
        $matches = $this->facebook_lib->search($result, $tags_by_category);
        $this->cliente_categoria_dao->delete_associated_categories($this->data['cliente']->id);
        foreach($matches as $category_id => $match){
            if(!empty($match)){
                $customer_category = new stdClass();
                $customer_category->cliente_id = $this->data['cliente']->id;
                $customer_category->categoria_id = $category_id;
                $this->cliente_categoria_dao->insert($customer_category);
            }
        }
        redirect('');
    }
}