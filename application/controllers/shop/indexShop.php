<?php

class indexShop extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Category_model');
    }

    public function index()
    {
        // $data['Product'] = $this->Product_model->getProducts();
        // $data['Img'] = $this->Product_model->getProductImages($data['Product']->{'product_id'});
        
        $config['base_url'] = base_url("shop/indexShop/index");
        $config['total_rows'] = $this->Product_model->count();
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        $data['links'] =  $this->pagination->create_links();

        $start = $this->uri->segment(4)>0?$this->uri->segment(4):0;
        $product  = $this->Product_model->getProductsPerpage($start, $config['per_page']);
        $data['total_rows'] = $config['total_rows'];
        $data['Product'] = $product;

        
        $data['SeeAll'] = "Yes";
        $data['content'] = 'Shop/Shopmain';
        $this->load->view('Shop', $data);
    }
}
?>