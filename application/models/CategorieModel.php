<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CategorieModel extends CI_Model {
	
	private $connection = NULL;

	public function __construct(){
		parent::__construct();
		$this->connection = $this->model_db->return_connection();
	}
	

	public function get_ajax_categories(){
		$this->connection->select('*');
		$this->connection->from('categoria');
		$categories = $this->connection->get();

		if($categories->num_rows() > 0){
			return $categories->result_array();
		}else{
			return false;
		}
	}

	public function create_categorie($categorie){
		$data = array(
			'nombre' => $categorie,
			'id_tienda' => $this->session->id_tienda
		);
		$this->connection->insert('categoria',$data);
		if($this->connection->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}

/* End of file CategorieModel.php */
/* Location: ./application/models/CategorieModel.php */