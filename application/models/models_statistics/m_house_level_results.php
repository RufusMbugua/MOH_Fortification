<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB1 entity
 */
use application\models\Entities\entities_statistics\e_house_level_results;

class M_House_Level_Results  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $results, $school, $chart, $prevSchool, $currSchool, $iodate;

	function __construct() {
		parent::__construct();
		$this -> results = '';
	}

	function viewRecords() {
		try {
			$query = $this -> em -> createQuery('SELECT u FROM models\Entities\entities_statistics\e_house_level_results u');
			$this -> results = $query -> getArrayResult();

			foreach ($this->results as $result => $value) {
				var_dump($value['school']);
			}
			// array of User objects

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}
		return json_encode($this -> results);

	}

	function plotRecords() {
		//Indexes
		//Index for name
		$indexName = 0;

		try {

			$query = $this -> em -> createQuery('SELECT u.school,u.iodate,u.sampleNumber FROM models\Entities\entities_statistics\e_house_level_results u GROUP BY u.school,u.sampleNumber');
			$this -> results = $query -> getArrayResult();

			foreach ($this->results as $result => $value) {
				$this -> prevSchool == $value['school'];
				foreach ($this->results as $result1 => $value1) {
					$this -> currSchool == $value['school'];
					if ($this -> currSchool == $this -> prevSchool) {
						$this -> iodate += "," . $value['iodate'];
					} else {
						$this -> iodate=$value['iodate'];

					}
				}

				$this -> chart[$indexName] = array('name'=>$value['school'], 'data'=>array(51,52,36));
				//$this -> chart['data'][$indexName] = $value['iodate'];

				$indexName++;
				$iodate='';
			}

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}
		return json_encode($this -> chart);

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
