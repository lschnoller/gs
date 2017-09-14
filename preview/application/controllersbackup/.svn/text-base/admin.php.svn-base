<?php
class Admin extends Controller {

	function Admin()
	{
		parent::Controller();
		$this->load->helper('url');	
		$this->load->database();
		$this->load->helper(array('form', 'url'));		
		$this->load->library('form_validation');
		$this->load->model('admin_functions');
	}
	
	function index()
	{
		if($this->admin_functions->isAdminLoggedIn()){
			$header['section'] = 'Main Menu'; 
			$this->load->view('admin/header',$header);
			$this->load->view('admin/menu');
			$this->load->view('admin/footer');
		}else{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');	
			if ($this->form_validation->run() == FALSE){
				$data['error'] = '';
				$this->load->view('admin/login',$data);
			}else{
				$user = mysql_real_escape_string($_POST['username']);
				$pass = mysql_real_escape_string($_POST['password']);
				$isThisAdmin = $this->admin_functions->isThisAdmin($user,$pass);
				if($isThisAdmin){
					$header['section'] = 'Main Menu';
					$this->load->view('admin/header',$header);
					$this->load->view('admin/menu');
					$this->load->view('admin/footer');
				}else{
					$data['error'] = '<div id="error">invalid username or password</div>';
					$this->load->view('admin/login',$data);
				}
			}
		}
	}
	
