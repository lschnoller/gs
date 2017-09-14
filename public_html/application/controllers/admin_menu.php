<?php

class Admin_menu extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('msg');
		$this->load->helper('form');
		$this->is_logged_in();
	}	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect(base_url());
			die();		
		}		
	}	

	function index(){
		$data['main_content'] = 'menu-view';
		$vars = TRUE;
		$data['data'] = $vars;
		$this->load->view('includes/template', $data);
	}
}
