<?php

class Admin_referencias extends Controller 
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

	function index($orderBy = 'company_name',$dir='asc'){
		$data['current'] = 'referencias';
		$data['list'] = $this->pcfunc->getMainList('referencias','company_name,status',$orderBy,$dir);
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/referencias-view';
		$this->load->view('includes/template', $viewData);
	}
	function edit($id=0){
		$data['current'] = 'referencias';
		$this->form_validation->set_rules('company_name', 'Company Name', 'required');
		$this->form_validation->set_rules('company_info', 'Company Info', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required|prep_url');
		
		$config['upload_path'] = './images/referencias/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size']	= '5000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$uploaded = FALSE;
		if($this->upload->do_upload('image_url'))
			$uploaded = TRUE;
			
		if ($this->form_validation->run() == FALSE){
			$data['edit'] = TRUE;
			$data['values'] = $this->pcfunc->getReferencias($id);
		}else{
			if ($uploaded) {
				$file = $this->upload->data();
				$values['image_url'] = $file['file_name'];
			}
			$values['company_name'] = $this->pcfunc->getPostValue('company_name');
			$values['company_info'] = $_POST['company_info'];
			$values['url'] = $this->pcfunc->getPostValue('url');
			
			$data['message'] = $this->pcfunc->mainIU('referencias',$values,$id);
			$data['list'] = $this->pcfunc->getMainList('referencias','company_name,status','company_name');
		}
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/referencias-view';
		$this->load->view('includes/template', $viewData);
	}
	
	function del($id=0){
		return $this->pcfunc->mainDel('referencias',$id);
	}
	function status($id=0,$status=0) {
		return $this->pcfunc->changeStatus('referencias',$id,$status);
	}
	
}
