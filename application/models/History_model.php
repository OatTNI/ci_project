<?php

class History_model extends CI_Model {

	public function __construct()
	{

	}

	public function getUserHistory($uid)
	{
		$this->db->where('user_id', $uid);
		$query = $this->db->get('order');

		return $query->result();
	}

	public function getOrderHistory($oid)
	{
		$this->db->where('order_id', $oid);
		//$this->db->from('order_item');
		$this->db->from('order_view_his');
		//$this->db->join('product', 'order_item.product_id = product.product_id');
		$query = $this->db->get('');

		return $query->result();
	}

}