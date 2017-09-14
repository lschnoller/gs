<?php
class Ayurveda extends Controller 
{
	function Ayurveda()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function consulta(){
		$data['title'] = 'CONSULTA AYURVEDICA';
		$data['image'] = 'consulta.jpg';
		$this->load->view('header',$data);
		$this->load->view('consulta-view');
		$this->load->view('footer');
	}
	function tecnicas_de_meditacion(){
		$data['title'] = 'TECNICAS DE MEDITACION';
		$data['image'] = 'meditacion.jpg';
		$this->load->view('header',$data);
		$this->load->view('tecnicas_de_meditacion-view');
		$this->load->view('footer');
	}
	function masaje_ayurvedico(){
		$data['title'] = 'MASAJE AYURVEDICO';
		$data['image'] = 'masaje.jpg';
		$this->load->view('header',$data);
		$this->load->view('masaje_ayurvedico-view');
		$this->load->view('footer');
	}
	function el_camino_del_instructor(){
		$data['title'] = 'EL CAMINO DEL INSTRUCTOR';
		$data['image'] = 'caminoinstructor.jpg';
		$this->load->view('header',$data);
		$this->load->view('el_camino_del_instructor-view');
		$this->load->view('footer');
	}
	function instructorado_ayurveda(){
		$data['title'] = 'INSTRUCTORADO EN PROCEDIMIENTOS AYURVEDICOS';
		$data['image'] = 'instructorado_procedimientos_ayurvedicos.jpg';
		$this->load->view('header',$data);
		$this->load->view('instructorado_ayurveda-view');
		$this->load->view('footer');
	}
	function instructorado_ayurveda_contenidos(){
		$data['title'] = 'INSTRUCTORADO EN PROCEDIMIENTOS AYURVEDICOS - Contenidos';
		$data['image'] = 'instructorado_procedimientos_ayurvedicos.jpg';
		$this->load->view('header',$data);
		$this->load->view('instructorado_ayurveda_contenidos-view');
		$this->load->view('footer');
	}
	function instructorado_meditacion(){
		$data['title'] = 'INSTRUCTORADO EN TECNICAS MEDITATIVAS';
		$data['image'] = 'instructorado-meditacion1.jpg';
		$this->load->view('header',$data);
		$this->load->view('instructorado_meditacion1-view');
		$this->load->view('footer');
	}	
	function instructorado_meditacion_contenidos(){
		$data['title'] = 'INSTRUCTORADO EN TECNICAS MEDITATIVAS - Contenidos';
		$data['image'] = 'instructorado-meditacion1.jpg';
		$this->load->view('header',$data);
		$this->load->view('instructorado_meditacion_contenidos-view');
		$this->load->view('footer');
	}
	
}

?>