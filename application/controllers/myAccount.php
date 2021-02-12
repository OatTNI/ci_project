<?php

	class myAccount extends CI_Controller
	{
		public function __construct()
    {
        parent::__construct();
        // $this->load->model('Shopping_Cart_model');
    }
	    public function index()
	    {
			// $data['category'] = Data category
	        $data["content"] = "userConfig/MyInfo";
	        $this->load->view('userView', $data);
	    }
	    public function History(){
			
	    	$data["content"] = "userConfig/userHistory";
	        $this->load->view('userView', $data);
	    }
	    public function myCart(){
			
	    	$data["content"] = "userConfig/cartLayout";
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
	}
