<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to IntFortifiedA2 entity
 */
use application\models\Entities\entities_maize\e_maize_internalfort_a2;

class M_Maize_InternalFort_A2  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize;

	function __construct() {
		parent::__construct();
	}

	function addRecord() {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
		
			$this->elements = array();
			$this->theIds=array();
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
		    //print(($key." ".$val)).'<br \>';
			   
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
			
			//get the highest value of the array that will control the number of inserts to be done
			$this->noOfInsertsBatch=max($this->theIds);
			
			//get compound manufacturer name by id
			$this->getCompoundManufacturerName($this->input->post('compManufacturer'));/*method defined in MY_Model*/
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_maize\e_maize_internalfort_a2(); //create an object of the model
		      
			 	
				$this -> theForm -> setDates($this->elements[$i]['theDate']);
				$this -> theForm -> setShiftTime($this->elements[$i]['theTime']);
				$this -> theForm -> setQuantityReceived($this->elements[$i]["quantity"]);
				$this -> theForm -> setLotId($this->elements[$i]["lotID"]);

				$this -> theForm -> setExpiryDate($this->elements[$i]["expiryDate"]);
				$this -> theForm -> setSignature($this->elements[$i]["signature"]);
				$this->theForm->setDispatchedQuantity($this->elements[$i]['dispatchedQuantity']);
				$this -> theForm -> setReportingDate(new DateTime()); /*timestamp option*/
				//$this -> theForm -> setDateOfReporting($this->elements[$i]["reportingDate"]);/*entry option*/
				$this -> theForm -> setManufacturerCompName($this->compoundManufacturer->getManufacturerCompName());
				$this -> em -> persist($this -> theForm);


        	//now do a batched insert, default at 5
			  $this->batchSize=5;
		if($i % $this->batchSize==0){
		try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					//die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			//} else if($i<$this->batchSize && $i==$this->noOfInsertsBatch){
				}else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
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
				
				 } //end of innner loop
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
        $this->rowsInserted=$this->noOfInsertsBatch;
		return $this -> response = 'ok';
	}

}//end of class InternalFortifiedA2
