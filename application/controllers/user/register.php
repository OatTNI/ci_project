<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model("userModel");
    }


/* 
* What: add a user to database in user table
* Author: oat
* return 1: if form validation is true, will return index of website with session of user
* return 2: if form validation is false, will return the same page with flash session of error message
*/
    public function index()
    {
        $this->set_all_rules();

        if($this->form_validation->run()==FALSE){
            $error="";
            $this->load->view("loginRegisterView");
        }
        else{
            $add_user=$this->add_user();
            if($add_user){
                $this->load->view();
            }else{
                $error="your email or phone number is Duplicated";
                $this->load->view("loginRegisterView",$error);
            }
        }
    }

/*
* What: use to set rule for form_validation
* Author: oat
* return: return nothing
*/
    private function set_all_rules(){
// ! firstname
        $temp=array(
            "required"=>"your %s must be provided"
        );
        $this->form_validation->set_rules('firstname', 'Firstname', 'required',$temp);

// ! lastname
        $temp=array(
            "required"=>"your %s must be provided"
        );
        $this->form_validation->set_rules('lastname', 'Lastname', 'required',$temp);

// ! email
        $temp=array(
            "required"=>"your %s must be provided"
        );
        $this->form_validation->set_rules('emailfield', 'Email', 'required',$temp);

// ! password
        $temp=array(
            "required"=>"your %s must be provided"
        );
        $this->form_validation->set_rules('passwordfield', 'Password', 'required',$temp);

// ! password confirmation
        $temp=array(
            "required"=>"your %s must be provided",
            "matches[passwordfield]"=>"your %s must be same with password"
        );
        $this->form_validation->set_rules('confirmpasswordfield', 'Password Confirmation', 'required|matches[passwordfield]',$temp);

// ! phone number
        $temp=array(
            "required"=>"your %s must be provided",
        );
        $this->form_validation->set_rules('phonenumber', 'Phone Number', 'required',$temp);

        // $this->form_validation->set_rules('address', 'Username', 'required',$temp);
    }

/*
* What: use to get all post data pass via register form
* Author: oat
* return: return all post data
*/
    private function get_all_post(){
        $fname=$this->input->post("firstname");
        $lname=$this->input->post("lastname");
        $email=$this->input->post("emailfield");
        $pwd=$this->input->post("passwordfield");
        $phone=$this->input->post("phonenumber");
        $addr=$this->input->post("address");
        return array($fname,$lname,$email,$phone,$pwd,$addr);
    }

/*
* What: add a user to database in user table
* Author: oat
* return: boolean, return true if add user successfully
*/
    private function add_user(){
        // ! 0 firstname
        // ! 1 lastname
        // ! 2 email
        // ! 3 phone
        // ! 4 password
        // ! 5 address
        $temp=$this->get_all_post();

        if(!$this->isDuplicateEmail($temp[2])&&!$this->isDuplicatePhone($temp[3])){
            $options=[
                "cost"=>15
            ];
            $temp[4]=password_hash($temp[4],PASSWORD_BCRYPT,$options);
            $this->userModel->add_user($temp[0],$temp[1],$temp[2],$temp[3],$temp[4],$temp[5]);
            return true;
        }
        else{
            return false;
        }

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
* What: use to check Duplicate phone number in user talbe
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

/* End of file register.php */
