<?php 

class C_Charts extends CI_Controller{
	
	public function _construct() {

		parent::_construct();
		$this -> load -> helper('url');

	}

	public function index() {
		$data['status']="";
		$data['response']="";
		$data['form'] = '<p class="error"><br/><br/>No form has been chosen<br/><br/><p>';
		$data['form_id']='';
		$data['page']='Front-End';
		$data['content'] = 'Reports';
		$data['title']='Reports';
		$this -> load -> view('template', $data);
	}//End of index file
	
}

?>