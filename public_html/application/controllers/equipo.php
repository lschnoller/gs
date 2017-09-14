<?php
class Equipo extends Controller {

	function Equipo()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$data['title'] = 'EQUIPO';
		$data['image'] = 'equipo1.jpg';
		$this->load->view('header',$data);
		$this->load->view('equipo-view');
		$this->load->view('footer');
	}
	function erika_schnoller(){
		$data['title'] = 'ERIKA SCHNÖLLER';
		$data['image'] = 'equipo1.jpg';
		$this->load->view('header',$data);
		$this->load->view('erika_schnoller-view');
		$this->load->view('footer');
	}
	function graciela_schnoller() {
		$data['title'] = 'GRACIELA SCHNÖLLER';
		$data['image'] = 'equipo1.jpg';
		$this->load->view('header',$data);
		$this->load->view('graciela_schnoller-view');
		$this->load->view('footer');
	}
	function nos_acompanan() {
		$data['title'] = 'NOS ACOMPAÑAN ESTE AÑO - Alejandra López | Marcela Simonetti | Carmen Ferretto | Aileen Cheatham | Leticia Cohen | María Eugenia Larrinaga | Ana María Salvatori | Lidia Rokiski | Irma Gribaldi | Angélica Ilvento';
		$data['image'] = 'equipo1.jpg';
		$this->load->view('header',$data);
		$this->load->view('nos_acompanan-view');
		$this->load->view('footer');
	}
}
