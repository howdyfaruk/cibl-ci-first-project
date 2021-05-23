<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function index(){

        echo 'product index';
	}

    public function view($id){

		echo 'product view'.' '.$id;
	}
}
