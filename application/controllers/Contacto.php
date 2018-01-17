<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

	public function index()
	{
		$this->load->view('contacto');
	}

	public function sendEmail()
	{
		if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
			$para      = 'correo@gmail.com';
			$titulo    = $_POST['subject']."\r\n";
			$mensaje   = $_POST['message']."\r\n"."Nombre: ".$_POST['name']."\r\n"."Correo: ".$_POST['email'];
			$cabeceras = 'From: friometal@friometal.cl';
			mail($para, $titulo, $mensaje, $cabeceras);
			$this->output->set_content_type('application/json');
	        $this->output->set_output(json_encode(array("val" => 1)));
		}else{
			$this->output->set_content_type('application/json');
  		    $this->output->set_output(json_encode(array("val" => 0)));
		}
	}

	public function sendEmailCotizacion()
	{
		if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['detalle']) {
			$para      = 'correo@gmail.com';
			$titulo    = $_POST['subject']."\r\n";
			$mensaje   = $_POST['message']."\r\n"."Nombre: ".$_POST['name']."\r\n"."Correo: ".$_POST['email'];
			$cabeceras = 'From: friometal@friometal.cl';
			mail($para, $titulo, $mensaje, $cabeceras);
			$this->output->set_content_type('application/json');
	        $this->output->set_output(json_encode(array("val" => 1)));
		}else{
			$this->output->set_content_type('application/json');
  		    $this->output->set_output(json_encode(array("val" => 0)));
		}
	}

}

/* End of file contacto.php */
/* Location: ./application/controllers/contacto.php */