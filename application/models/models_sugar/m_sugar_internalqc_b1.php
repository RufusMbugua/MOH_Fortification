<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB1 entity
 */
use application\models\Entities\entities_sugar\E_Sugar_InternalQC_B1;

class M_Sugar_InternalQC_B1  extends MY_Model {
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
			 if(!strpos("_",$key)){//useful to keep all the  non-cloned elements in the loop
			 	$key=$key."_1";
			 }
			  		//we separate the attribute name from the number
					
					 $this->frags = explode("_", $key);
				   
				    $this->id = $this->frags[1];  // the id
				    
				  
				   $this->attr = $this->frags[0];//the attribute name
				   
				  $this->theIds[$this->attr]=$this->id;
			    //print($this->attr."  ".$this->id."  ".$val).'<br />';
				   
			
				   if (!empty($val)) 
					//We then store the value of this attribute for this element.
					 $this->elements[$this->id][$this->attr]=htmlentities($val);
					
			} //close foreach($_POST)
			
			//exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			$this->noOfInsertsBatch=max($this->theIds);
			
			//iodization centre name obtained from the session variable => 'affiliation'
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_sugar\E_Sugar_InternalQC_B1(); //create an object of the model
		      
			 	
				$this -> theForm -> setDates(new DateTime()); /*timestamp option*/
				//$this -> theForm -> setDates($this->elements[$i]['visitDate']);;/*entry option*/
				$this -> theForm -> setHarvestYear($this->input->post('harvestYear'));
				$this -> theForm -> setShiftTime($this->elements[$i]["qualityTime"]);
				$this -> theForm -> setProductionRate($this->elements[$i]["productionRate"]);
				$this -> theForm -> setTheoreticalFeederFlow($this->elements[$i]["feederFlow"]);
				$this -> theForm -> setFeederFlow1($this->elements[$i]["feederFlow1"]);
				$this -> theForm -> setFeederFlow2($this->elements[$i]["feederFlow2"]);
				$this -> theForm -> setFeederFlow3($this->elements[$i]["feederFlow3"]);
				$this -> theForm -> setAdjusted($this->elements[$i]["adjusted"]);
				$this -> theForm -> setObservations($this->elements[$i]["feederFlowObservations"]);
				$this -> theForm -> setResponsible($this->input->post('personResponsible'));
				
				$this -> theForm -> setFactoryName($iodizationCentre);
			
				
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
				
				 } //end of innner loop
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
        $this->rowsInserted=$this->noOfInsertsBatch;
		return $this -> response = 'ok';
	}

}//end of class ExtternalFortifiedB1
