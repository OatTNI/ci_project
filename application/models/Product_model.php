<?php

class Product_model extends CI_Model {

	public function __construct()
	{

	}

	public function getProducts()
	{
		$this->db->order_by('product_id', 'RANDOM');
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
		$this->db->where('category.category_id', $cid);
		$query = $this->db->get();

		return $query->result();
	}

	public function getProductImages($pid)
	{
		$this->db->where('product_id', $pid);
		$query = $this->db->get('product_image');

		return $query->result();	
	}
	public function getProductsbySearch($sid)
	{
		$this->db->select('product_name');
		$this->db->from('product');
		$this->db->like('product_name',$sid,'both');
		$query = $this->db->get();
		return $query->result();
		# code...
	}
	public function add_product($product_name,$product_price,$vendor_name,$category,$description){
		$query="
		insert into product (product_name,vendor,description,price,category_id)
		values ('$product_name','$vendor_name','$description',$product_price,$category);
		";
		$this->db->query($query);
	}
	public function get_id($product_name,$vendor_name){
		$query="
		select product_id
		from product
		where ";
	}

}
?>