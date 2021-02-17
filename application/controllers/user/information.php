<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class information extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("userModel");
        require("regex.php");
        require("security.php");
    }

/*
* What: use to get information in my account page
* Author: oat
* return: return nothing
*/
    public function index()
    {
            if($this->session->userdata("user_id")){
                $this->set_all_rules();
                if($this->form_validation->run()==FALSE){
                    $data["content"] = "userConfig/MyInfo";
	                $this->load->view('userView', $data);
                }else{

                }
            }
            else{
                redirect("Home/index");
                
            }
    }
        
/*
* What: use to get information of user by user_id
* Author: oat
* return: array of user information
*/
    private function set_all_rules(){
        $regex_phone=regex_phone();
        $config =
        [
            [
                // ! Firstname
                "field"=>"firstname",
                "label"=>"Firstname",
                "rules"=>"required|alpha",
                "errors"=>[
                    "required"=>"your %s must be provided"
                ]
            ],
            [
                // ! LastName
                "field"=>"lastname",
                "label"=>"Lastname",
                "rules"=>"required|alpha"
            ],
            [
                // ! Email
                "field"=>"emailfield",
                "label"=>"Email",
                "rules"=>"required|valid_email"
            ],
            [
                // ! Phone Number
                "field"=>"phonenumber",
                "label"=>"Phone Number",
                "rules"=>"required|numeric|exact_length[10]|regex_match[{$regex_phone}]"
            ],
            [
                // ! address
                "field"=>"address",
                "label"=>"address",
                "rules"=>"required"
            ]
            
        ];
        $this->form_validation->set_rules($config);
    }

/*
* What: use to get post data for form validation
* Author: oat
* return: array of post data
*/
    private function get_all_post_data(){
        $fname=$this->input->post("firstname");
        $lname=$this->input->post("lastname");
        $email=$this->input->post("email");
        $phone=$this->input->post("phonenumber");
        $addr=$this->input->post("address");

        $fname=sql_prevention($fname);
        $lname=sql_prevention($lname);
        $email=sql_prevention($email);
        $phone=sql_prevention($phone);
        $addr=sql_prevention($addr);

        return [$fname,$lname,$email,$phone,$addr];
    }

/*
* What: use to check Duplicate email in user table
* Author: oat
* return: boolean
*/
    private function isDuplicateEmail($email){
        $temp=$this->userModel->get_email();
        foreach($temp as $row){
            if($row->email==$email){
                return true;
            }
        }
        return false;
    }

/*
* What: use to check Duplicate phone number in user table
* Author: oat
* return: boolean
*/
    private function isDuplicatePhone($phone){
        $temp=$this->userModel->get_mobile();
        foreach($temp as $row){
            if($row->mobile==$phone){
                return true;
            }
        }
        return false;
    }

}

/* End of file information.php */
