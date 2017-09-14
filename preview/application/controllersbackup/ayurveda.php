<?php
class Ayurveda extends Controller {

	function Ayurveda()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function meditacion(){
		$hData['title'] = 'Técnicas de Meditación';
		$hData['imageCSS'] = 'meditacion-big';
		$hData['textOnImage'] = '<h1>Técnicas de Meditación</h1><p>“La Meditación es un arte espiritual,<br>
  								es convertirse en observador,<br>
 								es aprender a presenciar”</p><h2>Osho</h2>';
		$this->load->view('header',$hData);
		$this->load->view('meditacion-view');
		$this->load->view('footer');
	}
	
	function instructorado(){
		$hData['title'] = 'El camino del instructor';
		$hData['imageCSS'] = 'instructorado-big';
		$hData['textOnImage'] = '<h1>El camino del instructor</h1><p>La Formación MBA está centrada en el trabajo sobre sí<br> mismo y en el aprendizaje de técnicas para<br>restablecer el equilibrio físico, emocional y energético<br>del individuo. </p>';
		$this->load->view('header',$hData);
		$this->load->view('instructorado-view');
		$this->load->view('footer');
	}
	function masaje_instructorado(){
		$hData['title'] = 'Masaje Instructorado';
		$hData['imageCSS'] = 'masaje_instructorado-big';
		$hData['textOnImage'] = '<h1>Masaje <span style="font-size:15px;">Instructorado en</span></h1><h2>PROCEDIMIENTOS AYURVÉDICOS</h2>';
		$this->load->view('header',$hData);
		$this->load->view('masaje_instructorado-view');
		$this->load->view('footer');
	}
	function meditacion_instructorado(){
		$hData['title'] = 'Masaje Instructorado';
		$hData['imageCSS'] = 'meditacion-instructorado-big';
		$hData['textOnImage'] = '<h1>Instructorado en </h1><h2>Técnicas Meditativas</h2>';
		$this->load->view('header',$hData);
		$this->load->view('meditacion-instructorado-view');
		$this->load->view('footer');
	}
	function masaje(){
		$hData['title'] = 'Masaje';
		$hData['imageCSS'] = 'masaje-big';
		$hData['textOnImage'] = '<h1>Masaje Ayurvédico</h1><p>“El masaje es un instante de encuentro con nuestra intimidad,   con nuestra historia actualizada en el cuerpo presente.</p><p>Mirta Casado</p>';
		$this->load->view('header',$hData);
		$this->load->view('masaje-view');
		$this->load->view('footer');
	}
	
	function counceling(){
		$hData['title'] = 'Counceling';
		$hData['imageCSS'] = 'counceling-big-ayurveda';
		$hData['textOnImage'] = '<h1>Counseling</h1>
								<p>El Counseling es un espacio destinado a las consultas sobre temas<br>vitales, centrado en la comprensión de nuestros procesos internos,<br> hábitos cotidianos y en la revisión de nuestras relaciones<br> interpersonales.</p>
								<p>En el Centro Graciela Schnoller ayudamos a los consultantes a encontrar<br> el camino personal, para que puedan vivir una vida más plena y transformar<br> los obstáculos en desafíos que favorezcan su crecimiento.</p>
		';
		$this->load->view('header',$hData);
		$this->load->view('counceling-ayurveda-view');
		$this->load->view('footer');
	}
	
}

