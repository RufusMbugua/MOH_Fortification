<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB2 entity
 */
use application\models\Entities\entities_sugar\E_Sugar_ExternalFort_B2;

class M_Sugar_ExternalFort_B2  extends MY_Model {
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
					
			} //close foreach($_POST)
			
			//exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			//$this->noOfInsertsBatch=max($this->theIds);
			$this->noOfInsertsBatch=1;
			
			//iodization centre name obtained from the session variable => 'affiliation'
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_sugar\E_Sugar_ExternalFort_B2(); //create an object of the model
		      
			 	
				$this -> theForm -> setDates(new DateTime()); /*timestamp option*/
				$this -> theForm -> setFactoryName($iodizationCentre);
				$this -> theForm -> setPublicHealthOfficer($this->elements['inspectionOfficerName']);
				$this -> theForm -> setInspectionRegistry($this->elements['inspectionRegistry']);
				//$this -> theForm -> setDates($this->elements['inspectionDate']);;/*entry option
				$this -> theForm ->setProductionArea($this->elements['productionArea']); 
				$this -> theForm ->setPackagingArea($this->elements['packagingArea']);
				$this -> theForm ->setWarehouse($this->elements['warehouse']);
				$this -> theForm ->setStaffFacilities($this->elements['staffFacilities']);
				$this -> theForm ->setHygiene($this->elements['hygiene']);
				$this -> theForm ->setProtectiveClothing($this->elements['protectiveClothing']);
				$this -> theForm ->setTrainedInTasks($this->elements['trainedInTask']);
				//$this -> theForm ->setWrittenProcedures($this->elements['']);
				$this -> theForm ->setReceiptAndStorage($this->elements['receiptAndStorage']);
				$this -> theForm ->setFeederVerification($this->elements['feederVerification']);
				$this -> theForm ->setSugarSampling($this->elements['samplingSugar']);
				$this -> theForm ->setVitaminAAssay($this->elements['vitaminAAssay']);
				$this -> theForm ->setPremixInventory($this->elements['premixInventoryUpToDate']);
				$this -> theForm ->setAdequateStorage($this->elements['storedAdequate']);
				$this -> theForm ->setFIFOSystem($this->elements['fifoSystem']);
				$this -> theForm ->setDeliveredAdequately($this->elements['adequatelyDelivered']);
				$this -> theForm ->setRetinolLevels($this->elements['retinolLevels']);
				$this -> theForm ->setFeederFlow($this->elements['feederFlow']);
				$this -> theForm ->setFeederRecords($this->elements['feederRecordsAvailable']);
				$this -> theForm ->setFeederAdjusted($this->elements['feederAdjusted']);
				$this -> theForm ->setPremixLevelAdequate($this->elements['premixLevelAdequate']);
				$this -> theForm ->setMaintenanceEvidence($this->elements['feederMaintenance']);
				$this -> theForm ->setSugarRecords($this->elements['sugarPremix']);
				$this -> theForm ->setSugarRatio($this->elements['ratioAction']);
				$this -> theForm ->setRetinolResults($this->elements['retinolResults']);
				$this -> theForm ->setSemiQuantitativeMethod($this->elements['semiQuantitative']);
				$this -> theForm ->setInternalLab($this->elements['internalLab']);
				$this -> theForm ->setExternalLab($this->elements['externalLab']);
				$this -> theForm ->setDailySamples($this->elements['dailyCompPrepared']);
				$this -> theForm ->setLast30Samples($this->elements['lastSamplesStored']);
				$this -> theForm ->setLabelingSpecifications($this->elements['goodLabeling']);
				$this -> theForm ->setFortifiedSugar($this->elements['fortifiedSugarStored']);
				$this -> theForm ->setFIFOSystemDispatch($this->elements['fifoSystemDispatched']);
				$this -> theForm ->setRecommendations($this->elements['auditRecommendations']);
				$this -> theForm ->setCorrectiveActions($this->elements['correctiveActionTaken']);
				$this -> theForm ->setAssessment($this->elements['assessmentCorrectiveAction']);
				$this -> theForm ->setComments($this->elements['auditComments']);
				$this -> theForm ->setNonCompliances($this->elements['nonCompliancesIdentified']);
				$this -> theForm ->setSuggestions($this->elements['suggestionsForImprovement']);
				$this -> theForm ->setPremixType($this->elements['vitaminFortificant']);
				$this -> theForm ->setIDSamples($this->elements['IDComposite']);
				$this -> theForm ->setEstimatedAverage0($this->elements['estimatedAverage0']);
				$this -> theForm ->setInspectionResults0($this->elements['inspectionResults0']);
				$this -> theForm ->setIDOtherSamples($this->elements['IDOther']);
				$this -> theForm ->setEstimatedAverage1($this->elements['estimatedAverage1']);
				$this -> theForm ->setinspectionResults1($this->elements['inspectionResults1']);		
				//$this -> theForm ->setIodineMgPerKg3($this->elements['IDOtherMgKg2']);
				$this -> theForm ->setSupervisorName($this->elements['supervisorName']);
				$this -> theForm ->setSupervisorDate(new DateTime());
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

}//end of class ExtternalFortifiedB2
