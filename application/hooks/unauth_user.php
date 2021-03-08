<?php

defined('BASEPATH') or exit('No direct script access allowed');

class unauth_user
{
    public function index()
    {
        $this->CI = &get_instance();
        $classname = $this->CI->router->class;
        
        // ! class allowed for user doesn't login 
        $allowed_class=[
            "Home","Product","Products","Search","indexShop","register","login_out"
        ];
        $is_allow=false;
        foreach($allowed_class as $class){
            if($class==$classname){
                $is_allow=true;
            }
        }
        if (!$this->CI->session->userdata('user_id')&&!$is_allow) {
            redirect("user/login_out/index");
        }

            
    }
}
