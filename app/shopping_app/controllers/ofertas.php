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
        $this->load->model(['ofertas_dao','centro_comercial_dao']);
        $this->load->library(['offers_query_service']);
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

    public function mall($mall_id){
        $offers = $this->offers_query_service->get_offers_by_mall($mall_id);
        $this->data['ofertas'] = $offers;
        $this->load->view('show_offers_by_mall', $this->data);
    }
}