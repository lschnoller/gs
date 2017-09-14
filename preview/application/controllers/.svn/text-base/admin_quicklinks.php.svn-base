<?php

class Admin_quicklinks extends Controller 
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
		$data['current'] = 'quicklinks';
		$data['list'] = $this->pcfunc->getMainList('quicklinks','title,image_url,count,status',$orderBy,$dir);
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/quicklinks-view';
		$this->load->view('includes/template', $viewData);
	}
	function edit($id=0){
		$data['current'] = 'quicklinks';
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
		$this->form_validation->set_rules('url', 'URL', 'required|prep_url');
		
		$config['upload_path'] = './images/quicklinks/';
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
			$data['values'] = $this->pcfunc->getQuicklinks($id);
		}else{
			if ($uploaded) {
				$file = $this->upload->data();
				$values['image_url'] = $file['file_name'];
			}
			$values['title'] = $this->pcfunc->getPostValue('title');
			$values['description'] = $_POST['description'];
			$values['url'] = $this->pcfunc->getPostValue('url');
			
			$data['message'] = $this->pcfunc->mainIU('quicklinks',$values,$id);
			$data['list'] = $this->pcfunc->getMainList('quicklinks','title,image_url,count,status','title');
		}
		$viewData['data'] = $data;
		$viewData['main_content'] = 'admin/quicklinks-view';
		$this->load->view('includes/template', $viewData);
	}
	
	function del($id=0){
		return $this->pcfunc->mainDel('quicklinks',$id);
	}
	function status($id=0,$status=0) {
		return $this->pcfunc->changeStatus('quicklinks',$id,$status);
	}
	
}
