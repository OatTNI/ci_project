<?php
class Checkout extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cart_model');
        $this->load->model('Order_model');
    }

    public function index(){
        
    }

    public function showItems(){

    	$id = $this->session->userdata('user_id');

        $data['cart'] = $this->Cart_model->getUserCart($id);
    	$data['content'] = 'userConfig/checkOut';
        $this->load->view('cartView', $data);

    }

    public function makeanOrder(){
    	$id = $this->session->userdata('user_id');
		$cart = $this->Cart_model->getUserCart($id);
		$arr['user_id'] = $id;
		$arr['total'] = $cart[0]->sum_total;
		$this->db->insert('order', $arr);

		$order = $this->Order_model->getlastOrder();
		
		foreach ($cart as $c) {
			$param['order_id'] = $order->order_id;
			$param['product_id'] = $c->product_id;
			$param['item_price'] = $c->price;
			$param['item_qty'] = $c->qty;
			$this->db->insert('order_item', $param);
		}

		$this->Cart_model->clearCart($id);
		redirect("MyAccount");
    }
}
?>
