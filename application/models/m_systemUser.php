<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to SystemUser entity
 */
use application\models\Entities\e_systemuser;

class M_SystemUser extends MY_Model {
	var $isUser,$email,$userRights,$affiliation,$vehicle;

	function __construct() {
		parent::__construct();
		$this->isUser='false';
		$this->email='';$this->userRights='';$this->affiliation='';
		$this->vehicle='';
	}

	function getUser() {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
			
       //Working with an object of the entity
		$user = $this->em->getRepository('models\Entities\e_systemuser')->findOneBy(array('username' => $this -> input -> post('username'), 'password' => $this -> input -> post('secret')));
	    
		
		
	    if($user){
	    	$this->email = $user -> getUsername();
			$this->userRights=$user->getUserRights();
			$this->affiliation=$user->getAffiliation();
			return $this->isUser='true';
	    }
		
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
		return $this -> isUser = 'true';
	} /*end of getUser()*/
	
	/*used by controllers/C_Auth */
	public function getVehicleNameByUser($affiliation)
	{
		try{
			//using DQL
	      $query = $this->em->createQuery('SELECT m.vehicleName FROM models\Entities\E_ManufacturerFortified m WHERE m.manufactuerFortName
	                                      IN (SELECT f.manufacturerFortName FROM models\Entities\E_Factories f WHERE f.factoryName= :name)');
		  $query->setParameter('name', $affiliation);
          $this->vehicle = $query->getResult();
		
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
			
			return $this->vehicle;
	}
	
	function addUser(){
		
	}
	
	function deactivateUser(){
		
	}
	
	function activateUser(){
		
	}
	
	function listUsers(){
		
	}

}//end of class M_SystemUser
