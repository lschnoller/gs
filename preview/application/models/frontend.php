<?php
class Frontend extends Model {

	function Frontend(){
        parent::Model();
        $this->load->library('session');
        $this->load->database();
    }
    
    function getFooter(){
    	$list = FALSE;
    	
    	$list[0]['link'] = base_url().'instructorado_en_tecnicas_meditativas';
    	$list[0]['header'] = 'INSTRUCTORADO EN TÉCNICAS MEDITATIVAS';
    	$list[0]['p'] = '';
    	
    	$list[1]['link'] = base_url().'instructorado_en_procedimientos_ayurvedicos';
    	$list[1]['header'] = 'INSTRUCTORADO EN PROCEDIMIENTOS AYURVÉDICOS';
    	$list[1]['p'] = '';
    	
    	$list[2]['link'] = base_url().'equipo';
    	$list[2]['header'] = 'EQUIPO';
    	$list[2]['p'] = 'Link a las hojas de vidade cada uno de nuestros integrantes.';
    	
    	$list[3]['link'] = base_url().'';
    	$list[3]['header'] = 'REGISTRATE';
    	$list[3]['p'] = '';
    	
    	$list[4]['link'] = base_url().'';
    	$list[4]['header'] = 'QUERÉS RECIBIR NOTICIAS';
    	$list[4]['p'] = '';
    	
    	$list[5]['link'] = base_url().'contactenos';
    	$list[5]['header'] = 'CONTACTENOS';
    	$list[5]['p'] = '';
    	
    	$list[6]['link'] = base_url().'servicios/seminarios';
    	$list[6]['header'] = 'SEMINARIOS';
    	$list[6]['p'] = 'aprender como tomar elecciones saludables en su estilo de vida. Cada uno tiene como objetivo avanzar en el autoconocimiento a través de la práctica meditativa.';
    	
    	$list[7]['link'] = base_url().'ayurveda/consulta';
    	$list[7]['header'] = 'COUNSELING AYURVEDICO';
    	$list[7]['p'] = '';
    	
    	$list[8]['link'] = base_url().'actividades/calendario';
    	$list[8]['header'] = 'CALENDARIO';
    	$list[8]['p'] = '';
    	
    	$list[9]['link'] = base_url().'';
    	$list[9]['header'] = 'PUBLICACIONES Y NOTICIAS';
    	$list[9]['p'] = '';
    	
    	$list[10]['link'] = base_url().'';
    	$list[10]['header'] = 'QUERÉS RECIBIR NOTICIAS';
    	$list[10]['p'] = '';
    	
    	$list[11]['link'] = base_url().'';
    	$list[11]['header'] = 'TRATAMIENTOS';
    	$list[11]['p'] = '';
    	
    	$list[12]['link'] = base_url().'';
    	$list[12]['header'] = 'COSMETICA AYURVEDICA';
    	$list[12]['p'] = '';
    	
    	$list[13]['link'] = base_url().'';
    	$list[13]['header'] = 'CAMINO DEL INSTRUCTOR';
    	$list[13]['p'] = 'La Formación MBA está centrada en el trabajo sobre sí mismo y en el aprendizaje de técnicas para restablecer el equilibrio físico, emocional y energético del individuo.';
    	
    	$list[14]['link'] = base_url().'';
    	$list[14]['header'] = 'MASAJE AYURVÉDICO';
    	$list[14]['p'] = 'El masaje con aceites es una técnica energética y armonizadora. Vigoriza los tejidos del cuerpo físico permitiendo disolver bloqueos, aliviar dolores y corregir la postura.';
    	
    	$list[15]['link'] = base_url().'';
    	$list[15]['header'] = 'CHARLAS Y TALLERES';
    	$list[15]['p'] = '';
    	
    	$list[16]['link'] = base_url().'equipo/graciela_schnoller';
    	$list[16]['header'] = 'GRACIELA SCHNÖLLER';
    	$list[16]['p'] = 'Cosmetóloga hospitalaria Consultora de Salud Ayurvédica Formación en Yoga Facilitadora en Técnicas Introspectivas';
    	
    	$list[17]['link'] = base_url().'';
    	$list[17]['header'] = 'NOS ACOMPAÑAN ESTE AÑO';
    	$list[17]['p'] = 'Contamos con un staff de profesionales expertos en tratar los ditintos temas que ofrece el centro';
    	
    	$list[18]['link'] = base_url().'';
    	$list[18]['header'] = 'ESPIRITUALIDAD';
    	$list[18]['p'] = 'En estos seminarios podrás adentrarte todavía más en el conocimiento de la sabiduría espiritual de la India y de los estudiosos occidentales';
    	
    	$list[19]['link'] = base_url().'';
    	$list[19]['header'] = 'VITALIDAD';
    	$list[19]['p'] = 'El componente principal de nuestras enseñanzas es que el cuerpo, la mente y el espíritu son una unidad.';
    	
    	$list[20]['link'] = base_url().'';
    	$list[20]['header'] = '';
    	$list[20]['p'] = '';
    	
    	$list[21]['link'] = base_url().'';
    	$list[21]['header'] = 'SEMINARIOS Y TALLERES';
    	$list[21]['p'] = 'Aprender como tomar elecciones saludables en su estilo de vida. Cada uno tiene como objetivo avanzar en el autoconocimiento a través de la práctica meditativa.';
    	
    }
    
