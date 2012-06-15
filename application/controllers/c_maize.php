<?php
class C_maize extends MY_Controller{
	public function externalMaizeFlour_B1(){
		$externalMaizeFlour_B1='';
		$externalMaizeFlour_B1.='
		<form name="externalMaizeFlour_B1" id="externalMaizeFlour_B1" action="' . base_url() .'submit/c_form_maize/form_externalFort_B1' . '" method="post">
			<h3>FORTIFIED MAIZE FLOUR AUDITS AND INSPECTION TABLE B-1</h3>
			<p align="center">
				BRIEFING SESSIONS- TECHNICAL AUDIT AND INSPECTIONS VISITS
			</p>
			<p>
			<section class="block">
				<section class="column">
					<section class="row">
						<section class="left">
							Date:
						</section>
						<section class="right">
							<input type="text" name="dateB1" id="dateB1" class="autoDate" readonly="true" placeholder="click for date"/>
						</section>
					</section>
					<section class="row">
						<section class="left">
							Maize mill:
						</section>
						<section class="right">
							<select name="maizeMill" id="maizeMill">
								<option value="" selected="selected">Select One</option>
						        '.$this->selectIodizationCentre.'
							</select>
						</section>
					</section>
		
					<section class="row">
						<section class="left">
							Health Officer:
						</section>
						<section class="right">
							<input type="text" name="publicHealthOfficer" id="publicHealthOfficer"/>
						</section>
					</section>
		
				</section>
				<section class="column">
					<section class="row">
						<section class="left">
							Time:
						</section>
						<section class="right">
							<input type="text" name="time" id="time" class="mobiscroll" readonly="true" placeholder="click for time"/>
						</section>
					</section>
		
					<section class="row">
						<section class="left">
							Address:
						</section>
						<section class="right">
							<input type="text" name="address" id="address"/>
						</section>
					</section>
				</section>
			</section>
		
				<table border="0" width="100%">
					<tr>
						<td width="20%">NAME</td>
						<td width="20%">POSITION</td>
						<td width="20%">SIGNATURE</td>
						<td width="20%">Opening</td>
						<td width="20%">Closing</td>
					</tr>
					<tr class="clonable">
						<td width="20%">
						<input type="text" name="nameB1_1" id="nameB1_1" class="cloned"/>
						</td>
						<td width="20%">
						<input type="text" name="position_1" id="position_1" class="cloned"/>
						</td>
						<td width="20%">
						<input type="text" name="signature_1" id="signature_1" class="cloned"/>
						</td>
						<td width="20%">
						<input type="text" name="opening_1" id="opening_1" class="cloned"/>
						</td>
						<td width="20%">
						<input type="text" name="closing_1" id="closing_1" class="cloned"/>
						</td>
					</tr>
					<tr id="formbuttons">
		
					<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
					<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		
					</tr>
				</table>
		</form>';
		$data['form'] = $externalMaizeFlour_B1;
		$data['form_id'] = 'externalMaizeFlour_B1';

		$this -> load -> view('form', $data);
	}
	
