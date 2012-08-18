<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB1 entity
 */
use application\models\Entities\entities_wheat\e_wheat_externalfort_b1;

class M_Wheat_ExternalFort_B1  extends MY_Model {
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
				   
			
				   if (!empty($val)) {
					//We then store the value of this attribute for this element.
					 $this->elements[$this->id][$this->attr]=htmlentities($val);
				   }else{
				   	 $this->elements[$this->id][$this->attr]='';
				   }
					
			} //close foreach($_POST)
			
			//exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			$this->noOfInsertsBatch=max($this->theIds);
			
			//Get Factory name by id
			$this->getFactoryName($this->input->post('wheatMill')); /*method defined in MY_Model*/
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_wheat\e_wheat_externalfort_b1(); //create an object of the model
		      
			 	
				$this -> theForm -> setDates(new DateTime()); /*timestamp option*/
				//$this -> theForm -> setDates($this->elements[$i]['visitDate']);;/*entry option*/
				$this -> theForm -> setPublicHealthOfficer($this->input->post('publicHealthOfficer'));
				$this -> theForm -> setName($this->elements[$i]["nameB1"]);
				$this -> theForm -> setPosition($this->elements[$i]["position"]);
				$this -> theForm -> setSignature($this->elements[$i]["signature"]);
				$this -> theForm -> setOpening($this->elements[$i]["opening"]);
				$this -> theForm -> setClosing($this->elements[$i]["closing"]);
				$this -> theForm -> setFactoryName($this->centre->getFactoryName());
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
				
				 } //end of innner loop
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
        $this->rowsInserted=$this->noOfInsertsBatch;
		return $this -> response = 'ok';
	}

  /*utilitized in external_B1's*/
	public function getFactoriesByVehicle($vehicle){
		try{
			 /*using DQL*/
	      $query = $this->em->createQuery('SELECT f.factoryNumber,f.factoryName FROM models\Entities\e_factories f WHERE f.manufacturerFortName
	                                      IN (SELECT m.manufactuerFortName FROM models\Entities\e_manufacturerfortified m WHERE m.vehicleName= :name)');
		  $query->setParameter('name', $vehicle);
          $this->factories = $query->getResult();
		
			}catch(exception $ex){
				//ignore
				die($ex->getMessage());
			}
			
			return $this->factories;
	}

}//end of class ExtternalFortifiedB1
