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
    }
    public function categoria($categoria_id)
    {
        echo $categoria_id;
    }

    public function details($oferta_id)
    {
        var_dump($oferta_id);
    }
}