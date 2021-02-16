<?php

class index extends CI_Controller{

    public function index(){
        $data['content'] = 'userConfig/cartLayout';
        $this->load->view('cartNCheckoutView',$data);
    }
}