<?php

	class myAccount extends CI_Controller
	{
		public function __construct()
    {
        parent::__construct();
        $this->load->model('Shopping_Cart_model');
    }
	    public function index()
	    {
			$data['category'] = $this->Shopping_Cart_model->getCategory();
	        $data["content"] = "userConfig/MyInfo";
	        $this->load->view('userView', $data);
	    }
	    public function History(){
			$data['category'] = $this->Shopping_Cart_model->getCategory();
	    	$data["content"] = "userConfig/userHistory";
	        $this->load->view('userView', $data);
	    }
	    public function myCart(){
			$data['category'] = $this->Shopping_Cart_model->getCategory();
	    	$data["content"] = "userConfig/cartView";
	        $this->load->view('userView', $data);
	    }
	   	public function changePassword(){
			$data['category'] = $this->Shopping_Cart_model->getCategory();
	   		$data["content"] = "userConfig/changePassword";
	        $this->load->view('userView', $data);

	   	}
	}
