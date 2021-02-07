<?php

class Shop extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shopping_Cart_model');
    }

    public function index()
    {
        $data['category'] = $this->Shopping_Cart_model->getCategory();
        $data['content'] = 'Shop/ShopMain';
        $this->load->view('Shop', $data);
    }

    public function ShowProduct($ID = 0)
    {
        $data['category'] = $this->Shopping_Cart_model->getCategory();
        $data['Product'] = $this->Shopping_Cart_model->getProductsbyCategory($ID);
        $data['content'] = 'Shop/Category';
        $this->load->view('Shop', $data);
    }

    public function ShowOneProduct($ProID=0){
        $data['category'] = $this->Shopping_Cart_model->getCategory();
        $data['Product'] = $this->Shopping_Cart_model->getaProduct($ProID);
        $data['content'] = 'Shop/Product';
        $this->load->view('Shop', $data);
    }
}
