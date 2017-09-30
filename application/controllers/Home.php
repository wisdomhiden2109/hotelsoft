<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('DatabaseModel','model_db');	
	}


	public function index()
	{	
		$result = $this->model_db->autenticate(); 
		if( $result != "error"){
			$this->session->set_userdata($result);
			$data["section"] = "nuevo-producto";
			$this->load->view('header');
			$this->load->view('dashboard');
			$this->load->view('footer',$data);
		}else{
			redirect(base_url().'login','refresh');	
		}
	}
}
