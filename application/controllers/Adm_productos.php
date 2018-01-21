<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_productos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('usuario')) {
		}else{
			redirect('login','refresh');
		}
	}

	public function index()
	{
		$productos = $this->prod->findAll();
		$modelos = $this->modelo->findAll();
		$categorias = $this->cat->findAll();
		$data["categorias"] = $categorias;
		$data["productos"] = $productos;
		$data["modelos"] = $modelos;
		$this->load->view('administracion/productos', $data, FALSE);
	}

	public function crearproducto()
	{
		$nombre = $this->input->post('nombre');
		$precio = $this->input->post('precio');
		$modelo = $this->input->post('modelo');
		$categoria = $this->input->post('categoria');
		$rentorsale = $this->input->post('rentorsale');
		$tipo = $this->input->post('tipo');
		$desc = $this->input->post('desc');
		$linkpdf = $this->input->post('linkpdf');
		$linkyoutube = $this->input->post('linkyoutube');

		if (isset($nombre) and isset($desc) and isset($modelo) and isset($rentorsale) and isset($tipo) and isset($precio) and isset($categoria)) {

			$imagen1=null;
			if(isset($_FILES["files1"])){
				$datimg=$_FILES["files1"];
				$this->load->model('Archivo_model',false);
 				$archivo = new Archivo_model($datimg['name'],htmlspecialchars($datimg['size']),htmlspecialchars($datimg['type']),htmlspecialchars($datimg['tmp_name']),"resources/img/products/");
			    if ($archivo->validate()) {
					$imagen1 = $archivo->upload();
				}
			}

			$imagen2=null;
			if(isset($_FILES["files2"])){
				$datimg=$_FILES["files2"];
				$this->load->model('Archivo_model',false);
 				$archivo = new Archivo_model($datimg['name'],htmlspecialchars($datimg['size']),htmlspecialchars($datimg['type']),htmlspecialchars($datimg['tmp_name']),"resources/img/products/");
			    if ($archivo->validate()) {
					$imagen2 = $archivo->upload();
				}
			}


			$this->prod->setColumns(array(
								     'prod_id' =>0,
								     'prod_nombre' =>$nombre,
								     'prod_precio' =>$precio,
								     'prod_desc' =>$desc,
								     'prod_modelo_id' =>$modelo,
								     'prod_imagen1' =>$imagen1,
								     'prod_imagen2' =>$imagen2,
								     'prod_link_esp' => $linkpdf,
								     'prod_link_video' => preg_replace("/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
																        "https://www.youtube.com/embed/$2",
																        $linkyoutube
																    ),
								     'prod_estado' => 1,
								     'prod_cat_id' => $categoria,
									));
			$this->prod->save();

		}
		redirect('adm_categorias','refresh');
	}


}

/* End of file adm_productos.php */
/* Location: ./application/controllers/adm_productos.php */