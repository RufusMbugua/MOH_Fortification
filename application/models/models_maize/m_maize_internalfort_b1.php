<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to IntFortifiedB1 entity
 */
use application\models\Entities\entities_maize\e_maize_internalfort_b1;

class M_Maize_InternalFort_B1  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize;

	function __construct() {
		parent::__construct();
	}

	function addRecord($factory) {

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
			
			//factory name obtained from the session variable: affiliation
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_maize\e_maize_internalfort_b1(); //create an object of the model
		      
			 	
				$this -> theForm -> setDates($this->elements[$i]['feederDate']);
				$this -> theForm -> setShiftTime($this->elements[$i]['feederTime']);
				$this -> theForm -> setProductionRate($this->elements[$i]['productionRate']);
				$this -> theForm -> setTheoreticFeederFlow($this->elements[$i]['theoreticFeeder']);
				$this -> theForm -> setFeederFlow1($this->elements[$i]['feederFlow1']);
				$this -> theForm -> setFeederFlow2($this->elements[$i]['feederFlow2']);
				$this -> theForm -> setFeederFlow3($this->elements[$i]['feederFlow3']);
				$this -> theForm -> setCV($this->elements[$i]['CV']);
				$this -> theForm -> setAdjusted($this->elements[$i]['adjusted']);
				$this -> theForm -> setObservations($this->elements[$i]['observations']);
				$this -> theForm -> setResponsible($this->input->post('personResponsible'));
				
				//$this -> theForm -> setDateOfReporting($this->elements[$i]["reportingDate"]);/*entry option*/
				$this -> theForm -> setFactoryName($factory);

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

}//end of class InternalFortifiedB1
