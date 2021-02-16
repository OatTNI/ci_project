<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model');
    }

    public function index()
    {
        $id = $this->session->userdata('user_id');
        $data['cart'] = $this->Cart_model->getUserCart($id);
        $data['content'] = 'userConfig/cartLayout';
        $this->load->view('cartNCheckoutView', $data);
    }
}

?>