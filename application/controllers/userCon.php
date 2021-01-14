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
        $fname = ($_POST["firstname"] != "") ? $_POST["firstname"] : "";
        $lname = ($_POST["lastname"] != "") ? $_POST["lastname"] : "";
        $email = ($_POST["emailfield"] != "") ? $_POST["emailfield"] : "";
        $password = ($_POST["passwordfield"] != "") ? $_POST["passwordfield"] : "";
        $rePassword = ($_POST["confirmpasswordfield"] != "") ? $_POST["confirmpasswordfield"] : "-1";
        $phone = ($_POST["phonenumber"] != "") ? $_POST["phonenumber"] : "";
        $addr = ($_POST["address"] != "") ? $_POST["address"] : "";
        if ($password == $rePassword) {
            $email = $this->preventing_injection($email);
            $phone = $this->preventing_injection($phone);
            if ($this->check_register($email, $phone, $password)) {
                $password = sha1($password);
                $this->userModel->add_user($fname, $lname, $email, $phone, $password, $addr);
                redirect("indexCon/index");
            }
        }
        return false;
    }
    private function check_duplicate($auth1, $auth2)
    {
        $query = $this->userModel->get_user_login($auth1);
        foreach ($query as $row) {
            return false;
        }
        $query = $this->userModel->get_user_login($auth2);
        foreach ($query as $row) {
            return false;
        }
        return true;
    }
    private function check_password($password)
    {
        // * password's length must be more 8
        if (preg_match("/^\w{8,}$/", $password)) {
            return true;
        }
        return false;
    }
    private function check_register($email, $phone, $password)
    {
        if ($this->check_email($email) && $this->check_mobile($phone) && $this->check_password($password)) {
            if ($this->check_duplicate($email, $phone)) {
                return true;
            }
        }
        return false;
    }
    public function login()
    {
        if ($_POST["auth"] != "" && $_POST["pwloginfield"] != "") {
            $user = $this->preventing_injection($_POST["auth"]);
            $password = sha1($_POST["pwloginfield"]);
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
        if (preg_match("/(^0{1}[689]{1}\d{8}$)/", $mobile)) {
            return true;
        }
        return false;
    }
    private function check_login($auth, $p)
    {
        $query = $this->userModel->get_user_login($auth);
        foreach ($query as $row) {
            if ($p == $row->password) {
                return $row->user_id;
            }
        }
        return false;
    }
}
