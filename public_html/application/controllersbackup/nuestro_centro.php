<?php
class Nuestro_centro extends Controller {

	function Nuestro_centro()
	{
		parent::Controller();	
		$this->load->helper('url');	
	}
	
	function index(){
		$hData['title'] = 'Nuestro Centro';
		$hData['imageCSS'] = 'nuestro-centro-big';
		$hData['textOnImage'] = '<h1 class="orange">Nuestro Centro</h1>
								<p class="green">El Centro Graciela Schnöller -CGS- se caracterizó desde el inicio <br>por tener un objetivo claro:</p>
								<h2 class="orange">servir y educar para el autoconocimiento y la transformación. </h2>
								<p class="green">Desde el año 1990 brindamos un espacio que promueve el bienestar físico, <br>emocional y espiritual.</p>
								';
		$this->load->view('header',$hData);
		$this->load->view('nuestro-centro-view');
		$this->load->view('footer');
	}
}
