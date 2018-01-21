<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		if (!isset($_SESSION['intentos'])) {
		$_SESSION['intentos'] = 0;
		}
		
		$data['errores'] = '';
		$name = $this->input->post('usuario');
		$password = $this->input->post('password');
		if ($name != '' and $password != '') {	


		
		if ($_SESSION['intentos'] < 3) {

		 $this->load->model('Usuario_model','user',false);
		$usuario = $this->user->findByName($name);
		if ($usuario != null) {
		   if ($usuario->get('usu_password') == $password) {
		   	//AQUI TENGO QUE SUBIR EL USUARIO A LA SESION
		   	$this->session->set_userdata('usuario',$name);
		   	redirect('adm_inicio','refresh');
		   }else{
		   	$_SESSION['intentos'] += 1;
		   	$data['errores'] = "La clave no es correcta";
		    $this->load->view('administracion/login', $data, FALSE);
	     }
		}else{
		$_SESSION['intentos'] += 1;
		$data['errores'] = "El usuario no existe";
		$this->load->view('administracion/login', $data, FALSE);
		}
		}else{
		$data['errores'] = "Lo sentimos ya intentaste mas de tres veces, prueba mas tarde";
		$this->load->view('administracion/login', $data, FALSE);
		}
		

		}else{
		$this->load->view('administracion/login', '$data', FALSE);
		}

	
	}

	public function salir(){
    $this->session->sess_destroy();
    redirect('login','refresh');
    }

}