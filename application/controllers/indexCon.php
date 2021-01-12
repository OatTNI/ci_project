<?php
defined('BASEPATH') or exit('No direct script access allowed');

class indexCon extends CI_Controller
{
    public function index($user_data = "")
    {
        $data["user"] = $user_data;
        $this->load->view('indexView', $data);
    }
}
