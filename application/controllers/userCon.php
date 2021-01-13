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
    public function register()
    {
    }
    private function check_password($password)
    {
        // * password's length must be more 8
        if (preg_match("/^\w{8,}$/", $password)) {
            return true;
        }
        return false;
    }
    private function check_register()
    {
    }
    public function login()
    {
        if ($_POST["auth"] != "" && $_POST["pwloginfield"] != "") {
            $user = $this->preventing_injection($_POST["auth"]);
            $password = $_POST["pwloginfield"];
            if ($user = $this->check_login($user, $password)) {
                $query = $this->userModel->get_specific_user($user);
                foreach ($query as $row) {
                    $data["user"] = $row;
                }
                redirect("indexCon/index", $data);
            }
        }
    }
    private function preventing_injection($data)
    {
        $data = stripslashes($data);
        $data = trim($data, "\"");
        $data = trim($data, "'");
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    private function check_email($email)
    {
        // * email must be contained "@" only one
        // * word.word@word.word.com
        if (preg_match("/^\w+[._]*[a-zA-Z]+@[^@]+[.]{1}[a-z]+$/", $email)) {
            return true;
        }
        return false;
    }
    private function check_mobile($mobile)
    {
        // * mobile must be contained with 10 characters of number
        // * length of mobile must be 10
        // * mobile must be started with "0" and follow by "6", "8", "9"
        // previous regex "/(?=.*^\d{10}$)(?=.*^06|08|09)/"
        if (preg_match("/(^[06|08|09]+\d{8}$)/", $mobile)) {
            return true;
        }
        return false;
    }
    private function check_login($auth, $p)
    {
        // * preventing for sql injection
        if ($this->check_mobile($auth)) {
            $type = "mobile";
        } else if ($this->check_email($auth)) {
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
