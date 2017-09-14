<?php
define('IPP',20);///item per page
class Pcfunc extends Model {
	function Pcfunc()
	{
		parent::Model();
		$this->load->helper('url');	
		$this->load->database();
	}
	function getPostValue($name,$type = 'textbox') {
    	$value = '';
    	if($type == 'checkbox'){
    		if(isset($_POST[$name])){
    			$value = 1;
    		}else{
    			$value = 0;
    		}	
    	}else{
    		$value = mysql_real_escape_string($_POST[$name]);
    		if ($value == '') {
    			$value = NULL;
    		}
    	}
    	
    	return $value;
    }
    
    function itemPerPage($table) {
    	$cp = 1;
		$nor = $this->db->count_all($table);
		if(is_numeric($nor) && $nor>0){
			$np = $nor/IPP;
			$npInt = intval($nor/IPP);
		}else{
			$np=0;
			$npInt =0;
		}
		if (isset($_REQUEST['cp']) && is_numeric($_REQUEST['cp']))
			$cp = $_REQUEST['cp'];
		if($np>1){
			echo '<tr><td colspan="6"><div class="pagination">';
			if(($cp-3)>0)
				echo '<a href="?cp=1" title="First Page">&laquo; First</a>';
			if(($cp-3)>0)
				echo '<a href="?cp='.($cp-1).'" title="Previous Page">&laquo; Previous</a>';
				
			if(($cp-2)>0)
				echo '<a href="?cp='.($cp-2).'" class="number" title="'.($cp-2).'">'.($cp-2).'</a>';
			if(($cp-1)>0)
				echo '<a href="?cp='.($cp-1).'" class="number" title="'.($cp-1).'">'.($cp-1).'</a>';
			echo '<a href="?cp='.($cp).'" class="number current" title="'.($cp).'">'.($cp).'</a>';
			if(($cp)<$np)
				echo '<a href="?cp='.($cp+1).'" class="number" title="'.($cp+1).'">'.($cp+1).'</a>';
			if(($cp+1)<$np)
				echo '<a href="?cp='.($cp+2).'" class="number" title="'.($cp+2).'">'.($cp+2).'</a>';
			if(($cp+2)<$np)
				echo '<a href="?cp='.($cp+1).'" title="Next Page">Next &raquo;</a>';
			if(($cp+3)<$np)
				echo '<a href="?cp='.($npInt).'" title="Last Page">Last &raquo;</a>';
			echo '<div class="clear"></div></td></tr>';
			
		}
    }
    
    
	function mainIU($table = '',$values= '',$id = 0){
		$this->db->trans_start();
    	if($id == 0){
    		$rs = $this->db->insert($table, $values); 
    	}else{
    		$where = 'id = '.$id;
    		$str = $this->db->update_string($table, $values, $where);
    		$rs = $this->db->query($str);
    	}
    	$this->db->trans_complete();
    	if($this->db->trans_status() === FALSE){
    		if($id==0)
    			return msg_error('Error on While Inserting Item');
    		else
    			return msg_success('Error on While Updating Item');
    	}else{
    		if($id==0)
    			return msg_success('New Item Successfully Inserted');
    		else
    			return msg_success('The Item Successfull Updated');
    	}
	}
	function mainDel($table = '',$id = 0,$table2=''){
    	if($table2!=''){
			$this->db->where($table.'_id', $id);	
	    	$this->db->from($table2);	
			$products = $this->db->count_all_results();
	    	if($products>0){
				echo 'no';
	    		return false;
	    	}
    	}
    	$this->db->delete($table, array('id' => $id)); 
		echo 'yes';
    }
    function changeStatus($table,$id,$status,$table2='',$table3=''){
    	if($status == 1)
    		$status = 0;
    	else
    		$status=1;
    	$rs = $this->db->query("update $table set status = $status where id = $id");
    	if($table2!='')
    		$rs2 = $this->db->query("update $table2 set status = $status where ".$table."_id = $id");
    	if($table3!='')
    		$rs3 = $this->db->query("update $table3 set status = $status where ".$table."_id = $id");
    	return true;
    }
	function getMainList($table,$items,$order,$dic='asc',$where = '',$getAll = FALSE) {
		$list = FALSE;
		$cp = 1;
		if (isset($_REQUEST['cp']) && is_numeric($_REQUEST['cp']))
			$cp = $_REQUEST['cp'];
		$cp = $cp-1;	
		if($getAll)
			$query = $this->db->query("select id, $items from $table $where order by $order $dic");
		else 
			$query = $this->db->query("select id, $items from $table $where order by $order $dic limit ".($cp*IPP).",".IPP." ");
		if ($query->num_rows() > 0)
		{
		   foreach ($query->result() as $row){
		   	  $p = explode(',',$items);
			  foreach($p as $val){
				$list[$row->id][$val] = $row->$val;
			  }
		   }
		}
		return $list;
	}
    
