<?php
## Extend CI_Model to include Doctrine Entity Manager

class  MY_Model  extends  CI_Model{

public $em, $response, $theForm,$centre,$compoundManufacturer,$premix,$manufacturer,$factories;

function __construct() {
		parent::__construct();
		
		/* Instantiate Doctrine's Entity manage so we don't have
		   to everytime we want to use Doctrine */
		   
		$this->em = $this->doctrine->em;
		$this->response='';
		$this->theForm='';
	}

   /*utilized in several models*/
	public function getFactoryName($id){
		try{
			$this->centre=$this->em->getRepository('models\Entities\E_Factories')
			                       ->findOneBy( array('factoryNumber'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
	/*utilized in other models*/
	public function getCompoundManufacturerName($id){
		try{
			$this->compoundManufacturer=$this->em->getRepository('models\Entities\E_ManufacturerCompound')
			                       ->findOneBy( array('manufacturerId'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
	/*utilized in other models*/
	public function getPremixName($id){
		try{
			$this->premix=$this->em->getRepository('models\Entities\E_PremixType')
			                       ->findOneBy( array('productId'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
	/*utilized in several models*/
	public function getManufacturerName($id){
		try{
			$this->manufacturer=$this->em->getRepository('models\Entities\E_ManufacturerFortified')
			                       ->findOneBy( array('manufacturerFortId'=>$id));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
	}
	
	/*utilitized in external_B1's*/
	/*public function getFactoriesByVehicle($vehicle){
		try{
			//using DQL
	      $query = $this->em->createQuery('(SELECT f.factoryNumber,f.factoryName FROM models\Entities\E_Factories f WHERE f.manufacturerFortName
	                                      IN (SELECT m.manufactuerFortName FROM models\Entities\E_ManufacturerFortified m WHERE m.vehicleName= :name)');
		  //$query->setParameter('name', $vehicle);
          $this->factories = $query->getResult();
		
			}catch(exception $ex){
				//ignore
				die($ex->getMessage());
			}
			
			return $this->factories;
	}*/
}