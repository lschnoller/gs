<?php

class Admin_cursos_cats extends Controller 
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

	function index($orderBy = 'name',$dir='asc'){
		$data['current'] = 'cursos_cats';
		$data['list'] = $this->pcfunc->getMainList('cursos_cats','name,status',$orderBy,$dir);
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/cursos-cats-view';
		$this->load->view('includes/template', $viewData);
	}
	function edit($id=0){
		$data['current'] = 'cursos_cats';
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$data['edit'] = TRUE;
			$data['values'] = $this->pcfunc->getCursosats($id);
		}else{
			$values['name'] = $this->pcfunc->getPostValue('name');
			$values['description'] = $_POST['description'];
			
			$data['message'] = $this->pcfunc->mainIU('cursos_cats',$values,$id);
			$data['list'] = $this->pcfunc->getMainList('cursos_cats','name,status','name');
		}
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/cursos-cats-view';
		$this->load->view('includes/template', $viewData);
	}
	
	function del($id=0){
		return $this->pcfunc->mainDel('cursos_cats',$id,'cursos');
	}
	function status($id=0,$status=0) {
		return $this->pcfunc->changeStatus('cursos_cats',$id,$status,'cursos');
	}
	
}
