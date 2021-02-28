<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class changeProduct extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Product_model");
        $this->load->model("Product_image_model");
        $this->load->model("Category_model");
    }
    
    public function index($mode="",$input_id="")
    {
        if($mode=="show"&&$input_id!=""){
            $data["product_detail"]=$this->Product_model->getaProduct($input_id);
            $data["images"]=$this->Product_model->getProductImages($input_id);
            $data['Category'] = $this->Category_model->getCategories();
            $data['Product'] = $this->Product_model->getProducts();
            $data["vendor"]=$this->Product_model->getVendor();
            $data['content'] = 'Admin/Management/AddItem';
            $this->load->view('Admin/index', $data);
        }else{

        }
        
    }
    private function get_all_post_data(){

    }


}

/* End of file changeProduct.php */
