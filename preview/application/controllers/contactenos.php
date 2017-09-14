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
		
		$data['title'] = 'Contactenos';
		$data['image'] = 'contactenos.jpg';
		$this->load->view('header',$data);		
		if ($this->form_validation->run() == FALSE){
			$data['send'] = FALSE;
			$this->load->view('contactenos-view',$data);
		}else{
			$nombre = $_POST['nombre'];
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];
			$email = $_POST['email'];
			
			//$to = 'info@biodinamica-ayurveda.com';
			$to = 'muminatwork@gmail.com';		
			$subject = 'biodinamica ayurveda';
			
			// message
			$message = '
			<html>
			<head>
			</head>
			<body>
			  <p>Contact form submitted.</p>
			  <table>
			  	<tr>
			      <th>Nombre :</th><td>'.$nombre.'</td>
			     </tr>
			     <tr>
			      <th>Asunto :</th><td>'.$asunto.'</td>
			     </tr>
			     <tr>
			      <th>Email :</th><td>'.$email.'</td>
			     </tr>
			     <tr>
			      <th>Mensaje :</th><td>'.$mensaje.'</td>
			    </tr>
			   
			  </table>
			</body>
			</html>
			';
	 		
	    	$headers  = 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-9' . "\n";
			$headers .= 'From: biodinamica-ayurveda.com <info@biodinamica-ayurveda.com>' ;
			
			// Mail it
			if(mail($to, $subject, $message, $headers)){
				$data['send'] = TRUE;
			}else{
				$data['send'] = FALSE;
			}
			
			$message2 = '
				<html>
			<head>
			</head>
			<body>
			  <table>
			  	<tr>
			      <td><b>'.$nombre.'</b>,</td>
			     </tr>
			     <tr>
			      <td>
Muchas gracias por ponerse en contacto con nosotros. A la brevedad nuestro equipo se comunicara con Ud.
<br><br>
Mientras tanto le recomendamos seguir navegando nuestra web: <a href="http://biodinamica-ayurveda.com/">www.biodinamica-ayurveda.com</a>
<br><br>
Muchas Gracias,<br>
Saludos Cordiales<br>
<br><br>
Graciela Schnoller<br>
Directora<br>
TE:011.4822-3498</td>
			     </tr>
			  </table>
			</body>
			</html>
			';
			mail($email, $subject, $message2, $headers);
		
			//$data['send'] = TRUE;
			$this->load->view('contactenos-view',$data);
		}
		$this->load->view('footer');
	}
}

