<?php
class Main_page extends Controller {

	function Main_page()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('admin_functions');
		$this->load->library('cart');
	}
	
	function index(){
		$admin = $this->admin_functions->isAdminLoggedIn();
		if ($admin)
			echo 'admin is logged in';
		else
			echo 'admin is not logged in';
		
		$data['title'] = 'Un espacio para el bienestar, la salud y la belleza duradera.';
		$this->load->view('home',$data);
		
		$this->cart->insert($data);
	}
}


