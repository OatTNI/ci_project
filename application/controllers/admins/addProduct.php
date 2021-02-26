<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class addProduct extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model("Product_model");
        $this->load->model("Category_model");
        $this->load->model("Product_image_model");
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
                $this->add_product(
                    $product[0],$product[1],$product[2],$product[3],
                    $product[4],$product[5]
                );
                
                $data["Category"]=$this->Category_model->getCategories();
                $data["Product"]=$this->Product_model->getProducts();
                $data["vendor"]=$this->Product_model->getVendor();
                $data["content"]="Admin/Management/ItemManager";
                $this->load->view("Admin/index",$data);
            }
        }else{
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
       $vendor_id=$_POST["VendorName"];
       $category_id=$_POST["category"];
       $description=$_POST["description"];
       $product_price=$_POST["ProductPrice"];
       $image_url=$_POST["Picture"];
       return [$product_name,$product_price,$vendor_id,$category_id,$image_url,$description];
    }

/*
* What: use to add product to product table and image_url to product_image table
* Author:oat
* return:nothing
*/
    private function add_product($product_name,$product_price,$vendor_id,$category_id,$image_urls,$description){
        $this->Product_model->add_product($product_name,$vendor_id,$description,$product_price,$category_id);

        $pro_id=$this->Product_model->get_id($product_name,$vendor_id);
        $pro_id=$pro_id->product_id;
        foreach($image_urls as $url){
            $this->Product_image_model->add_image($pro_id,$url);
        }
    }
}

/* End of file addProduct.php */
