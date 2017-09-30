<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingModel extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function save_config($data){

		$data = array(
			"idtienda" => $data["identification"],
			"nombre" => $data["name"],
			"logo" => "logo",
			"direccion" => $data["direction"],
			"telefono" => $data["telephone"]
		);

		$this->db->insert('tienda',$data);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	

}

/* End of file ShoppingModel.php */
/* Location: ./application/models/ShoppingModel.php */