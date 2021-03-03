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
        $data['Product'] = $this->Product_model->getProducts(1);
        $data['content'] = 'Admin/Management/ItemManager';
        $this->load->view('Admin/index', $data);
    }
    public function ItemAddPanel(){
        $data['Category'] = $this->Category_model->getCategories();
        $data['Product'] = $this->Product_model->getProducts(1);
        $data["vendor"]=$this->Product_model->getVendor();
        $data['content'] = 'Admin/Management/AddItem';
        $this->load->view('Admin/index', $data);

    }
    public function CategoryManager(){
        $data['categories'] = $this->Category_model->getCategories();
        $i=0;
        foreach($data['categories'] as $s){
            $data['Product'][$i] = $this->Product_model->getProductsbyCategory($s->category_id);
            $i++;
        }
        $data['content'] = 'Admin/Management/CategoryManager';
        $this->load->view('Admin/index', $data);
    }

    public function delete(){
        
    }

}
?>
