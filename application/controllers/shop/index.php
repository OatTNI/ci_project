<?php

class index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Category_model');
    }

    public function index()
    {
        $data['Product'] = $this->Product_model->getProducts();
        $data['content'] = 'Shop/Shopmain';
        $this->load->view('Shop', $data);
    }
}