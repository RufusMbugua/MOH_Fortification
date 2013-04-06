<?php 

class C_Charts extends CI_Controller{
	
	public function _construct() {

		parent::_construct();
		$this -> load -> helper('url');

	}

	public function index() {
		$data['status']="";
		$data['response']="";
		$data['form'] = '<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>';
		$data['form_id']='';
		$data['page']='Front-End';
		$data['content'] = 'Reports';
		$data['title']='Reports';
		$this -> load -> view('template', $data);
	}//End of index file
	
}

?>