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
        $query = $this->db->get(self::TABLE_NAME);

        return $query->result();
    }

    public function insert($offer)
    {
        $this->db->insert(self::TABLE_NAME, $offer);

        return $this->db->insert_id();
    }

    public function get_by_id($offer_id)
    {
        $this->db->where('id', $offer_id);
        $query = $this->db->get(self::TABLE_NAME);
        if($query->num_rows() == 0){
            return false;
        }
        return $query->row();
    }
}