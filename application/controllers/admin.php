<?php

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
        $data['content'] = 'Admin/Management/ItemManager';
        $this->load->view('Admin/index', $data);
    }
    public function ItemAddPanel(){
        $data['Product'] = $this->Product_model->getProducts();
        $data['content'] = 'Admin/Management/AddItem';
        $this->load->view('Admin/index', $data);
    }
    public function CategoryManager(){
        $data['categories'] = $this->Category_model->getCategories();
        $data['content'] = 'Admin/Management/CategoryManager';
        $this->load->view('Admin/index', $data);
    }



}
?>
