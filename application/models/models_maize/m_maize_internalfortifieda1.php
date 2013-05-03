<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_InternalFortifiedA1 entity
 */
use application\models\Entities\entities_maize\E_Maize_IntFortifiedA1;

class M_Maize_InternalFortifiedA1  extends MY_Model {
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
		   print(($key." ".$val)).'<br \>';
			   
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
				   if (!empty($val)){
					//We then store the value of this attribute for this element.
					// $this->elements[$this->id][$this->attr]=htmlentities($val);
					$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   	$this->elements[$this->attr]="";
				   }
					
			} //close foreach($_POST)
			
			exit;
			
			//get the highest value of the array that will control the number of inserts to be done
			//$this->noOfInsertsBatch=max($this->theIds);
			$this->noOfInsertsBatch=1;
			
			//get compound manufacturer name by id
			try{
			$compoundManufacturer=$this->em->getRepository('models\Entities\E_ManufacturerCompound')
			                       ->findOneBy( array('manufacturerId'=>$this->input->post('manufacturer')));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
			
			//get premix type name by id
			try{
			$premix=$this->em->getRepository('models\Entities\E_PremixType')
			                       ->findOneBy( array('productId'=>$this->input->post('productType')));
			}catch(exception $ex){
				//ignore
				//die($ex->getMessage());
			}
			
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\E_IntFortifiedA1(); //create an object of the model
		      
			 	
				$this -> theForm -> setDates(new DateTime()); /*timestamp option*/
				$this -> theForm -> setManufacturerCompName($compoundManufacturer->getManufacturerCompName());
				$this -> theForm -> setInspectedBy($this->elements['inspectedBy']);
				$this -> theForm ->setProductType($premix->getProductName()); 
				$this -> theForm ->setPurchaseOrderNumber($this->elements['purchaseOrder']);
				$this -> theForm ->setQuantity($this->elements['quantity']);
				$this -> theForm ->setIntegrityObservation($this->elements['integrityObservation']);
				$this -> theForm ->setLotNumber($this->elements['lotNumber']);
				$this -> theForm ->setLotObservation($this->elements['lotObservation']);
				$this -> theForm ->setProductionDate($this->elements['productionDate']);
				$this -> theForm ->setProductObservation($this->elements['productObservation']);
				$this -> theForm ->setExpiryDate($this->elements['expirationDate']);
				$this -> theForm ->setExpirationObservation($this->elements['expirationObservation']);
				$this -> theForm ->setContentClaimLabel($this->elements['contentClaimed']);
				$this -> theForm ->setContentObservation($this->elements['contentObservation']);
				$this -> theForm ->setCertificateOfAnalysis($this->elements['certOfanalysis']);
				$this -> theForm ->setCertificateObservation($this->elements['certificateObservation']);
				$this -> theForm ->setOther($this->elements['other']);
				$this -> theForm ->setOtherObservation($this->elements['otherObservation']);
				$this -> theForm ->setAccepted($this->elements['accepted']);
				$this -> theForm ->setReasonsForRejection($this->elements['actionsTaken']);
				$this -> theForm ->setReceivedBy($this->elements['receivedBy']);
				//$this -> theForm ->setReceiptDate($this->elements['inputDate']);
				
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

}//end of class InternalFortifiedA1
