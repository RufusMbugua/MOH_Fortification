<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB1 entity
 */
use application\models\Entities\entities_statistics\e_house_level_results;

class M_House_Level_Results  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $results;

	function __construct() {
		parent::__construct();
		$this->results='';
	}

	function viewRecords() {
		try {
			$query = $this -> em -> createQuery('SELECT u FROM models\Entities\entities_statistics\e_house_level_results u');
			$this -> results = $query -> getArrayResult();
			// array of User objects

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}
		return json_encode($this -> results);
		
	}

function viewSpecificRecord($value) {
		try {
			$query = $this -> em -> createQuery('SELECT u FROM models\Entities\entities_statistics\e_house_level_results u WHERE u.Group_ID = ' . $value);
			$this -> groups = $query -> getArrayResult();

			// array of User objects

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}

		return $this -> groups;
	}

	

}//end of class ExtternalFortifiedB1
