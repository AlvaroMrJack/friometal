<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca_model extends CI_Model {

	private $columns = array(
     'marca_id' =>0,
     'marca_nombre' =>''
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
		$this->db->order_by('marca_id','DESC');
		$res = $this->db->get('marca');
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$productos[] = $this->create($value);
			}
		}
		return $productos;
    }

    public function save(){
		$this->load->database();
		if($this->columns['marca_id'] == 0){
			$this->db->insert("marca",$this->columns);
			$this->columns['marca_id'] = $this->db->insert_id();
		}else{
			$this->db->where('marca_id',$this->columns['marca_id']);
			$this->db->update('marca',$this->columns);
		}
		
	}
	
	public function setColumns ($row = null){
	foreach ($row as $key => $value) {
		$this->columns[$key] = $value;
		}
    }

    public function findById($id = null){
	$id = intval($id);
	$res = $this->db->get_where('marca',array('marca_id' =>$id));
	$product = null;
		if ($res->num_rows() == 1) {
			$product = $this->create($res->row_object());
		}
		return $product;
	}

	public function create($row){
	$prod =  new Marca_model();
	$prod->setColumns($row);
	return $prod;
	}

	public function eliminar($id)
	{
		$this->db->where('marca_id',$id);
		return $this->db->delete('marca');
	}

}

/* End of file Anuncio_model.php */
/* Location: ./application/models/Anuncio_model.php */