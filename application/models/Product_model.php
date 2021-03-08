<?php

class Product_model extends CI_Model {

	public function __construct()
	{

	}

	public function getProductsPerpage($start=0 , $perpage=0)
	{
		$this->db->order_by('product_id');
		$this->db->limit($perpage,$start);

		$this->db->where("status",1);
		$query = $this->db->get('product_view');
		return $query->result();
	}

	public function getProducts($activate = 0)
	{
		if($activate == 0){
			$this->db->order_by('product_id','RANDOM');
		}
		else{
			$this->db->order_by('product_id');
		}
		$this->db->where("status",1);
		$query = $this->db->get('product_view');
		return $query->result();
	}

	public function count($keyword = '',$cid = 0  ){

		if(strlen($keyword)>0){
			$this->db->like('product_name',$keyword,'both');
		}
		if($cid>0){
			$this->db->join('category', 'product_view.category_id = category.category_id');
			$this->db->where('category.category_id',$cid);		
		}
	
		$this->db->where("status",1);
		$this->db->from('product_view');
		return $this->db->count_all_results();
	
		
	}
	public function getaProduct($pid)
	{
		$this->db->where('product_id', $pid);
		$this->db->where("status",1);
		$query = $this->db->get('product_view');

		return $query->row(0);
	}

	public function getProductsbyCategoryPerpage($start=0 , $perpage=0, $cid=0)
	{
		$this->db->select('*');
		$this->db->from('product_view');
		$this->db->join('category', 'product_view.category_id = category.category_id');
		$this->db->where('category.category_id', $cid);
		$this->db->where("status",1);
		$this->db->limit($perpage,$start);
		$query = $this->db->get();

		return $query->result();
	}
	public function getProductsbyCategory($cid)
	{
		$this->db->select('*');
		$this->db->from('product_view');
		$this->db->join('category', 'product_view.category_id = category.category_id');
		$this->db->where('category.category_id', $cid);
		$this->db->where("status",1);
		$query = $this->db->get();
		return $query->result();
	}

	public function getProductImages($pid)
	{
		$this->db->where('product_id', $pid);
		$query = $this->db->get('product_image');
		
		return $query->result();	
	}
	public function getProductsbySearchPerpage($start=0 , $perpage=0, $sid=0)
	{
		$this->db->select('*');
		$this->db->from('product_view');
		$this->db->like('product_name',$sid,'both');
		$this->db->limit($perpage,$start);
		$this->db->where("status",1);
		$query = $this->db->get();
		return $query->result();
		# code...
	}
	public function getProductsbySearch($sid)
	{
		$this->db->select('*');
		$this->db->from('product_view');
		$this->db->like('product_name',$sid,'both');
		$this->db->where("status",1);
		$query = $this->db->get();
		return $query->result();
		# code...
	}
	public function add_product($product_name,$vendor_id,$description,$product_price,$category_id){
		$query="
		insert into product (product_name,vendor_id,description,price,category_id)
		values ('$product_name',$vendor_id,'$description',$product_price,$category_id);
		";
		$this->db->query($query);
	}
	public function get_id($product_name,$vendor_id){
		$query="
		select product_id
		from product
		where product_name='$product_name'
		and vendor_id=$vendor_id";
		return $this->db->query($query)->result()[0];
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
	public function delete($product_id){
		// status 0 is deactivated
		$query="
		UPDATE product
		SET status = 0
		WHERE product_id=$product_id;";
		$this->db->query($query);
	}
	public function get_list_product($vendor_id){
		$query="
		select product_name,status
		from product
		where vendor_id=$vendor_id";
		return $this->db->query($query)->result();
	}
	public function updateProduct($pro_id,$pro_name,$vendor_id,$description,$price,$category_id){
		$query="
		update product
		set product_name='$pro_name',
		vendor_id=$vendor_id,
		description='$description',
		price=$price,
		category_id=$category_id
		where product_id=$pro_id";
		$this->db->query($query);
	}
	public function activateProduct($product_id){
		$query="
		update product
		set status=1
		where product_id=$product_id";
		$this->db->query($query);
	}
}
