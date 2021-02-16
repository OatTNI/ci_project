<?php

class delete extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model');
    }

    public function index(){

    }

    public function deleteCart($pid)
	{
		$id = $this->session->userdata('user_id');

		$this->db->where('user_id', $id);
		$this->db->where('product_id',$pid);
		$this->db->delete('cart');

		redirect('cart/Home/index');		
	}

}
?>