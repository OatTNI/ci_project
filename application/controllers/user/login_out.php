<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_out extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model("userModel");
        require("regex.php");
        require("security.php");
    }
/*
* What: use to logout if there's not email-session, if don't have will be login function
* Author: oat
* return1: if no user_id session will create session and redirect to account,
*          if session of user_id was set will clear session and redirect to index
* return2: return the same same page with flash session data
*/
    public function index($method="")
    {   
        if($method=="show"){
            $this->load->view('loginRegisterView');
        }else{
            if($this->session->userdata("user_id")){
                $this->session->unset_userdata("user_id");
                // redirect("");
            }else{
                $this->set_all_rules();
                if($this->form_validation->run()==FALSE){
                    $this->load->view("loginRegisterView");
                }else{
                    $login=$this->login();
                    if($login!=false){
                        $this->session->set_userdata([
                            "user_id"=>$login
                        ]);
                        redirect("indexCon/index");
                    }else{
                        $error="Not found This account";
                        $this->load->view("loginRegisterView",$error);
                    }
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
        $config =
        [
            [
                // ! firstname
                "field"=>"auth",
                "label"=>"Email or Phone Number",
                "rules"=>"required",
                "errors"=>[
                    "required"=>"your %s must be provided"
                ]
            ],
            [
                "field"=>"pwloginfield",
                "label"=>"Password",
                "rules"=>"required"
            ]
        ];
        $this->form_validation->set_rules($config);
    }

/*
* What: use to login into system
* Author: oat
* return: return user_id or load default view
*/
    private function login(){
        $temp=$this->get_all_post_data();

        // ! 0 email or phone
        // ! 1 password
        $temp[0]=sql_prevention($temp[0]);
        $temp[1]=sql_prevention($temp[1]);


        $phone_pattern=preg_match(regex_phone(),$temp[0]);

        if($phone_pattern){
            if($this->isDuplicatePhone($temp[0])){
                $result=$this->userModel->get_user_by_login("mobile",$temp[0]);
            }
            else{
                return false;
            }
        }
        else if($this->isDuplicateEmail($temp[0])){
                $result=$this->userModel->get_user_by_login("email",$temp[0]);
        }
        else{
                return false;
        }
        foreach($result as $row){
            if(password_verify($temp[1],$row->password)){
                return $row->user_id;
            }
        }
    }

/*
* What: use to get all data from post action
* Author: oat
* return: [authen, password]
*/
    private function get_all_post_data(){
        $auth=$this->input->post("auth");
        $pwd=$this->input->post("pwloginfield");
        return [$auth,$pwd];
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

/* End of file login_out.php */
