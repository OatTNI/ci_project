<?php

class updateCart extends CI_Controller
{

    public function __construct()
	{
        parent::__construct();
        $this->load->model('Cart_model');
	}

    public function index()
    {

    }

    public function addCart($pid,$qty)
    {
        $id = $this->session->userdata("user_id");
        
        $product = $this->Cart_model->getUserCartProduct($id, $pid);

        if (is_object($product)) {
            $arr = array();
            $arr['qty'] = $product->qty + $qty;

            $this->db->where('user_id', $id);
            $this->db->where('product_id', $pid);
            $this->db->update('cart', $arr);
        } else {
            $arr = array();
            $arr['user_id'] = $id;
            $arr['product_id'] = $pid;
            $arr['qty'] = 1;

            $this->db->insert('cart', $arr);
        }

        redirect("shop/Product/index/$pid");
    }
}
