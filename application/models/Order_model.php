<?php

class Order_model extends CI_Model {

	public function __construct()
	{

	}

	public function getlastOrder()
	{
		$this->db->order_by('order_id', 'DESC');
		$query = $this->db->get('order');
  
    	return $query->row(0);
	}

}