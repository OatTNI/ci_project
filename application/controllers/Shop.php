<?php

class Shop extends CI_Controller
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
        $data['content'] = 'Shop/ShopMain';
        $this->load->view('Shop', $data);
    }

    public function Products($ID = 0)
    {
        $data['Product'] = $this->Product_model->getProductsbyCategory($ID);
        $data['content'] = 'Shop/Category';
        $this->load->view('Shop', $data);
    }

    public function Product($ProID = 0)
    {
        $data['Product'] = $this->Product_model->getaProduct($ProID);
        $data['Proimg'] = $this->Product_model->getProductImages($ProID);
        $data['category'] = $this->Category_model->getaCategory($data['Product']->{'category_id'});
        $data['content'] = 'Shop/Product';
        $this->load->view('Shop', $data);
    }
}
