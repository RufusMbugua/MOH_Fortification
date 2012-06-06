<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB2 entity
 */
use application\models\Entities\entities_salt\E_ExtIodizationB1;

class M_ExternalIodizedB1  extends MY_Model {
<<<<<<< HEAD
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize, $centres;
=======
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize;
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2

	function __construct() {
		parent::__construct();
	}

	function addRecord($iodizationCentre) {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
		
			$this->elements = array();
			$this->theIds=array();
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
<<<<<<< HEAD
		    //print(($key." ".$val)).'<br \>';
			   
				   
			     $this->attr = $key;//the attribute name
				   if (!empty($val)){
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   	$this->elements[$this->attr]='';
				   }
=======
		   // print(($key." ".$val)).'<br \>';
			   
			//check if posted value is among the cloned ones   
			/* if(!strpos("_",$key)){//useful to keep all the  non-cloned elements in the loop
			 	$key=$key."_1";
			 }*/
			  		//we separate the attribute name from the number
					
					/* $this->frags = explode("_", $key);
				   
				    $this->id = $this->frags[1];  // the id
				    
				  
				   $this->attr = $this->frags[0];//the attribute name
				   
				  $this->theIds[$this->attr]=$this->id;*/
			    //print($this->attr."  ".$this->id."  ".$val).'<br />';
				   
			     $this->attr = $key;//the attribute name
				   if (!empty($val)) 
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->elements[$this->attr]=htmlentities($val);
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
					
			} //close foreach($_POST)
			
			//exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			//$this->noOfInsertsBatch=max($this->theIds);
			$this->noOfInsertsBatch=1;
			
<<<<<<< HEAD
			//get factory name by id
			try{
			$centre=$this->em->getRepository('models\Entities\E_Factories')
			                       ->findOneBy( array('factoryNumber'=>$this->input->post('iodizationCenter')));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
=======
			//iodization centre name obtained from the session variable => 'affiliation'
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_salt\E_ExtIodizationB1(); //create an object of the model
		      
			 
				$this -> theForm -> setDates(new DateTime()); /*timestamp option*/
<<<<<<< HEAD
				$this -> theForm -> setFactoryName($centre->getFactoryName());/*pick from user since it's done by an external auditor hence session affiliation is void*/
=======
				$this -> theForm -> setFactoryName($iodizationCentre);
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
				$this -> theForm -> setInspector($this->elements['inspector']);
				$this -> theForm -> setInventoryUpToDate($this->elements['inventory']);
				$this -> theForm -> setSufficientIodine3Months($this->elements['sufficient']);
				$this -> theForm -> setInventoryUpToDate($this->elements['inventory']);
				$this -> theForm -> setAdequateStorage($this->elements['storage']);
				$this -> theForm -> setPotassiumIodateAmounts($this->elements['potassium']);
				$this -> theForm -> setPremixRecords($this->elements['precord']);
				$this -> theForm -> setFifoSystem($this->elements['fifo']);
				$this -> theForm -> setSaltVSPremix($this->elements['premix']);
				$this -> theForm -> setIodizedSaltUpdate($this->elements['records']);
				$this -> theForm -> setSaltPerKgAdequate($this->elements['packaging']);
				$this -> theForm -> setSampleNumber($this->elements['sampleNumber']);
				$this -> theForm -> setIodineContent0($this->elements['iodineContent0']);
				$this -> theForm -> setSampleReprocessed($this->elements['reprocessedSamples']);
				$this -> theForm -> setIodineContent1($this->elements['iodineContent1']);
				$this -> theForm -> setNonCompliances($this->elements['nonCompliances']);
				$this -> theForm -> setSuggestionsForImprovement($this->elements['improvementSuggestions']);
				$this -> theForm ->setSupervisorName($this->elements['supervisorName']);
<<<<<<< HEAD
				$this -> theForm ->setReceivedBy($this->elements['factoryRepresentative']);
=======
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
				$this -> em -> persist($this -> theForm);


        	//now do a batched insert, default at 5
			  $this->batchSize=5;
		if($i % $this->batchSize==0){
		try{
					
				$this -> em -> flush();
				$this->em->clear(); //detaches all objects from doctrine
				}catch(Exception $ex){
				    die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			} else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
			$this->noOfInsertsBatch-$i<$this->batchSize){
				 //total records less than a batch, insert all of them
				try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					die($ex->getMessage());
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

<<<<<<< HEAD
   function getIodizationCentres(){
		 /*using DQL*/
	      $query = $this->em->createQuery('SELECT f.factoryNumber,f.factoryName FROM models\Entities\E_Factories f');
          $this->centres = $query->getResult();
		return $this->centres;
	}/*end of getIodizationCentres*/

=======
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
}//end of class ExtternalFortifiedB2
