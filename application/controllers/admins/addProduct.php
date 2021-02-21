<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class addProduct extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model("Product_model");
        $this->load->model("Category_model");
    }
/*
* What: use for add Product at admin's page
* Author:oat
* return: nothing
*/
    public function index()
    {
        if($this->session->userdata("user_status")==1){
           $this->set_all_rule();
            if($this->form_validation->run()==FALSE){
                $data["Category"]=$this->Category_model->getCategories();
                $data["Product"]=$this->Product_model->getProducts();
                $data["vendor"]=$this->Product_model->getVendor();
                $data["content"]="Admin/Management/AddItem";
                $this->load->view("Admin/index",$data);
            }else{
                $product=$this->get_all_post_data();
                $product=$this->add_product($product);
            }
        }else{
            // $this->session->set_flashdata("error","you are not administrator");
            redirect("www.google.com");
        }
        
    }

/*
* What: use to set rule for form validation
* Author: oat
* return: nothing
*/
    private function set_all_rule(){
        $config =
        [
            [
                // ! Product Name
                "field"=>"ProductName",
                "label"=>"Product Name",
                "rules"=>"required",
            ],
            [
                // ! Vendor Name
                "field"=>"VendorName",
                "label"=>"Vendor Name",
                "rules"=>"required"
            ],
            [
                // ! Category
                "field"=>"category",
                "label"=>"Category",
                "rules"=>"required"
            ],
            [
                // ! Image URL
                "field"=>"Picture[]",
                "label"=>"Picture's url",
                "rules"=>"required|valid_url"
            ],
            [
                // ! Description
                "field"=>"description",
                "label"=>"Description",
                "rules"=>"required"
            ],
            [
                // ! Product Price
                "field"=>"ProductPrice",
                "label"=>"Price of Product",
                "rules"=>"required"
            ]
            
        ];
        $this->form_validation->set_rules($config);
    }

/*
* What: use to get all post data sent via form
* Author: oat
* return: array of post data
*/
    private function get_all_post_data(){
       $product_name=$_POST["ProductName"];
       $vendor_name=$_POST["VendorName"];
       $category=$_POST["category"];
       $description=$_POST["description"];
       $product_price=$_POST["ProductPrice"];
       $image_url=$_POST["Picture"];
       return [$product_name,$product_price,$vendor_name,$category,$image_url,$description];
    }

/*
* What: use to add product to product table and image_url to product_image table
* Author:oat
* return:nothing
*/
    private function add_product($product_name,$product_price,$vendor_name,$category,$image_url,$description){
        $this->Product_model->add_product($product_name,$product_price,$vendor_name,$category,$description);
        
    }
}

/* End of file addProduct.php */
