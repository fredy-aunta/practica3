<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 7/04/16
 * Time: 01:30 AM
 */
class Cliente_categoria_dao extends CI_Model
{
    const TABLE_NAME = 'cliente_categoria';
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($form_data)
    {
        $this->db->insert(self::TABLE_NAME, $form_data);
    }

    public function get_categories_by_customer_id($customer_id)
    {
        $this->db->where('cliente_id', $customer_id);
        $query = $this->db->get(self::TABLE_NAME);
        $selected_categories = array();
        if($query->num_rows() > 0){
            foreach($query->result() as $row){
                $selected_categories[] = $row->categoria_id;
            }
        }
        return $selected_categories;
    }

    public function exists($customer_id, $category_id)
    {
        $this->db->where('cliente_id', $customer_id);
        $this->db->where('categoria_id', $category_id);
        $query = $this->db->get(self::TABLE_NAME);
        if($query->num_rows() == 0){
            return false;
        }
        return true;
    }

    public function delete_associated_categories($customer_id)
    {
        $this->db->where('cliente_id', $customer_id);
        $this->db->delete(self::TABLE_NAME);
    }
}