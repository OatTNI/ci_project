<?php

	class myAccount extends CI_Controller
	{
	    public function index()
	    {
	        $data["content"] = "userConfig/MyInfo";
	        $this->load->view('userView', $data);

	        
	    }
	    public function history(){
	    	$data["content"] = "userConfig/userHistory";
	        $this->load->view('userView', $data);
	    }
	    public function myCart(){

	    }
	}
