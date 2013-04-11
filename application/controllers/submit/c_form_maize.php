<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before committing to the data-layer of the maize module
class C_Form_Maize extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_A1(){
		$this->load->model('models_maize/m_maize_internalfort_a1');
		$this->m_maize_internalfort_a1->addRecord();
		
		if($this->m_maize_internalfort_a1->response='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->m_maize_internalfort_a1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_maize_internalfort_a1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_A1()
	
	public function form_internalFort_A2(){
		$this->load->model('models_maize/m_maize_internalfort_a2');
		$this->m_maize_internalfort_a2->addRecord();
		
		if($this->m_maize_internalfort_a2->response='ok'){
			//notify user of successmodels_maize/m_maize_internalfort_a2
			$data['form_id']="";
			$data['form']='<p><b>'.$this->m_maize_internalfort_a2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_maize_internalfort_a2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_A2()
	
	public function form_internalFort_B1(){
		$this->load->model('models_maize/m_maize_internalfort_b1');
		$this->m_maize_internalfort_b1->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_maize_internalfort_b1->response='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->m_maize_internalfort_b1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_maize_internalfort_b1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B1()
	
	public function form_internalFort_B2(){
		$this->load->model('models_maize/m_maize_internalfort_b2');
		$this->m_maize_internalfort_b2->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_maize_internalfort_b2->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->m_maize_internalfort_b2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_maize_internalfort_b2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B2()
	
	public function form_internalFort_C1(){
		$this->load->model('models_maize/m_maize_internalfort_c1');
		$this->m_maize_internalfort_c1->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_maize_internalfort_c1->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->m_maize_internalfort_c1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_maize_internalfort_c1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_C1()
	
	public function form_externalFort_B1(){
		$this->load->model('models_maize/m_maize_externalfort_b1');
		$this->m_maize_externalfort_b1->addRecord();
		
		if($this->m_maize_externalfort_b1->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->m_maize_externalfort_b1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_maize_externalfort_b1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B1()
	
	public function form_externalFort_B2(){
		$this->load->model('models_maize/m_maize_externalfort_b2');
		$this->m_maize_externalfort_b2->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_maize_externalfort_b2->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->m_maize_externalfort_b2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_maize_externalfort_b2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B2()
	
	public function form_externalFort_B3(){
		$this->load->model('models_maize/m_maize_externalfort_b3');
		$this->m_maize_externalfort_b3->addRecord($this->session->userdata('affiliation'));
		
		if($this->m_maize_externalfort_b3->response=='ok'){
			//notify user of success
			$data['form_id']="";
			$data['form']='<p><b>'.$this->m_maize_externalfort_b3->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->m_maize_externalfort_b3->executionTime.'</b> seconds.</p>';
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