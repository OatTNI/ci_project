<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class information extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("userModel");   
    }

/*
* What: use to get information in my account page
* Author: oat
* return: return nothing
*/
    public function index($method="")
    {
        if($method=="show"){
            $data["content"] = "userConfig/MyInfo";
	        $this->load->view('userView', $data);
        }else{
            if($this->session->userdata("user_id")){
            }
            else{
                $user_data=getInfo($this->session->userdata("user_id"));
                $this->load->view("");
            }
        }
    }
        
/*
* What: use to get information of user by user_id
* Author: oat
* return: array of user information
*/
    private function changeInfo(){

    }
    private function getInfo($user_id){
        $temp1=$this->userModel->get_user_by_id($user_id);
        $temp2=[];
        foreach($temp1 as $row){
            $temp2[0]=$row->first_name;
            $temp2[1]=$row->last_name;
            $temp2[2]=$row->email;
            $temp2[3]=$row->mobile;
            $temp2[4]=$row->address;
        }
        return $temp2;
    }

}

/* End of file information.php */
