<?php
#processes form data before posting to the database

class Form extends MY_Controller{
	
	public function __construct() {
		parent::__construct();
	}
	
	public function form_internalFort_B1(){
		// $this->load->model('IntFortifiedB1');
		 
	    // $this->the_form=new $this->IntFortifiedB1();
		//die(var_dump($this->input->post()));
		//$this->the_form=$this->em->getRepository($this->the_form);
		
	  $this->the_form=new models/IntFortifiedB1(); //set the the model specific to the form
	   
	   //getRepository
	  // $this->the_form=$this->getRepositoryByFormName('models\IntFortifiedB1','id');	
	   //$this->the_form=$this->em->getRepository('models\IntFortifiedB1');	
	  
	   
	   //check if a post was made
		if($this->input->post()){
			$elements = array();
			foreach($_POST as $key=>$val){ //For every posted values
			$frags = explode("_",$key); //we separate the attribute name from the number
			$id = $frags[1]; //That is the id
			$attr = $frags[0]; //And that is the attribute name
			if(!empty($val)){
			//We then store the value of this attribute for this element.
			$elements[$id][$attr] = htmlentities($val);
			
			
			}
			    
			    $this->the_form->setManufacturerCompName($elements[$id]['saltFactory']);
			    $this->the_form->setDates($elements[$id]['fortifiedDate']);
			    $this->the_form->setFillerWeight($elements[$id]['fortifiedWeight']);
				$this->the_form->setIodineWeight($elements[$id]['compoundWeight']);
				$this->the_form->setFinalPremixWeight1($elements[$id]['finalWeight']);
				
				$this->the_form->setStartTime($elements[$id]['startTime']);
				$this->the_form->setEndTime($elements[$id]['endTime']);
				$this->the_form->setFinalPremixWeight($elements[$id]['iodineWeight']);
				$this->the_form->setTransactedBy($elements[$id]['qcReview']);
				$this->em->persist($this->the_form);
				$this->em->flush();
				
			} //close foreach($_POST)
		}//close the this->input->post
		
		
	}//close form_internalFort_B1()
}