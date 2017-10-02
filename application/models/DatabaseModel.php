<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseModel extends CI_Model {
	

	private $connection = NULL;

	public function __construct(){
		parent::__construct();

		$config['hostname'] = 'localhost';
		$config['username'] = 'root';
		$config['password'] = '';
		$config['database'] = $this->session->db_config;
		$config['dbdriver'] = 'mysqli';
		$config['dbprefix'] = '';
		$config['pconnect'] = FALSE;
		$config['db_debug'] = TRUE;
		$config['cache_on'] = FALSE;
		$config['cachedir'] = '';
		$config['char_set'] = 'utf8';
		$config['dbcollat'] = 'utf8_general_ci';

		$this->connection = $this->load->database($config,TRUE);
	}


	public function autenticate(){
		
		$this->connection->select("usuario.*,almacen.id_tienda");
		$this->connection->from("usuario");
		$this->connection->join("almacen","almacen.idalmacen = usuario.id_almacen");
		$this->connection->where("correo",$this->session->correo);
		$this->connection->where("clave",$this->session->clave);
		$result = $this->connection->get();

		if($result->num_rows() > 0){
			return $result->result_array()[0];
		}else{
			return "error";
		}

	}

	public function return_connection(){
		return $this->connection;
	}

}

/* End of file DatabaseModel.php */
/* Location: ./application/models/DatabaseModel.php */