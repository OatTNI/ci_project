<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class password extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        require("regex.php");
        require("security.php");
        $this->load->model("userModel");
    }
    
    public function index()
    {
        if($this->session->userdata("user_id")){
            $this->set_all_rules();

            if($this->form_validation->run()==FALSE){
                $data["content"] = "userConfig/changePassword";
	            $this->load->view('userView', $data);
            }else{

                $input_data=$this->get_all_post_data();
                if($this->isTruePassword($input_data[0])){
                    if(preg_match(regex_password(),$input_data[1])){
                        $this->changePassword($input_data[1]);
                        redirect("Home/index");
                    }else{
                        $this->session->set_flashdata('error', 'new password is not passed the policy');
                        $data["content"] = "userConfig/changePassword";
	                    $this->load->view('userView', $data);
                    }
                }else{
                        $this->session->set_flashdata('error', 'Old Password is invalid');
                        $data["content"] = "userConfig/changePassword";
	                    $this->load->view('userView', $data);
                }
            }
        }else{
            redirect("Home/index");
        }
        
    }

/*
* What: use to set rules for form validation
* Author: oat
* return: nothing
*/
    private function set_all_rules(){
        $config =
        [
            [
                "field"=>"oldpasswordfield",
                "label"=>"Old Password",
                "rules"=>"required"
            ],
            [
                "field"=>"passwordfield",
                "label"=>"Password",
                "rules"=>"required"
            ],
            [
                "field"=>"confirmpasswordfield",
                "label"=>"Confirm Password",
                "rules"=>"required|matches[passwordfield]"
            ]
        ];
        $this->form_validation->set_rules($config);
    }

/*
* What: use to get all post data and make them secure
* Author: oat
* return: array of password
*/
    private function get_all_post_data(){
        $old_password=$this->input->post("oldpasswordfield");
        $new_password=$this->input->post("passwordfield");

        $old_password=sql_prevention($old_password);
        $new_password=sql_prevention($new_password);
        
        return [$old_password,$new_password];
    }

/*
* What: use to check that password from post is correct
* Author: oat
* return: boolean
*/
    private function isTruePassword($password){
        $temp=$this->userModel->get_password($this->session->userdata("user_id"));
        if(password_verify($password,$temp[0]->password)){
            return true;
        }else{
            return false;
        }
    }

/*
* What: use to change password
* Author: oat
* return: nothing
*/
    private function changePassword($password){
        $options=[
                "cost"=>15
            ];
        $temp=password_hash($password,PASSWORD_BCRYPT,$options);
        $this->userModel->update_password($this->session->userdata("user_id"),$temp);
    }

}

/* End of file password.php */
