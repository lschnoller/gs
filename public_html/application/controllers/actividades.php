<?php
class Actividades extends Controller {

	function Actividades()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('pcfunc');
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
	function calendario()
	{
		$timeid = $this->uri->segment(3);
		if($timeid==0)
			$time = time();
		else
			$time = $timeid;
		
		$data = $this->_date($time);
		$this->load->vars($data);
		$data['cal'] = $data;
		
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
	
	function _date($time){
	 	
	 	$m[1] = 'Jan';
	 	$m[2] = 'Feb';
	 	$m[3] = 'March';
	 	$m[4] = 'April';
	 	$m[5] = 'May';
	 	$m[6] = 'June';
	 	$m[7] = 'July';
	 	$m[8] = 'Agu';
	 	$m[9] = 'Sep';
	 	$m[10] = 'Oct';
	 	$m[11] = 'Nov';
	 	$m[12] = 'Dec';
	 	
		$data['events']= $this->frontend->getCalCalendar($time);
	
		$today = date("Y/n/j", time());
		$data['today']= $today;
		
		$current_month = date("n", $time);
		$data['current_month'] = $current_month;
		
		$current_year = date("Y", $time);
		$data['current_year'] = $current_year;
		$monthNumber = date("n", $time);
		$current_month_text = $m[$monthNumber].' '.date("Y", $time);
		$data['current_month_text'] = $current_month_text;
		
		$total_days_of_current_month = date("t", $time);
		$data['total_days_of_current_month']= $total_days_of_current_month;
		
		$first_day_of_month = mktime(0,0,0,$current_month,1,$current_year);
		$data['first_day_of_month'] = $first_day_of_month;
		
		//geting Numeric representation of the day of the week for first day of the month. 0 (for Sunday) through 6 (for Saturday).
		$first_w_of_month = date("w", $first_day_of_month);
		$data['first_w_of_month'] = $first_w_of_month;
		
		//how many rows will be in the calendar to show the dates
		$total_rows = ceil(($total_days_of_current_month + $first_w_of_month)/7);
		$data['total_rows']= $total_rows;
		
		//trick to show empty cell in the first row if the month doesn't start from Sunday
		$day = -$first_w_of_month;
		$data['day']= $day;
		
		$next_month = mktime(0,0,0,$current_month+1,1,$current_year);
		$data['next_month']= $next_month;
		
		$next_month_text = date("F \'y", $next_month);
		$data['next_month_text']= $next_month_text;
		
		$previous_month = mktime(0,0,0,$current_month-1,1,$current_year);
		$data['previous_month']= $previous_month;
		
		$previous_month_text = date("F \'y", $previous_month);
		$data['previous_month_text']= $previous_month_text;
		
		$next_year = mktime(0,0,0,$current_month,1,$current_year+1);
		$data['next_year']= $next_year;
		
		$next_year_text = date("F \'y", $next_year);
		$data['next_year_text']= $next_year_text;
		
		$previous_year = mktime(0,0,0,$current_month,1,$current_year-1);
		$data['previous_year']=$previous_year;
		
		$previous_year_text = date("F \'y", $previous_year);
		$data['previous_year_text']= $previous_year_text;
		
		return $data;
	  
	 }
	 
	 function getevent($type,$id)
	 {
	 	$data['values'] = $this->pcfunc->getCalendario($id);
	 	$this->load->view('calendar-popup-view',$data);
	 }
	
}