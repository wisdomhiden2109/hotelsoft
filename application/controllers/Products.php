<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* lv => load view */
class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('categoriemodel','categorie');
		$this->load->model('subcategoriemodel','subcategorie');
		$this->load->model('productmodel','product');
		
	}

	public function index()
	{
		$data["section"] = "productos";
		$this->load->view('header');
		$this->load->view('products');
		$this->load->view('footer',$data);
	}


	public function lv_new_product(){
		$data["section"] = "nuevo-producto";
		$data["categories"] = $this->categorie->get_ajax_categories();
		$this->load->view('header');
		$this->load->view('new_product',$data);
		$this->load->view('footer',$data);
	} 

	public function get_ajax_products(){
		$result = $this->product->get_ajax_products();
		echo json_encode($result);
	}

	public function create_product(){
		
		$uploads = 0;
		$files = array();
		foreach ($_FILES as $item => $value){
			$namefiles[] = $item."";
		}

		for ($i=0; $i < count($namefiles); $i++) { 
			if($_FILES[$namefiles[$i]]['name'] != "" && $_FILES[$namefiles[$i]]['size'] > 0){
				$files[] = $_FILES[$namefiles[$i]];
				$ext = end((explode(".", $_FILES[$namefiles[$i]]['name']))); 
				$file_upload = $this->session->id_tienda.'-'.$_FILES[$namefiles[$i]]['name'];
				if($this->upload_file($file_upload,$namefiles[$i],$ext) == "true"){
					$uploads++;
				}
			}
		}

		if(count($files) == $uploads){
			$result = $this->product->create_product($this->input->post(),$files);
			if($result){
				echo "EL producto se subio correctamente";
			}else{
				echo "NO fue posible subir el producto";
			}
		}
		
	}


	//************ CARGA DE ARCHIVOS  ****************//   
	function upload_file($name,$input,$ext) {
		if($ext != "png" && $ext != "jpg"){
			return false;
		}else{
			$response = "false";    
			$config['upload_path'] = "assets/uploads/";
			$config['file_name'] = $name;
			$config['allowed_types'] = "jpg|png";
			$config['max_size'] = "10000";
			$config['max_width'] = "2000";
			$config['max_height'] = "4000";
			$config['overwrite'] = true;
			$config['remove_spaces'] = true;

			//echo $config["file_name"];
			$this->upload->initialize($config);
			if (!$this->upload->do_upload($input)) {
			    //*** ocurrio un error
			  return $this->upload->display_errors();
			} else{
			    return "true";
			}
		}
	}

}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */