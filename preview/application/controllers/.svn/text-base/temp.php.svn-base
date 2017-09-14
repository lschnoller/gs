<?php
class Temp extends Controller {

	function Temp()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$hData['title'] = 'TEMP TITLE';
		$hData['imageCSS'] = 'mba-big';
		$hData['textOnImage'] = '<h1>Método Biodinámica Ayurveda</h1><h2>Técnicas para la Salud y el Rejuvenecimiento</h2>';
		$this->load->view('header',$hData);
		$this->load->view('temp-view');
		$this->load->view('footer');
	}
}

