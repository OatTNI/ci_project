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
    private function editData()
    {
        $user_id = $this->session->userdata("user_id");
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $email = $_POST["emailfield"];
        $phone = $_POST["phonenumber"];
        $addr = $_POST["address"];
        $email = $this->preventing_injection($email);
        $phone = $this->preventing_injection($phone);

        if ($this->validate_email($email) && $this->validate_mobile($phone)) {
            if (!$this->isDuplicate("email", $email) && !$this->isDuplicate("mobile", $phone)) {
                $this->userModel->update_row($user_id, $fname, $lname, $email, $phone, $addr);
            }
        }
    }
    private function editPassword()
    {
        $user_id = $this->session->userdata("user_id");
        $password = $_POST["password"];
        $re_password = $_POST["re_password"];
        if ($password == $re_password && $password != "") {
            if ($this->validate_password) {
                $this->userModel->update_password($user_id, hash("sha3-512", $password));
            }
        }
    }
    public function register()
    {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $email = $_POST["emailfield"];
        $password = $_POST["passwordfield"];
        $rePassword = $_POST["confirmpasswordfield"];
        $phone = $_POST["phonenumber"];
        $addr = $_POST["address"];
        $email = $this->preventing_injection($email);
        $phone = $this->preventing_injection($phone);
        if ($password == $rePassword && $password != "") {
            if ($this->validate_email($email) && $this->validate_mobile($phone) && $this->validate_password($password)) {
                if (!$this->isDuplicate("email", $email) && !$this->isDuplicate("mobile", $phone)) {
                    $this->userModel->add_user($fname, $lname, $email, $phone, hash("sha3-512", $password), $addr);
                    $this->login($email, $password);
                }
            }
        }
    }
    private function login($auth, $p)
    {
        $p = hash("sha3-512", $p);
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
                $temp = array(
                    "user_id" => $row->user_id,
                    "fname" => $row->first_name,
                    "lname" => $row->last_name,
                    "email" => $row->email,
                    "mobile" => $row->mobile
                );
            }
            $this->session->set_userdata($temp);
            redirect("indexCon/index");
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
