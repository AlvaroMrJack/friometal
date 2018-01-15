<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backoffice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout->setLayout('masterpage',false);
		if ($this->session->userdata('usuario')) {
		}else{
			redirect('/index.php/login','refresh');
		}
	}

	public function index()
	{
		$this->load->view('inicio');	
	}

}

/* End of file backoffice.php */
/* Location: ./application/controllers/backoffice.php */