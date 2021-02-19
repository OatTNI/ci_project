<?php 
	/**
	 * 
	 */
	class Search extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Product_model');

		}
		public function index($key='')
    	{
        $data['Product'] = $this->Product_model->getProductsbySearch($key);
        $data['Keyword'] = $key;
        $data['content'] = 'Shop/Shopmain';
        $this->load->view('Shop', $data);
    	}
	}

 ?>