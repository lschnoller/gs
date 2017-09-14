<?php
class Actividades extends Controller {

	function Actividades()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('frontend');
	}
	
	function formacion_a_distancia(){
		$data['title'] = 'FORMACIÓN A DISTANCIA';
		$data['image'] = 'distancia1.jpg';
		$this->load->view('header',$data);
		$this->load->view('formacion_a_distancia-view');
		$this->load->view('footer');
	}
	function formacion_a_distancia_inscripcion(){
		$data['title'] = 'FORMACIÓN A DISTANCIA';
		$data['image'] = 'distancia2.jpg';
		$this->load->view('header',$data);
		
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nombre', 'Nombre', 'required');
		$this->form_validation->set_rules('apellido', 'Apellido', 'required');
		$this->form_validation->set_rules('fecha', 'Fecha de nacimiento', 'required');
		$this->form_validation->set_rules('acupa', 'Ocupación', 'required');
		$this->form_validation->set_rules('direc', 'Dirección', 'required');
		$this->form_validation->set_rules('tel', 'Teléfono', 'required');
		$this->form_validation->set_rules('curso', 'Curso que quieres realizar', 'required');
		$this->form_validation->set_rules('paypal', 'Modalidad de pago: (deposito bancario o PayPal)', 'required');
		$this->form_validation->set_rules('desci', 'Describe que te motivó a realizar este curso', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE){
			$data['send'] = FALSE;
			$this->load->view('formacion_a_distancia_inscripcion-view',$data);
		}else{
			$nombre = mysql_real_escape_string($_POST['nombre']);
			$apellido = mysql_real_escape_string($_POST['apellido']);
			$fecha = mysql_real_escape_string($_POST['fecha']);
			$acupa = mysql_real_escape_string($_POST['acupa']);
			$direc = mysql_real_escape_string($_POST['direc']);
			$tel = mysql_real_escape_string($_POST['tel']);
			$curso = mysql_real_escape_string($_POST['curso']);
			$paypal = mysql_real_escape_string($_POST['paypal']);
			$desci = mysql_real_escape_string($_POST['desci']);
			$email = mysql_real_escape_string($_POST['email']);
			
			$to = 'info@biodinamica-ayurveda.com';		
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
			      <th>Apellido :</th><td>'.$apellido.'</td>
			     </tr>
			     <tr>
			      <th>Email :</th><td>'.$email.'</td>
			     </tr>
			     <tr>
			      <th>Fecha de nacimiento :</th><td>'.$fecha.'</td>
			    </tr>
			    <tr>
			      <th>Ocupación :</th><td>'.$acupa.'</td>
			    </tr>
			    <tr>
			      <th>Dirección :</th><td>'.$direc.'</td>
			    </tr>
			    <tr>
			      <th>Teléfono :</th><td>'.$tel.'</td>
			    </tr>
			    <tr>
			      <th>Curso que quieres realizar :</th><td>'.$curso.'</td>
			    </tr>
			    <tr>
			      <th>Modalidad de pago: (deposito bancario o PayPal) :</th><td>'.$paypal.'</td>
			    </tr>
			    <tr>
			      <th>Describe que te motivó a realizar este curs :</th><td>'.$desci.'</td>
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
			$this->load->view('formacion_a_distancia_inscripcion-view',$data);
		}
		
		$this->load->view('footer');
	}
	function calendario(){
		$data['title'] = 'CALENDARIO DE ACTIVIDADES';
		$data['image'] = 'calendario2.jpg';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getCalendar();
		$this->load->view('calendario-view',$data);
		$this->load->view('footer');
	}
	function enlaces_relacionados(){
		$data['title'] = 'ENLACES RELACIONADOS';
		$data['image'] = 'enlaces.jpg';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getRef();
		$this->load->view('enlaces_relacionados-view',$data);
		$this->load->view('footer');
	}
	
	function charlas_y_talleres(){
		$data['title'] = 'ENLACES RELACIONADOS';
		$data['image'] = 'charlas_y_talleres.png';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getTallers();
		$this->load->view('charlas_y_talleres-view',$data);
		$this->load->view('footer');
	}
	
}