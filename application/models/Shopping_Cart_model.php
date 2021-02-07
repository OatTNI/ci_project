<?php

class Shopping_Cart_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
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

	public function getProductsbyCategory($cid)
	{
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('category', 'product.category_id = category.category_id');
		$this->db->where('product.category_id', $cid);
		$query = $this->db->get();
		return $query->result();
	}

	public function getCategory()
	{
		$this->db->select('*');
		$this->db->from('category');
		$query = $this->db->get();

		return $query->result();
	}
}
