<?php

defined('BASEPATH') or exit('No direct script access allowed');

class userCon extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('userModel');
    }

    public function index()
    {
        $this->load->view('loginRegisterView');
    }
    public function login()
    {
        if ($_POST["auth"] != "" && $_POST["p"] != "") {
            if ($this->check_login($_POST["auth"], $_POST["p"])) {
                $this->load->view('test');
            }
        }
    }
    private function check_login($auth, $p)
    {
        $mobile_condition = strlen($auth) == 10 && preg_match_all("/[0-9]/", $auth) == 10;
        $email_condition = preg_match_all("/@/", $auth) == 1 && !preg_match("/\s|/", $auth);
        $email_condition = $email_condition && !preg_match("/[!#$%]/", $auth);
        if ($mobile_condition) {
            $type = "mobile";
        } else if ($email_condition) {
            $type = "email";
        } else {
            return false;
        }
        $query = $this->userModel->get_user_login($type);
        foreach ($query as $row) {
            if ($auth == ($type == "email" ? $row->email : $row->mobile) && $p == $row->password) {
                return true;
            }
        }
        return false;
    }
}
