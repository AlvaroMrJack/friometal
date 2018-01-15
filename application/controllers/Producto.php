<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	public function index($idproducto = null)
	{
		$producto = $this->prod->findById($idproducto);
		if ($producto != null) {
			$data["producto"] = $producto;
			$this->load->view('producto', $data, FALSE);
		}else{
			redirect('/','refresh');
		}

	}

}

/* End of file producto.php */
/* Location: ./application/controllers/producto.php */