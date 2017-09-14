<?php

class Admin_newslettersub extends Controller 
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

	function index($main=0,$orderBy = 'title',$dir='asc'){
		$data['current'] = 'newsletter';
		$data['mainId'] = $main;
		$data['list'] = $this->pcfunc->getMainList('newslettersub','title',$orderBy,$dir,'where newsletter_id ='.$main);
		$data['main'] = $this->pcfunc->getNewsletter($main);
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/newslettersub-view';
		$this->load->view('includes/template', $viewData);
	}
	function edit($id=0,$mainId=0){
		$data['current'] = 'newsletter';
		if($mainId==0)
			$mainId = $this->pcfunc->getNewsletterMain($id);
		$data['mainId'] = $mainId;
		$data['main'] = $this->pcfunc->getNewsletter($mainId);
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('desci', 'Description', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required|prep_url');
		
		$config['upload_path'] = './images/newsletter/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size']	= '5000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$uploaded = FALSE;
		if($this->upload->do_upload('image_url'))
			$uploaded = TRUE;
		elseif($id == 0)
			$this->form_validation->set_rules('image', 'Image', 'trim|required');
			
		if ($this->form_validation->run() == FALSE){
			$data['edit'] = TRUE;
			$data['values'] = $this->pcfunc->getNewsletterSub($id);
		}else{
			if ($uploaded) {
				$file = $this->upload->data();
				$values['image_url'] = $file['file_name'];
			}
			$values['newsletter_id '] = $mainId;
			$values['title'] = $this->pcfunc->getPostValue('title');
			$values['desci'] = $_POST['desci'];
			$values['url'] = $this->pcfunc->getPostValue('url');
			
			$data['message'] = $this->pcfunc->mainIU('newslettersub',$values,$id);
			$data['list'] = $this->pcfunc->getMainList('newslettersub','title','title','asc','where newsletter_id ='.$mainId);
		}
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/newslettersub-view';
		$this->load->view('includes/template', $viewData);
	}
	
	function del($id=0){
		return $this->pcfunc->mainDel('newslettersub',$id);
	}
	
}
