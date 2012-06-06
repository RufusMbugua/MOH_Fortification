<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_Oil extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function form_Fort_A1() {
		$this -> load -> model('models_oil/M_Oil_FortifiedA1');
		$this -> M_Oil_FortifiedA1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Oil_FortifiedA1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Oil_FortifiedA1 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Oil_FortifiedA1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

	public function form_Fort_B1() {
		$this -> load -> model('models_oil/M_Oil_FortifiedB1');
		$this -> M_Oil_FortifiedB1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Oil_FortifiedB1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Oil_FortifiedB1 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Oil_FortifiedB1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

	public function form_Fort_B2() {
		$this -> load -> model('models_oil/M_Oil_FortifiedB2');
		$this -> M_Oil_FortifiedB2 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Oil_FortifiedB2 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Oil_FortifiedB2 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Oil_FortifiedB2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

	public function form_Fort_C1() {
		$this -> load -> model('models_oil/M_Oil_FortifiedC1');
		$this -> M_Oil_FortifiedC1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Oil_FortifiedC1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Oil_FortifiedC1 -> rowsInserted . '</b> record(s) submitted successfully in 
			approximately <b>' . $this -> M_Oil_FortifiedC1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}

}
?>