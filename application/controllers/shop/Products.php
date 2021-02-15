<?php

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Category_model');
    }

    public function index($ID = 0)
    {
        $data['Product'] = $this->Product_model->getProductsbyCategory($ID);
        $data['content'] = 'Shop/Category';
        $this->load->view('Shop', $data);
    }
}
