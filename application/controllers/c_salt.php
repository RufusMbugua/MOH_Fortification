<?php
   class C_salt extends CI_Controller{
   	
	public function internalFort_A1() {
		$internalFortified_A1 = '';
		$internalFortified_A1 .= '
<form name="internalFortified_A1" id="internalFortified_A1" method="POST" action="' . base_url() .'submit/c_form_salt/form_internalFort_A1' . '" >
	<!-- form for internal salt fortification. 1-a -->
	<h3 align="center"> FORTIFIED SALT-TABLE A-1</h3>
	<p align="center">
		INSPECTION FORM FOR INCOMING IODINE COMPOUNDS
	</p>
	<section class="block">
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
						<option value="1">Oxfirm</option>
						<option value="2">TeraChloro Inc.</option>
					</select>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Inspected by:</label>
				</section>
				<section class="right">
					<select name="inspectedBy" id="inspectedBy">
						<option value="Port Official">Port Official</option>
						<option value="Quality Manager">Quality Manager</option>
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
	</section>
	<section class="column-wide">
	<section class="row">
	  <section class="row-title">
		<section class="left-wide">
			SPECIFICATIONS
		</section>
		<section class="right-wide">
			OBSERVATIONS
		</section>
	  </section>
   </section>
   <section class="row">
	  <section class="left">
		<label>Quantity</label>
	   </section>
	   <section class="center">
		<input type="text" name="quantity" id="quantity"/>
	    </section>
    	<section class="right">
		<textarea name="integrityObservation" id="integrityObservation" rows="3"></textarea>
	</section>
   </section>

		<section class="row">
			<section class="left">
				<label for="lotObservation">Lot number:</label>
			</section>
			<section class="center">
				<input type="checkbox" name="lotNumber" id="lotNumber" value="yes"/>
				<input type="hidden" id="lotNumber_cb" name="lotNumber" value=""/>
			</section>
			<section class="right">
				<textarea name="lotObservation" id="lotObservation" rows="3"></textarea>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="productionDate"> Production Date:</label>
			</section>
			<section class="center">
				<input type="checkbox" name="productionDate" id="productionDate" value="yes" />
				<input type="hidden" id="productionDate_cb" name="productionDate" value=""/>
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
				<input type="checkbox" name="expirationDate" id="expirationDate" value="yes" />
				<input type="hidden" id="expirationDate_cb" name="expirationDate" value=""/>
			</section>
			<section class="right">
				<textarea name="expirationObservation" id="expirationObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label for="contentClaimed">Content claimed in label</label>
			</section>
			<section class="center">
				<input type="checkbox" name="contentClaimed" id="contentClaimed" value="yes"/>
				<input type="hidden" id="contentClaimed_cb" name="contentClaimed" value=""/>
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
				<input type="checkbox" name="certOfanalysis" id="certOfanalysis" value="yes"/>
				<input type="hidden" id="certOfanalysis_cb" name="certOfanalysis" value=""/>
			</section>
			<section class="right">
				<textarea name="certificateObservation" id="certificateObservation" rows="3"></textarea>
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label for="otherObservation">Other:</label>
				
			</section>
			<section class="center"><input type="text" name="other" id="other"/></section>
			<section class="right">
				<textarea name="otherObservation" id="otherObservation" rows="3"></textarea>
			</section>
		</section>
	</section>
	<section class="column-wide">
		<section class="row2">
			<section class ="left-wide">
				Accepted:
				<input type="radio" name="accepted" id="accepted_a" value="1" />
			</section>
			<section class ="right-wide">
				Rejected:
				<input type="radio" name="accepted" id="accepted_r" value="0"/>
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

		$this -> load -> view('form', $data);

	}

	public function internalFort_A2() {
		$internalFortified_A2 = '';
		$internalFortified_A2 .= '<form id="internalFortified_A2" method="post" action="'.base_url(). 'submit/c_form_salt/form_internalFort_A2'. '">
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

		$this -> load -> view('form', $data);

	}

	public function internalFort_B1() {
		$internalFortified_B1 = '';
		$internalFortified_B1 .= '<form name="internalFortified_B1" id="internalFortified_B1" method="post" action="' . base_url() .'submit/c_form_salt/form_internalFort_B1' . '"><!--Form for internal monitoring of salt fortification- B1-->
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

		$this -> load -> view('form', $data);

	}

	public function internalFort_B2() {
		$internalFortified_B2 = '';
		$internalFortified_B2 .= '<form name="internalFortified_B2" id="internalFortified_B2" method="post" action="' . base_url() .'submit/c_form_salt/form_internalFort_B2' . '">
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
				<input type="hidden" id="blender" name="blender_1" value=""/>
			</section>
			<section class="center">
				<select name="blenderCondition" id="blenderCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="blenderObservations" id="blenderObservations" rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>2. Balance</label>
				<input type="hidden" id="balance" name="balance_2" value=""/>
			</section>
			<section class="center">
				<select name="balanceCondition" id="balanceCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="balanceObservations" id="balanceObservations"rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>3. Pump</label>
				<input type="hidden" id="pump" name="pump_3" value=""/>
			</section>
			<section class="center">
				<select name="pumpCondition" id="pumpCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="pumpObservations" id="pumpObservations" rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>4. Drier</label>
				<input type="hidden" id="drier" name="drier_4" value=""/>
			</section>
			<section class="center">
				<select name="drierCondition" id="drierCondition">
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="drierObservations" id="drierObservations"rows="2"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>5. Spraying/Drip Equipment</label>
				<input type="hidden" id="sprayingEquipment" name="sprayingEquipment_5" value=""/>
			</section>
			<section class="center">
				<select name="sprayerCondition" id="sprayerCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
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

		$this -> load -> view('form', $data);

	}

	public function internalFort_C1() {
		$internalFortified_C1 = '';
		//php form for internal fortification of salts-C1.
		$internalFortified_C1 .= '<form name="internalFortified_C1" id="internalFortified_C1" method="post" action="' . base_url() .'submit/c_form_salt/form_internalFort_C1' . '"><!--form for internal fortification of salts-C1-->
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
                             <td width="15%"><input type="text" name="saltProduced_1" id="saltProduced_1" class="cloned fromZero"/></td>
                             <td width="15%"><input type="text" name="premixUsed_1" id="premixUsed_1" class="cloned fromZero"/></td>
                             <td width="15%"><input type="text" name="saltFortified_1" id="saltFortified_1" class="cloned fromZero"/></td>
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
                             <!--td width="18%"><input type="text" name="notes2" id="notes2"/></td-->
                             <td width="18%">Responsible:<input type="text" name="responsible" id="responsible"/></td>
                             <td width="15%">Signature:<input type="text" name="sigNature" id="sigNature"/></td>
                         </tr>
                         <tr>
                             <td width="15%">Total to date</td>
                             <td width="15%"><input type="text" name="saltProduced3" id="saltProduced3"/></td>
                             <td width="15%"><input type="text" name="premixUsed3" id="premixUsed3"/></td>
                             <td width="15%"><input type="text" name="saltFortified3" id="saltFortified3"/></td>
                             <!--td width="18%"><input type="text" name="notes3" id="notes3"/></td-->
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

		$this -> load -> view('form', $data);

	}

	public function externalFort_B1() {
		$externalFortified_B1 = '';

		$externalFortified_B1 .= '<form name="externalfortifiedB1" id="externalfortifiedB1" method="post" action="' . base_url() .'submit/c_form_salt/form_externalFort_B1' . '">
	<!--form for externalmonitoring of fortified salt-B1-->
	<h3> FORTIFIED SALT- AUDITS AND INSPECTION- TABLE B-1</h3>
	<p align="center">
		TECHNICAL AUDIT AND INSPECTION VISIT SESSIONS
	</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Date:
				</section>
				<section class="right">
					<input type="text" name="visitDate" id="visitDate"/>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Time:
				</section>
				<section class="right">
					<input type="text" name="visitTime" id="visitTime" class="mobiscroll" readonly="readonly" value="" />

				</section>
			</section>

			<section class="row">
				<section class="left">
					Salt Factory:
				</section>
				<section class="right">
					<select name="oilFactory" id="oilFactory">
						<option value="1">Magadi Salt</option>
						<option value="2">Kensalt</option>
						<option value="3">Melvins</option>
					</select>

				</section>
			</section>
		</section>
		<section class="column">

			<section class="row">
				<section class="left">
					Address:
				</section>
				<section class="right">
					<input type="text" name="visitAddress" id="visitAddress"/>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Public health Officer:
				</section>
				<section class="right">
					<select name="phealthOfficer" id="phealthOfficer">
						<option value="Adams Opiyo">Adams Opiyo</option>
						<option value="Rufus Mbugua">Rufus Mbugua</option>
						<option value="Nicodemus Maingi">Nicodemus Maingi</option>
					</select>
				</section>
			</section>

		</section>

	</section>

	<table width="100%">
		<!--begginning of table-->
		<tr>
			<td width="20%">NAME</td>
			<td width="20%">POSITION</td>
			<td width="20%">SIGNATURE</td>
			<td width="20%">Opening</td>
			<td width="20%">Closing</td>
		</tr>
		<tr class="clonable">
			<td width="25%">
			<input type="text" name="auditorName_1" id="auditorName_1" class="cloned"/>
			</td>
			<td width="20%">
			<input type="text" name="auditorPosition_1" id="auditorPosition_1" class="cloned"/>
			</td>
			<td width="25%">
			<input type="text" name="auditorSignature_1" id="auditorSignature_1" class="cloned"/>
			</td>
			<td width="15%">
			<input type="text" name="auditorOpening_1" id="auditorOpening_1" class="cloned"/>
			</td>
			<td width="15%">
			<input type="text" name="auditorClosing_1" id="auditorClosing_1" class="cloned"/>
			</td>
		</tr>
		<tr id="formbuttons">

			<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>

			<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>

		</tr>
	</table>
</form>
';

		$data['form'] = $externalFortified_B1;
		$data['form_id'] = 'externalfortifiedB1';

		$this -> load -> view('form', $data);

	}

	public function externalFort_B2() {
		$externalFortified_B2 = '';
		$externalFortified_B2 .= '
		<form id="externalFortified_B2" action="' . base_url() .'submit/c_form_salt/form_externalFort_B2' . '" method="post">
	<h3> FORTIFIED SALT-AUDITS AND INSPECTION -TABLE B-2</h3>
	<p align="center">
		TECHNICAL AUDIT AND INSPECTION PRELIMINARY REPORT
	</p>
	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					<label for="inspection_registry">Inspection Registry:</label>
				</section>
				<section class="right">
					<input id="inspection_registry" name="inspectionRegistry" type="text" placeholder=""  required>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="inspection_date">Date of Inspection:</label>
				</section>
				<section class="right">
					<input id="inspectionDate" name="inspectionDate" type="text" placeholder="datepicker"  required>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="inspection_officer">Public Health Officers Name:</label>
				</section>
				<section class="right">
					<input id="inspection_officer" name="inspectionOfficerName" type="text" placeholder="Surname, Other Names"  required>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="address">Address:</label>
				</section>
				<section class="right">
					<input id="address" name="address" type="text" placeholder=""  required>
				</section>
			</section>
			<!--section class="row">
			<section class="left">
			<label for="mill_name">Mill name:</label>
			</section>
			<section class="right">
			<input id="mill_name" name="millName" type="text" placeholder=""  required>
			</section>
			</section-->
		</section>
		<section class="column" style="margin-bottom:10px">

			<section class="row">
				<section class="left">
					<label for="telephone">Telephone:</label>
				</section>
				<section class="right">
					<input id="telephone" name="telephone" type="text" placeholder=""  required>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="fax">Fax:</label>
				</section>
				<section class="right">
					<input id="fax" name="fax" type="text" placeholder=""  required>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="email">Email:</label>
				</section>
				<section class="right">
					<input id="email" name="email" type="text" placeholder=""  required>
				</section>
			</section>
		</section>
	</section>
	<section class="block">
		<section class="column">
			<section class="row-title">
				<section class="left">
					ASPECTS
				</section>
				<section class="right" style="float:right">
					<section class="col">
						YES
					</section>
					<section class="col">
						NO
					</section>
					<section class="col">
						N/A
					</section>
				</section>
			</section>
			<section class="row-title">
				1.1 Cleaning and sanitation:
			</section>
			<section class="row">
				<section class="left">
					<label> 1.1.1 Production area </label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="productionArea" id="pda_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="productionArea" id="pda_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="productionArea" id="pda_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.1.2 Packaging area</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="packagingArea" id="pga_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="packagingArea" id="pga_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="packagingArea" id="pga_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.1.3 Warehouse</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="warehouse" id="wh_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="warehouse" id="wh_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="warehouse" id="wh_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.1.4 Staff facilities and toilettes</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="staffFacilities" checked="checked" id="staff_f_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="staffFacilities" id="staff_f_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="staffFacilities" id="staff_f_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row-title">
				1.2 Personnel:
			</section>
			<section class="row">
				<section class="left">
					<label> 1.2.1 Hygiene as required in regulations</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="hygiene" id="hygiene_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="hygiene" id="hygiene_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="hygiene" id="hygiene_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.2.2 Wearing protective clothing</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="protectiveClothing" id="protective_clothing_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="protectiveClothing" id="protective_clothing_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="protectiveClothing" id="protective_clothing" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.2.3 Trained in the tasks they perform</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="trainedInTask" id="trained_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="trainedInTask" id="trained_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="trainedInTask" id="trained_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row-title">
				<label> 1.3 Written procedures or instructions for:</label>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.3.1 Receipt and storage of premix</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="receiptAndStorage" checked="checked" id="rsp_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="receiptAndStorage" id="rsp_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="receiptAndStorage" id="rsp_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.3.2 Premix dilution (if applicable)</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="premixDilution" id="prem_dilution_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="premixDilution" id="prem_dilution_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="premixDilution" id="prem_dilution_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.3.3 Feeder verification</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="feederVerification" id="feeder_verification_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="feederVerification" id="feeder_verification_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="feederVerification" id="feeder_verification_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.3.4 Sampling of salt for QC</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="samplingSalt" checked="checked" id="sampling_salt_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="samplingSalt" id="sampling_salt_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="samplingSalt" id="sampling_salt_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.3.5 Iodine test for salt</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="saltIodineTest" checked="checked" id="salt_iodine_test_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="saltIodineTest" id="salt_iodine_test_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="saltIodineTest" id="salt_iodine_test_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row-title">
				2.0 Micronutrient premix:
			</section>
			<section class="row">
				<section class="left">
					<label> 2.1 Iodined compound inventory is upto to date</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="iodineInventoryUptodate" checked="checked" id="iodine_inventory_uptodate_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="iodineInventoryUptodate" id="iodine_inventory_uptodate_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="iodineInventoryUptodate" id="iodine_inventory_uptodate_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 2.2 Certificate of Analysis is received per lot</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="certificateOfAnalysis" id="certificate_of_analysis_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="certificateOfAnalysis" id="certificate_of_analysis_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="certificateOfAanalysis" id="certificate_of_analysis_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 2.3 Iodined compound is stored adequately</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="iodineStoredWell" id="iodine_stored_well_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="iodineStoredWell" id="iodine_stored_well_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="iodineStoredWell" id="iodine_stored_well_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 2.4 "First-in, first-out" system</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="fifoSystem" id="fifo_system_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="fifoSystem" id="fifo_system_na" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="fifoSystem" id="fifo_system_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 2.5 Iodined compound is handled well</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="iodineHandling" id="iodine_handling_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="iodineHandling" id="iodine_handling_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="iodineHandling" id="iodine_handling_na" value="n/a" />
					</section>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row-title">
				<section class="left">
					ASPECTS
				</section>
				<section class="right" style="float:right">
					<section class="col">
						YES
					</section>
					<section class="col">
						NO
					</section>
					<section class="col">
						N/A
					</section>
				</section>
			</section>
			<section class="row-title">
				3.0 Salt Fortification:
			</section>
			<section class="row">
				<section class="left">
					<label> 3.1 Premix Preparation</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="premixPreparation" id="premix_preparation_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="premixPreparation" id="premix_preparation_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="premixPreparation" id="premix_preparation_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.1.1 Storage and handling adequate</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="storageHandlingArea" id="storage_handling_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="storageHandlingArea" id="storage_handling_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="storageHandlingArea" id="storage_handling_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.2 Records of feeder/sprayer performance are available</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="feederRecordsAvailable" id="feeder_records_available_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="feederRecordsAvailable" id="feeder_records_available_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="feederRecordsAvailable" id="feeder_records_available_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.3 Premix level in feeder adequate during visit</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="premixLevelAdequate" id="premix_level_adequate_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="premixLevelAdequate" id="premix_level_adequate_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="premixLevelAdequate" id="premix_level_adequate_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.4 Records of salt produced/premix used up to date</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="saltRecordsUptodate" id="salt_records_uptodate_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="saltRecordsUptodate" id="salt_records_uptodate_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="saltRecordsUptodate" id="salt_records_uptodate_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.5 Salt samples taken for analysis in  every shift</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="shiftSamplesTaken" id="shift_samples_taken_y" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="shiftSamplesT_samples_taken" id="shift_samples_taken_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="shiftSamplesTaken" id="shift_samples_taken_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row-title">
				3.6 Corrective action taken when:
			</section>
			<section class="row">
				<section class="left">
					<label> 3.6.1 Ratio salt produce/premix is not right</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="ratioAction" id="ratio_action_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="ratioAction" id="ratio_action_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="ratioAction" id="ratio_action_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.6.2 Results show iodine  40mg/kg </label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="iodineResultsLevel" id="iodine_results_level_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="iodineResultsLevel" id="iodine_results_level_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="iodineResultsLevel" id="iodine_results_level_na" checked="checked" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row-title">
				4.0 Fortified salt:
			</section>
			<section class="row">
				<section class="left">
					<label> 4.1 Records of salt samples analyzed using:</label>
					<!--/section>
					<section class="right">
					<section class="col">
					<input type="radio" name="saltSamplesAnalyzed" id="salt_samples_analyzed_y" value="yes" />
					</section>
					<section class="col">
					<input type="radio" name="saltSamplesAnalyzed" id="salt_samples_analyzed_n" value="no" />
					</section>
					<section class="col">
					<input type="radio" name="saltSamplesAnalyzed" id="salt_samples_analyzed_na" value="n/a" />
					</section>
					</section-->
				</section>
				<section class="row">
					<section class="left">
						<label> 4.1.1 Internal Test</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="internalTest" id="internal_test_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="internalTest" id="internal_test_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="internalTest" id="internal_test_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 4.1.2 External labaratory</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="externalLab" id="external_lab_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="externalLab_n" id="external_lab_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="externalLab" id="external_lab_na" checked="checked" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 4.2 Daily composite samples are prepared</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="dailyCompPrepared" id="daily_compo_prepared_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="dailyCompPrepared" id="daily_compo_prepared_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="dailyCompPrepared" id="daily_compo_prepared_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label>4.3 Last 30 samples are stored and available</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="lastSamplesStored" id="last_samples_stored_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="lastSamplesStored" id="last_samples_stored_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="lastSamplesStored" id="last_samples_stored_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label>4.4 Labeling meets specifications</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="goodLabeling" id="good_labeling_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="goodLabeling" id="good_labeling_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="goodLabeling" id="good_labeling_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 4.5 Fortified salt is stored adequately</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="fortifiedSaltStored" id="fortified_salt_stored_y" checked="checked" value="yes" />
						</section>

						<section class="col">
							<input type="radio" name="fortifiedSaltStored" id="fortified_salt_stored_n" value="no" />
						</section>

						<section class="col">
							<input type="radio" name="fortifiedSaltStored" id="fortified_salt_stored_na" value="n/a" />
						</section>
					</section>
				</section>
			</section>
		</section>
	</section>
	<section class="block">
		<section class="column-wide">
			<section class="row-title">
				Actions taken from recommendations of last technical auditing and inspection visit (Table B-2)
			</section>
			<section class="row">
				<section class="col-x4">
					Recommendations
					<textarea id="auditRecommendations" name="auditRecommendations"></textarea>
				</section>
				<section class="col-x4">
					Corrective actions taken
					<textarea id="correctiveActionTaken" name="correctiveActionTaken"></textarea>
				</section>
				<section class="right-wide">
					Assessment of corrective action(2)
					<section class="left-wide">
						<select name="assessmentCorrectiveAction" id="assessmentCorrectiveAction" >
							<option>Adequate</option>
							<option>Inadequate</option>
						</select>
					</section>
					<section class="right-wide">
						Comments
						<textarea id="auditComments" name="auditComments"></textarea>
					</section>
				</section>
			</section>
			<section class="row-title">
				New Recommmendations
			</section>
			<section class="row">
				<section class="left-wide">
					Non-compliances
					<textarea id="nonCompliancesIdentified" name="nonCompliancesIdentified"></textarea>
				</section>
				<section class="right-wide">
					Suggestions for improvement
					<textarea id="suggestionsForImprovement" name="suggestionsForImprovement"></textarea>																																																											
			           Type of Iodine in Premix(Iodine/iodate):
 <input type="text" id="iodine_type" name="iodineType" value="" placeholder="" />
				</section>

			</section>
		</section>
	</section>
	<table>
		<tr>
			<td width="144">ID Composite</td>
			<td width="144">[Iodine](mg/kg)</td>
			<td width="144">Ref. [Iodine]</td>
			<td width="144">[Iodine](mg/kg)</td>
			<td width="144">ID Other</td>
			<td width="144">[Iodine](mg/kg)</td>
			<td width="144">[Iodine](mg/kg)</td>
		</tr>
		<tr class="clonable">
			<td width="144">
			<input type="text"  name="IDComposite" id="iodineDate1"/>
			</td>
			<td width="144">
			<input type="text"  name="IDCompositemgKg" />
			</td>
			<td width="144">
			<input type="text"  name="refIodine" id="iodineDrums"/>
			</td>
			<td width="144">
			<input type="text"  name="refIodineMgKg" id="iodineLot"/>
			</td>
			<td width="144">
			<input type="text"  name="IDOther" id="iodineExpiration"/>
			</td>
			<td width="144">
			<input type="text" name="IDOtherMgKg" id="iodineDispatched"/>
			</td>
			<td width="144">
			<input type="text" name="IDOtherMgKg2" id="iodineStock"/>
			</td>
		</tr>
		<tr id="formbuttons" class="clonable">
			<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>
		</tr>
	</table>

	<section class="row">
		<!--section class="left-wide">
		Public Health Officer (Name)
		<input id="inspection_officer" name="inspectionOfficerName" type="text" placeholder="Surname, Other Names"  required>
		</section-->
		<!--section class="right-wide">
		Date
		<input id="inspection_date" name="inspectionDate" type="text" placeholder="datepicker"  required>
		</section-->
	</section>
	<section class="column-wide">
		<section class="row">
			<section class="left-wide">
				Supervisor (Name)
				<input id="supervisor_name" name="supervisorName" type="text" placeholder="Surname, Other Names"  required>
			</section>
			<section class="right">
				Date
				<input id="supervision_date" name="supervisionDate" type="text" placeholder="datepicker"  required>
			</section>
		</section>
	</section>

</form>


';

		$data['form'] = $externalFortified_B2;
		$data['form_id'] = 'externalFortified_B2';

		$this -> load -> view('form', $data);

	}

	public function externalFort_B3() {
		$externalFortified_B3 = '';
		$externalFortified_B3 .= '
<!--start of fortified salt-audits & inspection table-3: ctechnical audit and inspection preliminary report-->
' . '
<!--start of fortified salt-audits & inspection table-3: ctechnical audit and inspection preliminary report-->
' . '
<form id="externalFortified_B3" action="' . base_url() .'submit/c_form_salt/form_externalFort_B3' . '" method="post">
	<h3> FORTIFIED SALT-AUDITS AND INSPECTION -TABLE B-3</h3>
	<p align="center">
		TECHNICAL AUDIT AND INSPECTION PRELIMINARY REPORT
	</p>
	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					<label for="inspection_registry">Inspection Registry:</label>
				</section>
				<section class = "right">
					<input id="inspection_registry" name="inspectionRegistry" type="text" placeholder=""  required />
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="inspection_date">Date of Inspection:</label>
				</section>
				<section class = "right">
					<input id="inspections_date" name="inspectionDate" type="text" placeholder="datepicker" required />
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="factory_rep">Factory Representative:</label>
				</section>
				<section class = "right">
					<input id="factory_rep" name="factoryRepresentative" type="text" placeholder=""  required />
				</section>
			</section>
		</section>
		<section class="column">

			<section class="row">
				<section class="left">
					<label for="address">Address:</label>
				</section>
				<section class = "right">
					<input id="address" name="address" type="text" placeholder=""  required />
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="telephone">Telephone:</label>
				</section>
				<section class = "right">
					<input id="telephone" name="telephone" type="text" placeholder=""  required />
				</section>
			</section>
		</section>
	</section>
	<section class="block">
		<section class="column-wide">
			<section class="row-title">
				PRELIMINARY REPORT <p></p>
				1. Areas Visited(Check where applicable)
			</section>
			<section class="row">
				<section class="col-x4">
					<label for="production">Production</label>
					<input type="checkbox" name="cbo_production" id="cbo_production" value="production">
				</section>
				<section class="col-x4">
					<label for="packaging">Packaging</label>
					<input type="checkbox" name="cbo_packaging" id="cbo_packaging" value="packaging">
				</section>
				<section class="col-x4">
					<label for="fortification_site">Fortification site</label>
					<input type="checkbox" name="cbo_fortification_site" id="cbo_fortification_site" value="fortification_site">
				</section>
				<section class="col-x4">
					<label for="labaratory">Labaratory</label>
					<input type="checkbox" name="cbo_labaratory" id="cbo_labaratory" value="labaratory">
				</section>
			</section>
			<section class="row">
				<section class="col-x4">
					<label for="salt_warehouse">Salt Warehouse</label>
					<input type="checkbox" name="cbo_warehouse" id="cbo_cbo_warehouse" value="salt_warehouse">
				</section>
				<section class="col-x4">
					<label for="rm_salt_warehouse">Raw Material Warehouse</label>
					<input type="checkbox" name="cbo_rm_salt_warehouse" id="cbo_rm_salt_warehouse" value="rm_salt_warehouse">
				</section>
				<section class="col-x4">
					<label for="other">Other:</label>
					<input type="checkbox" name="cbo_other" id="cbo_other" value="other">
				</section>
			</section>
		</section>
		<section class="column-wide">
			<input type="hidden" name="areas_visited" id="areas_visited" value=""/>

			<section class"row-title">
				2. Non-Compliances
			</section>

			<section class="row">

				<section class="left-wide">
					List of the non-compliances found
					<textarea id="nonCompliances" name="nonCompliances" type="text" placeholder=""  required></textarea>
				</section>

				<section class="right-wide">
					Suggestions for Improvement
					<textarea id="suggestionsForImprovement" name="suggestionsForImprovement" type="text" placeholder=""  required></textarea>
				</section>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<label for="health_officer" >Public Health Officer:</label>
			<input type="text" id="publicHealthOfficer" name="publicHealthOfficer" value=""  required/>
		</section>
		<label for="ho_signature_date" >Date:</label>
		<input type="text" id="inspectorDate" name="inspectorDate" value="" class="autoDate" required/>
	</section>
	<section class="column">
		<section class="row">
			<label for="factory_rep" >Received by (Factory Representative:)</label>
			<input type="text" id="receivedBy" name="receivedBy" value=""  required/>
		</section>
		<section class="row">
			<label for="ro_signature_date" >Date:</label>
			<input type="text" id="receivedDate" name="receivedDate" value="" class="autoDate"  required/>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<label for="supervisor_name" >Supervisor(Name/Signature)</label>
			<input type="text" id="supervisor_name" name="supervisorName" value=""  required/>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<label for="s_signature_date" >Date</label>
			<input type="text" id="roSignature" name="roSignature" value=""  required/>
		</section>
	</section>
</form>';

		$data['form'] = $externalFortified_B3;
		$data['form_id'] = 'externalFortified_B3';

		$this -> load -> view('form', $data);

	}

	public function externalIod_B1() {
		$externalIodization_B1 = '';
		$externalIodization_B1 .= '
<form name="externalIodizationB1" id="externalIodizationB1" method="post" action="' . base_url() .'submit/c_form_salt/form_externalIod_B1' . '">

	<h3 align="center">IODIZED SALT- AUDITS AND INSPECTION- TABLE B-1</h3>
	<h4 align="center">CHECKLISTS OF TECHNICAL AUDIT AND INSPECTION VISIT TO IODIZATION CENTERS</h4>
	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Date
				</section>
				<section class="right">
					<input type="text" name="inspectionsDate" id="inspectionsDate"/>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Iodization Center
				</section>
				<section class="right">
					<input type="text" name="iodizationCenter" id="iodizationCenter"/>
				</section>
			</section>
			<section class="row">
				<section class="left">
					Address
				</section>
				<section class="right">
					<input type="text" name="inspectionAddress" id="inspectionAddress"/>
				</section>
			</section>
		</section>
		<section class="column">
			
			<section class="row">
				<section class="left">
					Telephone
				</section>
				<section class="right">
					<input type="text" name="inspectorTelephone" id="inspectorTelephone"/>
				</section>
			</section>
			<section class="row">
				<section class="left">
					Fax
				</section>
				<section class="right">
					<input type="text" name="inspectorFax" id="inspectorFax"/>

				</section>
			</section>
			<section class="row">
				<section class="left">
					Email
				</section>
				<section class="right">
					<input type="text" na,e="inspectorEmail" id="inspectorEmail"/>
				</section>
			</section>

		</section>
	</section>
	<section class="block">
	<section class="column">
		<section class="row-title">
		<section class="left">
			 ASPECTS
		</section>
		<section class="right" style="float:right">
			<section class="col">
				YES
			</section>
			<section class="col">
				NO
			</section>
			<section class="col">
				N/A
			</section>
		</section>
	</section>
	<section class="row-title">
		     		1. Iodate and Premix:
	</section>
		<section class="row">
			<section class="left">
				1.1 Inventory is up to date
			</section>
			<section class="right">
				<section class="col">
					<input type="radio" name="inventory" id="inventoryYes" value="yes"/>
				</section>

				<section class="col">
					<input type="radio" name="inventory" id="inventoryNo" value="no"/>
				</section>

				<section class="col">
					<input type="radio" name="inventory" id="inventoryNa" value="n/a"/>
				</section>
			</section>
		</section>
		<section class="row">

			<section class="row">
				<section class="left">
					1.2 Suffcient Iodate Premix for 3 months
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="sufficient" id="sufficientYes"/>
					</section>
					<section class="col">
						<input type="radio" name="sufficient" id="sufficientNo"/>
					</section>

					<section class="col">
						<input type="radio" name="sufficient" id="sufficientNa"/>
					</section>

				</section>
			</section>
			<section class="row">
				<section class="left">
					1.3 Storage is adequate
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="storage" id="storageYes"/>
					</section>

					<section class="col">
						<input type="radio" name="storage" id="storageNo"/>
					</section>

					<section class="col">
						<input type="radio" name="storage" id="storageNa"/>
					</section>
				</section>
			</section>
			<section class="row-title">
				2.Premix preparation:
			</section>
			<section class="row">
				<section class="left">
					2.1 Potassium iodate amount as
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="potassium" id="potassiumYes"/>
					</section>

					<section class="col">
						<input type="radio" name="potassium" id="potassiumNo"/>
					</section>

					<section class="col">
						<input type="radio" name="potassium" id="potassiumNa"/>
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					2.2 Records of premix
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="precord" id="precordsYes"/>
					</section>

					<section class="col">
						<input type="radio" name="precord" id="precordsNo"/>
					</section>

					<section class="col">
						<input type="radio" name="precord" id="precordsNa"/>
					</section>

				</section>
			</section>
			<section class="row">
				<section class="left">
					2.3 "First in, first-out" system
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="fifo" id="fifoYes"/>
					</section>

					<section class="col">
						<input type="radio" name="fifo" id="fifoNo"/>
					</section>

					<section class="col">
						<input type="radio" name="fifo" id="fifoNa"/>
					</section>
				</section>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row-title">
		<section class="left">
			 ASPECTS
		</section>
		<section class="right" style="float:right">
			<section class="col">
				YES
			</section>
			<section class="col">
				NO
			</section>
			<section class="col">
				N/A
			</section>
		</section>
	</section>
	<section class="row-title">
		   3. Iodization Process:
	</section>
		<section class="row">
			<section class="left">
				3.1 Salt/ Premix proportion as
			</section>
			<section class="right">
				<section class="col">
					<input type="radio" name="premix" id="premixYes"/>
				</section>
				<section class="col">
					<input type="radio" name="premix" id="premixNo"/>
				</section>
				<section class="col">
					<input type="radio" name="premix" id="premixNa"/>
				</section>
			</section>

		</section>
		<section class="row">
			<section class="left">
				3.2 Records of iodized salt updated
			</section>
			<section class="right">
				<section class="col">
					<input type="radio" name="records" id="recordsYes"/>
				</section>
				<section class="col">
					<input type="radio" name="records" id="recordsNo"/>
				</section>
				<section class="col">
					<input type="radio" name="records" id="recordsNa"/>
				</section>
			</section>

		</section>
		<section class="row-title">
			4.Packaging and labelling

		</section>
		<section class="row">
			<section class="left">
				4.1 Salt packaged in adequately
			</section>
			<section class="right">
				<section class="col">
					<input type="radio" name="packaging" id="packagingYes"/>
				</section>
				<section class="col">
					<input type="radio" name="packaging" id="packagingNo"/>
				</section>
				<section class="col">
					<input type="radio" name="packaging" id="packagingNa"/>
				</section>
			</section>
		</section>
     </section>
	</section>
<section class="block">
	<section class="row-title">
		Results of the iodine content.
	</section>
	
	<section class="row">
		<section class="col-x4">
		    Sample #&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="text" name="sampleNumber" id="sampleNumber"/>
		</section>
		<section class="col-x4">
		    Iodine Content
			<input type="text" name="iodineContent0" id="iodineContent0"/>
		</section>
		<section class="col-x4">
		    Sample# - of processed samples
			<input type="text" name="reprocessedSamples" id="reprocessedSamples"/>
		</section>
		<section class="col-x4">
		    Iodine Content
			<input type="text" name="iodineContent1" id="iodineContent1"/>
		</section>
	</section>

	<section class = "row-title">
		<section clas="left">
			Average(mg/kg)
		</section>
		<section class="right">
			Average(mg/kg)
		</section>
	</section>

	<section class = "row">
		<section clas="left">
			<input type="text" name="averageSample1" id="averageSample1"/>
		</section>
		<section class="right">
			<input type="text" name="averageSample2" id="averageSample2"/>
		</section>
	</section>

	<section class="column-wide">
		<section class="row-title">
			New Recommendations
		</section>
		<section class="row">
			<section class="left-wide">
				Non-compliances:
				<textarea name="nonCompliances"></textarea>
			</section>
			<section class="right-wide">
				Suggestions for Improvement:
				<textarea name="improvementSuggestions" ></textarea>
			</section>
		</section>
		</section>
		<section class="row">
			<section class="col">
				Inspector<p></p>

				<input type="text" name="inspector" id="insPector"/>
			</section>
			<section class="col">
				Received by(Factory representative):<p></p>

				<input type="text" name="factoryRepresentative" id="factoryRepresentative"/>

			</section>
			<section class="col">
				Date<p></p>

				<input type="text" name="externalIodB1_date_rep_signed" id="externalIodB1_date_rep_signed"/>
			</section>
		</section>
		<section class="row">
			<section class="col">
				Signature:(Inspector)<p></p>

				<input type="text" name="inspectorSignature" id="inspectorSignature"/>
			</section>
			<section class="col">
				Signature(Factory representative):<p></p>

				<input type="text" name="signaturefRepresentative" id="signaturefRepresentative"/>
			</section>
			<section class="col">
				Date <p></p>

				<input type="text" name="signatureDate" id="signatureDate"/>
			</section>
		</section>
		<section class="row">
			<section class="col">
				Supervisor(Name):<p></p>

				<input type="text" name="supervisorName" id="supervisorName"/>

			</section>
			<section class="col">
				Signature(supervisor):<p></p>

				<input type="text" name="signatureSupervisor" id="signatureSupervisor"/>
			</section>
			<section class="col">
				Date<p></p>

				<input type="text" name="supervisorDate" id="supervisorDate"/>
			</section>
		</section>
	</section>
</form>';

		$data['form'] = $externalIodization_B1;
		$data['form_id'] = 'externalIodizationB1';

		$this -> load -> view('form', $data);

	}

	public function smallScale_A1() {
		$smallScale_A1 = '';
		$smallScale_A1 .= '<form name="smallScale_A1" id="smallScale_A1" method="post" action="' . base_url() .'submit/c_form_salt/form_smallScale_A1' . '">
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
						 <td width="144"><input type="text" name="weightKg_1" id="controlKg_1" class="cloned fromZero"/></td>
						 <td width="144"><input type="text" name="lotNumber_1" id="controlLot_1" class="cloned"/></td>
						 <td width="144"><input type="text" name="contentOfIodine_1" id="iodineContent_1" class="cloned" /></td>
						 <td width="144"><input type="text" name="amountUsed_1" id="amountUsed_1" class="cloned fromZero" /></td>
						 <td width="144"><input type="text" name="inStock_1" id="inStock_1" class="cloned" /></td>
						 <td width="140"><input type="text" name="premixAmount_1" id="premixAmount_1" class="cloned" /></td>
					</tr>
					<tr id="formbuttons">

			<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>

			<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>

		</tr>
					</table>
					</form>';
		$data['form'] = $smallScale_A1;
		$data['form_id'] = 'smallScale_A1';

		$this -> load -> view('form', $data);

	}

	public function smallScale_A2() {
		$smallScale_A2 = '';
		$smallScale_A2 .= '
 <form name="" id="smallScale_A2" method="post" action="' . base_url() .'submit/c_form_salt/form_smallScale_A2' . '"><!--form for internal monitoring of salt fortification- A2-->
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
						 <td width="144"><input type="text" name="controlDate_1" id="controlDate_1" class="autoDate cloned"/></td>
						 <td width="144"><input type="text" name="supplierName_1" id="supplierName_1" class="cloned"/></td>
						 <td width="144"><input type="text" name="weightKg_1" id="controlKg_1" class="cloned fromZero"/></td>
						 <td width="144"><input type="text" name="lotNumber_1" id="controlLot_1" class="cloned"/></td>
						 <td width="144"><input type="text" name="contentOfIodine_1" id="iodineContent_1" class="cloned" /></td>
						 <td width="144"><input type="text" name="amountUsed_1" id="amountUsed_1" class="cloned fromZero" /></td>
						 <td width="144"><input type="text" name="inStock_1" id="inStock_1" class="cloned" /></td>
						 <td width="140"><input type="text" name="premixAmount_1" id="premixAmount_1" class="cloned" /></td>
					</tr>
                         <tr id="formbuttons">

							<input type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
				
							<input type="button" class="awesome myblue medium" id="clonesubmit" value="Submit"/>

						</tr>
                        </table></form> ';
						$data['form'] = $smallScale_A2;
						$data['form_id'] = 'smallScale_A2';
				
						$this -> load -> view('form', $data);

	}
	
   }