<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 5/04/16
 * Time: 06:53 PM
 */
class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('cliente_dao','cliente_categoria_dao'));
    }

    protected function _check_like_list()
    {
        if($this->tank_auth->is_logged_in()){
            $user_id = $this->tank_auth->get_user_id();
            $cliente = $this->cliente_dao->get_by_user_id($user_id);
            $categories = $this->cliente_categoria_dao->get_categories_by_customer_id($cliente->id);
            if(empty($categories)){
                //redirect('category/select_categories');
            }
        }
    }

    protected function _check_is_logged_in()
    {
        $logged_in = $this->tank_auth->is_logged_in();
        if(!$logged_in){
            redirect('');
        }
        $user_id = $this->tank_auth->get_user_id();
        $this->data['cliente'] = $this->cliente_dao->get_by_user_id($user_id);
    }

}