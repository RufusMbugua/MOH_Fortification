<?php
/*helps authenticate a user*/
class Auth extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		
	}

	public function login() {
		
		//working with a user defined query
		/*$query = $this->em->createQuery('SELECT u.id,u.username,u.access_level FROM models\SystemUser u WHERE u.username = :name AND u.password= :secret');
          $query->setParameter('name', $this -> input -> post('username'));
		  $query->setParameter('secret', $this -> input -> post('secret'));
          $user = $query->getResult(); */
       
       //Working with an object of the entity
		$user = $this->em->getRepository('models\SystemUser')
						->findOneBy(array('username' => $this -> input -> post('username'), 'password' => $this -> input -> post('secret')));
     
			
		//if ($user[0]['id'] >0) {//for array based
	    if ($user) {
			//$user = $this->em->find('models\SystemUser',$user[0]['id']); //pass to the object

			$email = $user -> getUsername();
			$userRights=$user->getAccessLevel();

			$newdata = array('email' => $email, 'logged_in' => TRUE);

			$this -> session -> set_userdata($newdata);
			
			//specify user access rights
			/* Check Authority / User Level
			 * Where:
			 * 1. Administrator  =>  HIGHEST
			 * 2. Supervisor
			 * 3. Inspector      =>  LOWEST
			 */
			switch($userRights) {
				case 1 :
					redirect(base_url() . 'back', 'refresh');
					break;
				case 2 :
					redirect(base_url() . 'back', 'refresh');
					break;
				case 3 :
					redirect(base_url() . 'front/vehicles', 'refresh');
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