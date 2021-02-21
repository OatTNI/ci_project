<?php

class Product extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Category_model');
        $this->load->model('Cart_model');
    }

    public function index($ProID = 0,$UID=0)
    {

        if($UID!=0){
            $data['qty'] = ($this->Cart_model->getUserCartProduct($UID,$ProID))->qty;
            
        }
        $data['Product'] = $this->Product_model->getaProduct($ProID);
        $data['Proimg'] = $this->Product_model->getProductImages($ProID);
        $data['vendor'] = $this->Product_model->getProductvendor($data['Product']->{'vendor_id'});
        $data['category'] = $this->Category_model->getaCategory($data['Product']->{'category_id'});
        $data['content'] = 'Shop/Product';
        $this->load->view('Shop', $data);
    }
}
