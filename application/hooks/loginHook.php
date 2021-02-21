<?php

defined('BASEPATH') or exit('No direct script access allowed');

class loginHook
{
    public function login_first()
    {
        $this->CI = &get_instance();
        $classname = $this->CI->router->class;
        $methodname = $this->CI->router->method;
        if (!$this->CI->session->userdata('user_id') && $methodname != "index" && $classname != "userCon") {
            redirect("Home/index");
        }
    }
}
