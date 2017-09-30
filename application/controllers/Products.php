<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* lv => load view */

class Products extends CI_Controller {

	public function index()
	{
		$data["section"] = "productos";
		$this->load->view('header');
		$this->load->view('products');
		$this->load->view('footer',$data);
	}


	public function lv_new_product(){
		$data["section"] = "nuevo-producto";
		$this->load->view('header');
		$this->load->view('new_product');
		$this->load->view('footer',$data);
	} 

	public function create_product(){
		print_r($_POST);
		print_r($_FILES);
	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */