<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB2 entity
 */
use application\models\Entities\entities_sugar\E_Sugar_InternalFort_C2;

class M_Sugar_InternalFort_C2  extends MY_Model {
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
			 	
			 $this -> theForm = new \models\Entities\entities_sugar\E_Sugar_InternalFort_C2(); //create an object of the model
		      
		      $this -> theForm -> setVitaminABalance($this->elements['vitaminCompound']);
			  $this -> theForm -> setVitaminAReceived($this->elements['vitaminReceivedWeek']);
			  $this -> theForm -> setVitaminA1($this->elements['vitaminDay1']);
			  $this -> theForm -> setVitaminA2($this->elements['vitaminDay2']);
			  $this -> theForm -> setVitaminA3($this->elements['vitaminDay3']);
			  $this -> theForm -> setVitaminA4($this->elements['vitaminDay4']);
		      $this -> theForm -> setVitaminA5($this->elements['vitaminDay5']);
		      $this -> theForm -> setVitaminA6($this->elements['vitaminDay6']);
		      $this -> theForm -> setSugarBalance($this->elements['sugarCompund']);
			  $this -> theForm -> setSugarReceived($this->elements['sugarReceivedWeek']);
			  $this -> theForm -> setSugar1($this->elements['sugarDay1']);
			  $this -> theForm -> setSugar2($this->elements['sugarDay2']);
			  $this -> theForm -> setSugar3($this->elements['sugarDay3']);
			  $this -> theForm -> setSugar4($this->elements['sugarDay4']);
			  $this -> theForm -> setSugar5($this->elements['sugarDay5']);
			  $this -> theForm -> setSugar6($this->elements['sugarDay6']);
			  $this -> theForm -> setVegetableOilBalance($this->elements['vegetableOil']);
			  $this -> theForm -> setVegetableOilReceived($this->elements['vegetableOilReceivedWeek']);
			  $this -> theForm -> setVegetableOil1($this->elements['vegetableDay1']);
			  $this -> theForm -> setVegetableOil2($this->elements['vegetableDay2']);
              $this -> theForm -> setVegetableOil3($this->elements['vegetableDay3']);
			  $this -> theForm -> setVegetableOil4($this->elements['vegetableDay4']);
			  $this -> theForm -> setVegetableOil5($this->elements['vegetableDay5']);
			  $this -> theForm -> setVegetableOil6($this->elements['vegetableDay6']);
			  $this -> theForm -> setRonoxanBalance($this->elements['ronoxan']);
			  $this -> theForm -> setRonoxanReceived($this->elements['ronoxanReceivedWeek']);
			  $this -> theForm -> setRonoxan1($this->elements['ronoxanDay1']);
			  $this -> theForm -> setRonoxan2($this->elements['ronoxanDay2']);
			  $this -> theForm -> setRonoxan3($this->elements['ronoxanDay3']);
			  $this -> theForm -> setRonoxan4($this->elements['ronoxanDay4']);
			  $this -> theForm -> setRonoxan5($this->elements['ronoxanDay5']);
			  $this -> theForm -> setRonoxan6($this->elements['ronoxanDay6']);
			  $this -> theForm -> setNitrogenBalance($this->elements['nitrogen']);
			  $this -> theForm -> setNitrogenReceived($this->elements['nitrogenReceivedWeek']);
			  $this -> theForm -> setNitrogen1($this->elements['nitrogenDay1']);
			  $this -> theForm -> setNitrogen2($this->elements['nitrogenDay2']);
			  $this -> theForm -> setNitrogen3($this->elements['nitrogenDay3']);
			  $this -> theForm -> setNitrogen4($this->elements['nitrogenDay4']);
			  $this -> theForm -> setNitrogen5($this->elements['nitrogenDay5']);
			  $this -> theForm -> setNitrogen6($this->elements['nitrogenDay6']);
			  $this -> theForm -> setPolythyleneBalance($this->elements['polythylene']);
			  $this -> theForm -> setPolythyleneReceived($this->elements['polythyleneReceivedWeek']);
			  $this -> theForm -> setPolythylene1($this->elements['polythyleneDay1']);
			  $this -> theForm -> setPolythylene2($this->elements['polythyleneDay2']);
			  $this -> theForm -> setPolythylene3($this->elements['polythyleneDay3']);
			  $this -> theForm -> setPolythylene4($this->elements['polythyleneDay4']);
			  $this -> theForm -> setPolythylene5($this->elements['polythyleneDay5']);
			  $this -> theForm -> setPolythylene6($this->elements['polythyleneDay6']);
			  $this -> theForm -> setPolypropyleneBalance($this->elements['polypropylene']);
			  $this -> theForm -> setPolypropyleneReceived($this->elements['polypropyleneReceivedWeek']);
			  $this -> theForm -> setPolypropylene1($this->elements['polypropyleneDay1']);
			  $this -> theForm -> setPolypropylene2($this->elements['polypropyleneDay2']);
			  $this -> theForm -> setPolypropylene3($this->elements['polypropyleneDay3']);
			  $this -> theForm -> setPolypropylene4($this->elements['polypropyleneDay4']);
			  $this -> theForm -> setPolypropylene5($this->elements['polypropyleneDay5']);
			  $this -> theForm -> setPolypropylene6($this->elements['polypropyleneDay6']);
			  $this -> theForm -> setSewingThreadBalance($this->elements['sewingThread']);
			  $this -> theForm -> setSewingThreadReceived($this->elements['sewingThreadReceivedWeek']);
			  $this -> theForm -> setSewingThread1($this->elements['sewingThreadDay1']);
			  $this -> theForm -> setSewingThread2($this->elements['sewingThreadDay2']);
			  $this -> theForm -> setSewingThread3($this->elements['sewingThreadDay3']);
			  $this -> theForm -> setSewingThread4($this->elements['sewingThreadDay4']);
			  $this -> theForm -> setSewingThread5($this->elements['sewingThreadDay5']);
			  $this -> theForm -> setSewingThread6($this->elements['sewingThreadDay6']);
			  $this -> theForm -> setObservations($this->elements['observations']);
			  $this -> theForm -> setDates($this->elements['responsibleDate']);
			  $this -> theForm -> setResponsible($this->elements['responsible']);
		      $this -> theForm -> setManufacturerCompName($iodizationCentre);
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






