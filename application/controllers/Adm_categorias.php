<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_categorias extends CI_Controller {

	public function index()
	{
		$this->load->view('administracion/categorias');		
	}

}

/* End of file adm_categorias.php */
/* Location: ./application/controllers/adm_categorias.php */