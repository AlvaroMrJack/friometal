<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adm_marca_modelo extends CI_Controller {

	public function index()
	{
		$marcas = $this->marca->findAll();
		$modelo = $this->modelo->findAll();
		$data["marcas"] = $marcas;
		$data["modelos"] = $modelo;
		$this->load->view('administracion/marcamodelo', $data, FALSE);
	}

	public function crearmarca()
	{
		$nombre = $this->input->post('nombre');
		if (isset($nombre)) {
			$this->marca->setColumns(array('marca_id' =>0,
								     'marca_nombre' =>$nombre
									));
			$this->marca->save();
		}
		redirect('adm_marca_modelo','refresh');
	}

	public function eliminarmarca($ideliminar = null)
	{
		$marca = $this->marca->findById($ideliminar);
		if ($marca != null) {
			$modelos = $this->modelo->findByArray(array("modelo_marca_id" => $marca->get("marca_id")));
			if ($modelos == null) {
				$this->marca->eliminar($marca->get("marca_id"));
			}
		}
		redirect('adm_marca_modelo','refresh');
	}

	public function editarmarca()
	{
		$nombre = $this->input->post('nombre');
		$id = $this->input->post('id');
		$marca = $this->marca->findById($id);
		if ($marca != null) {
			$this->marca->setColumns(array('marca_id' =>$id,
								     'marca_nombre' =>$nombre
									));
			$this->marca->save();
		}
		redirect('adm_marca_modelo','refresh');
	}


	//------------------------------------------------


	public function crearmodelo()
	{
		$nombre = $this->input->post('nombre');
		$marca = $this->input->post('marca');
		if (isset($nombre) and isset($marca)) {
			$this->modelo->setColumns(array('modelo_id' =>0,
								     'modelo_nombre' =>$nombre,
								     'modelo_marca_id' =>$marca,
									));
			$this->modelo->save();
		}
		redirect('adm_marca_modelo','refresh');
	}

	public function eliminarmodelo($ideliminar = null)
	{
		$modelo = $this->modelo->findById($ideliminar);
		if ($modelo != null) {
			//aqui verificar si un producto tiene asociado este modelo
			$productos = $this->prod->findByArray(array("prod_modelo_id" => $modelo->get("modelo_id")));
			if ($productos == null) {
				$this->modelo->eliminar($modelo->get("modelo_id"));
			}
			
		}
		redirect('adm_marca_modelo','refresh');
	}

	public function editarmodelo()
	{
		$id = $this->input->post('id');
		$modelo = $this->modelo->findById($id);
		if ($modelo != null) {
			$nombre = $this->input->post('nombre') || $modelo->get("modelo_nombre");
			$marca = $this->input->post('marca') || $modelo->get("modelo_marca");
			$this->modelo->setColumns(array('modelo_id' =>$id,
								     'modelo_nombre' =>$nombre,
								     'modelo_marca_id' =>$marca,
									));
			$this->modelo->save();
		}
		redirect('adm_marca_modelo','refresh');
	}

}

/* End of file adm_marca_modelo.php */
/* Location: ./application/controllers/adm_marca_modelo.php */