	function moveup($table,$id){
		$query = $this->db->query("select order_number,categorias_id from $table where id =$id");
		if ($query->num_rows() > 0) {
    		$row = $query->row();
    		$myorder = $row->order_number;
    		$cat = $row->categorias_id;
    		$query = $this->db->query("select order_number,id from $table where order_number <$myorder and categorias_id =$cat order by order_number desc limit 1 ");
    		if ($query->num_rows() > 0) {
    			$row = $query->row();
    			$neworder = $row->order_number;
    			$otherId = $row->id;
    			$query1=$this->db->query("update $table set order_number = $neworder where id = $id");
    			$query2=$this->db->query("update $table set order_number = $myorder where id = $otherId");
    		}else{
    			return false;
    		}
		}else{
			return false;
		}
	}
	function movedown($table,$id){
		$query = $this->db->query("select order_number,categorias_id from $table where id =$id");
		if ($query->num_rows() > 0) {
    		$row = $query->row();
    		$myorder = $row->order_number;
    		$cat = $row->categorias_id;
    		$query = $this->db->query("select order_number,id from $table where order_number > $myorder and categorias_id =$cat order by order_number limit 1");
    		if ($query->num_rows() > 0) {
    			$row = $query->row();
    			$neworder = $row->order_number;
    			$otherId = $row->id;
    			$query1=$this->db->query("update $table set order_number = $neworder where id = $id");
    			$query2=$this->db->query("update $table set order_number = $myorder where id = $otherId");
    		}else{
    			return false;
    		}
		}else{
			return false;
		}
	}
    function getCalendario($id = 0) {
    	$values['id'] = $id;
		$values['event_date'] = date("Y-m-d");
    	$values['title'] = '';
    	$values['description'] = '';
    	$values['date_text'] = '';
		
		if ($id != 0){
			$query = 'select * from calendario where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['event_date'] = $row->event_date;
		    	$values['title'] = $row->title;
				$values['description'] = $row->description;
				$values['date_text'] = $row->date_text;
    		}
		}
		return $values;
    }
    function getCursosats($id){
    	$values['id'] = $id;
    	$values['name'] = '';
    	$values['description'] = '';
		
		if ($id != 0){
			$query = 'select * from cursos_cats where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['name'] = $row->name;
				$values['description'] = $row->description;
    		}
		}
		return $values;
    }
	function getSeminarioscats($id){
    	$values['id'] = $id;
    	$values['name'] = '';
    	$values['description'] = '';
		
		if ($id != 0){
			$query = 'select * from seminarios_cats where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['name'] = $row->name;
				$values['description'] = $row->description;
    		}
		}
		return $values;
    }
	function getCursos($id = 0) {
    	$values['id'] = $id;
		$values['course_date'] = date("Y-m-d");
    	$values['cursos_cats_id'] = 0;
    	$values['title'] = '';
    	$values['subtitle'] = '';
    	$values['description'] = '';
    	$values['date_text'] = '';
		
		if ($id != 0){
			$query = 'select * from cursos where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['course_date'] = $row->course_date;
		    	$values['title'] = $row->title;
				$values['description'] = $row->description;
				$values['date_text'] = $row->date_text;
				$values['cursos_cats_id'] = $row->cursos_cats_id;
				$values['subtitle'] = $row->subtitle;
    		}
		}
		return $values;
    }
	function getTalleres($id = 0) {
    	$values['id'] = $id;
		$values['course_date'] = date("Y-m-d");
    	$values['title'] = '';
    	$values['subtitle'] = '';
    	$values['description'] = '';
    	$values['date_text'] = '';
		
		if ($id != 0){
			$query = 'select * from talleres where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['course_date'] = $row->course_date;
		    	$values['title'] = $row->title;
				$values['description'] = $row->description;
				$values['date_text'] = $row->date_text;
				$values['subtitle'] = $row->subtitle;
    		}
		}
		return $values;
    }
    function getTestimonios($id){
    	$values['id'] = $id;
    	$values['quote_text'] = '';
    	$values['author'] = '';
		
		if ($id != 0){
			$query = 'select * from testimonios where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['author'] = $row->author;
		    	$values['quote_text'] = $row->quote_text;
    		}
		}
		return $values;
    }
    function getSeminarios($id){
    	$values['id'] = $id;
    	$values['seminarios_cats_id'] = 0;
    	$values['title'] = '';
    	$values['subtitle'] = '';
    	$values['description'] = '';
    	$values['date_text'] = '';
		
		if ($id != 0){
			$query = 'select * from seminarios where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['title'] = $row->title;
				$values['description'] = $row->description;
				$values['date_text'] = $row->date_text;
				$values['seminarios_cats_id'] = $row->seminarios_cats_id;
				$values['subtitle'] = $row->subtitle;
    		}
		}
		return $values;
    }
    function getQuicklinks($id){
    	$values['id'] = $id;
		$values['image_url'] = FALSE;
    	$values['title'] = '';
    	$values['url'] = '';
    	$values['description'] = '';
		
		if ($id != 0){
			$query = 'select * from quicklinks where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['image_url'] = base_url().'images/quicklinks/'.$row->image_url;
		    	$values['title'] = $row->title;
				$values['description'] = $row->description;
				$values['url'] = $row->url;
    		}
		}
		return $values;
    }
    function getNewsletter($id){
    	$values['id'] = $id;
		$values['image_url'] = FALSE;
    	$values['title'] = '';
    	$values['main_article'] = '';
    	$values['url'] = '';
    	$values['main_desci'] = '';
		
		if ($id != 0){
			$query = 'select * from newsletter where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['image_url'] = base_url().'images/newsletter/'.$row->image_url;
		    	$values['title'] = $row->title;
		    	$values['main_article'] = $row->main_article;
				$values['main_desci'] = $row->main_desci;
				$values['url'] = $row->url;
    		}
		}
		return $values;
    }
    function getNewsletterMain($id){
    	$query = 'select newsletter_id from newslettersub where id = '.$id.' ';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		$row = $rs->row();
    		return $row->newsletter_id;
    	}else{
    		return 0;
    	}
    }
 	function getNewsletterSub($id){
    	$values['id'] = $id;
		$values['image_url'] = FALSE;
    	$values['title'] = '';
    	$values['url'] = '';
    	$values['desci'] = '';
		
		if ($id != 0){
			$query = 'select * from newslettersub where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
    			$values['mainId'] = $row->newsletter_id;
		    	$values['image_url'] = base_url().'images/newsletter/'.$row->image_url;
		    	$values['title'] = $row->title;
				$values['desci'] = $row->desci;
				$values['url'] = $row->url;
    		}
		}
		return $values;
    }
    function getReferencias($id){
    	$values['id'] = $id;
		$values['image_url'] = FALSE;
    	$values['company_name'] = '';
    	$values['url'] = '';
    	$values['company_info'] = '';
		
		if ($id != 0){
			$query = 'select * from referencias where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['id'] = $id;
		    	$values['image_url'] = base_url().'images/referencias/'.$row->image_url;
		    	$values['company_name'] = $row->company_name;
				$values['company_info'] = $row->company_info;
				$values['url'] = $row->url;
    		}
		}
		return $values;
    }
	function spanishToUTF($str = '') {
		$str = str_replace('á','&aacute;',$str);
		$str = str_replace('é','&eacute;',$str);
		$str = str_replace('í','&iacute;',$str);
		$str = str_replace('ó','&oacute;',$str);
		$str = str_replace('ú','&uacute;',$str);
		$str = str_replace('ñ','&ntilde;',$str);
		$str = str_replace('Ñ','&Ntilde;',$str);
		return $str;
	}
	function getNewsletterView($id){
		$values['title'] = '';
		$values['url'] = '';
		$values['main_desci'] = '';
		$values['main_article'] = '';
		$values['image_url'] = '';
		$subs = FALSE;
		$values['subs'] = $subs;
		if ($id != 0){
			$query = 'select * from newsletter where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['title'] = $this->spanishToUTF($row->title);
				$values['url'] = $row->url;
				$values['main_desci'] = $this->spanishToUTF($row->main_desci);
				$values['main_article'] = $this->spanishToUTF($row->main_article);
				$values['image_url'] = $row->image_url;
				$query2 = $this->db->query('select * from newslettersub where newsletter_id = '.$id.' ');
	    		foreach ($query2->result() as $row2){
	    			$subs[$row2->id]['title'] = $this->spanishToUTF($row2->title);
					$subs[$row2->id]['url'] = $row2->url;
					$subs[$row2->id]['desci'] = $this->spanishToUTF($row2->desci);
					$subs[$row2->id]['image_url'] = $row2->image_url;
	    		}
				$values['subs'] = $subs;
    		}
		}
		return $values;
	}
}