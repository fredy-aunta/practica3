<?php

/**
 * Created by PhpStorm.
 * User: fredy
 * Date: 7/04/16
 * Time: 02:00 AM
 */
class Category extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('categoria_dao','cliente_categoria_dao','cliente_dao'));
    }

    public function select_categories()
    {
        $this->_check_is_logged_in();
        $cliente_id = $this->data['cliente']->id;
        $categories = $this->categoria_dao->get_categories();
        if(empty($this->input->post())){
            $this->data['selected_categories'] = $this->cliente_categoria_dao->get_categories_by_customer_id($cliente_id);
            $this->data['categories'] = $categories;
            $this->load->view('select_categories', $this->data);
        }else{
            $selected_categories = $this->input->post('categories');
            $cliente = $this->data['cliente'];
            $this->cliente_categoria_dao->delete_associated_categories($cliente_id);
            foreach($selected_categories as $category_id){
                $form_data = new stdClass();
                $form_data->cliente_id = $cliente->id;
                $form_data->categoria_id = $category_id;
                $this->cliente_categoria_dao->insert($form_data);
            }
            redirect('/category/select_categories');
        }
    }
}