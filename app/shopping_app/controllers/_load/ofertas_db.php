<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 1/05/16
 * Time: 12:44 PM
 */
class Ofertas_db  extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['ofertas_dao']);
    }

    public function insert()
    {
        if(!empty($this->input->post())){
            $offer = new stdClass();
            $offer->name = $this->input->post('name');
            $offer->description = nl2br($this->input->post('desc'));
            $offer->precio = $this->input->post('price');
            $offer->precio_anterior = $this->input->post('last_price');
            $offer->imagen = $this->input->post('image');
            $offer->url = $this->input->post('url');
            $offer->categoria_id = $this->input->post('category');
            $id = $this->ofertas_dao->insert($offer);

            echo $id;
        }
        $this->load->view('load/insert_offer');
    }
}