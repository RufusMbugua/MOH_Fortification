<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before posting to the database



class Form extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_B1(){
		$this->load->model('InternalFortifiedB1');
		$this->InternalFortifiedB1->addRecord();
		
		if($this->InternalFortifiedB1->response='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->InternalFortifiedB1->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->InternalFortifiedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B1()
}