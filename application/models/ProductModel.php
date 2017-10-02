<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductModel extends CI_Model {
	
	private $connection = NULL;

	public function __construct(){
		parent::__construct();
		$this->connection = $this->model_db->return_connection();
	}
	

	public function get_ajax_products(){
		$this->connection->select('producto.*,categoria.nombre as categoria, producto.id_subcategoria as subcategoria');
		$this->connection->from('producto');
		$this->connection->join('categoria','producto.id_categoria = categoria.idcategoria');
		//$this->connection->join('subcategoria','producto.id_subcategoria = subcategoria.idsubcategoria');
		$query = $this->connection->get();
		


		if($query->num_rows() > 0){	
			$data_products = $query->result_array();
			for ($i=0; $i < count($data_products); $i++) { 
				if($data_products[$i]["id_subcategoria"] == 0){
					$data_products[$i]["subcategoria"] = 'Ninguna';
				}else{
					$subcategorie = $this->connection->get_where('subcategoria',array('idsubcategoria'=>$data_products[$i]["id_subcategoria"]));
					$data_products[$i]["subcategoria"] = $subcategorie->result_array()[0]["nombre"];
				}
				
			}
			return $data_products;
		}else{
			return false;
		}
	}

	public function create_product($dates,$files){
		$insert_files = 0;
		$product = array(
			'idproducto' => $dates["referencia"],
			'nombre' => $dates["name"],
			'descripcion' => $dates["description"],
			'precio' => $dates["price"],
			'id_categoria' => $dates["categorie"],
			'id_subcategoria' => $dates["subcategorie"]
		 );
		
		$this->connection->insert('producto',$product);
		if($this->connection->affected_rows() > 0){
			foreach ($files as $file) {
				$files = array(
					'nombre' => $this->session->id_tienda.'-'.$file["name"],
					'id_producto' => $dates["referencia"]
				);
				$this->connection->insert('imagen',$files);
				if($this->connection->affected_rows() > 0){
					$insert_files++;
				}
			}
			if($insert_files == count($files)){
				return true;	
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

}
/* End of file ProductModel.php */
/* Location: ./application/models/ProductModel.php */