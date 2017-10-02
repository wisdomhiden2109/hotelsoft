<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubcategorieModel extends CI_Model {
	
	private $connection = NULL;

	public function __construct(){
		parent::__construct();
		$this->connection = $this->model_db->return_connection();
	}
	

	public function get_ajax_subcategories(){
		$this->connection->select('sub.nombre as nombresubcategoria, cat.nombre as nombrecategoria');
		$this->connection->from('subcategoria as sub');
		$this->connection->join('categoria as cat','cat.idcategoria = sub.categoria_idcategoria');
		$subcategories = $this->connection->get();

		if($subcategories->num_rows() > 0){
			return $subcategories->result_array();
		}else{
			return false;
		}
	}

	public function create_subcategorie($categorie,$subcategorie){
		$data = array(
			'nombre' => $subcategorie,
			'categoria_idcategoria' => $categorie
		);
		$this->connection->insert('subcategoria',$data);
		if($this->connection->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function get_ajax_subcategories_by_categorie($categorie){
		$this->connection->select("subcategoria.*");
		$this->connection->from("subcategoria");
		$this->connection->where("categoria_idcategoria",$categorie);
		$result = $this->connection->get();
		if($result->num_rows() > 0){
			return $result->result_array();
		}else{
			return "error";
		}
	}

}

/* End of file CategorieModel.php */
/* Location: ./application/models/CategorieModel.php */