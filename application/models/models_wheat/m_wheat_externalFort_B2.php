<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB2 entity
 */
use application\models\Entities\entities_wheat\E_Wheat_ExternalFort_B2;

class M_Wheat_ExternalFort_B2  extends MY_Model {
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
			 	
			 $this -> theForm = new \models\Entities\entities_wheat\E_Wheat_ExternalFort_B2(); //create an object of the model
		      
			 	
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
				$this -> theForm ->setWearingProtective($this->elements['protectiveClothing']);
				$this -> theForm ->setTrainedInTasks($this->elements['trainedInTask']);
				//$this -> theForm ->setWrittenProcedures($this->elements['']);
				$this -> theForm ->setReceiptAndStorage($this->elements['receiptAndStorage']);
				$this -> theForm ->setPremixDilution($this->elements['premixDilution']);
				$this -> theForm ->setFeederVerification($this->elements['feederVerification']);
				$this -> theForm ->setSamplingOfWheatFlour($this->elements['samplingWheat']);
				$this -> theForm ->setIronSpotTest($this->elements['wheatSpotTest']);
				$this -> theForm ->setPremixInventory($this->elements['premixInventoryUpToDate']);
				$this -> theForm ->setCOAReceived($this->elements['certificateOfAnalysis']);
				$this -> theForm ->setPremixStored($this->elements['premixStoredWell']);
				$this -> theForm ->setFIFOSystemPremix($this->elements['fifoSystemPremix']);
				$this -> theForm ->setFIFOSystemFlour($this->elements['fifoSystemFlour']);
				$this -> theForm ->setPremixHandledWell($this->elements['premixHandling']);
				$this -> theForm ->setPremixDilutionApplicable($this->elements['premixDilutionApplicable']);
				$this -> theForm ->setHomogeneityAssessed($this->elements['homogeneityAssessed']);
				$this -> theForm ->setAdequateStorage($this->elements['storageHandlingArea']);
				$this -> theForm ->setRecordsOfFeeder($this->elements['feederRecordsAvailable']);
				$this -> theForm ->setPremixLevel($this->elements['premixLevelAdequate']);
				$this -> theForm ->setRecordsOfFlour($this->elements['flourRecordsUpToDate']);
				$this -> theForm ->setFlourSamples($this->elements['shiftSamplesTaken']);
				$this -> theForm ->setRatioWheatProduced($this->elements['ratioAction']);
				$this -> theForm ->setIronContent($this->elements['ironContent']);
				$this -> theForm ->setSpotTestIron($this->elements['spotTest']);
				$this -> theForm ->setQuantitativeMethodIron($this->elements['externalLabIron']);
				$this -> theForm ->setQuantitativeMethodVitaminA($this->elements['externalLabVitaminA']);
				$this -> theForm ->setDailyCompositeSamples($this->elements['dailyCompPrepared']);
				$this -> theForm ->setLabellingMeetsSpecifications($this->elements['goodLabeling']);
				$this -> theForm ->setFortifiedWheatFlour($this->elements['fortifiedWheatStored']);
				
				$this -> theForm ->setRecommendations($this->elements['auditRecommendations']);
				
				$this -> theForm ->setCorrectiveActionsTaken($this->elements['correctiveActionTaken']);
				$this -> theForm ->setAssessment($this->elements['assessmentCorrectiveAction']);
				$this -> theForm ->setComments($this->elements['auditComments']);
				$this -> theForm ->setNonCompliances($this->elements['nonCompliancesIdentified']);
				$this -> theForm ->setSuggestions($this->elements['suggestionsForImprovement']);
				
				$this -> theForm ->setTypeOfIron($this->elements['iodineType']);
				$this -> theForm ->setCompositeID($this->elements['IDComposite']);
				$this -> theForm ->setFactoryEstimatesIronMgPerKg($this->elements['FactoryEstimatesIronMgPerKg']);
				$this -> theForm ->setLabResultsIronMgPerKg($this->elements['LabResultsIronMgPerKg']);
				$this -> theForm ->setInspectionVitaminMgPerKg0($this->elements['InspectionVitaminMgPerKg0']);
				$this -> theForm ->setIDOther($this->elements['IDOther']);
				$this -> theForm ->setIronMgPerKg2($this->elements['IronMgPerKg2']);
				$this -> theForm ->setInspectionVitaminMgPerKg1($this->elements['InspectionVitaminMgPerKg1']);
				$this -> theForm ->setSupervisorName($this->elements['supervisorName']);
				$this -> theForm ->setSupervisorDate(new DateTime());
				$this -> em      -> persist($this -> theForm);


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
