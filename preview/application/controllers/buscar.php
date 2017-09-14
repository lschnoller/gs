<?php
class Buscar extends Controller {

	function Buscar()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function r(){
		$data['title'] = 'BUSCAR';
		$data['image'] = 'mba.jpg';
		$this->load->view('header',$data);
		$this->load->view('search-view');
		$this->load->view('footer');
	}
}

