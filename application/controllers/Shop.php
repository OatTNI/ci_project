<?php

class Shop extends CI_Controller
{
    

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');

    }

    public function index()
    {

        $data['content'] = 'Shop/ShopMain';
        $this->load->view('Shop', $data);
    }

    public function ShowProduct($ID = 0)
    {

        $data['content'] = 'Shop/Category';
        $this->load->view('Shop', $data);
    }

    public function ShowOneProduct($ProID=0){

        $data['content'] = 'Shop/Product';
        $this->load->view('Shop', $data);
    }
}
