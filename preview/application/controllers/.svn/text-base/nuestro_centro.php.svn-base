<?php
class Nuestro_centro extends Controller {

	function Nuestro_centro()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$data['title'] = 'NUESTRO CENTRO';
		$data['image'] = 'nuestrocentro.jpg';
		$this->load->view('header',$data);
		$this->load->view('nuestro_centro-view');
		$this->load->view('footer');
	}
}
