<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anuncio_model extends CI_Model {

	private $columns = array(
     'anuncio_id' =>0,
     'anuncio_titulo' =>'',
     'anuncio_subtitulo' =>'',
     'anuncio_texto' =>''
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
		$this->db->order_by('anuncio_id','DESC');
		$res = $this->db->get('anuncios');
		if ($res->num_rows() > 0) {
			foreach ($res->result() as $value) {
				$productos[] = $this->create($value);
			}
		}
		return $productos;
    }

    public function save(){
		$this->load->database();
		if($this->columns['anuncio_id'] == 0){
			$this->db->insert("anuncios",$this->columns);
			$this->columns['anuncio_id'] = $this->db->insert_id();
		}else{
			$this->db->where('anuncio_id',$this->columns['anuncio_id']);
			$this->db->update('anuncios',$this->columns);
		}
		
	}
	
	public function setColumns ($row = null){
	foreach ($row as $key => $value) {
		$this->columns[$key] = $value;
		}
    }

    public function findById($id = null){
	$id = intval($id);
	$res = $this->db->get_where('anuncios',array('anuncio_id' =>$id));
	$product = null;
		if ($res->num_rows() == 1) {
			$product = $this->create($res->row_object());
		}
		return $product;
	}

	public function create($row){
	$prod =  new Anuncio_model();
	$prod->setColumns($row);
	return $prod;
	}

	public function eliminar($id)
	{
		$this->db->where('anuncio_id',$id);
		return $this->db->delete('anuncios');
	}

}

/* End of file Anuncio_model.php */
/* Location: ./application/models/Anuncio_model.php */