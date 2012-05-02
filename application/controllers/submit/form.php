<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before posting to the database



class Form extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_B1(){
		$this->load->model('InternalFortifiedB1');
		$this->InternalFortifiedB1->addRecord();
		
		if($this->internalFortifiedB1->response='ok'){
			//notify user of success
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B1()
}