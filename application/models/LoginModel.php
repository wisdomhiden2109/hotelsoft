<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function autenticate($email,$password){
		$this->db->select("*");
		$this->db->from("usuarios");
		$this->db->where("correo",$email);
		$this->db->where("clave",$password);
		$result = $this->db->get();

		if($result->num_rows() > 0){
			return $result->result_array()[0];
		}else{
			return "error";
		}

	}

}

/* End of file LoginModel.php */
/* Location: ./application/models/LoginModel.php */