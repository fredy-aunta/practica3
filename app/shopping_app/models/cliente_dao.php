<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 7/04/16
 * Time: 01:30 AM
 */
class Cliente_dao extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_by_user_id($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('cliente');
        if($query->num_rows() == 0){
            return false;
        }
        return $query->row();
    }

    public function create($user_id, $name, $surname, $email)
    {
        $cliente = array(
            'user_id' => $user_id,
            'nombre' => $name,
            'apellido' => $surname,
            'email' => $email
        );

        $this->db->insert('cliente', $cliente);
        return $this->db->insert_id();
    }

    public function by_id($customer_id)
    {
        $this->db->where('id', $customer_id);
        $query = $this->db->get('cliente');
        if($query->num_rows() == 0){
            return false;
        }
        return $query->row();
    }

    public function by_email($email)
    {
        $this->db->where('email', $email);
        $query = $this->db->get('cliente');
        if($query->num_rows() == 0 ){
            return false;
        }
        return $query->row();
    }
}