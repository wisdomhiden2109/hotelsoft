<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShoppingConfig extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("shoppingmodel","shopping");	
	}

	public function index()
	{
		$data["section"] = "productos";
		$this->load->view('header');
		$this->load->view('config');
		$this->load->view('footer',$data);	
	}

	public function save_config(){
		
		$file_upload = $this->upload_file();

		if($file_upload == "upload"){
			$this->shopping->save_config($this->input->post());
		}else{
			print_r($file_upload);
		}
	}


	//************ CARGA DE ARCHIVOS  ****************//   
	public function upload_file() {
			$response = "error";    
			$config['upload_path'] = "assets/uploads/";
			$config['file_name'] = "logo";
			$config['allowed_types'] = "jpg|png";
			$config['max_size'] = "100000";
			$config['max_width'] = "2000";
			$config['max_height'] = "4000";
			$config['overwrite'] = true;
			$config['remove_spaces'] = true;

			//echo $config["file_name"];
			$this->upload->initialize($config);
			if (!$this->upload->do_upload("image")) {
			   //*** ocurrio un error
			  $response = $this->upload->display_errors();
			} else{
			    $response = "upload";
			}
			return $response;
	}



}

/* End of file ShoppingConfig.php */
/* Location: ./application/controllers/ShoppingConfig.php */