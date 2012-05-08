<?php

class C_Front extends CI_Controller {

	public function __construct() {

		parent::__construct();
	

	}

	public function index() {
		$data['form'] = '<p>You need to login.<p>';
		$this -> load -> view('index', $data);
	}//End of index file

	public function vehicles() {
		$data['form'] = '<p class="error"><br/><br/>No form has been chosen<br/><br/><p>';
		$data['form_id']='';
		$this -> load -> view('pages/vehicles/index', $data);
		//echo 'Vehicles';
	}

	public function formviewer() {
		$this -> load -> view('formviewer');
	}

	public function internalFort_A1() {
		$internalFortified_A1 = '';
		$internalFortified_A1 .= '<form name="internalFortified_A1" id="internalFortified_A1" method="POST" action="' . base_url() .'submit/c_form/c_form_internalFort_A1' . '" >
	<!-- form for internal salt fortification. 1-a -->
	<h3 align="center"> FORTIFIED SALT-TABLE A-1</h3>
	<p align="center">
		INSPECTION FORM FOR INCOMING IODINE COMPOUNDS
	</p>
	<section class="column">
		<section class="row2">
			<section class="left">
				<label>PRODUCT TYPE:</label>
			</section>
			<section class="right">
				<select name="productType" id="productType">
					<option value="1">Iodine</option>
					<option value="0">Iodate</option>
				</select>
			</section>
		</section>
		<section class="row2">
			<section class="left">
				<label>Manufacturer:</label>
			</section>
			<section class="right">
				<select name="manufacturer" id="manufacturer">
					<option value="1">Kensalt</option>
					<option value="0">Magadi</option>
				</select>
			</section>
		</section>
		<section class="row2">
			<section class="left">
				<label>Inspected by:</label>
			</section>
			<section class="right">
				<select name="inspectedBy" id="inspectedBy">
					<option value="1">Please select</option>
					<option value="0">Insert names</option>
				</select>
			</section>
		</section>
	</section>
	<section class="column" style="margin-bottom:30px">
		<section class="row2">
			<section class="left">
				<label>Purchase Order #:</label>
			</section>
			<section class="right">
				<input type="text" name="purchaseOrder" id="purchaseOrder"/>
			</section>
		</section>
		<section class="row2">
			<section class="left">
				<label>Date:</label>
			</section>
			<section class="right">
				<input type="date" name="date" id="date"/>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row-title">
			SPECIFICATIONS
		</section>
		<section class="row">
			<section class="left">
				<label>Quantity</label>
				<input type="text" name="quantity" id="quantity"/>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row-title">
			OBSERVATIONS
		</section>
		<section class="row">
			<textarea name="integrityObservation" id="integrityObservation" rows="3"></textarea>
		</section>
	</section>
	<h4>Integrity of boxes</h4>
	<p>
		(tick appropriately)
	</p>
	<section class="column">
		<section class="row">
			<section class="left">
				<label for="lotObservation">Lot number:</label>
			</section>
			<section class="center">
				<input type="checkbox" name="lotNumber" id="lotNumber"/>
			</section>
			<section class="right">
				<textarea name="lotObservation" id="lotObservation" rows="3"></textarea>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="productionDate">Date:</label>
			</section>
			<section class="center">
				<input type="checkbox" name="productionDate" id="productionDate"/>
			</section>
			<section class="right">
				<textarea name="productObservation" id="productObservation" rows="3"></textarea>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="expirationDate">Expiration Date:</label>
			</section>
			<section class="center">
				<input type="checkbox" name="expirationDate" id="expirationDate"/>
			</section>
			<section class="right">
				<textarea name="expirationObservation" id="expirationObservation" rows="3"></textarea>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<section class="left">
				<label for="contentClaimed">Content claimed in label</label>
			</section>
			<section class="center">
				<input type="checkbox" name="contentClaimed" id="contentClaimed"/>
			</section>
			<section class="right">
				<textarea name="contentObservation" id="contentObservation" rows="3"></textarea>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="certOfanalysis">Certificate of Analysis(result for every micronutrient)</label>
			</section>
			<section class="center">
				<input type="checkbox" name="certOfanalysis" id="certOfanalysis"/>
			</section>
			<section class="right">
				<textarea name="certificateObservation" id="certificateObservation" rows="3"></textarea>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="otherObservation">Other:</label>
				<input type="text" name="other" id="other"/>
			</section>
			<section class="center"></section>
			<section class="right">
				<textarea name="otherObservation" id="otherObservation" rows="3"></textarea>
			</section>
		</section>
	</section>
	<section class="column-wide">
		<section class="row2">
			<section class ="left-wide">
				Accepted:
				<input type="radio" name="accepted" id="accepted" value="1"/>
			</section>
			<section class ="right-wide">
				Rejected:
				<input type="radio" name="accepted" id="accepted" value="2"/>
			</section>
		</section>
		<section class="row-title">
			<label>REASONS FOR REJECTION/ACTIONS TAKEN:</label>
		</section>
		<section class="row">
			<textarea name="actionsTaken" id="actionsTaken"></textarea>
		</section>
		<section class="row2">
			<section class ="left-wide">
				 <label>Received By:</label>
				<input type="text" name="receivedBy" id="receivedBy"/>
			</section>
			<section class ="right-wide">
				 <label>Date:</label>
				<input type="date" name="inputDate" id="inputDate"/>
			</section>
		</section>
	</section>
</form>';

		$data['form'] = $internalFortified_A1;
		$data['form_id'] = 'internalFortified_A1';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function internalFort_A2() {
		$internalFortified_A2 = '';
		$internalFortified_A2 .= '<form id="internalFortified_A2" method="post" action="'.base_url(). 'submit/c_form/form_internalFort_A2'. '">
	<!--form for internal monitoring of salt fortification- A2-->
	<h3 align="center"> FORTIFIED SALT QC/QA- TABLE A-2</h3>
	<p align="center">
		<strong>IODINE COMPOUND INVENTORY CONTROL LOG.</strong>
	</p>
	<p align="center">
		&nbsp;
	</p>
	<table border="0" width="98%">
		<!--<legend>Iodine Compound Inventory Control Log</legend>-->
		<tr>
			<td width="144"></td>
			<td width="144"></td>
			<td width="144"><strong>RECEIVED</strong></td>
			<td width="144"></td>
			<td width="144"></td>
			<td width="144"><strong>DISPATCHED</strong></td>
			<td width="144"></td>
			<td width="144"></td>
		</tr>
		<tr>
			<td width="144">DATE</td>
			<td width="144">Supplier COA#</td>
			<td width="144">#DRUMS(A)</td>
			<td width="144">LOT ID(DRUMS Nos.)</td>
			<td width="144">EXPIRATION DATE</td>
			<td width="144">LOT ID (DRUM Nos.)(B=# DRUMS)</td>
			<td width="144">IN STOCK(C) (C)=(A)-(B)</td>
			<td width="141">Receipt & QC-Review (Name & signature)</td>
		</tr>
		<tr class="clonable">
			<td width="144">
			<input type="date"  name="iodineDate_1" id="iodineDate_1"" class="autoDate cloned"/>
			</td>
			<td width="144">
			<input type="text"  name="iodineSupplier_1" id="iodineSupplier_1" class="cloned"/>
			</td>
			<td width="144">
			<input type="text"  name="iodineDrums_1" id="iodineDrums_1" class="cloned fromZero"/>
			</td>
			<td width="144">
			<input type="text"  name="iodineLot_1" id="iodineLot_1" class="cloned"/>
			</td>
			<td width="144">
			<input type="text"  name="iodineExpiration_1" id="iodineExpiration_1" class="autoDate cloned"/>
			</td>
			<td width="144">
			<input type="text" name="iodineDispatched_1" id="iodineDispatched_1" class="cloned fromZero" />
			</td>
			<td width="144">
			<input type="text" name="iodineStock_1" id="iodineStock_1" class="cloned fromZero" />
			</td>
			<td width="141">
			<input type="text" name="iodineReceipt_1" id="iodineReceipt_1" class="cloned"/>
			</td>
		</tr>
		<tr id="formbuttons">
			<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>
		</tr>
	</table>
	<br/>
	<table width="100%">
		<tr>
			<td width="25%">Fortificant sample sent to external lab:</td>
			<td width="25%">&nbsp;</td>
			<td width="25%">Identification:</td>
			<td width="25%">
			<input type="text" name="identification" id="identification"/>
			</td>
		</tr>
		<tr>
			<td width="25%">Iodine(mg/kg)</td>
			<td width="25%">
			<input type="number" name="iodineKgs" id="iodineKgs"/>
			</td>
			<td width="25%">Identification:</td>
			<td width="25%">
			<input type="text" name="iodineIdentification" id="iodineIdentification"/>
			</td>
		</tr>
		<tr>
			<td width="25%">Iodine(mg/kg)=</td>
			<td width="25%">
			<input type="number" name="iodineMgs" id="iodineMgs"/>
			</td>
			<td width="25%">Date of reporting:</td>
			<td width="25%">
			<input type="text" name="reportingDate" id="reportingDate"/>
			</td>
		</tr>
		<tr>
			<td width="25%">Name:</td>
			<td width="25%">
			<input type="text" name="reportersName" id="reportersName"/>
			</td>
			<td width="25%">Signature:</td>
			<td width="25%">
			<input type="text" name="reportersSignature" id="reportersSignature"/>
			</td>
		</tr>
	</table>
</form>';

		$data['form'] = $internalFortified_A2;
		$data['form_id'] = 'internalFortified_A2';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function internalFort_B1() {
		$internalFortified_B1 = '';
		$internalFortified_B1 .= '<form name="internalFortified_B1" id="internalFortified_B1" method="post" action="' . base_url() .'submit/c_form/form_internalFort_B1' . '"><!--Form for internal monitoring of salt fortification- B1-->
						<h3 align="center"> FORTIFIED SALT QC/QA- TABLE B-1</h3>
						<p align="center"><strong>PRODUCTION LOG FOR IODINE PREMIX</strong></p>
						<p>Salt factory:<select name="saltFactory" id="saltFactory">
						<option value="1">Kensalt</option>
						<option value="2">Magadi Salt</option>
						</select></p>
						<!--<p>Year:  &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
						  <select name="year_1" id="year_1">
						  </select></p>-->
						
						<table width="100%"><!--beggining of table-->
						<tr>
							<td width="12.5%"></td>
							<td width="12.5%"></td>
							<td width="12.5%"></td>
							<td width="12.5%"></td>
							<td width="12.5%">Premix </td>
							<td width="12.5%">Preparation(Time)</td>
							<td width="12.5%"></td>
						</tr>
						<tr>
						   <td width="12.5%">DATE</td>
						   <td width="12.5%">Weight<sup>3</sup>of filler(kg)</td>
						   <td width="12.5%">Weight of the iodine compound(kg)</td>
						   <td width="12.5%">Final weight of the premix(kg)</td>
						   <td width="12.5%">Start</td>
						   <td width="12.5%">End</td>
						   <td width="12.5%">Final premix weight/weight of iodine compound</td>
						   <td width="12.5%">QC review(Name and Signature)</td>
						</tr>
						<tr class="clonable">
						   <td width="12.5%"><input type="text" name="fortifiedDate_1" id="fortifiedDate_1" class="autoDate cloned" /></td>
						   <td width="12.5%"><input type="text" name="fortifiedWeight_1" id="fortifiedWeight_1" class="cloned" /></td>
						   <td width="12.5%"><input type="text" name="compoundWeight_1" id="compoundWeight_1" class="cloned"/></td>
						   <td width="12.5%"><input type="text" name="finalWeight_1" id="finalWeight_1" class="cloned"/></td>
						   <td width="12.5%"><input type="text" name="startTime_1" id="startTime_1" class="mobiscroll cloned" readonly="readonly" value="" /></td>
						   <td width="12.5%"><input type="text" name="endTime_1" id="endTime_1" class="mobiscroll cloned" readonly="readonly" value="" /></td>
						   <td width="12.5%"><input type="text" name="iodineWeight_1" id="iodineWeight_1" class="cloned" /></td>
						   <td width="12.5%"><input type="text" name="qcReview_1" id="qcReview_1" class="cloned"/></td>
						</tr>
						<tr id="formbuttons">

			<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>

			<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>

		</tr>
						
						<tr>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						   <td width="12.5%"></td>
						
						</table>
						<p><sup>3</sup>For premixes in solution, it is the volume in litres.</p>
						</form>';

		$data['form'] = $internalFortified_B1;
		$data['form_id'] = 'internalFortified_B1';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function internalFort_B2() {
		$internalFortified_B2 = '';
		$internalFortified_B2 .= '<form name="internalFortified_B2" id="internalFortified_B2" method="post" action="' . base_url() .'submit/c_form/form_internalFort_B2' . '">
	<!--form for internal monitoring of salt fortification-B2-->
	<h3>SALT FORTIFICATION: TABLE B-2</h3>
	<h4>WEEKLY CHECK UP OF EQUIPMENT USED IN SALT FORTIFICATION WITH IODINE</h4>
	<p>
		Date:
		<input type="text" name="checkupDate" id="checkupDate"/>
	</p>
	<section class="column-wide">
		<section class="row-title">
			<section class = "left">
				<label>EQUIPMENT</label>
			</section>
			<section class="center">
				<label>CONDITION<p></p>(Adequate/Inadequate)</label>
			</section>
			<section class="right">
				<label>OBSERVATIONS</label>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>1. Blender</label>
			</section>
			<section class="center">
				<select name="blenderCondition" id="blenderCondition" >
					<option value="0">Adequate</option>
					<option value="1">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="blenderObservations" id="blenderObservations" rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>2. Balance</label>
			</section>
			<section class="center">
				<select name="balanceCondition" id="balanceCondition" >
					<option value="0">Adequate</option>
					<option value="1">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="balanceObservations" id="balanceObservations"rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>3. Pump</label>
			</section>
			<section class="center">
				<select name="pumpCondition" id="pumpCondition" >
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="pumpObservations" id="pumpObservations" rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>4. Drier</label>
			</section>
			<section class="center">
				<select name="drierCondition" id="drierCondition">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="drierObservations" id="drierObservations"rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>5. Spraying/Drip Equipment</label>
			</section>
			<section class="center">
				<select name="sprayerCondition" id="sprayerCondition" >
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="sprayerObservations" id="sprayerObservations" rows="2"></textarea>
			</section>
		</section>
	</section>
	<br/>
	<p>
		<label>Name/Signature:</label>
		<input type="text" name="checkupName" id="checkupName"/>
</form>';
        
		
		$data['form'] = $internalFortified_B2;
		$data['form_id'] = 'internalFortified_B2';
		try{
			//$this->M_InternalFortifiedB2->equipment;
			$data['devices']=$this->doRetrieveIodizationCentreDevices();
			
		}catch(exception $ex){
			//ignore
		}

		$this -> load -> view('pages/vehicles/index', $data);
		

	}
	
	private function doRetrieveIodizationCentreDevices(){
		$this->load->model('M_InternalFortifiedB2');
		$this->M_InternalFortifiedB2->getManucDevicesByIodizationCenter($this->session->userdata('affiliation'));
		
	}

	public function internalFort_C1() {
		$internalFortified_C1 = '';
		//php form for internal fortification of salts-C1.
		$internalFortified_C1 .= '<form name="internalFortified_C1" id="internalFortified_C1" method="post" action="' . base_url() .'submit/c_form/form_internalFort_C1' . '"><!--form for internal fortification of salts-C1-->
                         <h3>FORTIFIED SALT QC/QA- TABLE C-1</h3>
                         <h4> PRODUCTION AND QUALITY CONTROL LOG FOR FORTIFIED SALT<sup>5</sup>WITH IODINE</h4>
                         <table width="99%">
                         <tr>
                             <td width="15%">SHIFT(Time)</td>
                             <td width="15%">SALT PRODUCED M.T</td>
                             <td width="15%">PREMIX USED(KG)</td>
                             <td width="15%">SALT FORTIFIED/ PREMIX USED</td>
                             <td width="18%">NOTES</td>
                             <td width="18%">COMMENTS</td>
                             <td width="15%">DATE<input type="text" name="dateC1" id="dateC1"/></td>
                              
                         </tr>
                         <tr class="clonable">
                             <td width="15%"><input type="text" name="productionTime_1" id="productionTime_1" class="mobiscroll cloned" readonly="readonly" value="" /></td>
                             <td width="15%"><input type="text" name="saltProduced_1" id="saltProduced_1" class="cloned"/></td>
                             <td width="15%"><input type="text" name="premixUsed_1" id="premixUsed_1" class="cloned"/></td>
                             <td width="15%"><input type="text" name="saltFortified_1" id="saltFortified_1" class="cloned"/></td>
                             <td width="18%"><input type="text" name="notes_1" id="notes_1" class="cloned"/></td>
                             <td width="18%"><input type="text" name="comments_1" id="comments_1" class="cloned"/></td>
                            
                          </tr>
                          <tr>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="18%"></td>
                             <td width="18%"></td>
                             <td width="15%">Results from Quantitative Testing<sup>6</sup>:<input type="text" name="logDate" id="logDate" /></td>
                          </tr>
                          <tr id="formbuttons">

			<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>

			<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>

		</tr>
                          
                         <tr>
                             <td width="15%">Daily Total</td>
                             <td width="15%"><input type="text" name="saltProduced2" id="saltProduced2"/></td>
                             <td width="15%"><input type="text" name="premixUsed2" id="premixUsed2"/></td>
                             <td width="15%"><input type="text" name="saltFortified2" id="saltFortified2"/></td>
                             <td width="18%"><input type="text" name="notes2" id="notes2"/></td>
                             <td width="18%">Responsible:<input type="text" name="responsible" id="responsible"/></td>
                             <td width="15%">Signature:<input type="text" name="sigNature" id="sigNature"/></td>
                         </tr>
                         <tr>
                             <td width="15%">Total to date</td>
                             <td width="15%"><input type="text" name="saltProduced3" id="saltProduced3"/></td>
                             <td width="15%"><input type="text" name="premixUsed3" id="premixUsed3"/></td>
                             <td width="15%"><input type="text" name="saltFortified3" id="saltFortified3"/></td>
                             <td width="18%"><input type="text" name="notes3" id="notes3"/></td>
                             <td width="18%"></td>
                             <td width="15%"></td>
                         </tr>
                      </table>
                      <br/>
                      <br/>
                 <p><sup>5</sup> This table is based on Log-form from the Los Tarros Refinery, S.A in Guatemala.</p>
                 <p><sup>6</sup> These results may be obtained in the factory quality control laboratory or from an external laboratory.</p>
				
             </form>';

		$data['form'] = $internalFortified_C1;
		$data['form_id'] = 'internalFortified_C1';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function externalFort_B1() {
		$externalFortified_B1 = '';

		$externalFortified_B1 .= '<form name="externalfortifiedB1" id="externalfortifiedB1" method="post" action="' . base_url() .'submit/c_form/form_externalFort_B1' . '"><!--form for externalmonitoring of fortified salt-B1-->
<h3> FORTIFIED SALT- AUDITS AND INSPECTION- TABLE B-1</h3>
 <h4> TECHNICAL AUDIT AND INSPECTION VISIT SESSIONS</h4>
<table width="100%">
<tr>
    <td width="25%">Date:</td>
<td width="25%"><input type="text" name="visitDate" id="visitDate"/></td>
      
     <td width="25%">Time:</td>
     <td width="25%"><input type="text" name="visitTime" id="visitTime" class="mobiscroll" readonly="readonly" value="" /></td>
	 
</tr>
<tr>
     <td width="25%">Oil Factory:</td>
     <td width="25%"><select name="oilFactory" id="oilFactory">
	 <option value="1">Magadi Salt</option>
	 <option value="2">Kensalt</option>
	 <option value="3">Melvins</option></select></td>
	 
     <td width="25%">Address:</td>
     <td width="25%"><input type="text" name="visitAddress" id="visitAddress"/></td>
	 
</tr>
<tr>
     <td width="25%">Public health Officer:</td>
     <td width="25%"><select name="phealthOfficer" id="phealthOfficer">
	 <option value="1">Adams Opiyo</option>
	 <option value="2">Rufus Mbugua</option>
	 <option value="3">Nicodemus Maingi</option></select></td></td>
	
</tr>
</table>
<br/>
<br/>


<table width="100%"><!--begginning of table-->
<tr>
     <td width="20%">NAME</td>
     <td width="20%">POSITION</td>
     <td width="20%">SIGNATURE</td>
     <td width="20%">Opening</td>
     <td width="20%">Closing</td>
</tr>
<tr class="clonable">
     <td width="25%"><input type="text" name="auditorName_1" id="auditorName_1" class="cloned"/></td>
     <td width="20%"><input type="text" name="auditorPosition_1" id="auditorPosition_1" class="cloned"/></td>
     <td width="25%"><input type="text" name="auditorSignature_1" id="auditorSignature_1" class="cloned"/></td>
     <td width="15%"><input type="text" name="auditorOpening_1" id="auditorOpening_1" class="cloned"/></td>
     <td width="15%"><input type="text" name="auditorClosing_1" id="auditorClosing_1" class="cloned"/></td>
</tr>
<tr id="formbuttons">

			<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>

			<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>

		</tr>

</table><form>';

		$data['form'] = $externalFortified_B1;
		$data['form_id'] = 'externalfortifiedB1';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function externalFort_B2() {
		$externalFortified_B2 = '';
		$externalFortified_B2 .= '
<form id="externalFortified_B2" action="#" method="post">
	<h2> FORTIFIED SALT-AUDITS AND INSPECTION -TABLE B-2</h2>
	<p align="center">
		TECHNICAL AUDIT AND INSPECTION PRELIMINARY REPORT
	</p>
	<section class="column">
		<section class="row">
			<section class="left">
				<label for="inspection_registry">Inspection Registry:</label>
			</section>
			<section class="right">
				<input id="inspection_registry" name="inspection_registry" type="text" placeholder="" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="inspection_date">Date of Inspection:</label>
			</section>
			<section class="right">
				<input id="inspectionDate" name="inspectionDate" type="text" placeholder="datepicker" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="inspection_officer">Public Health Officers Name:</label>
			</section>
			<section class="right">
				<input id="inspection_officer" name="inspection_officer_name" type="text" placeholder="Surname, Other Names" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="mill_name">Mill name:</label>
			</section>
			<section class="right">
				<input id="mill_name" name="mill_name" type="text" placeholder="" autofocus required>
			</section>
		</section>
	</section>
	<section class="column" style="margin-bottom:10px">
		<section class="row">
			<section class="left">
				<label for="address">Address:</label>
			</section>
			<section class="right">
				<input id="address" name="address" type="text" placeholder="" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="telephone">Telephone:</label>
			</section>
			<section class="right">
				<input id="telephone" name="telephone" type="text" placeholder="" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="fax">Fax:</label>
			</section>
			<section class="right">
				<input id="fax" name="fax" type="text" placeholder="" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="email">Email:</label>
			</section>
			<section class="right">
				<input id="email" name="email" type="text" placeholder="" autofocus required>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row-title">
			ASPECTS  YES  NO  N/A

			1.1 Cleaning and sanitation:
		</section>
		<section class="row">
			<label> 1.1.1 Production area </label>
			<input type="radio" name="production_area" id="pda_y" value="yes" />
			<input type="radio" name="production_area" id="pda_n" value="no" />
			<input type="radio" name="production_area" id="pda_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.1.2 Packaging area</label>
			<input type="radio" name="packaging_area" id="pga_y" value="yes" />
			<input type="radio" name="packaging_area" id="pga_n" value="no" />
			<input type="radio" name="packaging_area" id="pga_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.1.3 Warehouse</label>
			<input type="radio" name="warehouse" id="wh_y" value="yes" />
			<input type="radio" name="warehouse" id="wh_n" value="no" />
			<input type="radio" name="warehouse" id="wh_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.1.4 Staff facilities and toilettes</label>
			<input type="radio" name="staff_facilities" id="staff_f_y" value="yes" />
			<input type="radio" name="staff_facilities" id="staff_f_n" value="no" />
			<input type="radio" name="staff_facilities" id="staff_f_na" value="n/a" />
		</section>
		<section class="row-title">
			1.2 Personnel:
		</section>
		<section class="row">
			<label> 1.2.1 Hygiene as required in regulations</label>
			<input type="radio" name="hygiene" id="hygiene_y" value="yes" />
			<input type="radio" name="hygiene" id="hygiene_n" value="no" />
			<input type="radio" name="hygiene" id="hygiene_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.2.2 Wearing protective clothing</label>
			<input type="radio" name="protective_clothing" id="protective_clothing_y" value="yes" />
			<input type="radio" name="protective_clothing" id="protective_clothing_n" value="no" />
			<input type="radio" name="protective_clothing" id="protective_clothing" value="n/a" />
		</section>
		<section class="row">
			<label> 1.2.3 Trained in the tasks they perform</label>
			<input type="radio" name="trained_in_task" id="trained_y" value="yes" />
			<input type="radio" name="trained_in_task" id="trained_n" value="no" />
			<input type="radio" name="trained_in_task" id="trained_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.3 Written procedures or instructions for:</label>
		</section>
		<section class="row">
			<label> 1.3.1 Receipt and storage of premix</label>
			<input type="radio" name="receipt_and_storage" id="rsp_y" value="yes" />
			<input type="radio" name="receipt_and_storage" id="rsp_n" value="no" />
			<input type="radio" name="receipt_and_storage" id="rsp_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.3.2 Premix dilution (if applicable)</label>
			<input type="radio" name="premix_dilution" id="prem_dilution_y" value="yes" />
			<input type="radio" name="premix_dilution" id="prem_dilution_n" value="no" />
			<input type="radio" name="premix_dilution" id="prem_dilution_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.3.3 Feeder verification</label>
			<input type="radio" name="feeder_verification" id="feeder_verification_y" value="yes" />
			<input type="radio" name="feeder_verification" id="eeder_verification_n" value="no" />
			<input type="radio" name="feeder_verification" id="eeder_verification_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.3.4 Sampling of salt for QC</label>
			<input type="radio" name="sampling_salt" id="sampling_salt_y" value="yes" />
			<input type="radio" name="sampling_salt" id="sampling_salt_n" value="no" />
			<input type="radio" name="sampling_salt" id="sampling_salt_na" value="n/a" />
		</section>
		<section class="row">
			<label> 1.3.5 Iodine test for salt</label>
			<input type="radio" name="salt_iodine_test" id="salt_iodine_test_y" value="yes" />
			<input type="radio" name="salt_iodine_test" id="salt_iodine_test_n" value="no" />
			<input type="radio" name="salt_iodine_test" id="salt_iodine_test_na" value="n/a" />
		</section>
		ASPECTS  YES  NO  N/A

		2.0 Micronutrient premix:
		<section class="row">
			<label> 2.1 Iodined compound inventory is upto to date</label>
			<input type="radio" name="iodine_inventory_uptodate" id="iodine_inventory_uptodate_y" value="yes" />
			<input type="radio" name="iodine_inventory_uptodate" id="iodine_inventory_uptodate_n" value="no" />
			<input type="radio" name="iodine_inventory_uptodate" id="iodine_inventory_uptodate_na" value="n/a" />
		</section>
		<section class="row">
			<label> 2.2 Certificate of Analysis is received per lot</label>
			<input type="radio" name="certificate_of_analysis" id="certificate_of_analysis_y" value="yes" />
			<input type="radio" name="certificate_of_analysis" id="certificate_of_analysis_n" value="no" />
			<input type="radio" name="certificate_of_analysis" id="certificate_of_analysis_na" value="n/a" />
		</section>
		<section class="row">
			<label> 2.3 Iodined compound is stored adequately</label>
			<input type="radio" name="iodine_stored_well" id="iodine_stored_well_y" value="yes" />
			<input type="radio" name="iodine_stored_well" id="iodine_stored_well_n" value="no" />
			<input type="radio" name="iodine_stored_well" id="iodine_stored_well_na" value="n/a" />
		</section>
		<section class="row">
			<label> 2.4 "First-in, first-out" system</label>
			<input type="radio" name="fifo_system" id="fifo_system_y" value="yes" />
			<input type="radio" name="fifo_system" id="fifo_system_na" value="no" />
			<input type="radio" name="fifo_system" id="fifo_system_na" value="n/a" />
		</section>
		<section class="row">
			<label> 2.5 Iodined compound is handled well</label>
			<input type="radio" name="iodine_handling" id="iodine_handling_y" value="yes" />
			<input type="radio" name="iodine_handling" id="iodine_handling_n" value="no" />
			<input type="radio" name="iodine_handling" id="iodine_handling_na" value="n/a" />
		</section>
	</section>
	<section class="column">
		<section class="row-title">
			ASPECTS  YES  NO  N/A

			3.0 Salt fortification:
		</section>
		<section class="row">
			<label> 3.1 Premix Preparation</label>
			<input type="radio" name="premix_preparation" id="premix_preparation_y" value="yes" />
			<input type="radio" name="premix_preparation" id="premix_preparation_n" value="no" />
			<input type="radio" name="premix_preparation" id="premix_preparation_na" value="n/a" />
		</section>
		<section class="row">
			<label> 3.1.1 Storage and handling adequate</label>
			<input type="radio" name="storage_handling" id="storage_handling_y" value="yes" />
			<input type="radio" name="storage_handling_area" id="storage_handling_n" value="no" />
			<input type="radio" name="storage_handling" id="storage_handling_na" value="n/a" />
		</section>
		<section class="row">
			<label> 3.2 Records of feeder/sprayer performance are available</label>
			<input type="radio" name="feeder_records_available" id="feeder_records_available_y" value="yes" />
			<input type="radio" name="feeder_records_available" id="feeder_records_available_n" value="no" />
			<input type="radio" name="feeder_records_available" id="feeder_records_available_na" value="n/a" />
		</section>
		<section class="row">
			<label> 3.3 Premix level in feeder adequate during visit</label>
			<input type="radio" name="premix_level_adequate" id="premix_level_adequate_y" value="yes" />
			<input type="radio" name="premix_level_adequate" id="premix_level_adequate_n" value="no" />
			<input type="radio" name="premix_level_adequate" id="premix_level_adequate_na" value="n/a" />
		</section>
		<section class="row">
			<label> 3.4 Records of salt produced/premix used up to date</label>
			<input type="radio" name="salt_records_uptodate" id="salt_records_uptodate_y" value="yes" />
			<input type="radio" name="salt_records_uptodate" id="salt_records_uptodate_n" value="no" />
			<input type="radio" name="salt_records_uptodate" id="salt_records_uptodate_na" value="n/a" />
		</section>
		<section class="row">
			<label> 3.5 Salt samples taken for analysis in  every shift</label>
			<input type="radio" name="shift_samples_taken" id="shift_samples_taken_y" value="yes" />
			<input type="radio" name="shift_samples_taken" id="shift_samples_taken_n" value="no" />
			<input type="radio" name="shift_samples_taken" id="shift_samples_taken_na" value="n/a" />
		</section>
		<section class="row-title">
			3.6 Corrective action taken when:
		</section>
		<section class="row">
			<label> 3.6.1 Ratio salt produce/premix is not right</label>
			<input type="radio" name="ratio_action" id="ratio_action_y" value="yes" />
			<input type="radio" name="ratio_action" id="ratio_action_n" value="no" />
			<input type="radio" name="ratio_action" id="ratio_action_na" value="n/a" />
		</section>
		<section class="row">
			<label> 3.6.2 Results show iodine  40mg/kg </label>
			<input type="radio" name="iodine_results_level" id="iodine_results_level_y" value="yes" />
			<input type="radio" name="iodine_results_level" id="iodine_results_level_n" value="no" />
			<input type="radio" name="iodine_results_level" id="iodine_results_level_na" value="n/a" />
		</section>
		<section class="row-title">
			ASPECTS  YES  NO  N/A

			4.0 Fortified salt:
		</section>
		<section class="row">
			<label> 4.1 Records of salt samples analyzed using</label>
			<input type="radio" name="salt_samples_analyzed" id="salt_samples_analyzed_y" value="yes" />
			<input type="radio" name="salt_samples_analyzed" id="salt_samples_analyzed_n" value="no" />
			<input type="radio" name="salt_samples_analyzed" id="salt_samples_analyzed_na" value="n/a" />
		</section>
		<section class="row">
			<label> 4.1.1 Internal Test</label>
			<input type="radio" name="internal_test" id="internal_test_y" value="yes" />
			<input type="radio" name="internal_test" id="internal_test_n" value="no" />
			<input type="radio" name="internal_test" id="internal_test_na" value="n/a" />
		</section>
		<section class="row">
			<label> 4.1.2 External labaratory</label>
			<input type="radio" name="external_lab" id="external_lab_y" value="yes" />
			<input type="radio" name="external_lab_n" id="staff_f" value="no" />
			<input type="radio" name="external_lab" id="external_lab_na" value="n/a" />
		</section>
		<section class="row">
			<label> 4.2 Daily composite samples are prepared</label>
			<input type="radio" name="daily_compo_prepared" id="daily_compo_prepared_y" value="yes" />
			<input type="radio" name="daily_compo_prepared" id="daily_compo_prepared_n" value="no" />
			<input type="radio" name="daily_compo_prepared" id="daily_compo_prepared_na" value="n/a" />
		</section>
		<section class="row">
		    <label>4.3 Last 30 samples are stored and available</label>
		    <input type="radio" name="last_samples_stored" id="last_samples_stored_y" value="yes" />
			<input type="radio" name="last_samples_stored" id="last_samples_stored_n" value="no" />
			<input type="radio" name="last_samples_stored" id="last_samples_stored_na" value="n/a" />
		</section>
		<section class="row">
			<label>4.4 Labeling meets specifications</label>
			<input type="radio" name="good_labeling" id="good_labeling_y" value="yes" />
			<input type="radio" name="good_labeling" id="good_labeling_n" value="no" />
			<input type="radio" name="good_labeling" id="good_labeling_na" value="n/a" />
		</section>
		<section class="row">
			<label> 4.5 Fortified salt is stored adequately</label>
			<input type="radio" name="fortified_salt_stored" id="fortified_salt_stored_y" value="yes" />
			<input type="radio" name="fortified_salt_stored" id="fortified_salt_stored_n" value="no" />
			<input type="radio" name="fortified_salt_stored_na" id="staff_f" value="n/a" />
		</section>
	</section>
	<section class="column-wide">
		Actions taken from recommendations of last technical auditing and inspection visit (Table B-2)

	</section>
</form>
';

		$data['form'] = $externalFortified_B2;
		$data['form_id'] = 'externalFortified_B2';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function externalFort_B3() {
		$externalFortified_B3 = '';
		$externalFortified_B3 .= '

      <!--start of fortified salt-audits & inspection table-3: ctechnical audit and inspection preliminary report-->
' . '
<!--start of fortified salt-audits & inspection table-3: ctechnical audit and inspection preliminary report-->
' . '
<form id="externalFortified_B3" action="' . base_url() .'submit/c_form/form_externalFort_B3' . '" method="post">
	<h2> FORTIFIED SALT-AUDITS AND INSPECTION -TABLE B-3</h2>
	<p align="center">
		TECHNICAL AUDIT AND INSPECTION PRELIMINARY REPORT
	</p>
	<section class="column">
		<section class="row">
			<section class="left">
				<label for="inspection_registry">Inspection Registry:</label>
			</section>
			<section class = "right">
				<input id="inspection_registry" name="inspection_registry" type="text" placeholder="" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="inspection_date">Date of Inspection:</label>
			</section>
			<section class = "right">
				<input id="inspections_date" name="inspections_date" type="text" placeholder="datepicker" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="factory_name">Factory Name:</label>
			</section>
			<section class = "right">
				<input id="factory_name" name="factory_name" type="text" placeholder="" autofocus required>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<section class="left">
				<label for="factory_rep">Factory Representative:</label>
			</section>
			<section class = "right">
				<input id="factory_rep" name="factory_rep" type="text" placeholder="" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="address">Address:</label>
			</section>
			<section class = "right">
				<input id="address" name="address" type="text" placeholder="" autofocus required>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="telephone">Telephone:</label>
			</section>
			<section class = "right">
				<input id="telephone" name="telephone" type="text" placeholder="" autofocus required>
			</section>
		</section>
	</section>
	<section class="column-wide">
	PRELIMINARY REPORT >1. Areas Visited(Check where applicable)
	<section class="row">
		<input type="checkbox" name="cbo_production" id="cbo_production" value="production">
		<label for="production">Production</label>
		<input type="checkbox" name="cbo_packaging" id="cbo_packaging" value="packaging">
		<label for="packaging">Packaging</label>
		<input type="checkbox" name="cbo_fortification_site" id="cbo_fortification_site" value="fortification_site">
		<label for="fortification_site">Fortification site</label>
		<input type="checkbox" name="cbo_labaratory" id="cbo_labaratory" value="labaratory">
		<label for="labaratory">Labaratory</label>
	</section>
	<section class="row">
		<input type="checkbox" name="cbo_warehouse" id="cbo_cbo_warehouse" value="salt_warehouse">
		<label for="salt_warehouse">Salt Warehouse</label>
		<input type="checkbox" name="cbo_rm_salt_warehouse" id="cbo_rm_salt_warehouse" value="rm_salt_warehouse">
		<label for="rm_salt_warehouse">Raw Material Warehouse</label>
		<input type="checkbox" name="cbo_other" id="cbo_other" value="other">
		<label for="other">Other:</label>
	</section>
	<input type="hidden" name="areas_visited" id="areas_visited" value=""/>
</section>
<section class="column">
	2. Non-CompliancesList of the non-compliances foundSuggestions for Improvement 	<textarea id="compliances_list" name="compliances_list" type="text" placeholder="" autofocus required></textarea>
</section>
<section class="column">
	<textarea id="suggestions" name="suggestions" type="text" placeholder="" autofocus required></textarea>
</section>
<section class="column">
	<section class="row">
		<label for="health_officer" >Public Health Officer:</label>
		<input type="text" id="health_officer" name="health_officer" value="" autofocus required>
	</section>
	<section class="row">
		<label for="ho_signature" >Signature:</label>
		<input type="text" id="ho_signature" name="ho_signature" value="" autofocus required>
	</section>
	<section class="row">
		<label for="ho_signature_date" >Date:</label>
	</section>
</section>
<section class="column">
	<section class="row">
		<label for="factory_rep" >Received by (Factory Representative:)</label>
		<input type="text" id="factory_reps" name="factory_reps" value="" autofocus required>
	</section>
	<section class="row">
		<label for="ro_signature" >Signature:</label>
		<input type="text" id="ro_signature" name="ro_signature" value="" autofocus required>
	</section>
	<section class="row">
		<label for="ro_signature_date" >Date:</label>
		<input type="text" id="ho_signature_date" name="ho_signature_date" value="" autofocus required>
	</section>
</section>
<section class="column">
	<section class="row">
		<input type="text" id="roSignature" name="roSignature" value="" autofocus required>
		<label for="supervisor_name" >Supervisor(Name and Signature)</label>
	</section>
</section>
<section class="column">
	<section class="row">
		<input type="text" id="supervisor_name" name="supervisor_name" value="" autofocus required>
		<label for="s_signature_date" >Date</label>
	</section>
</section>
</form> 

';

		$data['form'] = $externalFortified_B3;
		$data['form_id'] = 'externalFortified_B3';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function externalIod_B1() {
		$externalIodization_B1 = '';
		$externalIodization_B1 .= '<form name="externalIodizationB1" id="externalIodizationB1" method="post" action="">
							<table width="100%" >
							<h3 align="center">IODIZED SALT- AUDITS AND INSPECTION- TABLE B-1</h3>
							<h4 align="center">CHECKLISTS OF TECHNICAL AUDIT AND INSPECTION VISIT TO IODIZATION CENTERS</h4>
							<tr>
								 <td width="204">Inspection Registry</td>
								 <td width="161"><input type="text" name="inspectionRegistry" id="inspectionRegistry"/></td>
								 <td width="144">Date</td>
								 <td width="144"><input type="text" name="inspectionsDate" id="inspectionsDate"/></td>
								 <td width="211">Inspector</td>
								 <td width="144"><input type="text" name="inspecTor" id="inspecTor"/></td>
							</tr>
								 <td width="204">Iodization center</td>
								 <td width="161"><input type="text" name="iodizationCenter" id="iodizationCenter"/></td>
							</tr>
							<tr> 
								 <td width="204">Address</td>
								 <td width="161"><input type="text" name="inspectionAddress" id="inspectionAddress"/></td>
							</tr>
							<tr>
								 <td width="204">Telephone</td>
								 <td width="161"><input type="text" name="inspectorTelephone" id="inspectorTelephone"/></td>
								 <td width="144">Fax</td>
								 <td width="144"><input type="text" name="inspectorFax" id="inspectorFax"/></td>
								 <td width="211">E-mail</td>
								 <td width="144"><input type="text" na,e="inspectorEmail" id="inspectorEmail"/></td>
							</tr>
							<tr>
								 <td width="204">ASPECTS</td>
								 <td width="161">YES</td>
								 <td width="144">NO</td>
								 <td width="144">N/A</td>
								 <td width="211">ASPECTS</td>
								 <td width="144">YES</td>
								 <td width="63">NO</td>
								 <td width="55">N/A</td>
							</tr>
							<br/>
							<tr>
								 <td width="204"><strong>1.Iodate and premix:</strong></td>
								 <td width="161"></td>
								 <td width="161"></td>
								 <td width="161"></td>
								 <td width="161"><strong>3. Iodization Process</strong></td>
								 
							</tr>
							<tr>
								 <td width="204">1.1 Inventory is up to date</td>
								 <td width="161"><input type="radio" name="inventoryYes" id="inventoryYes"/></td>
								 <td width="144"><input type="radio" name="inventoryNo" id="inventoryNo"/></td>
								 <td width="144"><input type="radio" name="inventoryNa" id="inventoryNa"/></td>
								 <td width="211">3.1 Salt/ Premix proportion as</td>
								 <td width="144"><input type="radio" name="proportionYes" id="proportionYes"/></td>
								 <td width="63"><input type="radio" name="proportionNo" id="proportionNo"/></td>
								 <td width="55"><input type="radio" name="proportionNa" id="proportionNa"/></td>
							</tr>
							<tr>
								 <td width="204">1.2Sufficient iodate for 6</td>
								 <td width="161"><input type="radio" name="sufficientYes" id="sufficientYes"/></td>
								 <td width="144"><input type="radio" name="sufficientNo" id="sufficientNo"/></td>
								 <td width="144"><input type="radio" name="sufficientNa" id="sufficientNa"/></td>
								 <td width="211">3.2 Records of iodized salt updated</td>
								 <td width="144"><input type="radio" name="recordsYes" id="recordsYes"/></td>
								 <td width="63"><input type="radio" name="recordsNo" id="recordsNo"/></td>
								 <td width="55"><input type="radio" name="recordsNa" id="recordsNa"/></td>
							</tr>
							<tr>
								 <td width="204">&nbsp; Premix for 3 months</td>
								 <td width="161"><input type="radio" name="premixYes" id="premixYes"/></td>
								 <td width="144"><input type="radio" name="premixNo" id="premixNo"/></td>
								 <td width="144"><input type="radio" name="premixNa" id="premixNa"/></td>
								 <td width="211"><strong>4.Packaging and labelling</strong></td>
								 
							</tr>
							<tr>
								 <td width="204">1.3 Storage is adequate</td>
								 <td width="161"><input type="radio" name="storageYes" id="storageYes"/></td>
								 <td width="144"><input type="radio" name="storageNo" id="storageNo"/></td>
								 <td width="144"><input type="radio" name="storageNa" id="storageNa"/></td>
								 <td width="211">4.1 Salt packaged in adequately</td>
								 <td width="144"><input type="radio" name="packagingYes" id="packagingYes"/></td>
								 <td width="63"><input type="radio" name="packagingNo" id="packagingNo"/></td>
								 <td width="55"><input type="radio" name="packagingNa" id="packagingNa"/></td>
							</tr>
							<tr>
								 <td width="204"><strong>2.Premix preparation:</strong></td>
							</tr>
							<tr>
								 <td width="204">2.1 Potassium iodate amount as</td>
								 <td width="161"><input type="radio" name="potassiumYes" id="potassiumYes"/></td>
								 <td width="144"><input type="radio" name="potassiumNo" id="potassiumNo"/></td>
								 <td width="144"><input type="radio" name="potassiumNa" id="potassiumNa"/></td>
							</tr>
							<tr>
								 <td width="204">2.2 Records of premix</td>
								 <td width="161"><input type="radio" name="precordsYes" id="precordsYes"/></td>
								 <td width="144"><input type="radio" name="precordsNo" id="precordsNo"/></td>
								 <td width="144"><input type="radio" name="precordsNa" id="precordsNa"/></td>
							</tr>
							<tr>
								 <td width="204">2.3 "First in, first-out" system</td>
								 <td width="161"><input type="radio" name="fifoYes" id="fifoYes"/></td>
								 <td width="144"><input type="radio" name="fifoNo" id="fifoNo"/></td>
								 <td width="144"><input type="radio" name="fifoNa" id="fifoNa"/></td>
								
							</tr>
							<tr>
								 <td width="204"><strong>Results of the iodine content.</strong></td>
							</tr>
							<tr>
								 <td width="204">Sample #</td>
								 <td width="161">Iodine Content</td>
								 <td width="144">Sample# - of processed samples</td>
								 <td width="144">Iodine Content</td>
							</tr>
							<tr>
								 <td width="204"><input type="text" name="sampleNumber" id="sampleNumber"/></td>
								 <td width="161"><input type="text" name="iodineContent" id="iodineContent"/></td>
								 <td width="144"><input type="text" name="processedSamples" id="processedSamples"/></td>
								 <td width="144"><input type="text" name="iodineContents" id="iodinecOntents"/></td>
							</tr>
							<tr>
								 <td width="204">Average(mg/kg)</td>
								 <td width="161"><input type="text" name="averageSample" id="averageSample"/></td>
								 <td width="144">Average(mg/kg)</td>
								 <td width="144"><input type="text" name="averageSamples" id="averageSamples"/></td>
							</tr>
							<br/>
							<tr>
								 <td width="204">New Recommendations</td>
							</tr>
							<tr>
								 <td width="204">Non-compliances:</td>
								 <td width="161"><textarea name="nonCompliances"></textarea></td>
							</tr>
							<tr>
								 <td width="204">Suggestions for Improvement:</td>
								 <td width="161"><textarea name="improvementSuggestions" ></textarea></td>
							</tr>
							<tr>
								 <td><strong>Inspector</strong></td>
								 <td><input type="text" name="insPector" id="insPector"/></td>
								 <td><strong>Received by(Factory representative):</strong></td>
								 <td><input type="text" name="factoryRepresentative" id="factoryRepresentative"/></td>
								 <td><strong>Date</strong></td>
								 <td><input type="text" name="externalIodB1_date_rep_signed" id="externalIodB1_date_rep_signed"/></td>
							</tr>
							<tr>
								 <td><strong>Signature:(Inspector)</strong></td>
								 <td><input type="text" name="inspectorSignature" id="inspectorSignature"/></td>
								 <td><strong>Signature(Factory representative):</strong></td>
								 <td><input type="text" name="signaturefRepresentative" id="signaturefRepresentative"/></td>
								 <td><strong>Date</strong></td>
								 <td><input type="text" name="signatureDate" id="signatureDate"/></td>
							</tr>
							<tr>
								 <td><strong>Supervisor(Name):</strong></td>
								 <td><input type="text" name="supervisorName" id="supervisorName"/></td>
								 <td><strong>Signature(supervisor):</strong></td>
								 <td><input type="text" name="signatureSupervisor" id="signatureSupervisor"/></td>
								 <td><strong>Date</strong></td>
								 <td><input type="text" name="supervisorDate" id="supervisorDate"/></td>
							</tr>   
							       
							</table>
							</form>';

		$data['form'] = $externalIodization_B1;
		$data['form_id'] = 'externalIodizationB1';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function smallScale_A1() {
		$smallScale_A1 = '';
		$smallScale_A1 .= '<form name="smallScale_A1" id="smallScale_A1" method="post" action="">
					<h3> IODIZED SALT- QA IN SMALL SCALE OPERATIONS- TABLE A-1</h3>
					<h4>INVENTORY CONTROL LOG OF POTASSIUM IODATE IN STOCK AND PREMIX PRODUCTION</h4>
					<p>Harvest Year:<select name="harvestYear" id="harvestYear"></select></p>
					<table width="100%">
					<tr>
                       <td width="144"><strong></strong></td>
                       <td width="250" align="center"><strong>RECEIVED</strong></td>
     
                    </tr>
					<tr>
						 <td width="144"><strong>DATE</strong></td>
						 <td width="144"><strong>Supplier Name</strong></td>
						 <td width="144"><strong>KG(A)</strong></td>
						 <td width="144"><strong>Lot #</strong></td>
						 <td width="144"><strong>Content of Iodine(g/kg)</strong></td>
						 <td width="12.5%"><strong>Amount Used(B)</strong></td>
						 <td width="144"><strong>In stock (C) &nbsp; (C)=(A)-(B)</strong></td>
						 <td width="140"><strong>Amount of Premix Produced(kg)</strong></td>
					</tr>
					<tr class="clonable">
						 <td width="144"><input type="text" name="controlDate_1" id="controlDate_1" class="autoDate cloned"/></td>
						 <td width="144"><input type="text" name="supplierName_1" id="supplierName_1" class="cloned"/></td>
						 <td width="144"><input type="text" name="controlKg_1" id="controlKg_1" class="cloned fromZero"/></td>
						 <td width="144"><input type="text" name="controlLot_1" id="controlLot_1" class="cloned"/></td>
						 <td width="144"><input type="text" name="iodineContent_1" id="iodineContent_1" class="cloned" /></td>
						 <td width="144"><input type="text" name="amountUsed_1" id="amountUsed_1" class="cloned fromZero" /></td>
						 <td width="144"><input type="text" name="inStock_1" id="inStock_1" class="cloned" /></td>
						 <td width="140"><input type="text" name="premixAmount_1" id="premixAmount_1" class="cloned" readonly="readonly"/></td>
					</tr>
					<tr id="formbuttons">

			<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>

			<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>

		</tr>
					</table>
					</form>';
		$data['form'] = $smallScale_A1;
		$data['form_id'] = 'smallScale_A1';

		$this -> load -> view('pages/vehicles/index', $data);

	}

	public function smallScale_A2() {
		$smallScale_A2 = '';
		$smallScale_A2 .= '
 <form name="" id="smallScale_A2" method="post" action=""><!--form for internal monitoring of salt fortification- A2-->
						<h3 align="center"> IODIZED SALT QA IN SMALL SCALE OPERATIONS-TABLE A2</h3>
						<p align="center"><strong>INVENTORY CONTROL LOG OF POTASSIUM IODATE PREMIX IN STOCK AND SALT PRODUCTION.</strong></p>
						<p align="center">&nbsp;</p>
                        <p>Harvest Year:<select name="harvestYear" id="harvestYear"></select></p>
                        <table border="0" width="100%">
                        <tr>
                           <td width="12.5%"></td>
                           <td width="12.5%">RECEIVED</td>
                           <td width="12.5%">/</td>
                           <td width="12.5%">PRODUCED</td>
                           <td width="12.5%">LOCALLY</td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                         </tr>
                           <tr>
                           <td width="12.5%">DATE</td>
                           <td width="12.5%">SUPPLIER NAME</td>
                           <td width="12.5%">KG(A)</td>
                           <td width="12.5%">LOT #</td>
                           <td width="12.5%">CONTENT OF IODINE(G/KG)</td>
                           <td width="12.5%">AMOUNT USED(B)</td>
                           <td width="12.5%">IN STOCK(C) (C)=A-B</td>
                           <td width="12.5%">AMOUNT OF SALT PRODUCED(KG)</td>
                         </tr>
                           <tr class="clonable">
                           <td width="12.5%"><input type="text" name="premixDate_1" id="premixDate_1" class="autoDate cloned"/></td>
                           <td width="12.5%"><input type="text"  name="supplierNames_1" id="supplierNames_1" class="cloned"/></td>
                           <td width="12.5%"><input type="text"  name="premixKg_1" id="premixKg_1" class="cloned fromZero" /></td>
                           <td width="12.5%"><input type="text"  name="premixLot_1" id="premixLot_1" class="cloned "/></td>
                           <td width="12.5%"><input type="text"  name="premixContent_1" id="premixContent_1" class="cloned positive"/></td>
                           <td width="12.5%"><input type="text"  name="premixAmountUsed_1" id="premixAmountUsed_1" class="cloned fromZero"/></td>
                           <td width="12.5%"><input type="text"  name="premixInStock_1" id="premixInStock_1" class="cloned fromZero" readonly="readonly" /></td>
                           <td width="12.5%"><input type="text"  name="premixSaltProduced_1" id="premixSaltProduced_1" class="cloned fromZero"/></td>
                         </tr>
                         <tr id="formbuttons">

							<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
				
							<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>

						</tr>
                        </table></form> ';
						$data['form'] = $smallScale_A2;
						$data['form_id'] = 'smallScale_A2';
				
						$this -> load -> view('pages/vehicles/index', $data);

	}

}?>