	public function externalMaizeFlour_B2(){
		$externalMaizeFlour_B2='';
		$externalMaizeFlour_B2.='
		<form name="externalMaizeFlour_B2" id="externalMaizeFlour_B2" method="post" action="'. base_url() .'submit/c_form_maize/form_externalFort_B2' . '">
		<h3>FORTIFIED MAIZE FLOUR- AUDITS AND INSPECTION- TABLE B-2</h3>
		<p align="center">
			CHECKLIST OF TECHNICAL AUDIT AND INSPECTION VISIT TO MAIZE MILLS
		</p>
		<section class="block">
			<section class="column">
				<section class="row">
					<section class="left">
						<label for="inspectionRegistry">Inspection Registry:</label>
					</section>
					<section class="right">
						<input id="inspectionRegistry" name="inspectionRegistry" type="text" placeholder=""  required>
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
						<label for="inspectionOfficer">Public Health Officers Name:</label>
					</section>
					<section class="right">
						<input id="inspectionOfficer" name="inspectionOfficerName" type="text" placeholder="Surname, Other Names"  required>
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
				<input id="millName" name="millName" type="text" placeholder=""  required>
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
						<label> 1.3.4 Sampling of maize flour for QC</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="samplingMaize" checked="checked" id="sampling_maize_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="samplingMaize" id="sampling_maize_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="samplingMaize" id="sampling_maize_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 1.3.5 Iron spot test for maize flour</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="maizeSpotTest" checked="checked" id="maize_spot_test_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="maizeSpotTest" id="maize_spot_test_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="maizeSpotTest" id="maize_spot_test_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row-title">
					2.0 Micronutrient premix:
				</section>
				<section class="row">
					<section class="left">
						<label> 2.1 Premix inventory is upto date</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixInventoryUpToDate" checked="checked" id="premix_inventory_uptodate_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixInventoryUpToDate" id="premix_inventory_uptodate_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixInventoryUpToDate" id="premix_inventory_uptodate_na" value="n/a" />
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
							<input type="radio" name="certificateOfAnalysis" id="certificate_of_analysis_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 2.3 Premix is stored under adequate conditions</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixStoredWell" id="premix_stored_well_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixStoredWell" id="premix_stored_well_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixStoredWell" id="premix_stored_well_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 2.4 "First-in, first-out" system used</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="fifoSystemPremix" id="fifo_systemP_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="fifoSystemPremix" id="fifo_systemP_na" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="fifoSystemPremix" id="fifo_systemP_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 2.5 Premix is handled well in fortification site</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixHandling" id="premix_handling_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixHandling" id="premix_handling_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixHandling" id="premix_handling_na" value="n/a" />
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
					3.0 Maize flour Fortification:
				</section>
				<section class="row">
					<section class="left">
						<label> 3.1 Premix dilution(if applicable)</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="premixDilutionApplicable" id="premix_dilution_applicable_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="premixDilutionApplicable" id="premix_dilution_applicable_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="premixDilutionApplicable" id="premix_dilution_applicable_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.1.1 Homogeneity assessed</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="homogeneityAssessed" id="homogeneityAssessed_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="homogeneityAssessed" id="homogeneityAssessed_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="homogeneityAssessed" id="homogeneityAssessed_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.1.2 Adequate storage and handling</label>
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
						<label> 3.2 Records of feeder performance are available</label>
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
						<label> 3.4 Records of flour produced/premix used up to date</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="flourRecordsUpToDate" id="flour_records_uptodate_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="flourRecordsUpToDate" id="flour_records_uptodate_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="flourRecordsUpToDate" id="flour_records_uptodate_na" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 3.5 Flour samples taken for analysis in every shift</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="shiftSamplesTaken" id="shift_samples_taken_y" checked="checked" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="shiftSamplesTaken" id="shift_samples_taken_n" value="no" />
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
						<label> 3.6.1 Ratio maize produced/premix is not right</label>
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
						<label> 3.6.2 Iron content above factory minimum </label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="ironContent" id="ironContent_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="ironContent" id="ironContent_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="ironContent" id="ironContent_na" checked="checked" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row-title">
					4.0 Fortified maize flour:
				</section>
				<section class="row">
					<section class="left">
						<label> 4.1 Records of flour samples analyzed using:</label>
						<!--/section>
						<section class="right">
						<section class="col">
						<input type="radio" name="maizeSamplesAnalyzed" id="maize_samples_analyzed_y" value="yes" />
						</section>
						<section class="col">
						<input type="radio" name="maizeSamplesAnalyzed" id="maize_samples_analyzed_n" value="no" />
						</section>
						<section class="col">
						<input type="radio" name="maizeSamplesAnalyzed" id="maize_samples_analyzed_na" value="n/a" />
						</section>
						</section-->
					</section>
					<section class="row">
						<section class="left">
							<label> 4.1.1 Spot test for iron</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="spotTest" id="spot_test_y" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="spotTest" id="spot_test_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="spotTest" id="spot_test_na" value="n/a" />
							</section>
						</section>
					</section>
					<section class="row">
						<section class="left">
							<label> 4.1.2 Quantitative Method iron(external lab.)</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="externalLabIron" id="external_lab_y" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="externalLabIron" id="external_lab_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="externalLabIron" id="external_lab_na" checked="checked" value="n/a" />
							</section>
						</section>
					</section>
					<section class="row">
						<section class="left">
							<label> 4.1.3 Quantitative Method Vitamin A(external lab.)</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="externalLabVitaminA" id="external_lab_y" value="yes" />
							</section>
							<section class="col">
								<input type="radio" name="externalLabVitaminA" id="external_lab_n" value="no" />
							</section>
							<section class="col">
								<input type="radio" name="externalLabVitaminA" id="external_lab_na" checked="checked" value="n/a" />
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
							<label> 4.5 Fortified maize flour is stored adequately</label>
						</section>
						<section class="right">
							<section class="col">
								<input type="radio" name="fortifiedMaizeStored" id="fortifiedMaizeStored_y" checked="checked" value="yes" />
							</section>
	
							<section class="col">
								<input type="radio" name="fortifiedMaizeStored" id="fortifiedMaizeStored_n" value="no" />
							</section>
	
							<section class="col">
								<input type="radio" name="fortifiedMaizeStored" id="fortifiedMaizeStored_na" value="n/a" />
							</section>
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 4.6 "First-in, first out" system applied to dispatch</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="fifoSystemFlour" id="fifoSystemF_y" checked="checked" value="yes" />
						</section>
	
						<section class="col">
							<input type="radio" name="fifoSystemFlour" id="fifoSystemF_n" value="no" />
						</section>
	
						<section class="col">
							<input type="radio" name="fifoSystemFlour" id="fifoSystemF_na" value="n/a" />
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
						</section>
				</section>
				<section class="row right-wide">																																																																
				           Type of Iodine in Premix(Iodine/iodate):
	                    <select name="iodineType" id="iodine_type">
	                        <option value="" selected="selected">Select One</option>
							<option value="Iodine">Iodine</option>
							<option value="Iodate">Iodate</option>
						</select>
			  </section>
		</section>
		<table>
			<tr>
				<td width="144"></td>
				<td width="144"></td>
				<td width="144">Lab results </td>
				<td width="144">from inspection</td>
				<td width="144"></td>
				<td width="144">Lab results</td>
				<td width="144">from inspection</td>
			</tr>
			<tr>
				<td width="144">ID Composite</td>
				<td width="144">Factory estimation[Iron](mg/kg)</td>
				<td width="144">[Iron](mg/kg)</td>
				<td width="144">[Vitamin A](mg/kg)</td>
				<td width="144">ID other samples</td>
				<td width="144">[Iron](mg/kg)</td>
				<td width="144">[Vitamin A](mg/kg)</td>
			</tr>
			<tr class="clonable">
				<td width="144">
				<input type="text"  name="IDComposite" id="IDComposite" class="cloned autodate"/>
				</td>
				<td width="144">
				<input type="number"  name="FactoryEstimatesIronMgPerKg" id="FactoryEstimatesIronMgPerKg" class="cloned fromZero"/>
				</td>
				<td width="144">
				<input type="number"  name="LabResultsIronMgPerKg" id="LabResultsIronMgPerKg" class="cloned"/>
				</td>
				<td width="144">
				<input type="number"  name="InspectionVitaminMgPerKg0" id="InspectionVitaminMgPerKg0" class="cloned fromZero"/>
				</td>
				<td width="144">
				<input type="text"  name="IDOther" id="IDOther" class="cloned"/>
				</td>
				<td width="144">
				<input type="number" name="IronMgPerKg2" id="IronMgPerKg2" class="cloned fromZero"/>
				</td>
				<td width="144">
				<input type="number" name="InspectionVitaminMgPerKg1" id="InspectionVitaminMgPerKg1" class="cloned fromZero"/>
				</td>
			</tr>
			<tr id="formbuttons" class="clonable">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
				<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
			</tr>
		</table>
	
		<section class="row">
			<!--section class="left-wide">
			Public Health Officer (Name)
			<input id="inspection_officer" name="inspectionOfficerName" type="text" placeholder="Surname, Other Names"  required>
			</section-->
			<!--section class="right-wide">
			Date
			<input id="inspection_date" name="inspectionDate" type="text" placeholder="click for date" readonly="true">
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
					<input id="supervision_date" name="supervisionDate" type="text" readonly="true" placeholder="click for date"/>
				</section>
			</section>
		</section>
	
	</form>
		';
	    $data['form'] = $externalMaizeFlour_B2;
		$data['form_id'] = 'externalMaizeFloyr_B2';

		$this -> load -> view('form', $data);
}


public function externalMaizeFlour_B3(){
	$externalMaizeFlour_B3='';
	$externalMaizeFlour_B3.='
<form name="externalMaizeFlour_B3" id="externalMaizeFlour_B3" method="post" action="' . base_url() .'submit/c_form_maize/form_externalFort_B3' . '">
	<h3>FORTIFIED MAIZE FLOUR- AUDITS AND INSPECTION TABLE- B-3</h3>
	<p align="center">PRELIMINARY REPORT- TECHNICAL AUDIT AND INSPECTION VISITS</p>
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
					<input id="inspections_date" name="inspectionDate" type="text" readonly="true" placeholder="click for date" />
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
					<input id="address" name="address" type="text" placeholder=""  />
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label for="telephone">Telephone:</label>
				</section>
				<section class = "right">
					<input id="telephone" name="telephone" type="text" placeholder=""  />
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
					<label for="labaratory">Laboratory</label>
					<input type="checkbox" name="cbo_labaratory" id="cbo_labaratory" value="labaratory">
				</section>
			</section>
			<section class="row">
				<section class="col-x4">
					<label for="maizeWarehouse">Maize Warehouse</label>
					<input type="checkbox" name="cbo_warehouse" id="cbo_cbo_warehouse" value="maizeWarehouse">
				</section>
				<section class="col-x4">
					<label for="rm_maize_warehouse">Raw Material Warehouse</label>
					<input type="checkbox" name="cbo_rm_maize_warehouse" id="cbo_rm_maize_warehouse" value="rmMaizeWarehouse">
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
		<input type="text" id="inspectorDate" name="inspectorDate" value="" class="autoDate" readonly="true" placeholder="click for date"/>
	</section>
	<section class="column">
		<section class="row">
			<label for="factory_rep" >Received by (Factory Representative:)</label>
			<input type="text" id="receivedBy" name="receivedBy" value=""  required/>
		</section>
		<section class="row">
			<label for="ro_signature_date" >Date:</label>
			<input type="text" id="receivedDate" name="receivedDate" value="" class="autoDate" placeholder="click for date"  required/>
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
			<input type="text" id="supervisorSignatureDate" name="supervisorSignatureDate" value=""  class="autoDate" readonly="true" placeholder="click for date"/>
		</section>
	</section>
</form>
	';
	$data['form'] = $externalMaizeFlour_B3;
		$data['form_id'] = 'externalMaizeFlour_B3';

		$this -> load -> view('form', $data);
}
public function internalMaizeFlour_A1(){
	$internalMaizeFlour_A1='';
	$internalMaizeFlour_A1.='
<form name="internalMaizeFlour_A1" id="internalMaizeFlour_A1" method="post" action="' . base_url() .'submit/c_form_maize/form_internalFort_A1' . '">
	<h3>FORTIFIED MAIZE FLOUR TABLE A-1</h3>
	<p align="center">
		INSPECTION FORM FOR INCOMING VITAMINS AND MINERAL PREMIX
	</p>
	<section class="block">
		<section class="column">
			<section class="row2">
				<section class="left">
					<label>PRODUCT TYPE:</label>
				</section>
				<section class="right">
					<select name="productType" id="productType">
						<option value="" selected="selected">Select One</option>
						'.$this->selectPremixType.'
					</select>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Manufacturer:</label>
				</section>
				<section class="right">
					<select name="manufacturer" id="manufacturer">
						<option value="" selected="selected">Select One</option>
					'.$this->selectCompManufacturers.'
					</select>
				</section>
			</section>
			<section class="row2">
				<section class="left">
					<label>Inspected by:</label>
				</section>
				<section class="right">
					<select name="inspectedBy" id="inspectedBy">
					    <option value="" selected="selected">Select One</option>
						<option value="Port Official">Port Official</option>
						<option value="Quality Manager">Quality Manager</option>
					</select>
				</section>
			</section>
		</section>
		<section class="column">
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
					<input type="date" name="date" id="date" readonly="true" placeholder="click for date"/>
				</section>
			</section>
		</section>
	</section>
	<section class="column-wide">
		<section class="row-title">
			<section class="left">
				SPECIFICATIONS
			</section>
			<section class="center">
				Integrity of boxes
			</section>
			<section class="right">
				OBSERVATIONS
			</section>
		</section>
		<section class="row">
			<section class="left">
				<label>Quantity</label>
			</section>
			<section class="center">
				<input type="number" name="quantity" id="quantity"/>
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
				<label for="productionDate">Production Date:</label>
			</section>
			<section class="center">
				<input type="checkbox" name="productionDate" id="productionDate" value="yes" />
				<input type="hidden" id="productionDate_cb" name="productionDate" value=""/>
			</section>
			<section class="right">
				<textarea name="productionObservation" id="productionObservation" rows="3"></textarea>
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
				<label for="contentClaimed">Micronutrient levels in label</label>
			</section>
			<section class="center">
				<input type="checkbox" name="micronutrientLevels" id="micronutrientLevels" value="yes"/>
				<input type="hidden" id="micronutrientLevels_cb" name="micronutrientLevels" value=""/>
			</section>
			<section class="right">
				<textarea name="micronutrientObservation" id="micronutrientObservation" rows="3"></textarea>
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
			<section class="center">
				<input type="text" name="other" id="other"/>
			</section>
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
				<label>Reviewed By:</label>
				<input type="text" name="reviewedBy" id="reviewedBy"/>
			</section>
			<section class ="right-wide">
				<label>Date:</label>
				<input type="date" name="inputDate" id="inputDate" readonly="true" placeholder="click for date"/>
			</section>
		</section>
	</section>
</form>
	';
		$data['form'] = $internalMaizeFlour_A1;
		$data['form_id'] = 'internalMaizeFlour_A1';

		$this -> load -> view('form', $data);
}
public function internalMaizeFlour_A2(){
	$internalMaizeFlour_A2='';
	$internalMaizeFlour_A2.='
	<form name="internalMaizeFlour_A2" id="internalMaizeFlour_A2" method="post" action="' . base_url() .'submit/c_form_maize/form_internalFort_A2' . '" >
	<h3>FORTIFIED MAIZE FLOUR TABLE A-2</h3>
	<p align="center">
		VITAMINS AND IRON PREMIX INVENTORY CONTROL LOG
	</p>
	<p>Compound Manufacturer:<select name="compManufacturer" id="compManufacturer">
						<option value="" selected="selected">Select One</option>
						'.$this->selectCompManufacturers.'
					</select></p>
	<section class="block">
	<table width="100%">
		<tr>
			<td width="12.5%"></td>
			<td width="12.5%"></td>
			<td width="12.5%">RECEIVED</td>
			<td width="12.5%"></td>
			<td width="12.5%"></td>
			<td width="12.5%">DISPATCHED</td>
			<td width="12.5%"></td>
			<td width="12.5%"></td>
		</tr>
		<tr>
			<td width="12.5%">DATE</td>
			<td width="12.5%">TIME</td>
			<td width="12.5%">QUANTITY(kg) (A)</td>
			<td width="12.5%">LOT ID</td>
			<td width="12.5%">EXPIRY DATE</td>
			<td width="12.5%">QUANTITY(kg) (B)</td>
			<td width="12.5%">LOT ID</td>
			<td width="12.5%">BALANCE(C)<sup>1</sup>(C)=(A)-(B)</td>
		</tr>
		<tr class="clonable">
			<td width="12.5%">
			<input type="text" name="theDate_1" id="theDate_1" class="cloned autoDate" readonly="true" placeholder="click for date"/>
			</td>
			<td width="12.5%">
			<input type="text" name="theTime_1" id="theTime_1" class="cloned mobiscroll" readonly="true" placeholder="click for time" />
			</td>
			<td width="12.5%">
			<input type="number" name="quantity_1" id="quantity_1" class="cloned fromZero"/>
			</td>
			<td width="12.5%">
			<input type="text" name="lotID_1" id="lotID_1" class="cloned"/>
			</td>
			<td width="12.5%">
			<input type="text" name="expiryDate_1" id="expiryDate_1" class="cloned futureDate" readonly="true" placeholder="click for date"/>
			</td>
			<td width="12.5%">
			<input type="number" name="dispatchedQuantity_1" id="dispatchedQuantity_1" class="cloned fromZero"/>
			</td>
			<td width="12.5%">
			<input type="text" name="dispatchedLotID_1" id="dispatchedLotID_1" class="cloned"/>
			</td>
			<td width="12.5%">
			<input type="text" name="balance_1" id="balance_1" class="cloned fromZero" placeholder="auto-calculated" readonly="true"/>
			</td>
		</tr>
		<tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>

	</table>
	</section>
	<section class="column-wide">
	<section class="left-wide">
		Date of reporting:<p></p>
		<input type="text" name="dateOfReporting" id="dateOfReporting" class="autoDate" readonly="true" placeholder="click for date"/>
		</section>
	<section class="right-wide">
		Signature:<p></p>
		<input type="text" name="signature" id="signature"/>
		</section>
		</section>
	</p>
	<p>
	<p>
		<sup>1</sup>When premix is received, C=<strong>previous C+ Received A</strong> but when premix is dispatched C=<strong>previous C- dispatched B</strong>
	</p>

</form>

	';
		$data['form'] = $internalMaizeFlour_A2;
		$data['form_id'] = 'internalMaizeFlour_A2';

		$this -> load -> view('form', $data);
}
public function internalMaizeFlour_B1(){
	$internalMaizeFlour_B1='';
	$internalMaizeFlour_B1.='
	<form name="internalMaizeFlour_B1" id="internalMaizeFlour_B1" method="post" action="' . base_url() .'submit/c_form_maize/form_internalFort_B1' . '">
	<h3>MAIZE FLOUR FORTIFICATION TABLE B-1</h3>
	<p align="center">FEEDER FLOW CONTROL FOR FORTIFIED MAIZE FLOUR</p>
	<p>FEEDER LOCATION:<input type="text" name="feederLocation" id="feederLocation" /></p>
	<table width="100%" border="0">
	<tr>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
	     <td></td>
    </tr>
	<tr>
	     <td>DATE</td>
	     <td>SHIFT(TIME)</td>
	     <td>PRODUCTIONRATE(MT/hour)</td>
	     <td>THEORETIC FEEDER FLOW(g/min)<sup>4</sup></td>
	     <td>FEEDER <strong>(1)</strong></td>
	     <td>FLOW <strong>(2)</strong></td>
	     <td>(g/min) <strong>(3)</strong></td>
	     <td>Average</td>
	     <td>CV</td>
	     <td>ADJUSTED</td>
	     <td>OBSERVATIONS</td>
    </tr>
    <tr class="clonable">
	     <td><input type="text" name="feederDate_1" id="feederDate_1" class="cloned autoDate" readonly="true" placeholder="click for date"/></td>
	     <td><input type="text" name="feederTime_1" id="feederTime_1" class="cloned mobiscroll" readonly="true" placeholder="click for time"/></td>
	     <td><input type="number" name="productionRate_1" id="productionRate_1" class="cloned fromZero"/></td>
	     <td><input type="number" name="theoreticFeeder_1" id="theoreticFeeder_1" class="cloned fromZero" readonly="true" placeholder="computed"/></td>
	     <td><input type="number" name="feederFlow1_1" id="feederFlow1_1" class="cloned"/></td>
	     <td><input type="number" name="feederFlow2_1" id="feederFlow2_1" class="cloned"/></td>
	     <td><input type="number" name="feederFlow3_1" id="feederFlow3_1" class="cloned"/></td>
	     <td><input type="number" name="feederFlowAverage_1" id="feederFlowAverage_1" class="cloned" placeholder="computed" readonly="true"/></td>
	     <td><input type="number" name="CV_1" id="CV_1" class="cloned"</td>
	     <td><select name="adjusted_1" id="adjusted_1" class="cloned">
	            <option>Yes</option>
	            <option>No</option></select></td>
	     <td><input type="text" name="observations_1" id="observations_1" class="cloned"/></td>
    </tr>
	
	<tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

	</tr>
	</table>
	<p><sup>4</sup>Feeder flow (g/min) =MT/hour*100/6</p>
	<p>Person Responsible:<input type="text" name="personResponsible" id="personResponsible"/></p>
	</form>
	';
	$data['form'] = $internalMaizeFlour_B1;
		$data['form_id'] = 'internalMaizeFlour_B1';

		$this -> load -> view('form', $data);
}
public function internalMaizeFlour_B2(){
	$internalMaizeFlour_B2='';
	$internalMaizeFlour_B2.='
	<form name="internalMaizeFlour_B2" id="internalMaizeFlour_B2" method="post" action="' . base_url() .'submit/c_form_maize/form_internalFort_B2' . '">
	<h3>MAIZE FLOUR FORTIFICATION TABLE B-2</h3>
	<p align="center">PRODUCTION LOG OF FORTIFIED MAIZE FLOUR</p>
	<p>Production line:<input type="text" name="productionLine" id="productionLine" /></p>
	<p>Date:<input type="text" name="dateB2" id="dateB2" class="autoDate" readonly="true" placeholder="click for date"/></p>
	<table border="0" width="100%">
	<tr>
	     <td width="16.6%"></td>
	     <td width="16.6%">FLOUR</td>
	     <td width="16.6%">PRODUCED</td>
	     <td width="16.6%"></td>
	     <td width="16.6%"></td>
	     <td width="16.6%"></td>
	</tr>
	<tr>
	     <td width="16.6%">SHIFT(TIME)</td>
	     <td width="16.6%">(MT)(A)</td>
	     <td width="16.6%">LOT ID</td>
	     <td width="16.6%">PREMIX USED(kg)(B)</td>
	     <td width="16.6%">FLOUR/PREMIX RATIO(A/B)</td>
	     <td width="16.6%">OBSERVATIONS</td>
	</tr>
	<tr class="clonable">
	     <td width="16.6%"><input type="text" name="shiftTime_1" id="shiftTime_1" class="cloned mobiscroll" readonly="true" placeholder="click for time"/></td>
	     <td width="16.6%"><input type="number" name="flourMT_1" id="flourMT_1" class="cloned fromZero"/></td>
	     <td width="16.6%"><input type="text" name="flourLotID_1" id="flourLotID_1" class="cloned"/></td>
	     <td width="16.6%"><input type="number" name="premixUsed_1" id="premixUsed_1" class="cloned positive"/></td>
	     <td width="16.6%"><input type="text" name="flourPremixRatio_1" id="flourPremixRatio_1" class="cloned fromZero" readonly="true" placeholder="computed"/></td>
	     <td width="16.6%"><input type="text" name="flourProducedObservations_1" id="flourProducedObservations_1" class="cloned"/></td>
	</tr>
	<tr id="formbuttons">

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		</tr>
	</table>
	<p>Person Responsible:<input type="text" name="personResponsible" id="personResponsible"/></p>
	</form>
	';
		$data['form'] = $internalMaizeFlour_B2;
		$data['form_id'] = 'internalMaizeFlour_B2';

		$this -> load -> view('form', $data);
	
}
public function internalMaizeFlour_C1(){
	$internalMaizeFlour_C1='';
	$internalMaizeFlour_C1.='
	<form name="internalMaizeFlour_C1" id="internalMaizeFlour_C1" method="post" action="' . base_url() .'submit/c_form_maize/form_internalFort_C1' . '">
	<h3>FORTIFIED MAIZE FLOUR TABLE C-1</h3>
	<p align="center">PRODUCTION AND QUALITY CONTROL LOG FOR FPRTIFIED MAIZE FLOUR</p>
	<table width="99%">
                         <tr>
                             <td width="15%">SHIFT(Hour)</td>
                             <td width="15%">MAIZE FLOUR PRODUCED M.T</td>
                             <td width="15%">PREMIX USED(kg)</td>
                             <td width="15%">RATIO MAIZE FLOUR/ PREMIX</td>
                             <td width="18%">NOTES</td>
                             <td width="18%">COMPOSITE SAMPLE IDENTIFICATION:</td>
                             <td width="15%">DATE<input type="text" name="dateC1" id="dateC1" class="autoDate"  readonly="true" placeholder="click for date"/></td>
                              
                         </tr>
                         <tr class="clonable">
                             <td width="15%"><input type="text" name="productionTime_1" id="productionTime_1" class="mobiscroll cloned" value=""  readonly="true" placeholder="click for time"/></td>
                             <td width="15%"><input type="number" name="maizeProduced_1" id="maizeProduced_1" class="cloned fromZero"/></td>
                             <td width="15%"><input type="number" name="premixUsed_1" id="premixUsed_1" class="cloned positive"/></td>
                             <td width="15%"><input type="text" name="ratioMaizeFlour_1" id="ratioMaizeFlour_1" class="cloned" readonly="true" placeholder="computed"/></td>
                             <td width="18%"><input type="text" name="notes_1" id="notes_1" class="cloned"/></td>
                             <td width="18%"><input type="text" name="compositeSample_1" id="compositeSample_1" class="cloned"/></td>
                            
                          </tr>
                          <tr>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="15%"></td>
                             <td width="18%"></td>
                             <td width="18%"></td>
                             <td width="15%">Results from External Laboratory<sup>6</sup>:<input type="text" name="logDate" id="logDate" /></td>
                          </tr>
                          <tr id="formbuttons">

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		</tr>
                          
                         <tr>
                             <td width="15%">Daily Total</td>
                             <td width="15%"><input type="text" name="maizeProduced2" id="maizeProduced2" readonly="true" placeholder="computed"/></td>
                             <td width="15%"><input type="text" name="premixUsed2" id="premixUsed2" readonly="true" placeholder="computed"/></td>
                             <td width="15%"><input type="text" name="maizeFortified2" id="maizeFortified2" readonly="true" placeholder="computed"/></td>
                             <td width="18%"><input type="text" name="notes2" id="notes2"/></td>
                             <td width="18%">Responsible:<input type="text" name="responsible" id="responsible"/></td>
                             <!--td width="15%">Signature:<input type="text" name="sigNature" id="sigNature"/></td-->
                         </tr>
                         <tr>
                             <td width="15%">Total to date</td>
                             <td width="15%"><input type="text" name="maizeProduced3" id="maizeProduced3" readonly="true" placeholder="computed"/></td>
                             <td width="15%"><input type="text" name="premixUsed3" id="premixUsed3" readonly="true" placeholder="computed"/></td>
                             <td width="15%"><input type="text" name="maizeFortified3" id="maizeFortified3" readonly="true" placeholder="computed"/></td>
                             <td width="18%"><input type="text" name="notes3" id="notes3"/></td>
                             <td width="18%"></td>
                             <td width="15%"></td>
                         </tr>
                      </table>
                      <br/>
                      <br/>
                 <p><sup>5</sup> This table is based on Log-form from the Los Tarros Refinery, S.A in Guatemala.</p>
                 <p><sup>6</sup> These results may be obtained in the factory quality control laboratory or from an external laboratory.</p>
				
	</form>
	';
		$data['form'] = $internalMaizeFlour_C1;
		$data['form_id'] = 'internalMaizeFlour_C1';

		$this -> load -> view('form', $data);
}
}
?>