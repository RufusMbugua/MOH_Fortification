<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
#processes form data before committing to the data-layer
class C_Form_Sugar extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function form_internalFort_A1() {
		$this -> load -> model('models_sugar/M_Sugar_InternalFort_A1');
		$this -> M_Sugar_InternalFort_A1 -> addRecord();

		if ($this -> M_Sugar_InternalFort_A1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalFort_A1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalFort_A1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_A1()

	public function form_internalFort_B1() {
		$this -> load -> model('models_sugar/M_Sugar_InternalFort_B1');
		$this -> M_Sugar_InternalFort_B1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_InternalFort_B1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalFort_B1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalFort_B1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}
		}
	public function form_internalFort_C1() {
		$this -> load -> model('models_sugar/M_Sugar_InternalFort_C1');
		$this -> M_Sugar_InternalFort_C1 -> addRecord();

		if ($this -> M_Sugar_InternalFort_C1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalFort_C1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalFort_C1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()
	
	public function form_internalFort_C2() {
		$this -> load -> model('models_sugar/M_Sugar_InternalFort_C2');
		$this -> M_Sugar_InternalFort_C2 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_InternalFort_C2 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalFort_C2 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalFort_C2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}
	}//close form_internalFort_C1()
	
	public function form_internalFort_C3() {
		$this -> load -> model('models_sugar/M_Sugar_InternalFort_C3');
		$this -> M_Sugar_InternalFort_C3 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_InternalFort_C3 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalFort_C3 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalFort_C3 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}
	}//close form_internalFort_C1()
	

	public function form_internalFort_D1() {
		$this -> load -> model('models_sugar/M_Sugar_InternalFort_D1');
		$this -> M_Sugar_InternalFort_D1 -> addRecord();

		if ($this -> M_Sugar_InternalFort_D1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalFort_D1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalFort_D1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_externalFort_B1() {
		$this -> load -> model('models_sugar/M_Sugar_ExternalFort_B1');
		$this -> M_Sugar_ExternalFort_B1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_ExternalFort_B1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_ExternalFort_B1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_ExternalFort_B1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_externalFort_B2() {
		$this -> load -> model('models_sugar/M_Sugar_ExternalFort_B2');
		$this -> M_Sugar_ExternalFort_B2 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_ExternalFort_B2 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_ExternalFort_B2 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_ExternalFort_B2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()
	
	public function form_externalFort_B3() {
		$this -> load -> model('models_sugar/M_Sugar_ExternalFort_B3');
		$this -> M_Sugar_ExternalFort_B3 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_ExternalFort_B3 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_ExternalFort_B3 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_ExternalFort_B3 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()
	

	public function form_internalQC_A1() {
		$this -> load -> model('models_sugar/M_Sugar_InternalQC_A1');
		$this -> M_Sugar_InternalQC_A1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_InternalQC_A1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalQC_A1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalQC_A1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_internalQC_B1() {
		$this -> load -> model('models_sugar/M_Sugar_InternalQC_B1');
		$this -> M_Sugar_InternalQC_B1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_InternalQC_B1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalQC_B1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalQC_B1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_internalQC_B2() {
		$this -> load -> model('models_sugar/M_Sugar_InternalQC_B2');
		$this -> M_Sugar_InternalQC_B2 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_InternalQC_B2 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalQC_B2 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalQC_B2 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()

	public function form_internalQC_C1() {
		$this -> load -> model('models_sugar/M_Sugar_InternalQC_C1');
		$this -> M_Sugar_InternalQC_C1 -> addRecord($this -> session -> userdata('affiliation'));

		if ($this -> M_Sugar_InternalQC_C1 -> response = 'ok') {
			//notify user of success
			$data['form_id'] = "";
			$data['form'] = '<p><b>' . $this -> M_Sugar_InternalQC_C1 -> rowsInserted . '</b> records were inserted successfully in 
			approximately <b>' . $this -> M_Sugar_InternalQC_C1 -> executionTime . '</b> seconds.</p>';
			//redirect(base_url() . 'front/vehicles/index', 'location');
			$this -> load -> view('pages/vehicles/index', $data);

		} else {
			//notify user of error/failure
		}

	}//close form_internalFort_C1()
	
	

}
	