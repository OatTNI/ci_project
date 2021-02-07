<?php

class Shop extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shopping_Cart_model');
    }
    
    public function index($ID=0)
    {
        $data['category'] = $this->Shopping_Cart_model->getCategory();
        
        $this->load->view('Shop',$data);
    }
    
}