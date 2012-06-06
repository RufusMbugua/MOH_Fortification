<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to IntFortifiedB2 entity
 */
use application\models\Entities\entities_oil\E_oil_B2;

class M_Oil_FortifiedB2 extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize,$equipment;

	function __construct() {
		parent::__construct();
	}

	function addRecord($manufacturerCompName) {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
		
			$this->elements = array();
			$this->theIds=array();
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
		   // print(($key." ".$val)).'<br \>';
			
			 
				
			/*special case for this form..subject to change*/
					//we separate the attribute name from the number
					 if(!strpos("_", $key)){
			  	$key=$key."_1";
			  }
					 $this->frags = explode("_", $key);
				   
				    $this->id = $this->frags[1];  // the id
				    
				  
				   $this->attr = $this->frags[0];//the attribute name
				   
				  $this->theIds[$this->attr]=$this->id;
			//print($this->id."  ".$this->attr).'<br />';
				   
			
				   if (!empty($val)) 
					//We then store the value of this attribute for this element.
					 $this->elements[$this->id][$this->attr]=htmlentities($val);
					
			} //close foreach($_POST)
			
			//exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			$this->noOfInsertsBatch=max($this->theIds);

			//print $this->noOfInsertsBatch;
			//exit;

			
			                       
			/*Iodization centre name is picked from the 
			 * session variable => 'affiliation' */
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_oil\E_Oil_B2(); //create an object of the model
		      
			 	$this -> theForm -> setDates($this->input->post('checkupDate'));
				
				switch($i)
				{
				 	case 1:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['blender']);
						$this -> theForm -> setDeviceCondition($this->input->post("blenderCondition"));
						$this -> theForm -> setObservations($this->input->post("blenderObservations"));
						break;
				
					case 2:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['balance']);
						$this -> theForm -> setDeviceCondition($this->input->post("balanceCondition"));
						$this -> theForm -> setObservations($this->input->post("balanceObservations"));
						break;
				
					case 3:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['pump']);
						$this -> theForm -> setDeviceCondition($this->input->post("pumpCondition"));
						$this -> theForm -> setObservations($this->input->post("pumpObservations"));
						break;
						
					case 4:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['stirrers']);
						$this -> theForm -> setDeviceCondition($this->input->post("stirrersCondition"));
						$this -> theForm -> setObservations($this->input->post("stirrersObservations"));
						break;
						
					case 5:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['feeding']);
						$this -> theForm -> setDeviceCondition($this->input->post("feedingTubesCondition"));
						$this -> theForm -> setObservations($this->input->post("feedingTubesObservations"));
						break;
						
					case 6:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['tank']);
						$this -> theForm -> setDeviceCondition($this->input->post("blendingTankCondition"));
						$this -> theForm -> setObservations($this->input->post("blendingTankObservations"));
						break;
				}
              
				$this->theForm->setManufacturerCompName($manufacturerCompName);
				$this -> theForm -> setCheckedBy($this->input->post('checkupName'));
				
				$this -> em -> persist($this -> theForm);


        	//now do a batched insert, default at 5
			  $this->batchSize=5;
		if($i % $this->batchSize==0){
		try{
					
				$this-> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					die($ex->getMessage());
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
					die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				 
				
			}//end of batch condition */
				
				 } //end of loop
				// exit;
		}//close the this->input->post
		$e=microtime(true);
		$this->executionTime=round($e-$s,'4');
        $this->rowsInserted=$this->noOfInsertsBatch;
		return $this -> response = 'ok';
	}/*close addRecord()*/
	
	function getManucDevicesByIodizationCenter($iodizationCentreName){
		   //get registered devices' details
			/*$this->equipment=$this->em->getRepository('models\Entities\E_ManucDevices')
			                       ->findAll( array('manufacturerCompName'=>$iodizationCentreName));*/
			                       
			                       
	      /*using DQL*/
	      $query = $this->em->createQuery('SELECT d.deviceCompNumber FROM models\Entities\E_ManucDevices d WHERE d.manufacturerCompName = :name');
          $query->setParameter('name', $iodizationCentreName);
          $this->equipment = $query->getResult();
						/*foreach ($this->equipment as $key=>$value) {
									// print $this->equipment[$key]['deviceCompNumber']."<br />";
									print $value['deviceCompNumber'].'<br />';
									// var_dump($this->equipment);
								  }*/
		   return $this->equipment;
		
	}/*close getManucDevicesByIodizationCenter($iodizationCentreName)*/

}//end of class InternalFortifiedB2
