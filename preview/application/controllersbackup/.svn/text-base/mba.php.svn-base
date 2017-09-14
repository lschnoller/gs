<?php
class Mba extends Controller {

	function Mba()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$hData['title'] = 'MBA';
		$hData['imageCSS'] = 'mba-big';
		$hData['textOnImage'] = '<h1>Método Biodinámica Ayurveda</h1><h2>Técnicas para la Salud y el Rejuvenecimiento</h2>';
		$this->load->view('header',$hData);
		$this->load->view('mba-view');
		$this->load->view('footer');
	}
}

