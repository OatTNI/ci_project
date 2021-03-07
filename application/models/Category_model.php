<?php

class Category_model extends CI_Model {

	public function __construct()
	{

	}

	public function getCategories()
	{	
		$this->db->where('c_status',1);
		$query = $this->db->get('category');

		return $query->result();
	}

	public function getaCategory($cid)
	{
		$this->db->where('category_id', $cid);
		$query = $this->db->get('category');

		return $query->row(0);
	}
	public function getaCategoryByName($name){
		$this->db->where('category_name',$name);
		$this->db->select('category_id');
				
		$query = $this->db->get('category');
		return $query;
	}
	public function set_status($cid){
		$sql="
		update category
		set c_status=1
		where category_id=$cid";
		$this->db->query($sql);
	}
	
	public function getCategoryBanners($cid)
	{
		$cid == 0? $this->db->where('category_id'):$this->db->where('category_id', $cid);
		$this->db->where('is_active', 'Y');
		$this->db->from('banner');
		$this->db->join('product', 'banner.product_id = product.product_id', 'left');
		$query = $this->db->get('');

		return $query->result();	
	}
	public function delete($cid){
		$sql="
		update category
		set c_status=0
		where category_id=$cid";
		$this->db->query($sql);
	}
}