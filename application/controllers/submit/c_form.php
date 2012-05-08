<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_A2(){
		$this->load->model('M_InternalFortifiedA2');
		$this->M_InternalFortifiedA2->addRecord();
		
		if($this->M_InternalFortifiedA2->response='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_InternalFortifiedA2->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_InternalFortifiedA2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_A2()
	
	public function form_internalFort_B1(){
		$this->load->model('M_InternalFortifiedB1');
		$this->M_InternalFortifiedB1->addRecord();
		
		if($this->M_InternalFortifiedB1->response='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_InternalFortifiedB1->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_InternalFortifiedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B1()
	
	public function form_internalFort_B2(){
		$this->load->model('M_InternalFortifiedB2');
		$this->M_InternalFortifiedB1->addRecord();
		
		if($this->M_InternalFortifiedB2->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_InternalFortifiedB2->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_InternalFortifiedB2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B2()
}