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
            if ($user_id = $this->check_login($_POST["auth"], $_POST["p"])) {
                $data["user"] = $this->userModel->get_specific_user($user_id);
                $this->load->view('test', $data);
            }
        }
    }
    private function check_login($auth, $p)
    {
        // * preventing for sql injection
        $injection = preg_match("/ or | and /i", $auth);

        // * mobile must be contained with 10 characters of number
        // * length of mobile must be 10
        // * mobile must be started with "0" and follow by "6", "8", "9"
        $mobile_condition = strlen($auth) == 10 && preg_match_all("/[0-9]/", $auth) == 10;
        $mobile_condition = $mobile_condition && preg_match("/0/", $auth[0]) && preg_match("/[689]/", $auth[1]);

        // * email must be contained "@" only one
        // * email must be not contained one of as follows: "!", "#","$", "%"
        $email_condition = preg_match_all("/@/", $auth) == 1;
        $email_condition = $email_condition && !preg_match("/[!#$%]/", $auth);
        if ($injection) {
            return false;
        }
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
                return $row->user_id;
            }
        }
        return false;
    }
}
