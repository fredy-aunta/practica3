<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 23/04/16
 * Time: 12:46 PM
 */
class Offers_query_service
{
    private $CI;
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model(array('ofertas_dao'));
    }

    public function get_offers_to_index()
    {
        if($this->CI->tank_auth->is_logged_in()){
            $user_id = $this->CI->tank_auth->get_user_id();
            $cliente = $this->CI->cliente_dao->get_by_user_id($user_id);
            $categories_ids = $this->CI->cliente_categoria_dao->get_categories_by_customer_id($cliente->id);
            $ofertas = $this->CI->ofertas_dao->get_offers_by_categories($categories_ids);
        }else{
            $ofertas = $this->CI->ofertas_dao->get_all_offers(true);
        }

        return $ofertas;
    }
}