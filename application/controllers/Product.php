<?php

class Product extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProductModel');
        $this->load->library('parser');
        $this->load->helper('url');
    }

    public function index($stat=null){
        $data = array(
            'title'     => 'Product List',
            'ctl'       => $this->router->fetch_class(),
            'product'   => $this->ProductModel->getData(),
        );
        $this->parser->parse('product/header',$data);        
        $this->parser->parse('product/index',$data);  

    }

    public function create()
    {
        $data = array(
            'title' => 'Add Product',
        );
        $this->parser->parse('product/header',$data);
        $this->load->view('product/create');
    }

    //saved for create data
    public function saved()
    {
        $product_name   = $this->input->post('product_name');
        $product_price  = $this->input->post('product_price');
        if(ctype_space($product_name) || $product_price == null){
            redirect('product/');
        }
        $status = $this->ProductModel->insertData($product_name,$product_price);
        if($status == 1){
            ?>
            <script>
                alert("Sukses");
                window.location ='index';
            </script>
            <?php
        }     
    }

    public function delete($id)
    {
        $this->ProductModel->delete($id);
        redirect('product/');
    }

    public function update($id)
    {
        $data = array(
            'title'     => 'Edit Product',
            'product'   => $this->ProductModel->update_getData($id),
            'id'        => $id,
            'baseurl'   => base_url(),
            'ctl'       => $this->router->fetch_class(),
        );
        $this->parser->parse('product/header',$data);
        $this->parser->parse('product/update',$data);
    }

    public function updated($id)
    {
        $product_name   = $this->input->post('product_name');
        $product_price  = $this->input->post('product_price');
        if(ctype_space($product_name) || $product_price == null){
            redirect('product/');
        }
        $status = $this->ProductModel->updated($product_name,$product_price,$id);
        if($status == 1){
            ?>
            <script>
                alert("Sukses");
                window.location ='index';
            </script>
            <?php
        }     
    }
}