    function getCursosList($id = 0){
    	$query = $this->db->query("select * from cursos where cursos_cats_id = $id and status = 1");
    	$list = FALSE;
    	if ($query->num_rows() > 0){
    		foreach ($query->result() as $rs){
    			$list[$rs->id]['title'] = $rs->title;
    			$list[$rs->id]['subtitle'] = $rs->subtitle;
    			$list[$rs->id]['desci'] = $rs->description;
    			$list[$rs->id]['date_text'] = $rs->date_text;
    			$list[$rs->id]['date'] = $rs->course_date;
    		}
    	}
    	return $list;
    }
    function getSeminariosList($id=0){
    	$query = $this->db->query("select * from seminarios where seminarios_cats_id = $id and status = 1");
    	$list = FALSE;
    	if ($query->num_rows() > 0){
    		foreach ($query->result() as $rs){
    			$list[$rs->id]['title'] = $rs->title;
    			$list[$rs->id]['subtitle'] = $rs->subtitle;
    			$list[$rs->id]['desci'] = $rs->description;
    			$list[$rs->id]['date_text'] = $rs->date_text;
    		}
    	}
    	return $list;
    }
    function getCalendar(){
    	$query = $this->db->query("select * from calendario where status = 1");
    	$left = FALSE;
    	$right = FALSE;
    	$i=0;
    	if ($query->num_rows() > 0){
    		foreach ($query->result() as $rs){
    			if($i%2==0){
	    			$left[$rs->id]['title'] = $rs->title;
	    			$left[$rs->id]['event_date '] = $rs->event_date;
	    			$left[$rs->id]['desci'] = $rs->description;
	    			$left[$rs->id]['date_text'] = $rs->date_text;
    			}else{
    				$right[$rs->id]['title'] = $rs->title;
	    			$right[$rs->id]['event_date '] = $rs->event_date;
	    			$right[$rs->id]['desci'] = $rs->description;
	    			$right[$rs->id]['date_text'] = $rs->date_text;
    			}
    			$i++;
    		}
    	}
    	$list['left'] = $left;
    	$list['right'] = $right;
    	return $list;
    }
    
    function getRef(){
    	$query = $this->db->query("select * from referencias where status = 1");
    	$left = FALSE;
    	$right = FALSE;
    	$center = FALSE;
    	$i=0;
    	if ($query->num_rows() > 0){
    		foreach ($query->result() as $rs){
    			if($i%3==0){
	    			$left[$rs->id]['name'] = $rs->company_name;
	    			$left[$rs->id]['url'] = $rs->url;
	    			$left[$rs->id]['desci'] = $rs->company_info;
	    			$left[$rs->id]['image'] = $rs->image_url;
    			}elseif($i%3==1){
    				$center[$rs->id]['name'] = $rs->company_name;
	    			$center[$rs->id]['url'] = $rs->url;
	    			$center[$rs->id]['desci'] = $rs->company_info;
	    			$center[$rs->id]['image'] = $rs->image_url;
    			}else{
    				$right[$rs->id]['name'] = $rs->company_name;
	    			$right[$rs->id]['url'] = $rs->url;
	    			$right[$rs->id]['desci'] = $rs->company_info;
	    			$right[$rs->id]['image'] = $rs->image_url;
    			}
    			$i++;
    		}
    	}
    	$list['left'] = $left;
    	$list['center'] = $center;
    	$list['right'] = $right;
    	return $list;
    }
    function getTallers(){
    	$query = $this->db->query("select * from talleres where status = 1");
    	$list = FALSE;
    	if ($query->num_rows() > 0){
    		foreach ($query->result() as $rs){
    			$list[$rs->id]['title'] = $rs->title;
    			$list[$rs->id]['subtitle'] = $rs->subtitle;
    			$list[$rs->id]['desci'] = $rs->description;
    			$list[$rs->id]['date_text'] = $rs->date_text;
    			$list[$rs->id]['date'] = $rs->course_date;
    		}
    	}
    	return $list;
    }
	function getTestimonios(){
    	$query = $this->db->query("select * from testimonios where status = 1");
    	$list = FALSE;
    	if ($query->num_rows() > 0){
    		foreach ($query->result() as $rs){
    			$list[$rs->id]['author'] = $rs->author;
    			$list[$rs->id]['quote'] = $rs->quote_text;
    		}
    	}
    	return $list;
    }
    
}