<?php

class Product extends CI_Controller{

    public function index(){
        $data['banner']='banner-main';
        $this->load->view('Product',$data);
    }
}