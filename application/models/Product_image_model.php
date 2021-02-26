<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_image_model extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
    }
    public function add_image($product_id,$url){
        $query="
        insert into product_image (product_id,image_url)
        values ($product_id,'$url')";
        $this->db->query($query);
    }
    
    

}

/* End of file Product_image_model.php */