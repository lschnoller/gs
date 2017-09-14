<?php
class Testimonios extends Controller {

	function Testimonios()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('frontend');
	}
	function index(){
		$data['title'] = 'Testimonios';
		$data['image'] = 'charlas_y_talleres.png';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getTestimonios();
		$this->load->view('testimonios-view',$data);
		$this->load->view('footer');
	}
	
}