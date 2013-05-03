<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to IntFortifiedB2 entity
 */
use application\models\Entities\entities_salt\E_IntFortifiedB2;

class M_InternalFortifiedB2 extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize,$equipment;

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
			
			
			                       
			/*Iodization centre name is picked from the 
			 * session variable => 'affiliation' */
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_salt\E_IntFortifiedB2(); //create an object of the model
		      
			 	$this -> theForm -> setDates($this->input->post('checkupDate'));
				
				switch($i)
				{
				 	case 1:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['blender']);
						$this -> theForm -> setCondition($this->input->post("blenderCondition"));
						$this -> theForm -> setObservations($this->input->post("blenderObservations"));
						
						//wdys
						/*print $this->elements[$i]['blender'].'<br />';
						print $this->input->post("blenderCondition").'<br />';
						print $this->input->post("blenderObservations").'<br />';
						print 'end of row: '.$i.'-------------------------<br />';*/
						break;
				
					case 2:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['balance']);
						$this -> theForm -> setCondition($this->input->post("balanceCondition"));
						$this -> theForm -> setObservations($this->input->post("balanceObservations"));
						
						//wdys
						/*print $this->elements[$i]['balance'].'<br />';
						print $this->input->post("balanceCondition").'<br />';
						print $this->input->post("balanceObservations").'<br />';
						print 'end of row: '.$i.'-------------------------<br />';*/
						break;
				
					case 3:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['pump']);
						$this -> theForm -> setCondition($this->input->post("pumpCondition"));
						$this -> theForm -> setObservations($this->input->post("pumpObservations"));
						
						//wdys
						/*print $this->elements[$i]['pump'].'<br />';
						print $this->input->post("pumpCondition").'<br />';
						print $this->input->post("pumpObservations").'<br />';
						print 'end of row: '.$i.'-------------------------<br />';*/
						break;
					case 4:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['drier']);
						$this -> theForm -> setCondition($this->input->post("drierCondition"));
						$this -> theForm -> setObservations($this->input->post("drierObservations"));
						
						//wdys
						/*print $this->elements[$i]['drier'].'<br />';
						print $this->input->post("drierCondition").'<br />';
						print $this->input->post("drierObservations").'<br />';
						print 'end of row: '.$i.'-------------------------<br />';*/
						break;
						
					case 5:
						$this -> theForm -> setDeviceCompNumber($this->elements[$i]['sprayingEquipment']);
						$this -> theForm -> setCondition($this->input->post("sprayerCondition"));
						$this -> theForm -> setObservations($this->input->post("sprayerObservations"));
						
						//wdys
					/*	print $this->elements[$i]['sprayingEquipment'].'<br />';
						print $this->input->post("sprayerCondition").'<br />';
						print $this->input->post("sprayerObservations").'<br />';
						print 'end of row: '.$i.'-------------------------<br />';*/
						break;
				}

				$this->theForm->setManufacturerCompName($factory);

				$this -> theForm -> setCheckedBy($this->input->post('checkupName'));
				
				$this -> em -> persist($this -> theForm);


        	//now do a batched insert, default at 5
			  $this->batchSize=5;
		if($i % $this->batchSize==0){
		//try{
					
				$this-> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
			//	}catch(Exception $ex){
				//	die($ex->getMessage());
					/*display user friendly message*/
					
			//	}//end of catch
				
			//} else if($i<$this->batchSize && $i==$this->noOfInsertsBatch){
		}else if($i<$this->batchSize || $i>$this->batchSize || $i==$this->noOfInsertsBatch && 
			$this->noOfInsertsBatch-$i<$this->batchSize){
				 //total records less than a batch, insert all of them
			//	 try{
					
			    $this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
			//	}catch(Exception $ex){
					//die($ex->getMessage());
					/*display user friendly message*/
					
			//	}//end of catch
				 
				
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
	      $query = $this->em->createQuery('SELECT d.deviceCompNumber FROM models\Entities\e_manucdevices d WHERE d.manufacturerFortName = :name');
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
