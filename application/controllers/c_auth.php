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
	
	
	
	public function logout(){
		$data['form'] = '<p>You need to login.<p>';
		$this -> load -> view('index', $data);
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}

}?>