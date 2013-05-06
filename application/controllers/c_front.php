<?php

class C_Front extends MY_Controller {
	var $data;

	public function __construct() {

		parent::__construct();
	    $this->data=array();

	}

	public function index() {
		if(!$this -> session -> userdata('logged_in')){
		    $this->access_site();
		}else{
		 $this->vehicles();
		}
	}//End of index file
	
	//function to load the login view if session is timed-out
	public function access_site(){
		$data['form'] = '<p>You need to login.<p>';
		$data['page']='Login';
		$data['title']='Welcome';
		$this -> load -> view('template', $data);
	}

	public function vehicles() {
		if(!$this -> session -> userdata('logged_in')){
		    $this->access_site();
		}else{
		$data['status']="";
		$data['response']="";
		$data['form'] = '<p class="error"><br/><br/>No form has been chosen<br/><br/><p>';
		$data['form_id']='';
		$this->load_template_view();
		
		}
	}


	public function formviewer() {
		$data['form'] = '<p class="error"><br/><br/>Choose a Form from the left panel to get started<br/><br/><p>';
		$this -> load -> view('form', $data);
	}
	
	
	
}?>