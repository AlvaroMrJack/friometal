<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function index()
	{
		$categorias = $this->cat->findAll();
		$anuncios = $this->anuncio->findAll();
		$data['categorias'] = $categorias;
		$data['anuncios'] = $anuncios;
		$this->load->view('inicio', $data, FALSE);	
	}

}

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */