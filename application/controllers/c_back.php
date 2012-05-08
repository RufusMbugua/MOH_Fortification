<?php 

class C_Back extends CI_Controller{
	
	public function _construct() {

		parent::_construct();
		$this -> load -> helper('url');

	}

	public function index() {
		$this -> load -> view('pages/backend/index');
	}//End of index file
	
}

?>