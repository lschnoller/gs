<?php

class Admin_testimonios extends Controller 
{
	function __construct()
	{
		parent::Controller();
		$this->load->library('session');
		$this->load->helper('url');
		$this->is_logged_in();
		$this->load->helper('msg');
		$this->load->helper('form');
		$this->load->model('pcfunc');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}	
	function is_logged_in(){
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect(base_url());
			die();		
		}		
	}	

	function index($orderBy = 'author',$dir='asc'){
		$data['current'] = 'testimonios';
		$data['list'] = $this->pcfunc->getMainList('testimonios','author,status',$orderBy,$dir);
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/testimonios-view';
		$this->load->view('includes/template', $viewData);
	}
	function edit($id=0){
		$data['current'] = 'testimonios';
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('quote_text', 'Quote Text', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$data['edit'] = TRUE;
			$data['values'] = $this->pcfunc->getTestimonios($id);
		}else{
			$values['author'] = $this->pcfunc->getPostValue('author');
			$values['quote_text'] = $_POST['quote_text'];
			
			$data['message'] = $this->pcfunc->mainIU('testimonios',$values,$id);
			$data['list'] = $this->pcfunc->getMainList('testimonios','author,status','author');
		}
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/testimonios-view';
		$this->load->view('includes/template', $viewData);
	}
	
	function del($id=0){
		return $this->pcfunc->mainDel('testimonios',$id);
	}
	function status($id=0,$status=0) {
		return $this->pcfunc->changeStatus('testimonios',$id,$status);
	}
	
}
