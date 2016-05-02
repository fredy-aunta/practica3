<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 5/04/16
 * Time: 06:52 PM
 */
class Ofertas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ofertas_dao']);
    }
    public function categoria($categoria_id)
    {
        echo $categoria_id;
    }

    public function details($oferta_id = null)
    {
        if(empty($oferta_id)){
            redirect('/');
        }
        $offer = $this->ofertas_dao->get_by_id($oferta_id);
        if(empty($offer)){
            redirect('/');
        }
        $this->data['offer'] = $offer;
        $this->load->view('offer_details', $this->data);
    }
}