<?php
/*helps authenticate a user*/
class C_Auth extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		
	}

	public function login() {
		$this->load->model('M_SystemUser');
		$this->M_SystemUser->getUser();
	    if ($this->M_SystemUser->isUser=='true') {
			/*create session data*/
			$newdata = array('email' => $this->M_SystemUser->email, 'logged_in' => TRUE,
			          'affiliation'=>$this->M_SystemUser->affiliation);

			$this -> session -> set_userdata($newdata);
			
			$this->doRetrieveIodizationCentreDevices();
			$this->doRetrieveCompoundManufacturerNames();
			$this->doRetrievePremixTypes();
			$this->doRetrieveIodizationCentreNames();
			//specify user access rights
			/* Check Authority / User Level
			 * Where:
			 * 1. Administrator  =>  HIGHEST
			 * 2. Supervisor
			 * 3. Inspector      =>  LOWEST
			 */
			
			
			switch($this->M_SystemUser->userRights) {
				case 1:
					redirect(base_url() . 'c_back', 'refresh');
					break;
				case 2:
					redirect(base_url() . 'c_back', 'refresh');
					break;
				case 3:
					redirect(base_url() . 'c_front/vehicles', 'refresh');
					break;
				case 4:
				    redirect(base_url() . 'c_front/vehicles', 'refresh');
				    break;
			}


		} else {
			#use an ajax request and not a whole refresh
			$data['form'] = '<p>User Not Found!<p>';
			$this -> load -> view('index', $data);
		}

	}

   public function doRetrieveIodizationCentreDevices(){/**gets the devices by the iodization centre and stores in the session*/
		$this->load->model('models_salt/M_InternalFortifiedB2');
		try{
		$this->M_InternalFortifiedB2->getManucDevicesByIodizationCenter($this->session->userdata('affiliation'));
		$device_array=array('devices'=>$this->M_InternalFortifiedB2->equipment);
		$this -> session -> set_userdata($device_array);
		
		}catch(exception $ex){
			//ignore
		}
		
	}
   
   public function doRetrieveCompoundManufacturerNames(){
   	    $this->load->model('models_salt/M_InternalFortifiedA1');
		
		try{
		$this->M_InternalFortifiedA1->getCompoundManufacturerNames();
		$compFName_array=array('compoundManufacturers'=>$this->M_InternalFortifiedA1->compoundManufacturers);
		//die(var_dump($compFName_array));
		$this -> session -> set_userdata($compFName_array);
		}catch(exception $ex){
			//ignore
		}
   }
   
   public function doRetrievePremixTypes(){
   	    $this->load->model('models_salt/M_InternalFortifiedA1');
		
		try{
		$this->M_InternalFortifiedA1->getPremixTypes();
		$premixType_array=array('premixType'=>$this->M_InternalFortifiedA1->premixType);
		$this -> session -> set_userdata($premixType_array);
		}catch(exception $ex){
			//ignore
		}
   }
   
   public function doRetrieveIodizationCentreNames(){
   	    $this->load->model('models_salt/M_ExternalIodizedB1');
		
		try{
		$this->M_ExternalIodizedB1->getIodizationCentres();
		$centreName_array=array('iodizationCentre'=>$this->M_ExternalIodizedB1->centres);
		//die(var_dump($centreName_array));
		$this -> session -> set_userdata($centreName_array);
		}catch(exception $ex){
			//ignore
			//die ($ex->getMessage());
		}
   }
	
	public function logout(){
		$data['form'] = '<p>You need to login.<p>';
		$this -> load -> view('index', $data);
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
}?>