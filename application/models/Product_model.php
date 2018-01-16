<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {
  	private $columns = array(
     'prod_id' =>0,
     'prod_nombre' =>'',
     'prod_precio' =>'',
     'prod_desc' =>'',
     'prod_modelo_id' =>'',
     'prod_imagen1' =>'',
     'prod_imagen2' =>'',
     'prod_link_esp' =>'',
     'prod_link_video' =>'',
     'prod_link_estado' => 1,
     'prod_cat_id' => 0,
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
	$res = $this->db->get('productos');
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$productos[] = $this->create($value);
		}
	}
	return $productos;
    }

    public function save(){
		$this->load->database();
		if($this->columns['prod_id'] == 0){
			$this->db->insert("productos",$this->columns);
			$this->columns['prod_id'] = $this->db->insert_id();
		}else{
			$this->db->where('prod_id',$this->columns['prod_id']);
			$this->db->update('productos',$this->columns);
		}
		
	}

	 public function moneda_chilena(){
		$numero = (string)$this->columns['prod_precio'];
		$puntos = floor((strlen($numero)-1)/3);
		$tmp = "";
		$pos = 1;
		for($i=strlen($numero)-1; $i>=0; $i--){
		$tmp = $tmp.substr($numero, $i, 1);
		if($pos%3==0 && $pos!=strlen($numero))
		$tmp = $tmp.".";
		$pos = $pos + 1;
		}
		$formateado = "$ ".strrev($tmp);
		return $formateado;
	}
	
	public function setColumns ($row = null){
	foreach ($row as $key => $value) {
		$this->columns[$key] = $value;
		}
    }

    public function findById($id = null){
	$id = intval($id);
	$this->load->database();
	$this->db->join('modelo', 'modelo.modelo_id = productos.prod_modelo_id');
    $this->db->join('marca', 'marca.marca_id = modelo.modelo_marca_id');
	$res = $this->db->get_where('productos',array('prod_id' =>$id));
	$product = null;
		if ($res->num_rows() == 1) {
			$product = $this->create($res->row_object());
		}
		return $product;
	}

	public function findByCat($id = null){
	$id = intval($id);
    $this->load->database();
    $this->db->join('modelo', 'modelo.modelo_id = productos.prod_modelo_id');
    $this->db->join('marca', 'marca.marca_id = modelo.modelo_marca_id');
	$res = $this->db->get_where('productos',array('prod_cat_id' =>$id));
	$productos =null;
	if ($res->num_rows() > 0) {
		foreach ($res->result() as $value) {
			$productos[] = $this->create($value);
		}
	}
	return $productos;
	}

	public function create($row){
	$prod =  new Product_model();
	$prod->setColumns($row);
	return $prod;
    }

    function eliminar($id)
	{
		$this->db->where('prod_id',$id);
		return $this->db->delete('productos');
	}

}

/* End of file Product_model.php */
/* Location: ./application/models/Product_model.php */