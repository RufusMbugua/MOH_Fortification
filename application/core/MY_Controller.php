<?php
## Extend CI_Controller to include Doctrine Entity Manager

class  MY_Controller  extends  CI_Controller  {

public $em, $response, $theForm, $rowsInserted, $executionTime,$data,
      $selectCompManufacturers,$selectPremixType, $selectIodizationCentre,$selectFactoryByManufacturer;

function __construct()  {
		parent::__construct();
		
		/* Instantiate Doctrine's Entity manage so we don't have
		   to everytime we want to use Doctrine */
		   
		$this->em = $this->doctrine->em;
		$this->response='';
		$this->theForm='';
		$this->data='';
		$this->selectCompManufacturers='';
		$this->selectPremixType='';
		$this->selectIodizationCentre='';
		
		$this->getCompManufacturerNamesAndIds();
		$this->getPremixTypesAndIds();
		$this->getIodizationCentreNames();
	}

	function  getRepositoryByFormName($form){
		$this->the_form=$this->em->getRepository($form);
		return $this->theForm;
	}

	public function getCompManufacturerNamesAndIds(){/*obtained from the session data*/
		       if($this -> session -> userdata('compoundManufacturers'))
				foreach($this -> session -> userdata('compoundManufacturers') as $key=>$value){
				$this->selectCompManufacturers.= '<option value="'.$value['manufacturerId'].'">'.$value['manufacturerCompName'].'</option>'.'<br />';
				}
				
				return $this->selectCompManufacturers;
			
		}
	
	public function getPremixTypesAndIds(){  /*obtained from the session data*/
	       if($this -> session -> userdata('premixType'))
			foreach($this -> session -> userdata('premixType') as $key=>$value){
			$this->selectPremixType.= '<option value="'.$value['productId'].'">'.$value['productName'].'</option>'.'<br />';
			}
		return $this->selectPremixType;
	}
	
	public function getIodizationCentreNames(){ /*obtained from the session data*/
	       if($this -> session -> userdata('iodizationCentre'))
			foreach($this -> session -> userdata('iodizationCentre') as $key=>$value){
			$this->selectIodizationCentre.= '<option value="'.$value['factoryNumber'].'">'.$value['factoryName'].'</option>'.'<br />';
			}
		return $this->selectIodizationCentre;
	}
	
	public function getIodizationCentreNames(){ /*obtained from the session data*/
	       if($this -> session -> userdata('affiliation'))
			foreach($this -> session -> userdata('iodizationCentre') as $key=>$value){
			$this->selectFactoryByManufacturer.= '<option value="'.$value['factoryNumber'].'">'.$value['factoryName'].'</option>'.'<br />';
			}
		return $this->selectFactoryByManufacturer;
	}

}  