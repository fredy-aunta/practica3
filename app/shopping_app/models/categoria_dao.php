<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 7/04/16
 * Time: 01:30 AM
 */
class Categoria_dao extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_categories()
    {
        $query = $this->db->get('categorias');
        return $query->result();
    }

    public function get_tags_by_category()
    {
        $query = $this->db->get('categorias');
        $tags = [];
        foreach($query->result() as $row){
            $tags[$row->id] = explode(', ', $row->tags);
        }
        return $tags;
    }
}