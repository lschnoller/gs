<?php
class Admin_functions extends Model {

	function Admin_functions(){
        parent::Model();
        $this->load->library('session');
    }
    
    function isThisAdmin($user,$pass){
    	if($user == 'admin' && $pass == 'admin'){// just for test make better check later
    		// set sessions
    		$this->session->set_userdata('isAdmin', 'ADMIN');
    		return TRUE;
    	}else{
    		return FALSE;
    	}
    }
    
    function isAdminLoggedIn() {
    	if($this->session->userdata('isAdmin') == 'ADMIN'){
    		return true;
    	}else{
    		return false;
    	}
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
	function put($table='',$values='',$id=0) {
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
    		return false;
    	}else{
    		return true;
    	}
    }
	function delete($table='',$id=0){
    	$this->db->trans_start();
    	$query = 'delete from '.$table.' where id = '.$id.' ';
    	$rs = $this->db->query($query);
    	$this->db->trans_complete();
		if($this->db->trans_status() === FALSE){
    		return '<div id="error">Error on deleting</div>';
    	}else{
    		return '<div id="success">Successfuly deleted</div>';
    	}
    }
	function getCalendario($id) {
    	$values['title'] = '';
    	$values['event_date'] = '';
    	$values['description'] = '';
		$values['date_text'] = '';
		$values['status'] = TRUE;
		if ($id != 0){
			$query = 'select * from Calendario where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['title'] = $row->title;
    			$values['description'] = $row->description;
    			$values['event_date'] = $row->event_date;
    			$values['date_text'] = $row->date_text;
    			if($row->status == '0'){
    				$values['status'] = TRUE;
    			}
    		}
		}
		return $values;
    }
	
	function getCalendarioList($sort='') {
   		$query = 'select title,id,status from Calendario order by title';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		foreach ($rs->result() as $row){
    			$list[$row->id]['title'] = $row->title;
    			$list[$row->id]['status'] = 'OFF';
    			if($row->status == '1')
    				$list[$row->id]['status'] = 'ON';
    		}
    		return $list;
    	}else{
    		return TRUE;
    	}
    }
	
	function getQuickLinks($id) {
    	$values['title'] = '';
    	$values['description'] = '';
    	$values['url'] = '';
		$values['image_url'] = '';
		$values['status'] = TRUE;
		if ($id != 0){
			$query = 'select * from QuickLinks where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['title'] = $row->title;
    			$values['description'] = $row->description;
    			$values['url'] = $row->url;
    			if($row->image_url){
    				$values['image_url'] = '//Library/WebServer/Documents/gs/images/quickLinks/'.$row->image_url;
    			}
    			if($row->status == '0'){
    				$values['status'] = TRUE;
    			}
    		}
		}
		return $values;
    }
	function getQuickLinksList($sort='') {
   		$query = 'select title,id,status from QuickLinks order by title';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		foreach ($rs->result() as $row){
    			$list[$row->id]['title'] = $row->title;
    			$list[$row->id]['status'] = 'OFF';
    			if($row->status == '1')
    				$list[$row->id]['status'] = 'ON';
    		}
    		return $list;
    	}else{
    		return TRUE;
    	}
    }
    
	function getReferences($id) {
    	$values['company_name'] = '';
    	$values['company_info'] = '';
    	$values['url'] = '';
		if ($id != 0){
			$query = 'select * from Referencias where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['company_name'] = $row->company_name;
    			$values['company_info'] = $row->company_info;
    			$values['url'] = $row->url;
    			
    		}
		}
		return $values;
    }
	function getReferencesList($sort='') {
   		$query = 'select id,company_name from Referencias ';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		foreach ($rs->result() as $row){
    			$list[$row->id]['company_name'] = $row->company_name;
    		}
    		return $list;
    	}else{
    		return TRUE;
    	}
    }
    
	function getTalleres($id) {
    	$values['title'] = '';
    	$values['subtitle'] = '';
    	$values['course_date'] = '';
    	$values['description'] = '';
		$values['date_text'] = '';
		$values['status'] = TRUE;
		if ($id != 0){
			$query = 'select * from Talleres where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['title'] = $row->title;
    			$values['subtitle'] = $row->subtitle;
    			$values['description'] = $row->description;
    			$values['course_date'] = $row->course_date;
    			$values['date_text'] = $row->date_text;
    			if($row->status == '0'){
    				$values['status'] = TRUE;
    			}
    		}
		}
		return $values;
    }
	
	function getTalleresList($sort='') {
   		$query = 'select title,id,status from Talleres order by title';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		foreach ($rs->result() as $row){
    			$list[$row->id]['title'] = $row->title;
    			$list[$row->id]['status'] = 'OFF';
    			if($row->status == '1')
    				$list[$row->id]['status'] = 'ON';
    		}
    		return $list;
    	}else{
    		return TRUE;
    	}
    }
	
	function getSeminariosCat($id) {
    	$values['name'] = '';
    	$values['description'] = '';
		if ($id != 0){
			$query = 'select * from SeminariosCat where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['name'] = $row->name;
    			$values['description'] = $row->description;    			
    		}
		}
		return $values;
    }
	function getSeminariosCatList($sort='') {
   		$query = 'select id,name from SeminariosCat order by name ';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		foreach ($rs->result() as $row){
    			$list[$row->id]['name'] = $row->name;
    		}
    		return $list;
    	}else{
    		return TRUE;
    	}
    }
    
	function getSeminarios($id) {
    	$values['title'] = '';
    	$values['subtitle'] = '';
    	$values['date'] = '';
    	$values['description'] = '';
		$values['category_id'] = '';
		$values['status'] = TRUE;
		if ($id != 0){
			$query = 'select * from Seminarios where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['title'] = $row->title;
    			$values['subtitle'] = $row->subtitle;
    			$values['description'] = $row->description;
    			$values['date'] = $row->date;
    			$values['category_id'] = $row->category_id;
    			if($row->status == '0'){
    				$values['status'] = TRUE;
    			}
    		}
		}
		return $values;
    }
	
	function getSeminariosList($sort='') {
   		$query = 'select Seminarios.title,Seminarios.id,Seminarios.status,SeminariosCat.name from Seminarios,SeminariosCat where SeminariosCat.id = Seminarios.category_id order by SeminariosCat.name';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		foreach ($rs->result() as $row){
    			$list[$row->id]['title'] = $row->title;
    			$list[$row->id]['cat'] = $row->name;
    			$list[$row->id]['status'] = 'OFF';
    			if($row->status == '1')
    				$list[$row->id]['status'] = 'ON';
    		}
    		return $list;
    	}else{
    		return TRUE;
    	}
    }
    function getUser($id){
		$values['email'] = '';
		$values['password'] = '';
		$values['first_name'] = '';
		$values['last_name'] = '';
		$values['last_login'] = '';
		if ($id != 0){
			$query = 'select * from Users where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['email'] = $row->email;
				$values['password'] = $row->password;
				$values['first_name'] = $row->first_name;
				$values['last_name'] = $row->last_name;
				$values['last_login'] = $row->last_login;
    		}
		}
		return $values;
	}
	
	function putUser($values,$id) {
		$this->db->trans_start();
		$query = 'select id from Users where email= \''.$values['email'].'\' and id <> '.$id.' ';
		$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		return false;
    	}
    	if($id == 0){
    		$rs = $this->db->insert('Users', $values); 
    	}else{
    		$where = 'id = '.$id;
    		$str = $this->db->update_string('Users', $values, $where);
    		$rs = $this->db->query($str);
    	}
    	$this->db->trans_complete();
    	if($this->db->trans_status() === FALSE){
    		return false;
    	}else{
    		return true;
    	}
	}
	
	function getUserList() {
		$query = 'select id,email,first_name,last_name from Users order by first_name,last_name';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		foreach ($rs->result() as $row){
    			$list[$row->id]['email'] = $row->email;
    			$list[$row->id]['first_name'] = $row->first_name;
    			$list[$row->id]['last_name'] = $row->last_name;
    		}
    		return $list;
    	}else{
    		return TRUE;
    	}
	}
	
	function deleteUser($id) {
		$this->db->trans_start();
    	$query = 'delete from Users where id = '.$id.' ';
    	$rs = $this->db->query($query);
    	$query2 = 'delete from Addresses where user_id = '.$id.' ';
    	$rs2 = $this->db->query($query2);
    	$query3 = 'delete from Comments where user_id = '.$id.' ';
    	$rs3 = $this->db->query($query3);
    	$this->db->trans_complete();
		if($this->db->trans_status() === FALSE){
    		return '<div id="error">Error on deleting User</div>';
    	}else{
    		return '<div id="success">User successfuly deleted</div>';
    	}
	}
	
	function getAdress($id) {
		$values['phone1'] = '';
		$values['phone2'] = '';
		$values['address'] = '';
		$values['apt'] = '';
		$values['city'] ='' ;
		$values['state'] ='' ;
		$values['zip'] = '';
		$values['country'] ='' ;
		$values['user_id'] = '';
		if ($id != 0){
			$query = 'select * from Addresses where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['phone1'] = $row->phone1;
				$values['phone2'] = $row->phone2;
				$values['address'] = $row->address;
				$values['apt'] = $row->apt;
				$values['city'] = $row->city;
				$values['state'] = $row->state;
				$values['zip'] = $row->zip;
				$values['country'] = $row->country;
				$values['user_id'] = $row->user_id;
    		}
		}
		return $values;
	}
	
	function putAdress($values,$id){
		$this->db->trans_start();
		
    	if($id == 0){
    		$rs = $this->db->insert('Addresses', $values); 
    	}else{
    		$where = 'id = '.$id;
    		$str = $this->db->update_string('Addresses', $values, $where);
    		$rs = $this->db->query($str);
    	}
    	$this->db->trans_complete();
    	if($this->db->trans_status() === FALSE){
    		return false;
    	}else{
    		return true;
    	}
	}
	
	function getAdressList(){
		$query = 'select Addresses.id,Addresses.zip,Users.first_name,Users.last_name from Users,Addresses where Addresses.user_id = Users.id order by Users.first_name,Users.last_name';
    	$rs = $this->db->query($query);
    	if ($rs->num_rows() > 0) {
    		foreach ($rs->result() as $row){
    			$list[$row->id]['zip'] = $row->zip;
    			$list[$row->id]['first_name'] = $row->first_name;
    			$list[$row->id]['last_name'] = $row->last_name;
    		}
    		return $list;
    	}else{
    		return TRUE;
    	}
	}
	
	function getNewsletter($id){
		$values['title'] = '';
		$values['url'] = '';
		$values['main_desci'] = '';
		$values['main_article'] = '';
		if ($id != 0){
			$query = 'select * from NewsLetter where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['title'] = $row->title;
				$values['url'] = $row->url;
				$values['main_desci'] = $row->main_desci;
				$values['main_article'] = $row->main_article;
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
			$query = 'select * from NewsLetter where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['title'] = $this->spanishToUTF($row->title);
				$values['url'] = $row->url;
				$values['main_desci'] = $this->spanishToUTF($row->main_desci);
				$values['main_article'] = $this->spanishToUTF($row->main_article);
				$values['image_url'] = $row->image_url;
				$query2 = $this->db->query('select * from NewsLetterSub where main = '.$id.' ');
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
	function getNewsletterList(){
		$query = 'select id,title from NewsLetter order by id desc';
		$query = $this->db->query($query);
		$list =FALSE;
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row){
				$list[$row->id]['title'] = $row->title;	
			}
		}
		return $list;
	}
	function putNewsletter($values,$id){
	$this->db->trans_start();
    	if($id == 0){
    		$rs = $this->db->insert('NewsLetter', $values); 
    	}else{
    		$where = 'id = '.$id;
    		$str = $this->db->update_string('NewsLetter', $values, $where);
    		$rs = $this->db->query($str);
    	}
    	$this->db->trans_complete();
    	if($this->db->trans_status() === FALSE){
    		return false;
    	}else{
    		return true;
    	}
	}
	function deleteNewsletter($id){
		$this->db->trans_start();
		$query = 'delete from NewsLetter where id = '.$id.' ';
    	$rs = $this->db->query($query);
    	$query2 = 'delete from NewsLetterSub where main = '.$id.' ';
    	$rs2 = $this->db->query($query2);
    	$this->db->trans_complete();
		if($this->db->trans_status() === FALSE){
    		return '<div id="error">Error on deleting NewsLetter</div>';
    	}else{
    		return '<div id="success">NewsLetter successfuly deleted</div>';
    	}
	}
	
	function getNewsletterSub($id){
		$values['title'] = '';
		$values['url'] = '';
		$values['desci'] = '';
		if ($id != 0){
			$query = 'select * from NewsLetterSub where id = '.$id.' ';
    		$rs = $this->db->query($query);
    		if ($rs->num_rows() > 0) {
    			$row = $rs->row();
    			$values['title'] = $row->title;
				$values['url'] = $row->url;
				$values['desci'] = $row->desci;
    		}
		}
		return $values;
	}
	
	function getNewsletterSubList($id){
		$query = 'select id,title from NewsLetterSub where main = '.$id.' order by id desc';
		$query = $this->db->query($query);
		
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row){
				$list[$row->id]['title'] = $row->title;	
			}
			return $list;
		}else{
			return true;
		}
		
	}
	function putNewsletterSub($values,$id){
	$this->db->trans_start();
    	if($id == 0){
    		$rs = $this->db->insert('NewsLetterSub', $values); 
    	}else{
    		$where = 'id = '.$id;
    		$str = $this->db->update_string('NewsLetterSub', $values, $where);
    		$rs = $this->db->query($str);
    	}
    	$this->db->trans_complete();
    	if($this->db->trans_status() === FALSE){
    		return false;
    	}else{
    		return true;
    	}
	}
	function deleteNewsletterSub($id){
		$this->db->trans_start();
    	$query2 = 'delete from NewsLetterSub where main_id = '.$id.' ';
    	$rs2 = $this->db->query($query2);
    	$this->db->trans_complete();
		if($this->db->trans_status() === FALSE){
    		return '<div id="error">Error on deleting News Letter Sub</div>';
    	}else{
    		return '<div id="success">News Letter Sub successfuly deleted</div>';
    	}
	}
}