<?php
class Contactenos extends Controller {

	function Contactenos()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('asunto', 'Asunto', 'required');
		$this->form_validation->set_rules('mensaje', 'Mensaje', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		
		$data['title'] = 'CONTACTENOS';
		$data['image'] = 'contactenos2.jpg';
		$this->load->view('header',$data);		
		if ($this->form_validation->run() == FALSE)
		{
			$data['send'] = FALSE;
			$this->load->view('contactenos-view',$data);
		}
		else
		{
			$nombre = $_POST['nombre'];
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];
			$email = $_POST['email'];
			
			$headers = "MIME-Version: 1.0\n";
		   $headers .= "Content-type:text/html; charset=\"iso-8859-1\"\n";		
		   $headers .= "From: Administrador biodinamica-ayurveda.com <admin@biodinamica-ayurveda.com>\n";
			$headers .= "Bcc: lschnoller@yahoo.com\n";
			
			$to = "info@biodinamica-ayurveda.com";		
			$subject = "Nuevo contacto de biodinamica-ayurveda.com";
			$message = "<html>
			<head>
			</head>
			<body>
			  <table>
			  	<tr>
			      <th>Nombre :</th><td>$nombre</td>
			     </tr>
			     <tr>
			      <th>Asunto :</th><td>$asunto</td>
			     </tr>
			     <tr>
			      <th>Email :</th><td>$email</td>
			     </tr>
			     <tr>
			      <th>Mensaje :</th><td>$mensaje</td>
			    </tr>
			   
			  </table>
			</body>
			</html>";		
			// Mail it
			if(mail($to, $subject, $message, $headers))
				$data['send'] = TRUE;
			else
				$data['send'] = FALSE;
			
			$headers = "MIME-Version: 1.0\n";
		   $headers .= "Content-type:text/html;charset=iso-8859-1\n";		
		   $headers .= "From: Centro Graciela Schnöller <info@biodinamica-ayurveda.com>\n";
			$headers .= "Bcc: lschnoller@yahoo.com\n";
			
			$message2 = "
				<html>
				<head>
				</head>
				<body>
				  <table>
					<tr>
						<td>Hola $nombre,</td>
					  </tr>
					  <tr>
						<td>Gracias por ponerte en contacto con nosotros. Muy pronto te estaremos enviando una respuesta. 
						<br /><br />Mientras tanto te recomendamos seguir navegando nuestra web: <a href=\"".base_url()."\">www.biodinamica-ayurveda.com</a>
						<br /><br />Saludos!
						<br /><br />Centro Graciela Schnöller
						<br />Paraguay 3474 PB. Capital Federal
						<br />TE:011.4821-6721
						<br /><a href=\"mailto:info@biodinamica-ayurveda.com\">info@biodinamica-ayurveda.com</a>
						<br /><a href=\"http://www.biodinamica-ayurveda.com/\">www.biodinamica-ayurveda.com</a>						
						</td>
					  </tr>
				  </table>
				</body>
				</html>
				";
			
			mail($email, 'Gracias por contactarnos!', $message2, $headers);
		
			//$data['send'] = TRUE;
			$this->load->view('contactenos-view',$data);
		}
		$this->load->view('footer');
	}
}

?>
