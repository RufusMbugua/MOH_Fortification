<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB2 entity
 */
use application\models\Entities\entities_salt\E_ExtFortifiedB3;

class M_ExternalFortifiedB3  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize;

	function __construct() {
		parent::__construct();
	}

	function addRecord($iodizationCentre) {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
		
			$this->elements = array();
			$this->theIds=array();
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
		   //print(($key." ".$val)).'<br \>';
				   
			     $this->attr = $key;//the attribute name

				   if (!empty($val)) {
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   	$this->elements[$this->attr]='';
				   }
					
			} //close foreach($_POST)
			
			//exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			//$this->noOfInsertsBatch=max($this->theIds);
			$this->noOfInsertsBatch=1;
			
			//iodization centre name obtained from the session variable => 'affiliation'
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_salt\E_ExtFortifiedB3(); //create an object of the model
		      
			  $this -> theForm -> setInspectionRegistry($this->elements['inspectionRegistry']);
			  $this -> theForm -> setDateOfInspection($this->elements['inspectionDate']);
			  $this -> theForm -> setFactoryName($iodizationCentre);
			  $this -> theForm -> setFactoryRepresentative($this->elements['factoryRepresentative']);
			  $this -> theForm -> setAreasVisited($this->elements['areas_visited']);
			  $this -> theForm -> setNonCompliances($this->elements['nonCompliances']);
			  $this -> theForm -> setSuggestionsForImprovement($this->elements['suggestionsForImprovement']);
			  $this -> theForm -> setPublicHealthOfficer($this->elements['publicHealthOfficer']);
			  $this -> theForm -> setReceivedBy($this->elements['receivedBy']);
			  $this -> theForm -> setInspectorDate($this->elements['inspectorDate']);
			  $this -> theForm -> setReceivedDate($this->elements['receivedDate']);				
			  $this -> theForm ->setSupervisorName($this->elements['supervisorName']);
			  $this -> em -> persist($this -> theForm);


        	//now do a batched insert, default at 5
			  $this->batchSize=5;
		if($i % $this->batchSize==0){
		try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				    //die($ex->getMessage());

					/*display user friendly message*/
					
				}//end of catch
				
			} else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
			$this->noOfInsertsBatch-$i<$this->batchSize){
				 //total records less than a batch, insert all of them
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					//die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition
				// $this->rowsInserted=$i;
				 } //end of innner loop
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
        $this->rowsInserted=$this->noOfInsertsBatch;
		return $this -> response = 'ok';
	}

}//end of class ExtternalFortifiedB2


