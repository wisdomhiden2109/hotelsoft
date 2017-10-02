<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
	}


	public function index()
	{	
		if(isset($this->session->db_config)){
			$result = $this->model_db->autenticate(); 
			if( $result != "error"){
				$this->session->set_userdata($result);
				$data["section"] = "home";
				$this->load->view('header');
				$this->load->view('dashboard');
				$this->load->view('footer',$data);
			}else{
				redirect(base_url().'login','refresh');		
			}	
		}
		else{
			redirect(base_url().'login','refresh');	
		}
	}
}
