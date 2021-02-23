<?php

class Product_model extends CI_Model {

	public function __construct()
	{

	}

	public function getProducts()
	{
		$this->db->order_by('product_id', 'RANDOM');
		$query = $this->db->get('product_view');

		return $query->result();
	}

	public function getaProduct($pid)
	{
		$this->db->where('product_id', $pid);
		$query = $this->db->get('product_view');

		return $query->row(0);
	}

	public function getProductsbyCategory($cid)
	{
		$this->db->select('*');
		$this->db->from('product_view');
		$this->db->join('category', 'product_view.category_id = category.category_id');
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
		$this->db->select('*');
		$this->db->from('product_view');
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
		from product_view
		where ";
	}
	public function getProductvendor($VID){
		$this->db->select('vendor_name');
		$this->db->from('vendor');
		$this->db->where('vendor_id', $VID);
		$query = $this->db->get();
		// echo $this->db->last_query();
		return $query->result();
		
	}
	public function getVendor(){
		$this->db->select('*');
		$this->db->from('vendor');
		$query = $this->db->get();
		// echo $this->db->last_query();
		return $query->result();
		
	}
}
