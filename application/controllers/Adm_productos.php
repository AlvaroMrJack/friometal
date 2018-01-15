<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_productos extends CI_Controller {

	public function index()
	{
		$this->load->view('administracion/productos');
	}

}

/* End of file adm_productos.php */
/* Location: ./application/controllers/adm_productos.php */