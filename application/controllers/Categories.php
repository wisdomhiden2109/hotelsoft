<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('categoriemodel','categorie');
	}

	public function index()
	{
		if(isset($this->session->db_config)){
			$data["section"] = "categorias";
			$this->load->view('header');
			$this->load->view('categories');
			$this->load->view('footer',$data);
		}
		else{
			redirect(base_url().'login','refresh');	
		}
	}

	public function create_categorie(){
		$categorie = $this->input->post('categorie');
		$result = $this->categorie->create_categorie($categorie);
		if($result){
			echo "true";
		}else{
			echo "error";
		}
	}

	public function get_ajax_categories(){
		$result = $this->categorie->get_ajax_categories();
		echo json_encode($result);
	}

}

/* End of file Categories.php */
/* Location: ./application/controllers/Categories.php */