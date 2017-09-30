<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sales');
		$this->load->view('footer');
	}

}

/* End of file Sales.php */
/* Location: ./application/controllers/Sales.php */