<?php

class categoryManagement extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Product_model');
	}

	public function index()
	{
		redirect("admin/CategoryManager");
	}

	public function add()
	{
		$this->form_validation->set_rules('catName', 'ชื่อหมวดหมู่', 'required|is_unique[category.category_name]',array('required' => 'กรุณากรอกชื่อหมวดหมู่', 'is_unique'=>'ชื่อหมวดหมู่ซ้ำ กรุณากรอกใหม่'));
		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('flash_errors', validation_errors());

			redirect("admin/CategoryManager");
		}
		else{
			$categoryName = $this->input->post('catName');

			$param['category_name']=$categoryName;

			$this->db->insert('category',$param); 

			$this->session->set_flashdata('flash_success', 'เพิ่มข้อมูลเรียบร้อยแล้ว');
			
			redirect("admin/CategoryManager");
		}
	}

	public function edit($category_id, $category_name)
	{
		$this->db->where('category_name', $category_name);
		$query = $this->db->get('category');
		print_r($query->result());
		if($query->result())
		{
			$this->session->set_flashdata('flash_errors', 'ชื่อหมวดหมู่ซ้ำ กรุณากรอกใหม่');
		}
		else
		{
			$param['category_id'] = $category_id;
			$param['category_name'] = $category_name;

			$this->db->where('category_id', $category_id);
			$this->db->update('category', $param);

			$this->session->set_flashdata('flash_success', 'แก้ไขข้อมูลสำเร็จ');	
		}
	}

	public function delete($category_id)
	{
		if ($this->Product_model->getProductsbyCategory($category_id))
		{
			$this->session->set_flashdata('flash_errors', 'หมวดหมู่นี้ยังมีสินค้าอยู่ จึงไม่สามารถลบได้');
		}
		else
		{
			$this->session->set_flashdata('flash_success', 'ลบข้อมูลเรียบร้อยแล้ว');

			$this->db->where('category_id',$category_id);
			$this->db->delete('category');
		}
	}
}