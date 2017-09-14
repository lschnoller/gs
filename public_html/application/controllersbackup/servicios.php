<?php
class Servicios extends Controller {

	function Servicios()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function cursos(){
		$hData['title'] = 'Cursos';
		$hData['imageCSS'] = 'cursos-big';
		$hData['textOnImage'] = '<h1>Cursos</h1><h2>BIODINÁMICA AYURVEDA</h2>';
		$this->load->view('header',$hData);
		$this->load->view('cursos-view');
		$this->load->view('footer');
	}
	function cursos_masaje(){
		$hData['title'] = 'Cursos Masaje';
		$hData['imageCSS'] = 'cursos-big';
		$hData['textOnImage'] = '<h1>Cursos</h1><h2>BIODINÁMICA AYURVEDA</h2>';
		$this->load->view('header',$hData);
		$this->load->view('cursos-masaje-view');
		$this->load->view('footer');
	}
	function counceling(){
		$hData['title'] = 'Counceling';
		$hData['imageCSS'] = 'counceling-big';
		$hData['textOnImage'] = '<h1>Counseling</h1>
								<p>El Counseling es un espacio destinado a las consultas sobre temas<br>vitales, centrado en la comprensión de nuestros procesos internos,<br> hábitos cotidianos y en la revisión de nuestras relaciones<br> interpersonales.</p>
								<p>En el Centro Graciela Schnoller ayudamos a los consultantes a encontrar<br> el camino personal, para que puedan vivir una vida más plena y transformar<br> los obstáculos en desafíos que favorezcan su crecimiento.</p>
		';
		$this->load->view('header',$hData);
		$this->load->view('counceling-view');
		$this->load->view('footer');
	}
	function seminarios(){
		$hData['title'] = 'Seminarios';
		$hData['imageCSS'] = 'seminarios-big';
		$hData['textOnImage'] = '<h1>Seminarios</h1><h2>Talleres Temáticos</h2>';
		$this->load->view('header',$hData);
		$this->load->view('seminarios-view');
		$this->load->view('footer');
	}
	function seminarios2(){
		$hData['title'] = 'Seminarios';
		$hData['imageCSS'] = 'seminarios-big';
		$hData['textOnImage'] = '<h1>Seminarios</h1><h2>Talleres Temáticos</h2>';
		$this->load->view('header',$hData);
		$this->load->view('seminarios2-view');
		$this->load->view('footer');
	}
	function seminarios3(){
		$hData['title'] = 'Seminarios';
		$hData['imageCSS'] = 'seminarios-big';
		$hData['textOnImage'] = '<h1>Seminarios</h1><h2>Talleres Temáticos</h2>';
		$this->load->view('header',$hData);
		$this->load->view('seminarios3-view');
		$this->load->view('footer');
	}
	
}

