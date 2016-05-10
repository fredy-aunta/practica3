<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model(['categoria_dao','centro_comercial_dao']);
        $this->load->library(array('offers_query_service'));
    }
	public function test()
	{
		$this->_check_like_list();
		if($this->tank_auth->is_logged_in()){

        }
		$ofertas = $this->offers_query_service->get_offers_to_index();
        $this->data['ofertas'] = $ofertas;
		$this->load->view('index', $this->data);
	}
	public function index()
    {
        $ofertas = $this->offers_query_service->get_offers_to_index();
        $categorias = $this->categoria_dao->get_categories();
        $malls = $this->centro_comercial_dao->get_all_malls();
        $this->data['ofertas'] = $ofertas;
        $this->data['categorias'] = $categorias;
        $this->data['malls'] = $malls;
        $this->load->view('index2', $this->data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */