<?php

class Admin_seminarios extends Controller 
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

	function index($orderBy = 'title',$dir='asc',$cat=0){
		$data['current'] = 'seminarios';
		if($cat>0)
			$data['list'] = $this->pcfunc->getMainList('seminarios','title,seminarios_cats_id,date_text,status',$orderBy,$dir,'where seminarios_cats_id='.$cat);
		else
			$data['list'] = $this->pcfunc->getMainList('seminarios','title,seminarios_cats_id,date_text,status',$orderBy,$dir);
		$data['seccat'] = $cat;
		
		$data['cats'] = $this->pcfunc->getMainList('seminarios_cats','name','name','asc','',TRUE);
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/seminarios-view';
		$this->load->view('includes/template', $viewData);
	}
	function edit($id=0){
		$data['current'] = 'seminarios';
		$data['seccat'] = 0;
		$data['cats'] = $this->pcfunc->getMainList('seminarios_cats','name','name','asc','',TRUE);
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('seminarios_cats_id', 'seminarios Category', 'required|is_natural_no_zero');
		$this->form_validation->set_rules('subtitle', 'Subtitle', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('date_text', 'Date Text', 'required');
		
		if ($this->form_validation->run() == FALSE){
			$data['edit'] = TRUE;
			$data['values'] = $this->pcfunc->getSeminarios($id);
		}else{
			$values['title'] = $this->pcfunc->getPostValue('title');
			$values['seminarios_cats_id'] = $this->pcfunc->getPostValue('seminarios_cats_id');
			$values['subtitle'] = $this->pcfunc->getPostValue('subtitle');
			$values['description'] = $_POST['description'];
			$values['date_text'] = $this->pcfunc->getPostValue('date_text');
			
			$data['message'] = $this->pcfunc->mainIU('seminarios',$values,$id);
			$data['list'] = $this->pcfunc->getMainList('seminarios','title,seminarios_cats_id,date_text,status','title');
		}
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/seminarios-view';
		$this->load->view('includes/template', $viewData);
	}
	
	function del($id=0){
		return $this->pcfunc->mainDel('seminarios',$id);
	}
	function status($id=0,$status=0) {
		return $this->pcfunc->changeStatus('seminarios',$id,$status);
	}
	
}
