<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['categoria_dao']);
        $this->load->library(array('offers_query_service'));
    }
	public function index()
	{
		$this->_check_like_list();
		if($this->tank_auth->is_logged_in()){

        }
		$ofertas = $this->offers_query_service->get_offers_to_index();
        $this->data['ofertas'] = $ofertas;
		$this->load->view('index', $this->data);
	}
	public function test()
    {
        $ofertas = $this->offers_query_service->get_offers_to_index();
        $categorias = $this->categoria_dao->get_categories();
        $this->data['ofertas'] = $ofertas;
        $this->data['categorias'] = $categorias;
        $this->load->view('index2', $this->data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */