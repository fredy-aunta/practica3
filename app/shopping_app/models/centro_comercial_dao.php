<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 10/05/16
 * Time: 01:34 PM
 */
class Centro_comercial_dao extends CI_Model
{
    const TABLE_NAME = 'centro_comercial';
    public function __construct()
    {
        parent::__construct();
    }

    public function get_all_malls()
    {
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }

    public function get_by_id($mall_id)
    {
        $this->db->where('id', $mall_id);
        $query = $this->db->get(self::TABLE_NAME);
        if($query->num_rows() == 0){
            return false;
        }
        return $query->row();
    }
}