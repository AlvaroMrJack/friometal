<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelo_model extends CI_Model {

	private $columns = array(
     'modelo_id' =>0,
     'modelo_nombre' =>'',
     'modelo_marca_id' =>0
	);

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function get($key){
		return $this->columns[$key];
	}


	public function findAll(){
		$this->load->database();
		$productos = null;
		$this->db->order_by('modelo_id','DESC');
		$this->db->join('marca', 'marca.marca_id = modelo.modelo_marca_id');
		$res = $this->db->get('modelo');
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$productos[] = $this->create($value);
			}
		}
		return $productos;
    }

    public function save(){
		$this->load->database();
		if($this->columns['modelo_id'] == 0){
			$this->db->insert("modelo",$this->columns);
			$this->columns['modelo_id'] = $this->db->insert_id();
		}else{
			$this->db->where('modelo_id',$this->columns['modelo_id']);
			$this->db->update('modelo',$this->columns);
		}
		
	}
	
	public function setColumns ($row = null){
	foreach ($row as $key => $value) {
		$this->columns[$key] = $value;
		}
    }

    public function findById($id = null){
	$id = intval($id);
	$this->db->join('marca', 'marca.marca_id = modelo.modelo_marca_id');
	$res = $this->db->get_where('modelo',array('modelo_id' =>$id));
	$product = null;
		if ($res->num_rows() == 1) {
			$product = $this->create($res->row_object());
		}
		return $product;
	}

	public function create($row){
	$prod =  new Modelo_model();
	$prod->setColumns($row);
	return $prod;
	}

	public function eliminar($id)
	{
		$this->db->where('modelo_id',$id);
		return $this->db->delete('modelo');
	}

}

/* End of file Anuncio_model.php */
/* Location: ./application/models/Anuncio_model.php */