<?php

class C_Front extends CI_Controller {
	var $data;

	public function __construct() {

		parent::__construct();
	    $this->data=array();

	}

	public function index() {
		$data['form'] = '<p>You need to login.<p>';
		$this -> load -> view('index', $data);
	}//End of index file

	public function vehicles() {
		$data['status']="";
		$data['response']="";
		$data['form'] = '<p class="error"><br/><br/>No form has been chosen<br/><br/><p>';
		$data['form_id']='';
		$this -> load -> view('pages/vehicles/index', $data);
		//echo 'Vehicles';
	}

	public function formviewer() {
		$data['form'] = '<p class="error"><br/><br/>Choose a Form from the left panel to get started<br/><br/><p>';
		$this -> load -> view('form', $data);
	}
	
	public function reports() {
		$data['status']="";
		$data['response']="";
		$data['form'] = '<p class="error"><br/><br/>No report has been chosen<br/><br/><p>';
		$data['form_id']='';
		$this -> load -> view('reports', $data);
		//echo 'Vehicles';
	}
	
}?>