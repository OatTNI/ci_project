<?php

class cartHome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model');
        // $this->load->library('javascript');
        // $this->load->library('javascript/jquery');
    }

    public function index()
    {
        // $data['library_src'] = $this->jquery->script();
        // $data['js']=$this->javascript->change('.qtyT', "$('#sumrow1').text(++z);");
        $id = $this->session->userdata('user_id');
        $data['cart'] = $this->Cart_model->getUserCart($id);
        $data['content'] = 'userConfig/cartLayout';
        $this->load->view('cartView', $data);
    }

}

?>