<?php

	class MyAccount extends CI_Controller
	{
		public function __construct()
    	{
	        parent::__construct();
	        $this->load->model('History_model');
			$this->load->model('Cart_model');
    	}
	    public function index()
	    {
	        $data["content"] = "userConfig/MyInfo";
	        $this->load->view('userView', $data);
	    }
	    public function History($uid){
	    	$data["orderhis"] = $this->History_model->getUserHistory($uid);
	    	$data["content"] = "userConfig/userHistory";
	        $this->load->view('userView', $data);
	    }
	   	public function changePassword(){
	   		$data["content"] = "userConfig/changePassword";
	        $this->load->view('userView', $data);
	   	}
	   	public function checkOut(){	   		
	   		$data["content"] = "userConfig/checkOut";
	        $this->load->view('userView', $data);
	   	}
		public function clearCart(){
			$id=$this->session->userdata('user_id');
			$this->Cart_model->clearCart($id);
			$data['cart'] = $this->Cart_model->getUserCart($id);
			$data["content"] = "userConfig/cartLayout";
	        $this->load->view('cartView', $data);
		}
	}
?>
