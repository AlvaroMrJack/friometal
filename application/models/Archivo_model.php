<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archivo_model extends CI_Model {
private $_name ="";
private $_size =0;
private $_type ="";
private $_tmp  ="";
private $_dinamicpath ="";
protected static $TYPES = array('image/png','image/jpeg','image/jpg');
protected static $SIZE = 200000000;

public function upload(){
$ext = explode("/", $this->_type);
$ext = ".".$ext[1];
$randomName = self::generateRandomString(7);
$name = "img_".$randomName.$ext;
if (move_uploaded_file($this->_tmp, $this->_dinamicpath.$name)) {
    return $name;
	}else{
	    return null;
  }
}

public function  validate(){
return $this->_size<=self::$SIZE
&& in_array($this->_type, self::$TYPES);
}

public static function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function __construct($name = null,$size = null ,$type = null,$tmp=null,$path=null){
	$this->_name = $name;
	$this->_size = $size;
	$this->_type = $type;
	$this->_tmp = $tmp;
    $this->_dinamicpath = $path;
} 

function __get($attr){
    return $this->$attr;
}

function __set($attr,$value){
	$this->$attr = $value;
}
	

}

/* End of file Archivo_model.php */
/* Location: ./application/models/Archivo_model.php */