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
* What: change information of user
* Author: oat
* return: nothing
*/
    public function index()
    {
            if($this->session->userdata("user_id")){
                $this->set_all_rules();
                if($this->form_validation->run()==FALSE){
                    $data["content"] = "userConfig/MyInfo";
	                $this->load->view('userView', $data);
                }else{
                    // ! 0 fname
                    // ! 1 lname
                    // ! 2 email
                    // ! 3 phone
                    // ! 4 addr
                    $temp=$this->get_all_post_data();

                    $email_IsChange= $temp[2]!=$this->session->userdata("user_email");
                    $phone_IsChange=$temp[3]!=$this->session->userdata("user_mobile");

                    // ! change only email
                    // ! change nothing
                    // ! change both email and phone
                    if($email_IsChange&&$phone_IsChange){
                        // ! are They duplicated?
                        if(!$this->isDuplicateEmail($temp[2])&&!$this->isDuplicatePhone($temp[3])){
                            $this->changeInfo($temp);
                            $data["content"] = "userConfig/MyInfo";
	                        $this->load->view('userView', $data);
                        }else{
                            $this->session->set_flashdata('error',"your email or phone number is Duplicated");
                            $data["content"] = "userConfig/MyInfo";
	                        $this->load->view('userView', $data);
                        }
                    }
                    // ! change only phone
                    else if($phone_IsChange){
                        // ! check for Is it duplicated?
                        if(!$this->isDuplicatePhone($temp[3])){
                            $this->changeInfo($temp);
                            $data["content"] = "userConfig/MyInfo";
	                        $this->load->view('userView', $data);
                        }else{
                            $this->session->set_flashdata('error',"your phone number is Duplicated");
                            $data["content"] = "userConfig/MyInfo";
	                        $this->load->view('userView', $data);
                        }
                    }
                    // ! change only email
                    else if($email_IsChange){
                        // ! check for Is it duplicated?
                        if(!$this->isDuplicateEmail($temp[2])){
                            $this->changeInfo($temp);
                            $data["content"] = "userConfig/MyInfo";
	                        $this->load->view('userView', $data);
                        }else{
                            $this->session->set_flashdata('error',"your email is Duplicated");
                            $data["content"] = "userConfig/MyInfo";
	                        $this->load->view('userView', $data);
                        }
                    }else{
                        $this->changeInfo($temp);
                        $data["content"] = "userConfig/MyInfo";
	                    $this->load->view('userView', $data);
                    }
                }
            }
            else{
                redirect("Home/index");
                
            }
    }
        
/*
* What: use to set rule for form validation
* Author: oat
* return: nothing
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
        $email=$this->input->post("emailfield");
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

/*
* What: use to change Information of user
* Author: oat
* return: nothing
*/
    private function changeInfo($temp){
        $this->userModel->update_row($this->session->userdata("user_id"),$temp[0],$temp[1],$temp[2],$temp[3],$temp[4]);
            
        $this->session->set_userdata([
            "user_fname"=>$temp[0],
            "user_lname"=>$temp[1],
            "user_email"=>$temp[2],
            "user_mobile"=>$temp[3],
            "user_address"=>$temp[4]
        ]);
    }

}

/* End of file information.php */
