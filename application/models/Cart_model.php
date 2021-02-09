<?php

class Cart_model extends CI_Model {

	public function __construct()
	{

	}

	public function getUserCart($uid)
	{
		$this->db->where('user_id', $uid);
		$query = $this->db->get('cart_product_sum');

		return $query->result();
	}

	public function getUserCartProduct($uid, $pid)
	{
		$this->db->select('*');
		$this->db->where('user_id', $uid);
		$this->db->where('product_id', $pid);

		$query = $this->db->get('cart_product_sum');
		return $query->row(0);
	}

	public function addCart($uid, $pid)
	{
		$product = $this->Cart_model->getUserCartProduct($uid, $pid);

		if(is_object($product))
		{
			$arr = array();
			$arr['qty'] = $product->qty + 1;

			$this->db->where('user_id', $uid);
			$this->db->where('product_id',$pid);
			$this->db->update('cart', $arr);
		}
		else
		{
			$arr = array();
			$arr['user_id'] = $uid;
			$arr['product_id'] = $pid;
			$arr['qty'] = 1;

			$this->db->insert('cart',$arr);
		}
	}

}