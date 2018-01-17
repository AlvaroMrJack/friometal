<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_categorias extends CI_Controller {

	public function index()
	{
		$categorias = $this->cat->findAll();
		$data["categorias"] = $categorias;
		$this->load->view('administracion/categorias', $data, FALSE);	
	}

	public function crearcategoria()
	{
		$nombre = $this->input->post('nombre');
		$desc = $this->input->post('desc');
		if (isset($nombre) and isset($desc)) {

			$imagen=null;
			if(isset($_FILES["files"])){
				$datimg=$_FILES["files"];
				$this->load->model('Archivo_model',false);
 				$archivo = new Archivo_model($datimg['name'],htmlspecialchars($datimg['size']),htmlspecialchars($datimg['type']),htmlspecialchars($datimg['tmp_name']),"resources/img/categorias/");
			    if ($archivo->validate()) {
					$imagen = $archivo->upload();
				}
			}
			$this->cat->setColumns(array(
								     'cat_id' =>0,
								     'cat_nombre' =>$nombre,
								     'cat_desc' =>$desc,
								     'cat_img_ruta' => $imagen
									));
			$this->cat->save();
		}
		redirect('adm_categorias','refresh');
	}

	public function eliminarcategoria($ideliminar = null)
	{
		$categoria = $this->cat->findById($ideliminar);
		if ($categoria != null) {
			$this->cat->eliminar($categoria->get("cat_id"));
		}
		redirect('adm_categorias','refresh');
	}

	public function editarcategoria()
	{
		$nombre = $this->input->post('nombre');
		$desc = $this->input->post('desc');
		$id = $this->input->post('id');
		$categoria = $this->cat->findById($id);
		if ($categoria != null) {

		   $imagen=null;
           if ($_FILES['files']['error'] == UPLOAD_ERR_OK) {
				$datimg=$_FILES["files"];
				//imagescale($datimg['tmp_name'], 200, 200, IMG_BICUBIC);
				$this->load->model('Archivo_model',false);
     			$archivo = new Archivo_model(htmlspecialchars($datimg['name']),htmlspecialchars($datimg['size']),htmlspecialchars($datimg['type']),htmlspecialchars($datimg['tmp_name']),"resources/img/categorias/");
				if ($archivo->validate()) {
				$imagen = $archivo->upload();
				}
           }else{
           $imagen = $categoria->get("cat_img_ruta");
           }

			$this->cat->setColumns(array(
								     'cat_id' =>$id,
								     'cat_nombre' =>$nombre,
								     'cat_desc' =>$desc,
								     'cat_img_ruta' => $imagen
									));
			$this->cat->save();
		}
		redirect('adm_categorias','refresh');
	}


}

/* End of file adm_categorias.php */
/* Location: ./application/controllers/adm_categorias.php */