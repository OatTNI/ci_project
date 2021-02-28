<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model("userModel");
        require("regex.php");
        require("security.php");
    }
/* 
* What: add a user to database in user table
* Author: oat
* return 1: if form validation is true, will return index of website with session of user
* return 2: if form validation is false, will return the same page with flash session of error message
*/
    public function index($method="")
    {
        if($method=="show"){
            //$this->load->view('memberSystem/registerForm');
            $data['content']="memberSystem/registerForm";
            $this->load->view("memberSystem/msIndex",$data);
        }else{
            $this->set_all_rules();
            if($this->form_validation->run()==FALSE){
                //$this->load->view('memberSystem/registerForm');
                $data['content']="memberSystem/registerForm";
                $this->load->view("memberSystem/msIndex",$data);
            }else{
                $add_user=$this->add_user();
                if($add_user!=false){
                    $this->session->set_userdata([
                        "user_id"=>$add_user[0],
                        "user_fname"=>$add_user[1],
                        "user_lname"=>$add_user[2],
                        "user_email"=>$add_user[3],
                        "user_mobile"=>$add_user[4],
                        "user_address"=>$add_user[5],
                        "user_status"=>$add_user[6]
                    ]);
                    redirect("Home/index");
                }else{
                    $this->session->set_flashdata('error', 'your email or phone number is Duplicated');
                    //$this->load->view('memberSystem/registerForm');
                    $data['content']="memberSystem/registerForm";
                    $this->load->view("memberSystem/msIndex",$data);
                }
            }
        }
    }

/*
* What: use to set rule for form_validation
* Author: oat
* return: return nothing
*/
    private function set_all_rules(){
        $regex_phone=regex_phone();
        $regex_password=regex_password();
        $config =
        [
            [
                // ! firstname
                "field"=>"firstname",
                "label"=>"Firstname",
                "rules"=>"required|alpha",
                "errors"=>[
                    "required"=>"your %s must be provided"
                ]
            ],
            [
                // ! lastname
                "field"=>"lastname",
                "label"=>"Lastname",
                "rules"=>"required|alpha",
                "errors"=>[
                    "required"=>"your %s must be provided"
                ]
            ],
            [
                // ! email
                "field"=>"emailfield",
                "label"=>"Email",
                "rules"=>"required|valid_email",
                "errors"=>[
                    "required"=>"your %s must be provided"
                ]
            ],
            [
                // ! password and need regex
                "field"=>"passwordfield",
                "label"=>"Password",
                "rules"=>"required|min_length[8]|regex_match[{$regex_password}]",
                "errors"=>[
                    "required"=>"your %s must be provided",
                    "regex_match"=>"%s must contain upper-lower-special character and numberic"
                ]
            ],
            [
                // ! Password confirmation
                "field"=>"confirmpasswordfield",
                "label"=>"Password Confirmation",
                "rules"=>"required|matches[passwordfield]",
                "errors"=>[
                    "required"=>"your %s must be provided",
                    "matches"=>"your %s must be same with password"
                ]
            ],
            [
                // ! phone number and need regex
                "field"=>"phonenumber",
                "label"=>"Phone Number",
                "rules"=>"required|numeric|exact_length[10]|regex_match[{$regex_phone}]",
                "errors"=>[
                    "required"=>"your %s must be provided",
                    "regex_match"=>"your %s must contain only 10 digit and start with 06, 08, 09"
                ]
            ],
        ];
        $this->form_validation->set_rules($config);
    }

/*
* What: use to get all post data pass via register form
* Author: oat
* return: return all post data
*/
    private function get_all_post_data(){
        $fname=$this->input->post("firstname");
        $lname=$this->input->post("lastname");
        $email=strtolower($this->input->post("emailfield"));
        $pwd=$this->input->post("passwordfield");
        $phone=$this->input->post("phonenumber");
        $addr=$this->input->post("address");
        return [$fname,$lname,$email,$phone,$pwd,$addr];
    }

/*
* What: add a user to database in user table
* Author: oat
* return: false, return user_id if add user successfully
*/
    private function add_user(){
        /*
        ! 0 firstname
        ! 1 lastname
        ! 2 email
        ! 3 phone
        ! 4 password
        ! 5 address
        */
        $temp=$this->get_all_post_data();

        $temp[0]=sql_prevention($temp[0]);
        $temp[1]=sql_prevention($temp[1]);
        $temp[2]=sql_prevention($temp[2]);
        $temp[3]=sql_prevention($temp[3]);
        $temp[4]=sql_prevention($temp[4]);
        $temp[5]=sql_prevention($temp[5]);

        if(!$this->isDuplicateEmail($temp[2])&&!$this->isDuplicatePhone($temp[3])){
            $options=[
                "cost"=>15
            ];
            $temp[4]=password_hash($temp[4],PASSWORD_BCRYPT,$options);
            $this->userModel->add_user($temp[0],$temp[1],$temp[2],$temp[3],$temp[4],$temp[5]);
            $temp=$this->userModel->get_user_id($temp[2]);
            foreach($temp as $row){
                //get userinformation from DB
                $temp2 = $this->userModel->get_user_by_id($row->user_id);
                $attr[0]=$temp2[0]->user_id;
                $attr[1]=$temp2[0]->first_name;
                $attr[2]=$temp2[0]->last_name;
                $attr[3]=$temp2[0]->email;
                $attr[4]=$temp2[0]->mobile;
                $attr[5]=$temp2[0]->address;
                $attr[6]=$temp2[0]->isAdmin;
                return $attr;

            }
        }
        else{
            return false;
        }

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
}

/* End of file register.php */
