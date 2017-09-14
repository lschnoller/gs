<?php
class Mba extends Controller {

	function Mba()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$data['title'] = 'MBA';
		$data['image'] = 'mba.jpg';
		$this->load->view('header',$data);
		$this->load->view('mba-view');
		$this->load->view('footer');
	}
	function test(){
		$this->load->view('test');
	}
}

