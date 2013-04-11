<?php
/*helps authenticate a user*/
class C_Auth extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function login() {
		$this->load->model('m_systemuser');
		$this->m_systemuser->getUser();
	    if ($this->m_systemuser->isUser=='true') {
	    	
			/*retrieve vehicle name by affiliation*/
			if($this->m_systemuser->affiliation=="KEBS" || $this->m_systemuser->affiliation=="MOPHS"){
			   $vehicle="N/A";
				//die(print "KEBS/MOH Login: ".$vehicle);
			}else{
				$this->m_systemuser->getVehicleNameByUser($this->m_systemuser->affiliation);
				$vehicle=$this->m_systemuser->vehicle[0]['vehicleName'];

				//die(print "Manufacturer Login: ".$vehicle);
			}
			
			
			/*create session data*/
			$newdata = array('email' => $this->m_systemuser->email, 'logged_in' => TRUE, 'userRights'=>$this->m_systemuser->userRights,
			          'affiliation'=>$this->m_systemuser->affiliation, 'vehicle'=>$vehicle);

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
			
			
			switch($this->m_systemuser->userRights) {
				case 1:
					redirect(base_url() . 'c_back', 'refresh');
					break;
				case 2:
					#redirect(base_url() . 'c_back', 'refresh');
					redirect(base_url() . 'c_front/vehicles', 'refresh');
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
		$this->load->model('models_salt/m_internalfortifiedb2');
		try{
		$this->m_internalfortifiedb2->getManucDevicesByIodizationCenter($this->session->userdata('affiliation'));
		$device_array=array('devices'=>$this->m_internalfortifiedb2->equipment);
		$this -> session -> set_userdata($device_array);
		
		}catch(exception $ex){
			//ignore
		}
		
	}
   
   public function doRetrieveCompoundManufacturerNames(){
   	    $this->load->model('models_salt/m_internalfortifieda1');
		
		try{
		$this->m_internalfortifieda1->getCompoundManufacturerNames();
		$compFName_array=array('compoundManufacturers'=>$this->m_internalfortifieda1->compoundManufacturers);
		//die(var_dump($compFName_array));
		$this -> session -> set_userdata($compFName_array);
		}catch(exception $ex){
			//ignore
		}
   }
   
   public function doRetrievePremixTypes(){
   	    $this->load->model('models_salt/m_internalfortifieda1');
		
		try{
		$this->m_internalfortifieda1->getPremixTypes();
		$premixType_array=array('premixType'=>$this->m_internalfortifieda1->premixType);
		$this -> session -> set_userdata($premixType_array);
		}catch(exception $ex){
			//ignore
		}
   }
   
   public function doRetrieveIodizationCentreNames(){
   	    $this->load->model('models_salt/m_externaliodizedb1');
		
		try{
		$this->m_externaliodizedb1->getIodizationCentres();
		$centreName_array=array('iodizationCentre'=>$this->m_externaliodizedb1->centres);
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