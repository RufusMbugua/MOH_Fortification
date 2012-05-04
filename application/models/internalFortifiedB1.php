<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to IntFortifiedB1 entity
 */
use application\models\Entities\IntFortifiedB1;

class InternalFortifiedB1 extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $batchSize;

	function __construct() {
		parent::__construct();
	}

	function addRecord() {
        $s=microtime(true); /*mark the timestamp at the beginning of the transaction*/
		//check if a post was made
		if ($this -> input -> post()) {
			$this->elements = array();
			$this->theIds=array();
			foreach ($this -> input -> post() as $key => $val) {//For every posted values
		    //print(($key." ".$val)).'<br \>';
			   
			 if($key=="saltFactory"){
			 	$key="saltFactory_1";
			 }
			  
				
				//check if posted value is among the cloned ones
			
					//we separate the attribute name from the number
					
					 $this->frags = explode("_", $key);
				   
				    $this->id = $this->frags[1];  // the id
				    
				  
				   $this->attr = $this->frags[0];//the attribute name
				   
				  $this->theIds[$this->attr]=$this->id;
			//	print($this->attr."  ".$this->id."  ".$val).'<br />';
				   
			
				   if (!empty($val)) 
					//We then store the value of this attribute for this element.
					//$this->elements[$this->id][$this->attr] = htmlentities($val);
					 $this->elements[$this->id][$this->attr]=$val;
					
			} //close foreach($_POST)
			//die(var_dump($this->elements));	
			
			
			
			$this->noOfInsertsBatch=max($this->theIds);
			
			//get manufacturer name by id
			$manufacturer=$this->em->getRepository('models\Entities\ManufacturerFortified')
			                       ->findOneBy( array('manufacturerFortId'=>$this->input->post('saltFactory')));
		
			 for($i=1; $i<=$this->noOfInsertsBatch;++$i){
			 	   /*  print 'Found: '.$this->input->post('saltFactory').'<br />';
					 print 'Found: '.($this->elements[$i]["fortifiedDate"]).'<br />';
					 print 'Found: '.($this->elements[$i]["fortifiedWeight"]).'<br />';
					 print 'Found: '.($this->elements[$i]["compoundWeight"]).'<br />';
					 print 'Found: '.($this->elements[$i]["finalWeight"]).'<br />';
					 print 'Found: '.($this->elements[$i]["startTime"]).'<br />';
					 print 'Found: '.($this->elements[$i]["endTime"]).'<br />';
					 print 'Found: '.($this->elements[$i]["iodineWeight"]).'<br />';
					 print 'Found: '.($this->elements[$i]["qcReview"]).'<br />';
					 print '-------End of Row:'.$i.'--------------------------<br />';*/
					 
			/*if(strpos($this->elements[$i]["startTime"], "AM")){
				$this->elements[$i]["startTime"]=date_format(($this->elements[$i]["startTime"]),'H:i:s')->add(new DateInterval('P12H0M0S'));
			}else{
				$this->elements[$i]["startTime"]=date_format(($this->elements[$i]["startTime"]),'H:i:s');
			}*/
			 $this -> theForm = new \models\Entities\IntFortifiedB1(); //create an object of the model
		       // $this->theForm->setTransactionNumber('NULL');
			 	$this -> theForm -> setManufacturerCompName($manufacturer->getManufacturerFortName());
				$this -> theForm -> setDates($this->elements[$i]['fortifiedDate']);
				$this -> theForm -> setFillerWeight($this->elements[$i]["fortifiedWeight"]);
				$this -> theForm -> setIodineWeight($this->elements[$i]["compoundWeight"]);
				$this -> theForm -> setFinalPremixWeight1($this->elements[$i]["finalWeight"]);

				$this -> theForm -> setStartTime($this->elements[$i]["startTime"]);
				$this -> theForm -> setEndTime($this->elements[$i]["endTime"]);
				$this -> theForm -> setFinalPremixWeight($this->elements[$i]["iodineWeight"]);
				$this -> theForm -> setTransactedBy($this->elements[$i]['qcReview']);
				$this -> em -> persist($this -> theForm);


        	//now do a batched insert, default at 20
			  $this->batchSize=5;
		if($i % $this->batchSize==0){
		try{
					
				$this -> em -> flush();
				$this->em->clear(); //detactes all objects from doctrine
				}catch(Exception $ex){
					//die($ex->getMessage());
					/*display user friendly message*/
					
				}//end of catch
				
			} else if($i<$this->batchSize && $i==$this->noOfInsertsBatch){
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
