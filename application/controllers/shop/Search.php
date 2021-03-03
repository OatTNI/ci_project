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
            if(strlen($key)>0){
            $config['base_url'] = base_url("shop/Search/index/$key/");
            $config['total_rows'] = $this->Product_model->count($key,0);
            $config['per_page'] = 3;

            $this->pagination->initialize($config);

            $data['links'] =  $this->pagination->create_links();

            $start = $this->uri->segment(5)>0?$this->uri->segment(5):0;
            $product  = $this->Product_model->getProductsbySearchPerpage($start, $config['per_page'],$key);
            $data['total_rows'] = $config['total_rows'];
            $data['Product'] = $product;


            $data['Keyword'] = $key;
            $data['SeeAll'] = '';
            $data['content'] = 'Shop/Shopmain';
            $this->load->view('Shop', $data);
        }
        else{
            redirect("shop/index");
        }
        // $data['Product'] = $this->Product_model->getProductsbySearch($key);

        
    	}
	}

 ?>