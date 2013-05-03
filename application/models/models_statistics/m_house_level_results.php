<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 *model to E_ExternalFortifiedB1 entity
 */
use application\models\Entities\entities_statistics\e_house_level_results;

class M_House_Level_Results  extends MY_Model {
	var $id, $attr, $frags, $elements, $theIds, $noOfInserts, $schools, $categories, $data1, $data2, $data3, $data10, $data20, $data30, $school, $chart, $prevSchool, $currSchool, $iodate;

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

			$query = $this -> em -> createQuery('SELECT u.school FROM models\Entities\entities_statistics\e_house_level_results u GROUP BY u.school,u.sampleNumber');
			$this -> schools = $query -> getArrayResult();

			$query = $this -> em -> createQuery('SELECT u.iodate FROM models\Entities\entities_statistics\e_house_level_results u WHERE u.sampleNumber=10 GROUP BY u.school,u.sampleNumber');
			$this -> data1 = $query -> getArrayResult();

			$query = $this -> em -> createQuery('SELECT u.iodate FROM models\Entities\entities_statistics\e_house_level_results u WHERE u.sampleNumber=20 GROUP BY u.school,u.sampleNumber');
			$this -> data2 = $query -> getArrayResult();

			$query = $this -> em -> createQuery('SELECT u.iodate FROM models\Entities\entities_statistics\e_house_level_results u WHERE u.sampleNumber=30 GROUP BY u.school,u.sampleNumber');
			$this -> data3 = $query -> getArrayResult();

			$categoriesArray = array();
			$seriesArray = array();

			foreach ($this->schools as $key => $value) {
				$categoriesArray[] = $value['school'];
			}

			foreach ($this->data1 as $key => $value) {
				$data10[] = (int) $value['iodate'];
			}

			foreach ($this->data2 as $key => $value) {
				$data20[] = (int)$value['iodate'];
			}

			foreach ($this->data3 as $key => $value) {
				$data30[] = (int)$value['iodate'];
			}
			$categoriesArray = array_values(array_unique($categoriesArray));

			$seriesArray = array( array('name' => '10', 'data' => $data10), array('name' => '20', 'data' => $data20), array('name' => '30', 'data' => $data30));
			$seriesArray = json_encode($seriesArray);
			//var_dump($categoriesArray);
			//echo $seriesArray;
			$categoriesArray = json_encode($categoriesArray); 
            
			 
			$results = array($categoriesArray, $seriesArray);

		} catch(exception $ex) {
			//ignore
			//$ex->getMessage();
		}
		return $results;
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
