<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before committing to the data-layer of the maize module
class C_Form_Maize extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_A1(){
		$this->load->model('models_maize/M_Maize_InternalFort_A1');
		$this->M_Maize_InternalFort_A1->addRecord();
		
		if($this->M_Maize_InternalFort_A1->response='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Maize_InternalFort_A1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Maize_InternalFort_A1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_A1()
	
	public function form_internalFort_A2(){
		$this->load->model('models_maize/M_Maize_InternalFort_A2');
		$this->M_Maize_InternalFort_A2->addRecord();
		
		if($this->M_Maize_InternalFort_A2->response='ok'){
			//notify user of successmodels_maize/M_Maize_InternalFort_A2
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Maize_InternalFort_A2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Maize_InternalFort_A2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_A2()
	
	public function form_internalFort_B1(){
		$this->load->model('models_maize/M_Maize_InternalFort_B1');
		$this->M_Maize_InternalFort_B1->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_Maize_InternalFort_B1->response='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Maize_InternalFort_B1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Maize_InternalFort_B1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B1()
	
	public function form_internalFort_B2(){
		$this->load->model('models_maize/M_Maize_InternalFort_B2');
		$this->M_Maize_InternalFort_B2->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_Maize_InternalFort_B2->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Maize_InternalFort_B2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Maize_InternalFort_B2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B2()
	
	public function form_internalFort_C1(){
		$this->load->model('models_maize/M_Maize_InternalFort_C1');
		$this->M_Maize_InternalFort_C1->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_Maize_InternalFort_C1->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Maize_InternalFort_C1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Maize_InternalFort_C1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_C1()
	
	public function form_externalFort_B1(){
		$this->load->model('models_maize/M_Maize_ExternalFort_B1');
		$this->M_Maize_ExternalFort_B1->addRecord();
		
		if($this->M_Maize_ExternalFort_B1->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Maize_ExternalFort_B1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Maize_ExternalFort_B1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B1()
	
	public function form_externalFort_B2(){
		$this->load->model('models_maize/M_Maize_ExternalFort_B2');
		$this->M_Maize_ExternalFort_B2->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_Maize_ExternalFort_B2->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Maize_ExternalFort_B2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Maize_ExternalFort_B2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B2()
	
	public function form_externalFort_B3(){
		$this->load->model('models_maize/M_Maize_ExternalFort_B3');
		$this->M_Maize_ExternalFort_B3->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_Maize_ExternalFort_B3->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_Maize_ExternalFort_B3->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_Maize_ExternalFort_B3->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B3()
	
	public function form_externalIod_B1(){
		$this->load->model('M_ExternalIodizedB1');
		$this->M_ExternalIodizedB1->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_ExternalIodizedB1->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_ExternalIodizedB1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_ExternalIodizedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalIod_B1()
	
		public function form_smallScale_A1(){
		$this->load->model('M_smallScaleA1');
		$this->M_smallScaleA1->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_smallScaleA1->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_smallScaleA1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_smallScaleA1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_smallScale_A1()
	
		public function form_smallScale_A2(){
		$this->load->model('M_smallScaleA2');
		$this->M_smallScaleA2->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_smallScaleA2->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->M_smallScaleA2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_smallScaleA2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_smallScale_A2()
}