<?php
class Fb_user extends CI_Model {
	
	const TABLE_NAME = 'fb_user';
	
	function __construct() {
		parent::__construct();
	}
	
	function by_id($id) {
		$this->db->where('id', $id);
		$query = $this->db->get(self::TABLE_NAME);
		if($query->num_rows()==0) return FALSE;
		return $query->row();
	}
	
	function by_email($email) {
		$this->db->where('email', $email);
		$query = $this->db->get(self::TABLE_NAME);
		if($query->num_rows()==0) return FALSE;
		return $query->row();
	}
	
	function save($data) {
		$this->db->insert(self::TABLE_NAME, $data);
		return $this->db->insert_id();
	}
	
	function get_by_funder_id($funder_id) {
		$this->db->where('funder_id', $funder_id);
		$query = $this->db->get(self::TABLE_NAME);
		if($query->num_rows()==0) return FALSE;
		return $query->row();
	}
}