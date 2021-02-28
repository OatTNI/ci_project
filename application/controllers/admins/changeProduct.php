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
            $input_id=$_POST["ProductID"];
            $this->set_all_rule();
            if($this->form_validation->run()==FALSE){
                $data["product_detail"]=$this->Product_model->getaProduct($input_id);
                $data["images"]=$this->Product_model->getProductImages($input_id);
                $data['Category'] = $this->Category_model->getCategories();
                $data['Product'] = $this->Product_model->getProducts();
                $data["vendor"]=$this->Product_model->getVendor();
                $data['content'] = 'Admin/Management/AddItem';
                $this->load->view('Admin/index', $data);
            }else{
                // ! 0 product_name
                // ! 1 product_price
                // ! 2 vendor_id
                // ! 3 category
                // ! 4 picture
                // ! 5 description
                $product=$this->get_all_post_data();
                if($this->isImage($product[4])){
                    if(!$this->isDuplicate($product[2],$product[0])||
                    $product[0]==$this->session->userdata("product_name")){
                        $this->session->unset_userdata("product_name");
                        $this->Product_model->updateProduct($input_id,$product[0],$product[2],$product[5],
                            $product[1],$product[3]);
                        $this->updateImage($product[4],$input_id);
                        redirect("admin/index");
                    }else{
                        $this->session->set_flashdata("error","product is Duplicated");
                    }
                }else{
                    $this->session->set_flashdata("error","the url is not image");
                }

            $data["product_detail"]=$this->Product_model->getaProduct($input_id);
            $data["images"]=$this->Product_model->getProductImages($input_id);
            $data['Category'] = $this->Category_model->getCategories();
            $data['Product'] = $this->Product_model->getProducts();
            $data["vendor"]=$this->Product_model->getVendor();
            $data['content'] = 'Admin/Management/AddItem';
            $this->load->view('Admin/index', $data);
            }
        }
        
    }

/*
* What:use to get all post data
* Author:oat
* return:array of post data
*/
    private function get_all_post_data(){
        $p_name=$_POST["ProductName"];
        $category=$_POST["category"];
        $picture=$_POST["Picture"];
        $description=$_POST["description"];
        $v_name=$_POST["VendorName"];
        $p_price=$_POST["ProductPrice"];
        return [$p_name,$p_price,$v_name,$category,$picture,$description];
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
            ],
            [
                "field"=>"ProductID",
                "label"=>"ID of Product",
                "rules"=>"required"
            ]
            
        ];
        $this->form_validation->set_rules($config);
    }

/*
* What:check url is image or not ?
* Author:oat
* return:boolean
*/
    private function isImage($urls){
        foreach($urls as $url){
            $ch=curl_init($url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
            curl_exec($ch);
            $type=curl_getinfo($ch,CURLINFO_CONTENT_TYPE);
            echo curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
            if(strpos($type,"image")!==false){
            }else{
                return false;
            }
        return true;
        
        }
    }
/*
* What:check for product name is Duplicated
* Author:oat
* return:boolean
*/
    private function isDuplicate($vendor_id,$product){
        $temp=$this->Product_model->get_list_product($vendor_id);
        foreach($temp as $row){
            if($product==$row->product_name){
                return true;
            }
        }
        return false;
    }

/*
* What:use for updating image to product_image table
* Author:oat
* return:nothing
*/
    private function updateImage($urls,$pro_id){
        $this->Product_image_model->delete_product_id($pro_id);
        for($i=0;$i<count($urls);$i++){
            $this->Product_image_model->add_image($pro_id,$urls[$i],($i+1));
        }
    }


}

/* End of file changeProduct.php */
