<?php

class CategoryManagement extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Category_model');
		$this->load->model('Product_model');
	}

	public function index()
	{
		redirect("Admin/CategoryManager");
	}

	public function add()
	{
		$this->form_validation->set_rules('catName', 'ชื่อหมวดหมู่', 'required',array(
			'required' => 'กรุณากรอกชื่อหมวดหมู่'));
		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('flash_errors', validation_errors());

		}
		else{
			
			$categoryName = $this->input->post('catName');
			$query=$this->Category_model->getaCategoryByName($categoryName);
			$query=$query[0];
			// ! if Category name is in query
			if($query){
				if($query->c_status==1){

					$this->session->set_flashdata('flash_errors', "ชื่อหมวดหมู่ซ้ำ กรุณากรอกใหม่");
				}else{
					$this->Category_model->set_status($query->category_id);
				}
				
			}else{
				// ! if Category name is not in query
				$param['category_name']=$categoryName;
				$this->db->insert('category',$param);
				$this->session->set_flashdata('flash_success', 'เพิ่มข้อมูลเรียบร้อยแล้ว');
			}
		}

			redirect("Admin/CategoryManager");
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
			$this->Category_model->delete($category_id);
			$this->session->set_flashdata('flash_success', 'ลบข้อมูลเรียบร้อยแล้ว');

		}
	}
}