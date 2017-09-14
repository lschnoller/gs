<?php
class Servicios extends Controller {

	function Servicios()
	{
		parent::Controller();	
		$this->load->helper('url');	
		$this->load->model('frontend');
	}
	
	function cursos(){
		$data['title'] = 'Cursos';
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$this->load->view('cursos-view');
		$this->load->view('footer');
	}
	function curso_tecmeditacion(){
		$data['title'] = 'TÉCNICAS DE MEDITACIÓN';
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getCursosList(1);
		$this->load->view('curso_tecmeditacion-view',$data);
		$this->load->view('footer');
	}
	function cursos_masajeayur(){
		$data['title'] = 'MASAJE AYURVEDICO';
		$data['image'] = 'cursos_masaje_ayurvedico.jpg';
		$this->load->view('header',$data);
		$data['list'] = $this->frontend->getCursosList(2);
		$this->load->view('cursos_masajeayur-view',$data);
		$this->load->view('footer');
	}
	
	function counceling(){
		$hData['title'] = 'Counceling';
		$hData['image'] = 'couseling.jpg';
		$this->load->view('header',$hData);
		$this->load->view('counceling-view');
		$this->load->view('footer');
	}
	function seminarios(){
		$hData['title'] = 'Seminarios';
		$hData['image'] = 'seminarios_emociones.jpg';
		$this->load->view('header',$hData);
		$this->load->view('seminarios-view');
		$this->load->view('footer');
	}
	function seminarios_vitalidad(){
		$hData['title'] = 'VITALIDAD';
		$hData['image'] = 'seminarios_emociones.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(1);
		$this->load->view('seminarios_vitalidad-view',$data);
		$this->load->view('footer');
	}
	function seminarios_emociones(){
		$hData['title'] = 'EMOCIONES';
		$hData['image'] = 'seminarios_emociones.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(2);
		$this->load->view('seminarios_emociones-view',$data);
		$this->load->view('footer');
	}
	function seminarios_espiritualidad(){
		$hData['title'] = 'ESPIRITUALIDAD';
		$hData['image'] = 'seminarios_emociones.jpg';
		$this->load->view('header',$hData);
		$data['list'] = $this->frontend->getSeminariosList(3);
		$this->load->view('seminarios_espiritualidad-view',$data);
		$this->load->view('footer');
	}
	function tratamientos(){
		$hData['title'] = 'Otros tratamientos';
		$hData['image'] = 'tratamientos.jpg';
		$this->load->view('header',$hData);
		$this->load->view('tratamientos-view');
		$this->load->view('footer');
	}
	function cosmetica_y_tratamientos(){
		$hData['title'] = 'Cosmetica y Tratamientos';
		$hData['image'] = 'cosmetica2.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_y_tratamientos-view');
		$this->load->view('footer');
	}
	function cosmetica_ayurvedica(){
		$hData['title'] = 'Cosmetica Ayurvedica';
		$hData['image'] = 'cosmetica-rasayana1.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_ayurvedica-view');
		$this->load->view('footer');
	}
	function cosmetica_biomarine(){
		$hData['title'] = 'Cosmetica Ayurvedica';
		$hData['image'] = 'cosmetica-rasayana1.jpg';
		$this->load->view('header',$hData);
		$this->load->view('cosmetica_biomarine-view');
		$this->load->view('footer');
	}
	
}

