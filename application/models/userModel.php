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
    public function get_user_login($authen_type)
    {
        $query = "
        select $authen_type, password
        from user";
        return $this->db->query($query)->result();
    }
}
