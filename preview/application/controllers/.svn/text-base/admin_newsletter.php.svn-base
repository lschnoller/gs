<?php

class Admin_newsletter extends Controller 
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
		$data['current'] = 'newsletter';
		$data['list'] = $this->pcfunc->getMainList('newsletter','title',$orderBy,$dir);
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/newsletter-view';
		$this->load->view('includes/template', $viewData);
	}
	function edit($id=0){
		$data['current'] = 'newsletter';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('main_article', 'Main Article', 'required');
		$this->form_validation->set_rules('main_desci', 'Description', 'required');
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
			$data['values'] = $this->pcfunc->getNewsletter($id);
		}else{
			if ($uploaded) {
				$file = $this->upload->data();
				$values['image_url'] = $file['file_name'];
			}
			$values['title'] = $this->pcfunc->getPostValue('title');
			$values['main_article'] = $this->pcfunc->getPostValue('main_article');
			$values['main_desci'] = $_POST['main_desci'];
			$values['url'] = $this->pcfunc->getPostValue('url');
			
			$data['message'] = $this->pcfunc->mainIU('newsletter',$values,$id);
			$data['list'] = $this->pcfunc->getMainList('newsletter','title','title');
		}
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/newsletter-view';
		$this->load->view('includes/template', $viewData);
	}
	
	function del($id=0){
		return $this->pcfunc->mainDel('newsletter',$id);
	}
	function code($id=0){
		$data['news'] = $this->pcfunc->getNewsletterView($id);
		$this->load->view('admin/newsletter_code',$data);
	}
	function preview($id=0){
		$data['news'] = $this->pcfunc->getNewsletterView($id);
		$this->load->view('admin/newsletter-view-view',$data);
	}
	
}
