<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function index($idcategoria = null)
	{
		$categoria = $this->cat->findById($idcategoria);

		if ($categoria != null) {
			$productos = $this->prod->findByCat($categoria->get("cat_id"));
			$data['categoria'] = $categoria;
			$data['productos'] = $productos;
			$this->load->view('categoria', $data, FALSE);
		}else{
			redirect('/','refresh');
		}
	}

}

/* End of file categoria.php */
/* Location: ./application/controllers/categoria.php */