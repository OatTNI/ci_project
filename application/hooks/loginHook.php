<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginHook
{
    public function login_first()
    {
        $this->CI = &get_instance();
        $classname = $this->CI->router->class;

        $allowed_class=[
            "Home","Product","Products","Search","index","cartHome"
        ];
        $is_allow=false;
        foreach($allowed_class as $class){
            if($class==$classname){
                $is_allow=true;
            }
        }
        echo $classname;
        echo $is_allow;

        if (!$this->CI->session->userdata('user_id')&&!$is_allow) {
            // echo $this->CI->session->userdata("user_id");
            echo $classname;
            redirect("Home/index");
        }
    }
}
