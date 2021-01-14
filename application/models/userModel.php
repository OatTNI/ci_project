<?php

defined('BASEPATH') or exit('No direct script access allowed');

class userModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function index()
    {
    }
    public function get_mobile()
    {
        $query = "
        select mobile
        from user";
        return $this->db->query($query)->result();
    }
    public function get_email()
    {
        $query = "
        select email
        from user";
        return $this->db->query($query)->result();
    }
    public function get_user_by_login($type, $auth)
    {
        $query = "
        select user_id,password
        from user
        where $type='$auth'";
        return $this->db->query($query)->result();
    }
    public function get_user_by_id($user_id)
    {
        $query = "
        select *
        from user
        where user_id=$user_id";
        return $this->db->query($query)->result();
    }
    public function add_user($fname, $lname, $email, $mobile, $password, $addr)
    {
        $query = "
        insert into user(first_name,last_name,email,mobile,password,address)
        VALUES ('$fname', '$lname', '$email','$mobile','$password','$addr')
        ";
        $this->db->query($query);
    }
}
