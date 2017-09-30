<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('loginmodel','login');
	}

	public function index()
	{	
		$this->load->view('login');
	}

	public function autenticate(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");

		$result = $this->login->autenticate($email,$password); 
		if( $result != "error"){
			$user =  array(
				'id' => $result["idusuario"],
				'db_config' => $result["db_config"],
				'correo' => $result["correo"],
				'clave' => $result["clave"]
			 );

			$this->session->set_userdata($user);
			redirect(base_url().'home');
		}else{
			redirect(base_url().'login','refresh');	
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'login','refresh');
	}
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */