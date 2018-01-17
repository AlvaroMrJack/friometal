<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_inicio extends CI_Controller {

	public function index()
	{
		$anuncios = $this->anuncio->findAll();
		$data["anuncios"] = $anuncios;
		$this->load->view('administracion/inicio', $data, FALSE);
	}

	public function crearanuncio()
	{
		$titulo = $this->input->post('titulo');
		$subtitulo = $this->input->post('subtitulo');
		$texto = $this->input->post('texto');
		if (isset($titulo) and isset($subtitulo) and isset($texto)) {
			$this->anuncio->setColumns(array('anuncio_id' =>0,
								     'anuncio_titulo' =>$titulo,
								     'anuncio_subtitulo' =>$subtitulo,
								     'anuncio_texto' =>$texto
									));
			$this->anuncio->save();
		}
		redirect('adm_inicio','refresh');
	}

	public function eliminaranuncio($ideliminar = null)
	{
		$anuncio = $this->anuncio->findById($ideliminar);
		if ($anuncio != null) {
			$this->anuncio->eliminar($anuncio->get("anuncio_id"));
		}
		redirect('adm_inicio','refresh');
	}

	public function editaranuncio()
	{
		$titulo = $this->input->post('titulo');
		$subtitulo = $this->input->post('subtitulo');
		$texto = $this->input->post('texto');
		$id = $this->input->post('id');
		$anuncio = $this->anuncio->findById($id);
		if ($anuncio != null) {
			$this->anuncio->setColumns(array('anuncio_id' =>$id,
								     'anuncio_titulo' =>$titulo,
								     'anuncio_subtitulo' =>$subtitulo,
								     'anuncio_texto' =>$texto
									));
			$this->anuncio->save();
		}
		redirect('adm_inicio','refresh');
	}

}

/* End of file adm_inicio.php */
/* Location: ./application/controllers/adm_inicio.php */