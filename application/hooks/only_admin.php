<?php

defined('BASEPATH') or exit('No direct script access allowed');

class only_admin
{
    public function index()
    {
        $this->CI = &get_instance();
        $classname = $this->CI->router->class;
        
        // ! class allowed for user doesn't login 
        $allowed_class=[
           "admin","addProduct","categoryManagement"
        ];
        $is_allow=false;
        foreach($allowed_class as $class){
            if($class==$classname){
                $is_allow=true;
            }
        }
        if($this->CI->session->userdata("user_id")){
            if($this->CI->session->userdata("user_status")!=1&&$is_allow){
                redirect("My404");
            }
        }else{
            if($is_allow){
                redirect("My404");
            }
        }
    }
}