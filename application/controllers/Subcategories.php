<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subcategories extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('categoriemodel','categorie');
		$this->load->model('subcategoriemodel','subcategorie');
	}

	public function index()
	{
		if(isset($this->session->db_config)){
			$data["section"] = "subcategorias";
			$data["categories"] = $this->categorie->get_ajax_categories();
			$this->load->view('header');
			$this->load->view('subcategories',$data);
			$this->load->view('footer',$data);
		}
		else{
			redirect(base_url().'login','refresh');	
		}
	}

	public function create_subcategorie(){
		$categorie = $this->input->post('categorie');
		$subcategorie = $this->input->post('subcategorie');
		$result = $this->subcategorie->create_subcategorie($categorie,$subcategorie);
		if($result){
			echo "true";
		}else{
			echo "error";
		}
	}

	public function get_ajax_subcategories(){
		$result = $this->subcategorie->get_ajax_subcategories();
		echo json_encode($result);
	}

	public function get_ajax_subcategories_by_categorie(){
		$categorie = $this->input->post("categorie");
		$result = $this->subcategorie->get_ajax_subcategories_by_categorie($categorie);
		echo json_encode($result);
	}

}

/* End of file Categories.php */
/* Location: ./application/controllers/Categories.php */