	/**************************************************************************************************/
	/**************************************************************************************************/
	/*********************************** calendario  *********************************/
	function calendario($do = '',$id = 0,$sort = '') {
		if(!$this->admin_functions->isAdminLoggedIn()){
			redirect(base_url().'admin');
		}
		$data['list'] = FALSE;
		if($do == 'form'){
			$header['section'] = 'Edit Calendario';
			if($id == 0)
				$header['section'] = 'Add Calendario';
			$this->load->view('admin/header',$header);
			/*********************************** calendario add-modify *********************************/
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('event_date', 'Event Date', 'trim|required');
			$this->form_validation->set_rules('date_text', 'Date Text', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', '');
		
			
			if ($this->form_validation->run() == FALSE){
				$data['id'] = $id;	
				$data['values'] = $this->admin_functions->getCalendario($id);
				$data['message'] = '';
			}else{
				
				
				$values['title'] = $this->admin_functions->getPostValue('title');
				$values['description'] = $this->admin_functions->getPostValue('description');
				$values['event_date'] = $this->admin_functions->getPostValue('event_date');
				$values['date_text'] = $this->admin_functions->getPostValue('date_text');
				$values['status'] = $this->admin_functions->getPostValue('status','checkbox');
				
				$put = $this->admin_functions->put('Calendario',$values,$id);
				if($put){
					$data['message'] = '<div id="success">New Calendario successfuly updated</div>';
					$data['list'] = $this->admin_functions->getCalendarioList($sort);
				}else{
					$data['id'] = $id;
					$data['message'] = '<div id="error">Error on action, please try again!!</div>';
				}
			}
			/********************************* Calendario add-modify eof *******************************/
		}elseif($do == 'del' && is_numeric($id)){
			$header['section'] = 'Calendario';
			$this->load->view('admin/header',$header);
			/***********************************Calendario del ***********************************/
			$del = $this->admin_functions->delete('Calendario',$id);
			$data['message'] = $del;
			$data['list'] = $this->admin_functions->getCalendarioList($sort);
			/////////// Calendario del eof
		}else{
			$header['section'] = 'List of Calendario';
			$this->load->view('admin/header',$header);
			/************************** Calendario list ***********************************/
			$data['message'] = '';
			$data['list'] = $this->admin_functions->getCalendarioList();
			/*********************************** Calendario list eof ***********************************/
		}
		$this->load->view('admin/calendario',$data);
		$this->load->view('admin/footer');
	}
	/*********************************** Calendario eof *********************************/
	
	/**************************************************************************************************/
	/**************************************************************************************************/
	/*********************************** QuickLinks  *********************************/
	function quickLinks($do = '',$id = 0,$sort = '') {
		if(!$this->admin_functions->isAdminLoggedIn()){
			redirect(base_url().'admin');
		}
		$data['list'] = FALSE;
		if($do == 'form'){
			$header['section'] = 'QuickLinks';
			if($id == 0)
				$header['section'] = 'Add QuickLinks';
			$this->load->view('admin/header',$header);
			/*********************************** QuickLinks add-modify *********************************/
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', '');
			$this->form_validation->set_rules('url', 'URL', 'trim|required|prep_url');
			$this->form_validation->set_rules('status', 'Status', '');
			$this->form_validation->set_rules('i', 'Image', '');
		
			
			if ($this->form_validation->run() == FALSE){
				$data['id'] = $id;	
				$data['values'] = $this->admin_functions->getQuickLinks($id);
				$data['message'] = '';
			}else{
				
				
				$values['description'] = $this->admin_functions->getPostValue('description');
				$values['title'] = $this->admin_functions->getPostValue('title');
				$values['url'] = $this->admin_functions->getPostValue('url');
				$values['image_url'] = str_replace('//Library/WebServer/Documents/gs/images/quicklinks/','',$this->admin_functions->getPostValue('i'));
				$values['status'] = $this->admin_functions->getPostValue('status','checkbox');
				
				$put = $this->admin_functions->put('QuickLinks',$values,$id);
				if($put){
					$data['message'] = '<div id="success">New QuickLinks successfuly updated</div>';
					$data['list'] = $this->admin_functions->getQuickLinksList($sort);
				}else{
					$data['id'] = $id;
					$data['message'] = '<div id="error">Error on action, please try again!!</div>';
				}
			}
			/********************************* QuickLinks add-modify eof *******************************/
		}elseif($do == 'del' && is_numeric($id)){
			$header['section'] = 'QuickLinks';
			$this->load->view('admin/header',$header);
			/***********************************QuickLinks del ***********************************/
			$del = $this->admin_functions->delete('QuickLinks',$id);
			$data['message'] = $del;
			$data['list'] = $this->admin_functions->getQuickLinksList($sort);
			/////////// QuickLinks del eof
		}else{
			$header['section'] = 'List of QuickLinks';
			$this->load->view('admin/header',$header);
			/************************** QuickLinks list ***********************************/
			$data['message'] = '';
			$data['list'] = $this->admin_functions->getQuickLinksList();
			/*********************************** QuickLinks list eof ***********************************/
		}
		$this->load->view('admin/quickLinks',$data);
		$this->load->view('admin/footer');
	}
	/*********************************** QuickLinks eof *********************************/
	
	/**************************************************************************************************/
	/**************************************************************************************************/
	/*********************************** References  *********************************/
	function references($do = '',$id = 0,$sort = '') {
		if(!$this->admin_functions->isAdminLoggedIn()){
			redirect(base_url().'admin');
		}
		$data['list'] = FALSE;
		if($do == 'form'){
			$header['section'] = 'References';
			if($id == 0)
				$header['section'] = 'Add References';
			$this->load->view('admin/header',$header);
			/*********************************** References add-modify *********************************/
			$this->form_validation->set_rules('company_name', 'Company Name', 'trim|required');
			$this->form_validation->set_rules('company_info', 'Company Info', 'trim|required');
			$this->form_validation->set_rules('url', 'URL', 'trim|required|prep_url');
		
			
			if ($this->form_validation->run() == FALSE){
				$data['id'] = $id;	
				$data['values'] = $this->admin_functions->getReferences($id);
				$data['message'] = '';
			}else{
				
				
				$values['company_name'] = $this->admin_functions->getPostValue('company_name');
				$values['company_info'] = $this->admin_functions->getPostValue('company_info');
				$values['url'] = $this->admin_functions->getPostValue('url');
				
				$put = $this->admin_functions->put('Referencias',$values,$id);
				if($put){
					$data['message'] = '<div id="success">New References successfuly updated</div>';
					$data['list'] = $this->admin_functions->getReferencesList($sort);
				}else{
					$data['id'] = $id;
					$data['message'] = '<div id="error">Error on action, please try again!!</div>';
				}
			}
			/********************************* References add-modify eof *******************************/
		}elseif($do == 'del' && is_numeric($id)){
			$header['section'] = 'References';
			$this->load->view('admin/header',$header);
			/***********************************References del ***********************************/
			$del = $this->admin_functions->delete('Referencias',$id);
			$data['message'] = $del;
			$data['list'] = $this->admin_functions->getReferencesList($sort);
			/////////// References del eof
		}else{
			$header['section'] = 'List of References';
			$this->load->view('admin/header',$header);
			/************************** References list ***********************************/
			$data['message'] = '';
			$data['list'] = $this->admin_functions->getReferencesList();
			/*********************************** References list eof ***********************************/
		}
		$this->load->view('admin/references',$data);
		$this->load->view('admin/footer');
	}
	/*********************************** References eof *********************************/
	
	/**************************************************************************************************/
	/**************************************************************************************************/
	/*********************************** Talleres  *********************************/
	function talleres($do = '',$id = 0,$sort = '') {
		if(!$this->admin_functions->isAdminLoggedIn()){
			redirect(base_url().'admin');
		}
		$data['list'] = FALSE;
		if($do == 'form'){
			$header['section'] = 'Edit Talleres';
			if($id == 0)
				$header['section'] = 'Add Talleres';
			$this->load->view('admin/header',$header);
			/*********************************** Talleres add-modify *********************************/
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('subtitle', 'Subtitle', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('course_date', 'course_date Date', 'trim|required');
			$this->form_validation->set_rules('date_text', 'Date Text', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', '');
		
			
			if ($this->form_validation->run() == FALSE){
				$data['id'] = $id;	
				$data['values'] = $this->admin_functions->getTalleres($id);
				$data['message'] = '';
			}else{
				
				$values['title'] = $this->admin_functions->getPostValue('title');
				$values['subtitle'] = $this->admin_functions->getPostValue('subtitle');
				$values['description'] = $this->admin_functions->getPostValue('description');
				$values['course_date'] = $this->admin_functions->getPostValue('course_date');
				$values['date_text'] = $this->admin_functions->getPostValue('date_text');
				$values['status'] = $this->admin_functions->getPostValue('status','checkbox');
				
				$put = $this->admin_functions->put('Talleres',$values,$id);
				if($put){
					$data['message'] = '<div id="success">New Talleres successfuly updated</div>';
					$data['list'] = $this->admin_functions->getTalleresList($sort);
				}else{
					$data['id'] = $id;
					$data['message'] = '<div id="error">Error on action, please try again!!</div>';
				}
			}
			/********************************* Talleres add-modify eof *******************************/
		}elseif($do == 'del' && is_numeric($id)){
			$header['section'] = 'Talleres';
			$this->load->view('admin/header',$header);
			/***********************************Talleres del ***********************************/
			$del = $this->admin_functions->delete('Talleres',$id);
			$data['message'] = $del;
			$data['list'] = $this->admin_functions->getTalleresList($sort);
			/////////// Talleres del eof
		}else{
			$header['section'] = 'List of Talleres';
			$this->load->view('admin/header',$header);
			/************************** Talleres list ***********************************/
			$data['message'] = '';
			$data['list'] = $this->admin_functions->getTalleresList();
			/*********************************** Talleres list eof ***********************************/
		}
		$this->load->view('admin/talleres',$data);
		$this->load->view('admin/footer');
	}
	/*********************************** Talleres eof *********************************/
	
	/**************************************************************************************************/
	/**************************************************************************************************/
	/*********************************** SeminariosCat  *********************************/
	function seminarioscat($do = '',$id = 0,$sort = '') {
		if(!$this->admin_functions->isAdminLoggedIn()){
			redirect(base_url().'admin');
		}
		$data['list'] = FALSE;
		if($do == 'form'){
			$header['section'] = 'SeminariosCat';
			if($id == 0)
				$header['section'] = 'Add SeminariosCat';
			$this->load->view('admin/header',$header);
			/*********************************** SeminariosCat add-modify *********************************/
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
		
			
			if ($this->form_validation->run() == FALSE){
				$data['id'] = $id;	
				$data['values'] = $this->admin_functions->getSeminariosCat($id);
				$data['message'] = '';
			}else{
				
				
				$values['name'] = $this->admin_functions->getPostValue('name');
				$values['description'] = $this->admin_functions->getPostValue('description');
				
				$put = $this->admin_functions->put('SeminariosCat',$values,$id);
				if($put){
					$data['message'] = '<div id="success">New SeminariosCat successfuly updated</div>';
					$data['list'] = $this->admin_functions->getSeminariosCatList($sort);
				}else{
					$data['id'] = $id;
					$data['message'] = '<div id="error">Error on action, please try again!!</div>';
				}
			}
			/********************************* SeminariosCat add-modify eof *******************************/
		}elseif($do == 'del' && is_numeric($id)){
			$header['section'] = 'SeminariosCat';
			$this->load->view('admin/header',$header);
			/***********************************SeminariosCat del ***********************************/
			$del = $this->admin_functions->delete('SeminariosCat',$id);
			$data['message'] = $del;
			$data['list'] = $this->admin_functions->getSeminariosCatList($sort);
			/////////// SeminariosCat del eof
		}else{
			$header['section'] = 'List of SeminariosCat';
			$this->load->view('admin/header',$header);
			/************************** SeminariosCat list ***********************************/
			$data['message'] = '';
			$data['list'] = $this->admin_functions->getSeminariosCatList();
			/*********************************** SeminariosCat list eof ***********************************/
		}
		$this->load->view('admin/seminarioscat',$data);
		$this->load->view('admin/footer');
	}
	/*********************************** SeminariosCat eof *********************************/
	
	/**************************************************************************************************/
	/**************************************************************************************************/
	/*********************************** Talleres  *********************************/
	function seminarios($do = '',$id = 0,$sort = '') {
		if(!$this->admin_functions->isAdminLoggedIn()){
			redirect(base_url().'admin');
		}
		$data['list'] = FALSE;
		if($do == 'form'){
			$header['section'] = 'Edit Seminarios';
			if($id == 0)
				$header['section'] = 'Add Seminarios';
			$this->load->view('admin/header',$header);
			/*********************************** Seminarios add-modify *********************************/
			$this->form_validation->set_rules('title', 'Title', 'trim|required');
			$this->form_validation->set_rules('subtitle', 'Subtitle', 'trim|required');
			$this->form_validation->set_rules('description', 'Description', 'trim|required');
			$this->form_validation->set_rules('date', 'Date', 'trim|required');
			$this->form_validation->set_rules('category_id', 'Category', 'trim|required');
			$this->form_validation->set_rules('status', 'Status', '');
		
			
			if ($this->form_validation->run() == FALSE){
				$data['id'] = $id;	
				$data['values'] = $this->admin_functions->getSeminarios($id);
				$data['category'] = $this->admin_functions->getSeminariosCatList();
				$data['message'] = '';
			}else{
				
				$values['title'] = $this->admin_functions->getPostValue('title');
				$values['subtitle'] = $this->admin_functions->getPostValue('subtitle');
				$values['description'] = $this->admin_functions->getPostValue('description');
				$values['category_id'] = $this->admin_functions->getPostValue('category_id');
				$values['date'] = $this->admin_functions->getPostValue('date');
				$values['status'] = $this->admin_functions->getPostValue('status','checkbox');
				
				$put = $this->admin_functions->put('Seminarios',$values,$id);
				if($put){
					$data['message'] = '<div id="success">New Seminarios successfuly updated</div>';
					$data['list'] = $this->admin_functions->getSeminariosList($sort);
				}else{
					$data['id'] = $id;
					$data['message'] = '<div id="error">Error on action, please try again!!</div>';
				}
			}
			/********************************* Seminarios add-modify eof *******************************/
		}elseif($do == 'del' && is_numeric($id)){
			$header['section'] = 'Seminarios';
			$this->load->view('admin/header',$header);
			/***********************************Seminarios del ***********************************/
			$del = $this->admin_functions->delete('Seminarios',$id);
			$data['message'] = $del;
			$data['list'] = $this->admin_functions->getSeminariosList($sort);
			/////////// Seminarios del eof
		}else{
			$header['section'] = 'List of Seminarios';
			$this->load->view('admin/header',$header);
			/************************** Seminarios list ***********************************/
			$data['message'] = '';
			$data['list'] = $this->admin_functions->getSeminariosList();
			/*********************************** Seminarios list eof ***********************************/
		}
		$this->load->view('admin/seminarios',$data);
		$this->load->view('admin/footer');
	}
	/*********************************** Seminarios eof *********************************/
	
	/**************************************************************************************************/
	/**************************************************************************************************/
	/*********************************** Users  *********************************/
	function users($do = '',$id = 0) {
		if(!$this->admin_functions->isAdminLoggedIn()){
			redirect(base_url().'admin');
		}
		$data['list'] = FALSE;
		if($do == 'form'){
			$header['section'] = 'Edit Users';
			if($id == 0)
				$header['section'] = 'Add Users';
			$this->load->view('admin/header',$header);
			/*********************************** Users add-modify *********************************/
			$this->form_validation->set_rules('email', 'e-mail', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passwordconf]');
			$this->form_validation->set_rules('passwordconf', 'Password Again', 'trim|required');
			$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
			$data['values'] = $this->admin_functions->getUser($id);
			if ($this->form_validation->run() == FALSE){
				$data['id'] = $id;	
				$data['message'] = '';
			}else{
				$values['email'] = $this->admin_functions->getPostValue('email');
				$values['password'] = md5($this->admin_functions->getPostValue('password'));
				$values['first_name'] = $this->admin_functions->getPostValue('first_name');
				$values['last_name'] = $this->admin_functions->getPostValue('last_name');

				$put = $this->admin_functions->putUser($values,$id);
				if($put){
					$data['message'] = '<div id="success">New User successfuly updated</div>';
					$data['list'] = $this->admin_functions->getUserList();
				}else{
					$data['id'] = $id;
					$data['message'] = '<div id="error">Error on action, please try again!! (You may try to duplicate User)</div>';
				}
			}
			/********************************* Users add-modify eof *******************************/
		}elseif($do == 'del' && is_numeric($id)){
			$header['section'] = 'Users';
			$this->load->view('admin/header',$header);
			/***********************************Users del ***********************************/
			$del = $this->admin_functions->deleteUser($id);
			$data['message'] = $del;
			$data['list'] = $this->admin_functions->getUserList();
			/////////// Users del eof
		}else{
			$header['section'] = 'List of Users';
			$this->load->view('admin/header',$header);
			/************************** Users list ***********************************/
			$data['message'] = '';
			$data['list'] = $this->admin_functions->getUserList();
			/*********************************** Users list eof ***********************************/
		}
		$this->load->view('admin/users',$data);
		$this->load->view('admin/footer');
	}
	/*********************************** Users eof *********************************/
	
	/**************************************************************************************************/
	/**************************************************************************************************/
	/*********************************** Addresses  *********************************/
	function addresses($do = '',$id = 0) {
		if(!$this->admin_functions->isAdminLoggedIn()){
			redirect(base_url().'admin');
		}
		$data['list'] = FALSE;
		if($do == 'form'){
			$header['section'] = 'Edit Addresses';
			if($id == 0)
				$header['section'] = 'Add Addresses';
			$this->load->view('admin/header',$header);
			/*********************************** Addresses add-modify *********************************/
			$this->form_validation->set_rules('user_id', 'User', 'trim|required|is_natural_no_zero');
			$this->form_validation->set_rules('phone1', 'Phone 1', 'trim|required');
			$this->form_validation->set_rules('phone2', 'phone2', '');
			$this->form_validation->set_rules('address', 'Address', 'trim|required');
			$this->form_validation->set_rules('apt', 'Apt.', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_rules('state', 'State', 'trim|required');
			$this->form_validation->set_rules('zip', 'Zip', 'trim|required');
			$this->form_validation->set_rules('country', 'Country', 'trim|required');
			$data['values'] = $this->admin_functions->getAdress($id);
			$data['users'] = $this->admin_functions->getUserList();
			if ($this->form_validation->run() == FALSE){
				$data['id'] = $id;	
				$data['message'] = '';
			}else{
				$values['phone1'] = $this->admin_functions->getPostValue('phone1');
				$values['phone2'] = $this->admin_functions->getPostValue('phone2');
				$values['address'] = $this->admin_functions->getPostValue('address');
				$values['apt'] = $this->admin_functions->getPostValue('apt');
				$values['city'] = $this->admin_functions->getPostValue('city');
				$values['state'] = $this->admin_functions->getPostValue('state');
				$values['zip'] = $this->admin_functions->getPostValue('zip');
				$values['country'] = $this->admin_functions->getPostValue('country');
				$values['user_id'] = $this->admin_functions->getPostValue('user_id');

				$put = $this->admin_functions->putAdress('Addresses',$values,$id);
				if($put){
					$data['message'] = '<div id="success">New Address successfuly updated</div>';
					$data['list'] = $this->admin_functions->getAdressList();
				}else{
					$data['id'] = $id;
					$data['message'] = '<div id="error">Error on action, please try again!! (You may try to duplicate Address)</div>';
				}
			}
			/********************************* Addresses add-modify eof *******************************/
		}elseif($do == 'del' && is_numeric($id)){
			$header['section'] = 'Addresses';
			$this->load->view('admin/header',$header);
			/***********************************Addresses del ***********************************/
			$del = $this->admin_functions->delete('Addresses',$id);
			$data['message'] = $del;
			$data['list'] = $this->admin_functions->getAdressList();
			/////////// Addresses del eof
		}else{
			$header['section'] = 'List of Addresses';
			$this->load->view('admin/header',$header);
			/************************** Addresses list ***********************************/
			$data['message'] = '';
			$data['list'] = $this->admin_functions->getAdressList();
			/*********************************** Addresses list eof ***********************************/
		}
		$this->load->view('admin/adresses',$data);
		$this->load->view('admin/footer');
	}
	/*********************************** Addresses eof *********************************/
	
}