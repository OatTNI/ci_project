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
    public function post_login()
    {
        if ($_POST["auth"] != "" && $_POST["pwloginfield"] != "") {
            $auth = $this->preventing_injection($_POST["auth"]);
            $p = $_POST["pwloginfield"];
            $this->login($auth, $p);
        }
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
        $email = $this->preventing_injection($email);
        $phone = $this->preventing_injection($phone);
        if ($password == $rePassword && !$this->isDuplicate("email", $email) && !$this->isDuplicate("mobile", $phone)) {
            if ($this->validate_register($email, $phone, $password)) {
                $this->userModel->add_user($fname, $lname, $email, $phone, sha1($password), $addr);
                $this->login($email, $password);
            }
        }
    }
    private function validate_register($email, $mobile, $p)
    {
        if ($this->validate_email($email) && $this->validate_mobile($mobile) && $this->validate_password($p)) {
            if (!$this->isDuplicate("email", $email) && !$this->isDuplicate("mobile", $mobile)) {
                return true;
            }
        }
        return false;
    }
    private function login($auth, $p)
    {
        $p = sha1($p);
        if ($this->isDuplicate("email", $auth)) {
            $type = "email";
        } else if ($this->isDuplicate("mobile", $auth)) {
            $type = "mobile";
        } else {
            $type = "";
        }
        if ($type != "") {
            $query = $this->userModel->get_user_by_login($type, $auth);
            foreach ($query as $row) {
                if ($p == $row->password) {
                    $user_id = $row->user_id;
                }
            }
            $query = $this->userModel->get_user_by_id($user_id);
            foreach ($query as $row) {
                $data["user"] = $row;
            }
            redirect("indexCon/index", $data);
        }
    }
    private function isDuplicate($type, $data)
    {
        if ($type == "email") {
            $query = $this->userModel->get_email();
        } else if ($type == "mobile") {
            $query = $this->userModel->get_mobile();
        }
        foreach ($query as $row) {
            if ($data == ($type == "email" ? $row->email : $row->mobile)) {
                return true;
            }
        }
        return false;
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
    private function validate_email($email)
    {
        // * email must be contained "@" only one
        // * word.word@word.word.com
        if (preg_match("/^\w+[._]*[a-zA-Z]+@[^@]+[.]{1}[a-z]+$/", $email)) {
            return true;
        }
        return false;
    }
    private function validate_mobile($mobile)
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
    private function validate_password($password)
    {
        // * password's length must be more 8
        if (preg_match("/^\w{8,}$/", $password)) {
            return true;
        }
        return false;
    }
}
