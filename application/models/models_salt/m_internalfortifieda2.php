<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to IntFortifiedA2 entity
 */
use application\models\Entities\entities_salt\E_IntFortifiedA2;

class M_InternalFortifiedA2  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize;

	function __construct() {
		parent::__construct();
	}

	function addRecord() {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		
		if ($this -> input -> post()) {//check if a post was made
		    //var_dump($this->input->post());exit;
			$this->elements = array();
			$this->theIds=array();
			foreach ($this -> input -> post(NULL,TRUE) as $key => $val) {//For every posted values
			echo $key."<br/>";
		   if(strpos($key,'iodine','iod')===TRUE){//select cloned-row data only
			   //we separate the attribute name from the number
                    
                   if(strpos($key,"_")===TRUE){
				  $this->frags = explode("_", $key);

				  //$this->id = $this->frags[1];  // the id

				  $this->id = $count;  // the id

				  $this->attr = $this->frags[0];//the attribute name


				     //mark the end of 1 row...for record count
				if($this->attr=="iodineExpiration"){
					print 'count at:'.$count.'<br />';
					$finalCount=$count;
					 $count++;
					 // print 'DOM: '.$key.' Attr: '.$this->attr.' val='.$val.' id='.$this->id.' <br />';
				}

				 if (!empty($val)) {
					//We then store the value of this attribute for this element.
					 $this->elements[$this->id][$this->attr]=htmlentities($val);
					//$this->elements[$this->attr]=htmlentities($val);
				   }else{
				   	$this->elements[$this->id][$this->attr]='';
				   }
				   
				   }

			 }//end of cloned-data row selection
					
			} //close foreach($_POST)
			
			exit;
			//get the highest value of the array that will control the number of inserts to be done
			$this->noOfInsertsBatch=max($this->theIds);
			
			//get the compound manufacturer name by id
			$this->getCompoundManufacturerName($this->input->post('compManufacturer'));/*method defined in MY_Model*/

		    
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	
			 $this -> theForm = new \models\Entities\entities_salt\E_IntFortifiedA2(); //create an object of the model
		      
			 	
				$this -> theForm -> setDates($this->elements[$i]['iodineDate']);
				$this -> theForm -> setSupplierCOA($this->elements[$i]["iodineSupplier"]);
				$this -> theForm -> setNoOfDrums($this->elements[$i]["iodineDrums"]);
				$this -> theForm -> setLotId($this->elements[$i]["iodineLot"]);

				$this -> theForm -> setExpiryDate($this->elements[$i]["iodineExpiration"]);
				$this -> theForm -> setTransactedBy($this->elements[$i]["reportersName"]);
				$this -> theForm -> setDateOfReporting(new DateTime()); /*timestamp option*/
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
					return $this -> response = 'Nok';
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
					return $this -> response = 'Nok';
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
