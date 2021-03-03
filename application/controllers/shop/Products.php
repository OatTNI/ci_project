<?php

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('Category_model');
    }

    public function index($ID = 0)
    {
        // $data['Product'] = $this->Product_model->getProductsbyCategory($ID);

        $config['base_url'] = base_url("shop/Products/index/$ID/");
        $config['total_rows'] = $this->Product_model->count('',$ID);
        $config['per_page'] = 3;

        $this->pagination->initialize($config);

        $data['links'] =  $this->pagination->create_links();

        $start = $this->uri->segment(5)>0?$this->uri->segment(5):0;
        $product  = $this->Product_model->getProductsbyCategory($start, $config['per_page'],$ID);
        $data['total_rows'] = $config['total_rows'];
        $data['Product'] = $product;

        

        $data['SeeAll'] = "No";
        $data['content'] = 'Shop/Shopmain';
        $this->load->view('Shop', $data);




    }
}
?>
