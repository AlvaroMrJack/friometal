<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
 	private $columns = array(
     'usu_id' =>0,
     'usu_apodo' =>'',
     'usu_nombre' =>'',
     'usu_password' =>''
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
	$res = $this->db->get('usuario');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$usuario[] = $this->create($value);
		}
	}
	return $usuario;
    }

    public function save(){
		$this->load->database();
		if($this->columns['usu_id'] == 0){
			$this->db->insert("usuario",$this->columns);
			$this->columns['usu_id'] = $this->db->insert_id();
		}else{
			$this->db->where('usu_id',$this->columns['usu_id']);
			$this->db->update('usuario',$this->columns);
		}
		
	}
	
	public function setColumns ($row = null){
	foreach ($row as $key => $value) {
		$this->columns[$key] = $value;
		}
    }

    public function findByName($name = ''){
	$this->load->database();
	$res = $this->db->get_where('usuario',array('usu_apodo' =>$name));
	$product = null;
		if ($res->num_rows() == 1) {
			$product = $this->create($res->row_object());
		}
		return $product;
	}

	public function create($row){
	$prod =  new Usuario_model();
	$prod->setColumns($row);
	return $prod;
    }

    function eliminar($id)
	{
		$this->db->where('usu_id',$id);
		return $this->db->delete('usuario');
	}
	

}

/* End of file Usuario_model.php */
/* Location: ./application/models/Usuario_model.php */