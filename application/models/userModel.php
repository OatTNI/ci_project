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
    public function update_password($user_id, $password)
    {
        $query = "
        update user
        set password='$password'
        where user_id=$user_id";
        $this->db->query($query);
    }
    public function update_row($user_id, $fname, $lname, $email, $phone, $addr)
    {
        $query = "
        update user
        set first_name='$fname',
        last_name='$lname',
        email='$email',
        mobile='$phone',
        address='$addr'
        where user_id=$user_id";
        $this->db->query($query);
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
    public function get_user_id($email){
        $query="
        select user_id
        from user
        where email='$email'";
        $this->db->query($query);
    }
}
