<?php
defined('BASEPATH') or exit('No direct script access allowed');

class indexCon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Shopping_Cart_model');
    }
    public function index($user_data = "")
    {
        $data['category'] = $this->Shopping_Cart_model->getCategory();   
        $data["user"] = $user_data;
        $this->load->view('indexView', $data);
    }
    
}
