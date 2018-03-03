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
			$para      = 'contacto@friometal.cl';
			$titulo    = $_POST['subject']."\r\n";
			$mensaje   = $_POST['message']."\r\n"."Nombre: ".$_POST['name']."\r\n"."Correo: ".$_POST['email'];
			$cabeceras = 'From: '.$_POST['email'];
			mail($para, $titulo, $mensaje, $cabeceras);
			$this->output->set_content_type('application/json');
	        $this->output->set_output(json_encode(array("val" => 1)));
		}else{
			$this->output->set_content_type('application/json');
  		    $this->output->set_output(json_encode(array("val" => 0)));
		}
	}


    function moneda_chilena($numero){
		$numero = (string)$numero;
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

	public function sendEmailCotizacion()
	{
		if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']) && isset($_POST['detalle'])) {

		/*	 [0] => Array
        (
            [id] => 9
            [nom] => Visicooler
            [precio] => 230000
            [precioformated] => $ 230.000
            [cantidad] => 3
        )*/
        $detalle = "";
        $total = 0;

        foreach($_POST['detalle'] as $key => $current) {	
   			  $total += intval($current['precio'])*intval($current['cantidad']); 
	          $detalle .= '<tr>
	                      <td colspan="3">'.$current['id'].'</td>
	                      <td colspan="3">'.$current['nom'].'</td>
	                      <td colspan="3">'.$current['cantidad'].'</td>
	                      <td colspan="3" style="text-align: right;">'.$this->moneda_chilena($current['precio']).'</td>
	                      <td colspan="3">'.$this->moneda_chilena(intval($current['precio'])*intval($current['cantidad'])).'</td>
	                  </tr>';
          }



		$para      = 'contacto@friometal.cl';
		$titulo    = "Envío de cotización de maquinas\r\n";

		// mensaje
		$mensaje = '
		<html>
		<head>
		  <title>Cotización maquinas sitio WEB www.friometal.cl</title>
		</head>
		<body>
		  <p>¡Esta cotización fue realizada a traves de la pagina WEB por el cliente '.$_POST['name'].' !</p>
		  <table  style="text-align: center;">
	          <tr border="1" colspan="6">
	            <td colspan="3"><strong>Id</strong></td>
	            <td colspan="3"><strong>Nombre</strong></td>
	            <td colspan="3"><strong>Cantidad</strong></td>
	            <td colspan="3" style="text-align: right;"><strong>Precio</strong></td>
	            <td colspan="3" style="text-align: right;"><strong>Sub Total</strong></td>
	          </tr>
	           '.$detalle.'
	             <tfoot>
				    <tr >
				      <td style="text-align: right;" colspan="9"><u>Total:</u></td>
				      <td colspan="3" style="text-align: right;">'.$this->moneda_chilena($total).'</td>
				    </tr>
				  </tfoot>
				  <tbody>
	        </table>
		</body>
		</html>
		';

		

		// Para enviar un correo HTML, debe establecerse la cabecera Content-type
		$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
		$cabeceras .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		// Cabeceras adicionales
		$cabeceras .= 'To: '.$_POST['name'].' <'.$_POST['email'].'>'."\r\n";
		$cabeceras .= 'From: '.$_POST['email'].' <'.$_POST['email'].'>' . "\r\n";
		// Enviarlo
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