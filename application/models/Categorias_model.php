<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends CI_Model {
	private $columns = array(
     'cat_id' =>0,
     'cat_nombre' =>'',
     'cat_desc' =>'',
     'cat_img_ruta' =>'',
     'cat_img_banner' =>''
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
		$this->db->order_by('cat_id','DESC');
		$res = $this->db->get('categorias');
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$productos[] = $this->create($value);
			}
		}
		return $productos;
    }

    public function save(){
		$this->load->database();
		if($this->columns['cat_id'] == 0){
			$this->db->insert("categorias",$this->columns);
			$this->columns['cat_id'] = $this->db->insert_id();
		}else{
			$this->db->where('cat_id',$this->columns['cat_id']);
			$this->db->update('categorias',$this->columns);
		}
		
	}
	
	public function setColumns ($row = null){
	foreach ($row as $key => $value) {
		$this->columns[$key] = $value;
		}
    }

    public function findById($id = null){
	$id = intval($id);
	$res = $this->db->get_where('categorias',array('cat_id' =>$id));
	$product = null;
		if ($res->num_rows() == 1) {
			$product = $this->create($res->row_object());
		}
		return $product;
	}

	public function create($row){
	$prod =  new Categorias_model();
	$prod->setColumns($row);
	return $prod;
	}

	public function eliminar($id)
	{
		$this->db->where('cat_id',$id);
		return $this->db->delete('categorias');
	}

	

}

/* End of file Categorias_model.php */
/* Location: ./application/models/Categorias_model.php */