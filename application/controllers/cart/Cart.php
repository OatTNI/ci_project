<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Cart_model");
	}

	public function index()
	{
		$this->load->view("home");
		$this->enter();
	}

	public function showData($keyword='', $category_name='')
	{
		$data = $this->Cart_model->getProducts($keyword, $category_name);
		echo json_encode($data);
	}

	public function showCart()
	{
		$this->enter();

		$this->load->view('showCartItems');
	}

	public function showCartData()
	{
		$id = $this->session->userdata('user_id');
		$data = $this->Cart_model->getCartbyID($id);
			echo json_encode($data);
	}

	public function addCart($pid)
	{
		$this->enter();		

		$id = $this->session->userdata('user_id');

		$product = $this->Cart_model->getCartProduct($id, $pid);

		if(is_object($product))
		{
			$arr = array();
			$arr['qty'] = $product->qty + 1;

			$this->db->where('user_id', $id);
			$this->db->where('product_id',$pid);
			$this->db->update('cart', $arr);
		}
		else
		{
			$arr = array();
			$arr['user_id'] = $id;
			$arr['product_id'] = $pid;
			$arr['qty'] = 1;

			$this->db->insert('cart',$arr);
		}

		redirect('Cart/index');
	}

	public function editCart()
	{
		$id = $this->session->userdata('user_id');
		$pid = $this->input->get('product_id');
		$qty = $this->input->get('qty');

		$arr = array(); 
		$arr['user_id'] = $id;
		$arr['product_id'] = $pid;
		$arr['qty'] = $qty;

		if($qty > 0) {

			$this->db->where('user_id', $id);
			$this->db->where('product_id',$pid);
			$this->db->update('cart', $arr);

			$data = $this->Cart_model->getCartProduct($id, $pid);

			echo json_encode($data);

		} else {

			$this->db->where('user_id', $id);
			$this->db->where('product_id',$pid);
			$this->db->delete('cart');

			echo "invalid";

		}
	}

	public function deleteCart($pid)
	{
		$id = $this->session->userdata('user_id');

		$this->db->where('user_id', $id);
		$this->db->where('product_id',$pid);
		$this->db->delete('cart');

		redirect('Cart/showCart');		
	}

	public function checkout()
	{

		$id = $this->session->userdata('user_id');
		$data = $this->Cart_model->getCartbyID($id);
		$arr = array(); 
		$arr['user_id'] = $id;
		$arr['total'] = $data[0]->sum_total;

		$this->db->insert('order',$arr);
		$ord = $this->Cart_model->getLastOrderID($id);

			foreach ($data as $d) {

				$order = array();
				$order['order_id'] = $ord->order_id;
				$order['product_id'] = $d->product_id;
				$order['item_price'] = $d->price;
				$order['item_qty'] = $d->qty;
				
				$this->db->insert('order_item', $order);

				$this->db->where('user_id', $id);
				$this->db->where('product_id',$d->product_id);
				$this->db->delete('cart');

			}

		redirect('Cart/viewHistory');
	}

	public function viewHistory()
	{
		$this->enter();

		$this->load->view('showHistory');	
	}

	public function orderHistory()
	{
		$id = $this->session->userdata('user_id');
		$data = $this->Cart_model->getOrderbyID($id);
		echo json_encode($data);		
	}

	public function orderData($oid)
	{
		$data = $this->Cart_model->getOrderItem($oid);
		echo json_encode($data);		
	}

	public function cancelOrder($oid)
	{
		$arr = array();
		$arr['status'] = 'Cancelled';

		$this->db->where('order_id',$oid);
		$this->db->update('order', $arr);

		redirect('Cart/viewHistory');		
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function checkLogin()
	{
		$Email = $this->input->get('Email');
		$Password = $this->input->get('Password');

		$User = $this->Cart_model->getaUser($Email, $Password);
		$Username = $User->first_name;
		$UserID = $User->user_id;

		if(is_object($User))
		{
			$session_data = array('username' => $Username, 'user_id' => $UserID);  
            $this->session->set_userdata($session_data);
            redirect('Cart/index'); 
		}
		else
		{
			redirect('Cart/login');
		}
	}

	public function enter()
	{
		if($this->session->userdata('username') != '') 
		{
			echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';
			echo '<label><a href="'.base_url('Cart/index').'">Home<br></a></label>';
			echo '<label><a href="'.base_url('Cart/showCart').'">Show my cart<br></a></label>';
			echo '<label><a href="'.base_url('Cart/viewHistory').'">Shopping History<br></a><label>';
			echo '<label><a href="'.base_url('Cart/logout').'">Logout</a></label>';
		}
		else
		{
			echo '<label><a href="'.base_url('Cart/login').'">Login</a></label>'; 
		}
	}

	public function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect('Cart/index');  
      }  

}