<?php

class Shopping_Cart_model extends CI_Model {

	public function __construct()
	{

	}

	public function getProducts()
	{
		$query = $this->db->get('product');

		return $query->result();
	}

	public function getaProduct($pid)
	{
		$this->db->where('product_id', $pid);
		$query = $this->db->get('product');

		return $query->row(0);
	}

	public function getProductsbyCategory($cname)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('category', 'product.category_id = category.category_id');
		$this->db->where('category_name', $cname);
		$query = $this->db->get();

		return $query->result();
	}

}