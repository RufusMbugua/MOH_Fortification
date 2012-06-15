<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_Wheat extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function form_internalFort_A1() {
		$this -> load -> model('models_wheat/M_Wheat_InternalFort_A1');
		$this -> M_Wheat_InternalFort_A1 -> addRecord();

		if ($this -> M_Wheat_InternalFort_A1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Wheat_InternalFort_A1 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Wheat_InternalFort_A1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

	public function form_internalFort_A2() {
		$this -> load -> model('models_wheat/M_Wheat_InternalFort_A2');
		$this -> M_Wheat_InternalFort_A2 -> addRecord();

		if ($this -> M_Wheat_InternalFort_A2 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Wheat_InternalFort_A2 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Wheat_InternalFort_A2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

	public function form_internalFort_B1() {
		$this -> load -> model('models_wheat/M_Wheat_InternalFort_B1');
		$this -> M_Wheat_InternalFort_B1 -> addRecord($this->session->userdata('affiliation'));

		if ($this -> M_Wheat_InternalFort_B1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Wheat_InternalFort_B1 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Wheat_InternalFort_B1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

	public function form_internalFort_B2() {
		$this -> load -> model('models_wheat/M_Wheat_InternalFort_B2');
		$this -> M_Wheat_InternalFort_B2 -> addRecord($this->session->userdata('affiliation'));

		if ($this -> M_Wheat_InternalFort_B2 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Wheat_InternalFort_B2 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Wheat_InternalFort_B2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

	public function form_internalFort_C1() {
		$this -> load -> model('models_wheat/M_Wheat_InternalFort_C1');
		$this -> M_Wheat_InternalFort_C1 -> addRecord($this->session->userdata('affiliation'));

		if ($this -> M_Wheat_InternalFort_C1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Wheat_InternalFort_C1 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Wheat_InternalFort_C1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

public function form_externalFort_B1(){
		$this->load->model('models_wheat/M_Wheat_ExternalFort_B1');
		$this->M_Wheat_ExternalFort_B1->addRecord();
		
		
		
		if($this->M_Wheat_ExternalFort_B1->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Wheat_ExternalFort_B1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Wheat_ExternalFort_B1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B1()
	
	public function form_externalFort_B2(){
		$this->load->model('models_wheat/M_Wheat_ExternalFort_B2');
		$this->M_Wheat_ExternalFort_B2->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_Wheat_ExternalFort_B2->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Wheat_ExternalFort_B2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Wheat_ExternalFort_B2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B1()

		public function form_externalFort_B3(){
		$this->load->model('models_wheat/M_Wheat_ExternalFort_B3');
		$this->M_Wheat_ExternalFort_B3->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_Wheat_ExternalFort_B3->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Wheat_ExternalFort_B3->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Wheat_ExternalFort_B3->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B1()
}
