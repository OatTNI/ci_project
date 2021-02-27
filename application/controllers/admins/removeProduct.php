<?php


class removeProduct extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model("Product_image_model");
        $this->load->model("Product_model");
    }

/*
* What:use for delete product and product_image
* Author:oat
* return:nothing
*/
    public function index($product_id="")
    {
        if($product_id!=""){
            // $product_id=base64_decode($product_id);
            $this->Product_image_model->delete_product_id($product_id);
            $this->Product_model->delete($product_id);
            redirect("admin/index");
        }else{
            redirect("My404/index");
        }
    }
}

/* End of file removeProduct.php */
