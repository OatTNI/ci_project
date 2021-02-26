<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginHook
{
    public function login_first()
    {
        $this->CI = &get_instance();
        $classname = $this->CI->router->class;

        $allowed_class=[
            "Home","Product","Products","Search","index","register","login_out"
        ];
        $is_allow=false;
        foreach($allowed_class as $class){
            if($class==$classname){
                $is_allow=true;
            }
        }
        if (!$this->CI->session->userdata('user_id')&&!$is_allow) {
            redirect("Home/index");
        }
    }
}
