<?php
class Error extends Controller {

	function Error()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$data['title'] = 'ERROR';
		$data['image'] = 'mba.jpg';
		$this->load->view('header',$data);
		$this->load->view('error-view');
		$this->load->view('footer');
	}
}

