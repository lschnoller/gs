<?php
class Servicios extends Controller {

	function Servicios()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('frontend');
	}
	
	function cursos(){
		$data['title'] = 'CURSOS';
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('cursos-view');
		$this->load->view('footer');
	}
	function curso_meditacion(){
		$data['title'] = 'TECNICAS DE MEDITACION';
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getCursosList(1);
		$this->load->view('curso_meditacion-view',$data);
		$this->load->view('footer');
	}
	function curso_masaje_ayurvedico(){
		$data['title'] = 'MASAJE AYURVEDICO';
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getCursosList(2);
		$this->load->view('curso_masaje_ayurvedico-view',$data);
		$this->load->view('footer');
	}	
	function counseling(){
		$hData['title'] = 'COUNSELING';
		$hData['image'] = 'counseling.jpg';
		$this->load->view('header',$hData);
		$this->load->view('counseling-view');
		$this->load->view('footer');
	}
	function seminarios(){
		$hData['title'] = 'SEMINARIOS';
		$hData['image'] = 'charlas_y_talleres.jpg';
		//$hData['image'] = 'seminarios_emociones.jpg';
		$this->load->view('header',$hData);
		$this->load->view('seminarios-view');
		$this->load->view('footer');
	}
	function seminarios_vitalidad(){
		$hData['title'] = 'VITALIDAD';
		$hData['image'] = 'charlas_y_talleres.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(1);
		$this->load->view('seminarios_vitalidad-view',$data);
		$this->load->view('footer');
	}
	function seminarios_emociones(){
		$hData['title'] = 'EMOCIONES';
		$hData['image'] = 'charlas_y_talleres.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(2);
		$this->load->view('seminarios_emociones-view',$data);
		$this->load->view('footer');
	}
	function seminarios_espiritualidad(){
		$hData['title'] = 'ESPIRITUALIDAD';
		$hData['image'] = 'charlas_y_talleres.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(3);
		$this->load->view('seminarios_espiritualidad-view',$data);
		$this->load->view('footer');
	}
	function tratamientos(){
		$hData['title'] = 'TRATAMIENTOS - Masaje Ayurvedico | Aromaterapia | Piedras Calientes | Lifting Facial | Mascara ';
		$hData['image'] = 'tratamientos.jpg';
		$this->load->view('header',$hData);
		$this->load->view('tratamientos-view');
		$this->load->view('footer');
	}
	function cosmetica_y_tratamientos(){
		$hData['title'] = 'COSMETICA Y TRATAMIENTOS';
		$hData['image'] = 'cosmetica2.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_y_tratamientos-view');
		$this->load->view('footer');
	}
	function cosmetica_ayurvedica(){
		$hData['title'] = 'COSMETICA AYURVEDICA';
		$hData['image'] = 'cosmetica-rasayana1.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_ayurvedica-view');
		$this->load->view('footer');
	}
	function cosmetica_biomarine(){
		$hData['title'] = 'COSMETICA DE TRATAMIENTO';
		$hData['image'] = 'cosmetica-rasayana1.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_biomarine-view');
		$this->load->view('footer');
	}
	function test(){
		$hData['title'] = 'VITALIDAD';
		$hData['image'] = 'charlas_y_talleres.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(1);
		$this->load->view('test-view',$data);
		$this->load->view('footer');
	}
	function counseling_form(){	
		$this->load->view('counseling_form-view');
	}
	function form() 
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nombre', 'required');
		$this->form_validation->set_rules('lastname', 'Apellido', 'required');
		$this->form_validation->set_rules('phone', 'Tel&eacute;fono', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run() == FALSE)
		{
			echo validation_errors();
		}
		else
		{
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$message = "<html><body>		   		
						  <table>
						    <tr><th>Nombre</th><td>$name</td></tr>
						    <tr><th>Apellido</th><td>$lastname</td></tr>
						    <tr><th>Telefono</th><td>$phone</td></tr>
						    <tr><th>Email</th><td>$email</td></tr>
						  </table>
						</body></html>
						";
			$to = 'muminatwork@gmail.com,lschnoller@yahoo.com,mumin@dugun.com';
			$subject = 'New Counseling Message';
    		$headers = "Content-type:text/html;charset=utf-8" . "\r\n";		
		 	$headers .= 'From: biodinamica-ayurveda.com <info@biodinamica-ayurveda.com>' . "\r\n";
		 	$headers .= 'Cc: info@biodinamica-ayurveda.com' . "";
			if(mail($to, $subject, $message, $headers))
				echo 'done';
			else 	
				echo 'Unable to send the message!';
		}
	}
	
	function emailtest() 
	{
		
			$message = "<html><body>		   		
						  <table>
						    <tr><th>Nombre</th><td>a</td></tr>
						    <tr><th>Apellido</th><td>b</td></tr>
						    <tr><th>Tel&eacute;fono</th><td>c</td></tr>
						    <tr><th>Email</th><td>d</td></tr>
						  </table>
						</body></html>
						";
			$to = 'muminatwork@gmail.com,lschnoller@yahoo.com';
			$subject = 'New Counseling Message';
    		$headers = "Content-type:text/html;charset=utf-8" . "\r\n";		
		 	$headers .= 'From: biodinamica-ayurveda.com <info@biodinamica-ayurveda.com>' . "\r\n";
		 	$headers .= 'Cc: info@biodinamica-ayurveda.com' . "";
			mail($to, $subject, $message, $headers);
			echo 'Thank you for contacting us!';
	}
	
}
?>
