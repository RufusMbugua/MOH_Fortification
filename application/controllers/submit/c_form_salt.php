<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_Salt extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_A1(){
		$this->load->model('models_salt/M_InternalFortifiedA1');
		$this->M_InternalFortifiedA1->addRecord();
		
		if($this->M_InternalFortifiedA1->response='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_InternalFortifiedA1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_InternalFortifiedA1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['status'] = "ok";
			$data['form'] = "No Form Chosen";
		    $data['response']='<p><b>'.$this->M_InternalFortifiedA1->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_InternalFortifiedA1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
<<<<<<< HEAD
=======
			
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_A1()
	
	public function form_internalFort_A2(){
		$this->load->model('models_salt/M_InternalFortifiedA2');
		$this->M_InternalFortifiedA2->addRecord();
		
		if($this->M_InternalFortifiedA2->response='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_InternalFortifiedA2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_InternalFortifiedA2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_InternalFortifiedA2->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_InternalFortifiedA2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_A2()
	
	public function form_internalFort_B1(){
		$this->load->model('models_salt/M_InternalFortifiedB1');
		$this->M_InternalFortifiedB1->addRecord();
		
		if($this->M_InternalFortifiedB1->response='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_InternalFortifiedB1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_InternalFortifiedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_InternalFortifiedB1->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_InternalFortifiedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B1()
	
	public function form_internalFort_B2(){
		$this->load->model('models_salt/M_InternalFortifiedB2');
		$this->M_InternalFortifiedB2->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_InternalFortifiedB2->response=='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_InternalFortifiedB2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_InternalFortifiedB2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_InternalFortifiedB2->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_InternalFortifiedB2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_B2()
	
	public function form_internalFort_C1(){
		$this->load->model('models_salt/M_InternalFortifiedC1');
		$this->M_InternalFortifiedC1->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_InternalFortifiedC1->response=='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_InternalFortifiedC1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_InternalFortifiedC1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_InternalFortifiedC1->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_InternalFortifiedC1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
		
	}//close form_internalFort_C1()
	
	public function form_externalFort_B1(){
		$this->load->model('models_salt/M_ExternalFortifiedB1');
		$this->M_ExternalFortifiedB1->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_ExternalFortifiedB1->response=='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_ExternalFortifiedB1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_ExternalFortifiedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_ExternalFortifiedB1->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_ExternalFortifiedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B1()
	
	public function form_externalFort_B2(){
		$this->load->model('models_salt/M_ExternalFortifiedB2');
		$this->M_ExternalFortifiedB2->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_ExternalFortifiedB2->response=='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_ExternalFortifiedB2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_ExternalFortifiedB2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_ExternalFortifiedB2->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_ExternalFortifiedB2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B2()
	
	public function form_externalFort_B3(){
		$this->load->model('models_salt/M_ExternalFortifiedB3');
		$this->M_ExternalFortifiedB3->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_ExternalFortifiedB3->response=='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_ExternalFortifiedB3->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_ExternalFortifiedB3->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_ExternalFortifiedB3->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_ExternalFortifiedB3->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalFort_B3()
	
	public function form_externalIod_B1(){
		$this->load->model('models_salt/M_ExternalIodizedB1');
		$this->M_ExternalIodizedB1->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_ExternalIodizedB1->response=='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_ExternalIodizedB1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_ExternalIodizedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_ExternalIodizedB1->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_ExternalIodizedB1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_externalIod_B1()
	
		public function form_smallScale_A1(){
		$this->load->model('models_salt/M_smallScaleA1');
		$this->M_smallScaleA1->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_smallScaleA1->response=='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_smallScaleA1->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_smallScaleA1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_smallScaleA1->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_smallScaleA1->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_smallScale_A1()
	
		public function form_smallScale_A2(){
		$this->load->model('models_salt/M_smallScaleA2');
		$this->M_smallScaleA2->addRecord($this->session->userdata('affiliation'));
		
		if($this->M_smallScaleA2->response=='ok'){
			//notify user of success
			$data['form_id']="";
<<<<<<< HEAD
			$data['form']='<p><b>'.$this->M_smallScaleA2->rowsInserted.'</b> record(s) submitted successfully in 
			approximately <b>'.$this->M_smallScaleA2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'c_front/vehicles/index', 'location');
=======
			$data['form']='<p><b>'.$this->M_smallScaleA2->rowsInserted.'</b> records were inserted successfully in 
			approximately <b>'.$this->M_smallScaleA2->executionTime.'</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			$this -> load -> view('pages/vehicles/index', $data);
			
			
		}else{
			//notify user of error/failure
		}
		
	}//close form_smallScale_A2()
}