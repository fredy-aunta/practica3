<?php

class Ofertas_dao extends CI_Model
{
    const TABLE_NAME = 'ofertas';
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_offers($random = false)
    {
        if($random){
            $this->db->order_by('rand()');
        }
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }

    public function get_offers_by_categories($categories_ids)
    {
        $this->db->where_in('ofertas.categoria_id', $categories_ids);
        $this->db->order_by('rand()');
        $this->db->limit(10);
        $query = $this->db->get('ofertas');

        return $query->result();
    }

    public function insert($offer)
    {
        $this->db->insert(self::TABLE_NAME, $offer);

        return $this->db->insert_id();
    }
}