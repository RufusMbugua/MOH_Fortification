<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of datatable
 *
 * @author Maestro
 */
class datatable extends MY_Controller {
	//put your code here
	function __construct() {
		parent::__construct();
		$this -> load -> model('models_sugar/M_Sugar_ExternalFort_B3');
	}

	function load() {
		$data['ish'] = $this -> ajax_datatable();
		//print_r($data['ish']);
		$this -> load -> view('datatableview', $data);
	}

	function neweditable() {
		$data['ish'] = $this -> ajax_datatable();
		$this -> load -> view('newdatatable', $data);

	}

	function DeleteData() {
		$id = $_GET['id'];

		$this -> load -> database();
		$this -> db -> where('sugar_externalfortB3ID', $id);
		$this -> db -> delete('sugar_externalfortb3');
		echo "item deleted";
	}

	function ajax_datatable() {
		/*
		 $this->load->database();
		 $this->db->select('*');
		 $query=$this->db->get('sugar_externalfortb3');
		 return $result=$query->result();
		 */

		$result = $this -> M_Sugar_ExternalFort_B3 -> get_table();
		//$injson = json_encode($result);
		//		print_r($result);
		//$data['ish'] = $result;
		//		var_dump($result);
		return $result;

		//      var_dump($result);
		/*       $retval = array(
		 "iTotalRecords" => $iTotalRecords,
		 "iTotalDisplayRecords" => $iTotalDisplayRecords,
		 "aaData" => array()
		 );
		 */
		/*     foreach($result as $row)
		 {
		 array_push($json["aaData"],array(
		 $row->field,
		 $row->field2,
		 $row->field3
		 ));
		 }
		 */
		//        header("Content-type: application/json");
		//         echo json_encode($json);

	}

	public function form_externalFort_B3() {
		$this -> load -> model('models_sugar/M_Sugar_ExternalFort_B3');
		$this -> M_Sugar_ExternalFort_B3 -> update_data($this -> post('id'));
		if ($this -> M_Sugar_ExternalFort_B3 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_ExternalFort_B3 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_ExternalFort_B3 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
		} else {
			//notify user of error/failure
		}
	}//close form_internalFort_C1()

	//function to update jquery data. receives data VIA $_POST[]
	public function UpdateData() {
		//	Values passed from the POST[''] request from the view
		//	$id is the id in the database for the particular row. corresponds to the id of a <tr>
		//	column name is the column that has been editted.

		$id = $_GET['id'];
		$factoryName = $_GET['factoryName'];
		$suggestionsForImprovement = $_GET['suggestionsForImprovement'];
		$dates = $_GET['dates'];
		//  $column = 'set'.$column;
		//	CI swag for pushing updates

		//	the Doctrine swag for pushing edits

		$this -> M_Sugar_ExternalFort_B3 -> update_table($id, $dates, $suggestionsForImprovement);

	}// end of function UpdateData

	public function LoadData($value = '') {
		$this -> $ret = $_GET['id'];
		return $ret;
	}

	public function getTable() {
		$this -> load -> model('models_sugar/M_Sugar_ExternalFort_B3');
		/* Array of database columns which should be read and sent back to DataTables. Use a space where
		 * you want to insert a non-database field (for example a counter or static image)
		 */
		$aColumns = array('nonCompliances', 'suggestionsForImprovement', 'publicHealthOfficer');

		// DB table to use
		$sTable = 'sugar_externalfortb3';
		//

		$iDisplayStart = $this -> input -> post('iDisplayStart', true);
		$iDisplayLength = $this -> input -> post('iDisplayLength', true);
		$iSortCol_0 = $this -> input -> post('iSortCol_0', true);
		$iSortingCols = $this -> input -> post('iSortingCols', true);
		$sSearch = $this -> input -> post('sSearch', true);
		$sEcho = $this -> input -> post('sEcho', true);

		// Paging
		if (isset($iDisplayStart) && $iDisplayLength != '-1') {
			$this -> db -> limit($this -> db -> escape_str($iDisplayLength), $this -> db -> escape_str($iDisplayStart));
		}

		// Ordering
		if (isset($iSortCol_0)) {
			for ($i = 0; $i < intval($iSortingCols); $i++) {
				$iSortCol = $this -> input -> post('iSortCol_' . $i, true);
				$bSortable = $this -> input -> post('bSortable_' . intval($iSortCol), true);
				$sSortDir = $this -> input -> post('sSortDir_' . $i, true);

				if ($bSortable == 'true') {
					$this -> db -> order_by($aColumns[intval($this -> db -> escape_str($iSortCol))], $this -> db -> escape_str($sSortDir));
				}
			}
		}

		/*
		 * Filtering
		 * NOTE this does not match the built-in DataTables filtering which does it
		 * word by word on any field. It's possible to do here, but concerned about efficiency
		 * on very large tables, and MySQL's regex functionality is very limited
		 */
		if (isset($sSearch) && !empty($sSearch)) {
			for ($i = 0; $i < count($aColumns); $i++) {
				$bSearchable = $this -> input -> post('bSearchable_' . $i, true);

				// Individual column filtering
				if (isset($bSearchable) && $bSearchable == 'true') {
					$this -> db -> or_like($aColumns[$i], $this -> db -> escape_like_str($sSearch));
				}
			}
		}

		// Select Data
		$this -> db -> select('SQL_CALC_FOUND_ROWS ' . str_replace(' , ', ' ', implode(', ', $aColumns)), false);
		$rResult = $this -> db -> get($sTable);

		// Data set length after filtering
		$this -> db -> select('FOUND_ROWS() AS found_rows');
		$iFilteredTotal = $this -> db -> get() -> row() -> found_rows;

		// Total data set length
		$iTotal = $this -> db -> count_all($sTable);

		// Output
		$output = array('sEcho' => intval($sEcho), 'iTotalRecords' => $iTotal, 'iTotalDisplayRecords' => $iFilteredTotal, 'aaData' => array());

		foreach ($rResult->result_array() as $aRow) {
			$row = array();

			foreach ($aColumns as $col) {
				$row[] = $aRow[$col];
			}

			$output['aaData'][] = $row;
		}

		echo json_encode($output);
	}

	function index() {

		$this -> load -> view('dataview');
	}

	function tryal() {

		$this -> load -> view('datatableview');
	}

}
?>
