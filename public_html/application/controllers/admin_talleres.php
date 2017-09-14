<?php

class Admin_talleres extends Controller 
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

	function index($orderBy = 'title',$dir='asc'){
		$data['current'] = 'talleres';
		$data['list'] = $this->pcfunc->getMainList('talleres','title,course_date,status',$orderBy,$dir);
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/talleres-view';
		$this->load->view('includes/template', $viewData);
	}
	function edit($id=0){
		$data['current'] = 'talleres';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
		$this->form_validation->set_rules('course_date', 'Event Date', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('date_text', 'Date Text', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$data['edit'] = TRUE;
			$data['values'] = $this->pcfunc->getTalleres($id);
		}else{
			$values['title'] = $this->pcfunc->getPostValue('title');
			$values['subtitle'] = $this->pcfunc->getPostValue('subtitle');
			$values['course_date'] = $this->pcfunc->getPostValue('course_date');
			$values['description'] = $_POST['description'];
			$values['date_text'] = $this->pcfunc->getPostValue('date_text');
			
			$data['message'] = $this->pcfunc->mainIU('talleres',$values,$id);
			$data['list'] = $this->pcfunc->getMainList('talleres','title,course_date,status','title');
		}
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/talleres-view';
		$this->load->view('includes/template', $viewData);
	}
	
	function del($id=0){
		return $this->pcfunc->mainDel('talleres',$id);
	}
	function status($id=0,$status=0) {
		return $this->pcfunc->changeStatus('talleres',$id,$status);
	}
	
}
