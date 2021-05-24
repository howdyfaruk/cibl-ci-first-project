<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

	public function index(){
		$data['title'] = 'Product Lists';
       
		$this->load->view('products/index', $data);
	}

    public function view($id){
		// echo "view product ".$id;
		$data['title'] = 'Product Details';
		$data['id'] = $id;

		$this->load->view('products/view', $data);
	}
}
