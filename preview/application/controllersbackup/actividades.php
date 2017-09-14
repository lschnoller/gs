<?php
class Actividades extends Controller {

	function Actividades()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function cursos_a_distancia(){
		$hData['title'] = 'Cursos';
		$hData['imageCSS'] = 'cursos-a-distancia-big';
		$hData['textOnImage'] = '<h1>Formación a Distancia</h1><p>Nuestro propósito educativo es promover el Método <br>Biodinámica Ayurveda a través de comunidades de <br>aprendizaje on line. </p>';
		$this->load->view('header',$hData);
		$this->load->view('cursos-a-distancia-view');
		$this->load->view('footer');
	}
	
	function charlas_talleres() {
		$hData['title'] = 'Charlas y Talleres';
		$hData['imageCSS'] = 'charlas-talleres-big';
		$hData['textOnImage'] = '<h1>Charlas y Talleres</h1><h2>Actividades complementarias</h2>';
		$this->load->view('header',$hData);
		$this->load->view('charlas-talleres-big-view');
		$this->load->view('footer');
	}
	
	function calendario() {
		$hData['title'] = 'Calendario';
		$hData['imageCSS'] = 'calendario-big';
		$hData['textOnImage'] = '<h1>Calendario</h1><h2>Principales ectividades anunciadas</h2>';
		$this->load->view('header',$hData);
		$this->load->view('calendario-view');
		$this->load->view('footer');
	}
	
}