<?php
class Main_page extends Controller {

	function Main_page()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$hData['title'] = 'Un espacio para el bienestar, la salud y la belleza duradera.';
		$this->load->view('home-header',$hData);
		$this->load->view('home');
		$this->load->view('footer');
	}
}

