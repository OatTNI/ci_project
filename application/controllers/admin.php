<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
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
       // $data['content'] = 'Shop/ShopMain';
        $this->load->view('Admin/index', $data);
    }



}
