<?php
class C_Sugar extends CI_Controller {

	public function internalSugar_A1() {
		$internalSugar_A1 = '';
		$internalSugar_A1 .= '<form name="internalSugar_A1" id="internalSugar_A1" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalFort_A1' . '" >
   <h3 align="center">SUGAR PREMIX: TABLE A-1</h3>
   <p align="center">DAILY CLEANING OF BLENDER USED IN VITAMIN A PREMIX PRODUCTION</p>
   <p align="center">&nbsp;</p>
   <section class="block">
   <table border="0" width="100%">
          <tr>
              <td width="25%">DATE</td>
              <td width="25%">CLEAN</td>
              <td width="25%">OBSERVATIONS</td>
              <td width="25%">RESPONSIBLE</td>
         </tr>
         <tr class="clonable">
              <td width="25%"><input type="text" name="dateA1_1" id="dateA1_1" class="cloned autoDate"/></td>
              <td width="25%"><select name="clean_1" id="clean_1" class="cloned">
                               <option>Yes</option>
                               <option>No</option>
                                  </select></td>
              <td width="25%"><input type="text" name="observations_1" id="observations-1" class="cloned"/></td>
              <td width="255"><input type="text" name="responsible_1" id="responsible_1" class="cloned"/></td>
           </tr>
           <tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>
           </table>
           </section>
           <p>Date of reporting:<input type="text" name="reportingDate" id="reportingDate"/></p>
           <p>Name/ Signature:<input type="text" name="nameSignature" id="nameSignature"/></p>
           </form>
   ';
		$data['form'] = $internalSugar_A1;
		$data['form_id'] = 'internalSugar_A1';

		$this -> load -> view('form', $data);
	}

	public function internalSugar_A2() {
		$internalSugar_A2 = '';
		$internalSugar_A2 .= '
	<form name="internalSugar_A2" id="internalSugar_A2" method="post" action="">
	<h3 align="center"> SUGAR PREMIX: TABLE A-2</h3>
	<p align="center">
		MONTHLY CHECK UP AND CLEANUP OF EQUIPMENT AND DEVICES FOR VITAMIN A PREMIX PRODUCTION
	</p>
	<section class="block">
	<section class="column-wide">
		<section class="row-title">
			<section class="left">
				<label>EQUIPMENT/ DEVICE</label>
			</section>
			<section class="center">
				<label>CONDITION</label>
			</section>
			<section class="right">
				<label>OBSERVATIONS</label>
			</section>
		</section>

		<section class="row-title">
			<label>1. Blender</label>
		</section>

		<section class="row">
			<section class="left">
				<label>1.1 General Cleanup</label>
			</section>
			<section class="center">
				<select name="blenderCleanUp" id="blenderCleanUp">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="blenderCleanUpObservation" id="blenderCleanUpObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label>1.2 Lubrication and oil levels</label>
			</section>
			<section class="center">
				<select name="blenderLubrication" id="blenderLubrication">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="iblenderLubricationObservation" id="blenderLubricationObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label>1.3 Oil aspersion nozzles</label>
			</section>
			<section class="center">
				<select name="blenderAspersion" id="blenderAspersion">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="blenderAspersionObservation" id="blenderAspersionObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label>1.4 Other</label>
			</section>
			<section class="center">
				<select name="blenderOther" id="blenderOther">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="blenderOtherObservation" id="blenderOtherObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label>2. Scales</label>
		</section>

		<section class="row">
			<section class="left">
				<label>2.1 General cleanup</label>
			</section>
			<section class="center">
				<select name="scalesCleanUp" id="scalesCleanUp">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="scalesCleanUpObservation" id="scalesCleanUpObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label>2.2 Calibrated</label>
			</section>
			<section class="center">
				<select name="scalesCalibrated" id="scalesCalibrated">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="scalesCalibratedObservation" id="scalesCalibratedObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label>3. Balance</label>
		</section>

		<section class="row">
			<section class="left">
				<label>3.1 General cleanup</label>
			</section>
			<section class="center">
				<select name="balanceCleanup" id="balanceCleanup">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="ibalanceCleanUpObservation" id="balanceCleanUpObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label>3.2 Calibrated</label>
			</section>
			<section class="center">
				<select name="balanceCalibrated" id="balanceCalibrated">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="balanceCalibratedObservation" id="balanceCalibratedObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label>4. Heating bath</label>
		</section>

		<section class="row">
			<section class="left">
				<label>4.1 General cleanup</label>
			</section>
			<section class="center">
				<select name="heatingBathCleanUp" id="heatingBathCleanUp">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="heatingBathCleanUpObservation" id="heatingBathCleanUpObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label>4.2 Temperature calibrated(60<sup>0</sup>C)</label>
			</section>
			<section class="center">
				<select name="heatingBathTemperature" id="heatingBathTemperature">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="heatingBathTemperatureObservation" id="heatingBathTemperatureObservation" rows="3"></textarea>
			</section>
		</section>
	
		<section class="row-title">
			<label>5. Electric stirrer</label>
		</section>

		<section class="row">
			<section class="left">
				<label>5.1 Performance</label>
			</section>
			<section class="center">
				<select name="stirrerPerformance" id="stirrerPerformance">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="stirrerPerformanceObservation" id="stirrerPerformanceObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label>6. Nitrogen- bubbling Device</label>
		</section>

		<section class="row">
			<section class="left">
				<label>6.1 Performance</label>
			</section>
			<section class="center">
				<select name="nitrogenPerformance" id="nitrogenPerformance">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="nitrogenPerformanceObservation" id="nitrogenPerformanceObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label> 7. Carts</label>
		</section>

		<section class="row">
			<section class="left">
				<label>7.1 General Cleanup</label>
			</section>
			<section class="center">
				<select name="cartsCleanup" id="cartsCleanup">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="cartsCleanUpObservation" id="cartsCleanUpObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label>7.2 Mobility</label>
			</section>
			<section class="center">
				<select name="cartsMobility" id="cartsMobility">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="cartsMobilityObservation" id="cartsMobilityObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row">
			<section class="left">
				<label>7.3 Integrity</label>
			</section>
			<section class="center">
				<select name="cartsIntegrity" id="cartsIntegrity">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="cartsIntegrityObservation" id="cartsIntegrityObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label>8. Sewing machine for bags</label>
		</section>

		<section class="row">
			<section class="left">
				<label>8.1 Performance</label>
			</section>
			<section class="center">
				<select name="sewingPerformance" id="sewingPerformance">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="sewingPerformanceObservation" id="sewingPerformanceObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label>9. 2000 mL graduated Cylinder</label>
		</section>

		<section class="row">
			<section class="left">
				<label>9.1 Cleanup</label>
			</section>
			<section class="center">
				<select name="cylinderCleanUp" id="cylinderCleanUp">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="cylinderCleanUpObservation" id="cylinderCleanUpObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label>10. 4-L flat bottom flask</label>
		</section>

		<section class="row">
			<section class="left">
				<label>10.1 Cleanup</label>
			</section>
			<section class="center">
				<select name="flaskCleanUp" id="flaskCleanUp">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="flaskCleanUpObservation" id="flaskCleanUpObservation" rows="3"></textarea>
			</section>
		</section>

		<section class="row-title">
			<label>11. Spatula</label>
		</section>

		<section class="row">
			<section class="left">
				<label>11.1 Cleanup</label>
			</section>
			<section class="center">
				<select name="spatulaCleanUp" id="spatulaCleanUp">
					<option>Adequate</option>
					<option>Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea name="spatulaCleanUpObservation" id="spatulaCleanUpObservation" rows="3"></textarea>
			</section>
		</section>
		</section>
		</section>
		<section class="column-wide">
         <section class="row">
		<section class="left-wide">
				<label>Date:</label>
				<input type="text", name="formDate" id="formDate"/>
			</section>
			<section class="right-wide">
				<label>Name/Signature:</label>
				<input type="text" name="signatureName" id="signatureName"/>
			</section>
		
		

	</section>
</form>

	               ';
		$data['form'] = $internalSugar_A2;
		$data['form_id'] = 'internalSugar_A2';

		$this -> load -> view('form', $data);
	}

	public function internalSugar_A3() {
		$internalSugar_A3 = '';
		$internalSugar_A3 .= '
<form name="internalSugar_A3" id="internalSugar_A3" method="post" action="">
	<h3>SUGAR PREMIX: TABLE A-3</h3>
	<p align="center">
		MAINTENANCE AND CALIBRATION PROGRAM RECORDS
	</p>
	<section class="block">
		<section class="column-wide">
			<section class="row-title">
				<section class="left-wide">
					<label>MAINTENANCE</label>
				</section>
				<section class="right-wide">
					<label>CALIBRATION<sup>1</sup></label>
				</section>

			</section>

			<section class="row-title">
				<section class="left-wide">
					<section class="left-wide">
						<label>EQUIPMENT/DEVICE</label>
					</section>
					<section class="right-wide">
						<label>DATE OF NEXT MAINTENANCE</label>
					</section>

				</section>
				<section class="right-wide">
					<section class="left-wide">
						<label>DATE OF NEXT CALIBRATION</label>
					</section>
					<section class="right-wide">
						<label>OBSERVATIONS</label>
					</section>

				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>1.Blender</label>
					</section>
					<section class="right-wide">
						<input type="text" id="blenderDate" name="blenderDate"/>
					</section>

				</section>
				<section class="right-wide">
					<section class="left-wide">
						<input type="text" id="blenderCalibration" name="blenderCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="blenderCalibrationObservation" id="blenderCalibrationObservation" ></textarea>
					</section>

				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide"></section>
					<section class="right-wide"></section>
				</section>

				<section class="right-wide">
					<section class="left-wide"></section>
					<section class="right-wide"></section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>2.Scales</label>
					</section>
					<section class="right-wide">
						<input type="text" id="scalesDate" name="scalesDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="scalesCalibration" id="scalesCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="scalesCalibrationObservation" id="scalesCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>3.Balance</label>
					</section>
					<section class="right-wide">
						<input type="text" id="balanceDate" name="balanceDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="balanceCalibration" id="balanceCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="balanceCalibrationObservation" id="balanceCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>4.Heating Bath</label>
					</section>
					<section class="right-wide">
						<input type="text" id="heatingBathDate" name="heatingBathDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="bathCalibration" id="bathCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="bathCalibrationObservation" id="bathCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>5. Electric Stirrer</label>
					</section>
					<section class="right-wide">
						<input type="text" name="electricStirrerDate" id="electricStirrerDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="stirrerCalibration" id="stirrerCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="stirrerCalibrationObservation" id="stirrerCalibrationObservation"></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>6.Nitrogen bubbling device</label>
					</section>
					<section class="right-wide">
						<input type="text" name="nitrogenDate" id="nitrogenDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="nitrogenCalibration" id="nitrogenCalibration"/>
					</section>
					<section class="right-wide">
						<textarea name="nitrogenCalibrationObservation" id="nitrogenCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>7. Carts</label>
					</section>
					<section class="right-wide">
						<input type="text" name="cartsDate" id="cartsDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="cartsCalibration" id="cartsCalibration" />
					</section>
					<section class="right-wide">
						<textarea name="cartsCalibrationObservation" id="cartsCalibrationObservation" ></textarea>
					</section>
				</section>
			</section>

			<section class="row">
				<section class="left-wide">
					<section class="left-wide">
						<label>8. Sewing machine</label>
					</section>
					<section class="right-wide">
						<input type="text" name="sewingMachineDate" id="sewingMachineDate"/>
					</section>
				</section>

				<section class="right-wide">
					<section class="left-wide">
						<input type="text" name="sewingCalibrated" id="sewingCalibrated"/>
					</section>
					<section class="right-wide">
						<textarea name="sewingCalibratedObservation" id="sewingCalibratedObservation" >
						</textarea>
					</section>
				</section>
			</section>

		</section>
	</section>
	<section class="column-wide">
		<section class="left-wide">
			Date:
			<input type="text" name="formA3Date" id="formA3Date"/>
		</section>
		<section class="right-wide">
			Signature:
			<input type="text" name="formA3Signature" id="formA3Signature"/>
		</section>

	</section>

</form>
 ';
		$data['form'] = $internalSugar_A3;
		$data['form_id'] = 'internalSugar_A3';

		$this -> load -> view('form', $data);
	}

	public function internalSugar_B1() {
		$internalSugar_B1 = '';
		$internalSugar_B1 .= '
	<form name="internalSugar_B1" id="internalSugar_B1" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalFort_B1' . '" >
	<h3>SUGAR PREMIX: TABLE B-1</h3>
	<p align="center">
		INGREDIENTS AND MATERIALS REQUIRED FOR VITAMIN A PREMIX PRODUCTION
	</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Harvest:
				</section>
				<section class="right">
					<input type="text" name="harvest" id="harvest"/>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Quantity of premix required (MT):
				</section>
				<section class="right">
					<input type="text" name="premixRequired" id="premixRequired"/>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Sugar Production Goal(MT):
				</section>
				<section class="right">
					<input type="text" name="sugarProduction" id="sugarProduction"/>
				</section>
			</section>
		</section>
	</section>
	<section class="block">
		<table border="0" width="100%">
			<tr>
				<td width="15%">INGREDIENTS & MATERIALS</td>
				<td width="14%">REFERENCE FOR 100 MT(R)</td>
				<td width="14%">QUANTITY REQUIRED(Q) (Q)=(P)*(R)/100</td>
				<td width="14%">CURRENT INVENTORY(I)</td>
				<td width="14%">QUANTITY TO PURCHASE(S) (S)=(Q)-(I)</td>
				<td width="14%">COST PER UNIT(in US$) (U)</td>
				<td width="14%">TOTAL COST(in US$) (T) (T)=(S)*(U)</td>
			</tr>
			<tr>
				<td width="15%">Sugar</td>
				<td width="14%">75 MT</td>
				<td width="14%">
				<input type="text" name="sugarQuantity0" id="sugarQuantity0"/>
				</td>
				<td width="14%">
				<input type="text" name="sugarInventory" id="sugarInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="sugarQuantity1" id="sugarQuantity1"/>
				</td>
				<td width="14%">
				<input type="text" name="sugarCost" id="sugarCost"/>
				/M.T</td>
				<td width="14%">
				<input type="text" name="sugarTotal" id="sugarTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Vitamin A fortification compound</td>
				<td width="14%">22,030 kg</td>
				<td width="14%">
				<input type="text" name="vitaminAQuantity" id="vitaminAQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="vitaminAInventory" id="vitaminAInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="vitaminAQuantity" id="vitaminAQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="vitaminACost" id="vitaminACost"/>
				/Kg</td>
				<td width="14%">
				<input type="text" name="vitaminATotal" id="vitaminATotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Antioxidant (Ronoxan)</td>
				<td width="14%">8 kg</td>
				<td width="14%">
				<input type="text" name="antioxidantQuantity" id="antioxidantQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="antioxidantInventory" id="antioxidantInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="antioxidantQuantity" id="antioxidantQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="antioxidantCost" id="antioxidantCost"/>
				/kg</td>
				<td width="14%">
				<input type="text" name="antioxidantTotal" id="antioxidantTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Vegetable oil</td>
				<td width="14%">2,000 L</td>
				<td width="14%">
				<input type="text" name="vegetableQuantity" id="vegetableQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="vegetableInventory" id="vegetableInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="vegetableQuantity" id="vegetableQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="vegetableCost" id="vegetableCost"/>
				/liter</td>
				<td width="14%">
				<input type="text" name="vegetableTotal" id="vegetableTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Polythene black bags</td>
				<td width="14%">4,500</td>
				<td width="14%">
				<input type="text" name="polytheneBlackQuantity" id="polytheneBlackQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneBlackInventory" id="polytheneBlackInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneBlackQuantity" id="polytheneBlackQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneBlackCost" id="polytheneBlackCost"/>
				/thousand</td>
				<td width="14%">
				<input type="text" name="polytheneBlackTotal" id="polytheneBlackTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Polythene black bags</td>
				<td width="14%">4,500</td>
				<td width="14%">
				<input type="text" name="polytheneQuantity" id="polytheneQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneInventory" id="polytheneInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneQuantity" id="polytheneQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="polytheneCost" id="polytheneCost"/>
				/thousand</td>
				<td width="14%">
				<input type="text" name="polytheneTotal" id="polytheneTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">Nitrogen</td>
				<td width="14%">2 cylinders (100 lb each)</td>
				<td width="14%">
				<input type="text" name="nitrogenQuantity" id="nitrogenQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="nitrogenInventory" id="nitrogenInventory"/>
				</td>
				<td width="14%">
				<input type="text" name="nitrogenQuantity" id="nitrogenQuantity"/>
				</td>
				<td width="14%">
				<input type="text" name="nitrogenCost" id="nitrogenCost"/>
				/cylinder</td>
				<td width="14%">
				<input type="text" name="nitrogenTotal" id="nitrogenTotal"/>
				</td>
			</tr>
			<tr>
				<td width="15%">TOTALS (US$)</td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%"></td>
				<td width="14%">
				<input type="text" name="grandTotal" id="grandTotal"/>
				</td>
			</tr>

		</table>
	</section>
	
	<section class="column">
		<section class="row">
			<section class="left">
				Prepared by:
			</section>
			<section class="right">
				<input type="text" name="preparedBy" id="preparedBy"/>
			</section>
		</section>

		<section class="row">
			<section class="left">
				Date:
			</section>
			<section class="right">
				<input type="text" name="preparedDate" id="preparedDate"/>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<section class="left">
				Approved By:
			</section>
			<section class="right">
				<input type="text" name="approvedBy" id="approvedBy"/>
			</section>
		</section>
		<section class="row">
			<section class="left">
				Date:
			</section>
			<section class="right">
				<input type="text" name="approvedDate" id="approvedDate"/>
			</section>
		</section>
	</section>
	

</form>
	';
		$data['form'] = $internalSugar_B1;
		$data['form_id'] = 'internalSugar_B1';

		$this -> load -> view('form', $data);
	}

	public function internalSugar_C1() {
		$internalSugar_C1 = '';
		$internalSugar_C1 .= '<form name="internalSugar_C1" id="internalSugar_C1" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalFort_C1' . '" >
	<h3>SUGAR PREMIX:TABLE C-1</h3>
	<p align="center">RECEPTION RECORD OF VITAMIN A FORTIFICANT COMPOUND</p>
	<p>Ingredient:<input type="text" name="ingredients" id="ingredients"/></p>
	<table border="0" width="100%">
	<tr>
	    <td width="12.5%">DATE RECEIVED</td>
	    <td width="12.5%">QUANTITY RECEIVED(KG)</td>
	    <td width="12.5%">LOT NUMBER</td>
	    <td width="12.5%">EXPIRATION DATE</td>
	    <td width="12.5%">SUPPLIER</td>
	    <td width="12.5%">CERTIFICATE OF ANALYSIS</td>
	    <td width="12.5%">RECEIVED BY</td>
	    <td width="12.5%">OBSERVATIONS</td>
	</tr>
	<tr class="clonable">
	    <td width="12.5%">
	                 <input type="text" name="dateReceived_1" id="dateReceived_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="quantityReceived_1" id="quantityReceived_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="lotNumber_1" id="lotNumber_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="expirationDate_1" id="expirationDate_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="supplier_1" id="supplier_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="certificateOfAnalysis_1" id="certificateOfAnalysis_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="receivedBy_1" id="receivedBy_1" class="cloned"/></td>
	    <td width="12.5%"><input type="text" name="observations_1" id="observations_1" class="cloned"/></td>
	</tr>
	<tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>
	
	</table>
	</form>
	
	';
		$data['form'] = $internalSugar_C1;
		$data['form_id'] = 'internalSugar_C1';

		$this -> load -> view('form', $data);
	}

	public function internalSugar_C2() {
		$internalSugar_C2 = '';
		$internalSugar_C2 .= '
	<form name="internalSugar_C2" id="internalSugar_C2" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalFort_C2' . '" >
	<h3>SUGAR PREMIX: TABLE C-2</h3>
	<p align="center">DAILY INVENTORY OF INGREDIENTS AND MATERIALS FOR VITAMIN A PREMIX PRODUCTION</p>
	<table>
	<tr>
		<td width="10%"></td>
		<td width="10%"></td>
		<td width="10%"></td>
		<td width="60%">CONS</td>
		<td width="10%">UMED</td>
		<td width="10%">EACH</td>
		<td width="10%">DAY</td>
		<td width="10%">OF</td>
		<td width="10%">THE</td>
		<td width="10%">WEEK</td>
		<td width="10%"></td>
	</tr>
	<tr>
		<td width="10%">INGREDIENT/MATERIAL</td>
		<td width="10%">INITIAL BALANCE(B)</td>
		<td width="10%">RECEIVED DURING WEEK(R)</td>
		<td width="10%">1</td>
		<td width="10%">2</td>
		<td width="10%">3</td>
		<td width="10%">4</td>
		<td width="10%">5</td>
		<td width="10%">6</td>
		<td width="10%">TOTAL(C)</td>
		<td width="10%">FINAL BALANCE(F) (F)=(B)+(R)-(C)</td>
	</tr>
	<tr>
		<td width="10%">Vitamin A fortification Compound (kg)</td>
		<td width="10%"><input type="text" name="vitaminCompound" id="vitaminCompound"/></td>
		<td width="10%"><input type="text" name="vitaminReceivedWeek" id="vitaminReceivedWeek"/></td>
		<td width="10%"><input type="text" name="vitaminDay1" id="day1"/></td>
		<td width="10%"><input type="text" name="vitaminDay2" id="day2"/></td>
		<td width="10%"><input type="text" name="vitaminDay3" id="day3"/></td>
		<td width="10%"><input type="text" name="vitaminDay4" id="day4"/></td>
		<td width="10%"><input type="text" name="vitaminDay5" id="day5"/></td>
		<td width="10%"><input type="text" name="vitaminDay6" id="day6"/></td>
		<td width="10%"><input type="text" name="vitaminTotals" id="totals"/></td>
		<td width="10%"><input type="text" name="vitaminFinalBalance" id="finalBalance"/></td>
	</tr>
	<tr>
		<td width="10%">Sugar (kg)</td>
		<td width="10%"><input type="text" name="sugarCompund" id="sugarCompound"/></td>
		<td width="10%"><input type="text" name="sugarReceivedWeek" id="sugarReceivedWeek"/></td>
		<td width="10%"><input type="text" name="sugarDay1" id="sugarDay1"/></td>
		<td width="10%"><input type="text" name="sugarDay2" id="sugarDay2"/></td>
		<td width="10%"><input type="text" name="sugarDay3" id="sugarDay3"/></td>
		<td width="10%"><input type="text" name="sugarDay4" id="sugarDay4"/></td>
		<td width="10%"><input type="text" name="sugarDay5" id="sugarDay5"/></td>
		<td width="10%"><input type="text" name="sugarDay6" id="sugarDay6"/></td>
		<td width="10%"><input type="text" name="sugarTotals" id="sugarTotals"/></td>
		<td width="10%"><input type="text" name="sugarFinalBalance" id="sugarFinalBalance"/></td>
	</tr>
	<tr>
		<td width="10%">Vegetable oil (L)</td>
		<td width="10%"><input type="text" name="vegetableOil" id="vegetableOil"/></td>
		<td width="10%"><input type="text" name="vegetableOilReceivedWeek" id="vegetableOilReceivedWeek"/></td>
		<td width="10%"><input type="text" name="vegetableDay1" id="vegetableDay1"/></td>
		<td width="10%"><input type="text" name="vegetableDay2" id="vegetableDay2"/></td>
		<td width="10%"><input type="text" name="vegetableDay3" id="vegetableDay3"/></td>
		<td width="10%"><input type="text" name="vegetableDay4" id="vegetableDay4"/></td>
		<td width="10%"><input type="text" name="vegetableDay5" id="vegetableDay5"/></td>
		<td width="10%"><input type="text" name="vegetableDay6" id="vegetableDay6"/></td>
		<td width="10%"><input type="text" name="vegetableTotals" id="vegetableTotals"/></td>
		<td width="10%"><input type="text" name="vegetableFinalBalance" id="vegetableFinalBalance"/></td>
	</tr>
	<tr>
		<td width="10%">Ronoxan (kg)</td>
		<td width="10%"><input type="text" name="ronoxan" id="ronoxan"/></td>
		<td width="10%"><input type="text" name="ronoxanReceivedWeek" id="ronoxanReceivedWeek"/></td>
		<td width="10%"><input type="text" name="ronoxanDay1" id="ronoxanDay1"/></td>
		<td width="10%"><input type="text" name="ronoxanDay2" id="ronoxanDay2"/></td>
		<td width="10%"><input type="text" name="ronoxanDay3" id="ronoxanDay3"/></td>
		<td width="10%"><input type="text" name="ronoxanDay4" id="ronoxanDay4"/></td>
		<td width="10%"><input type="text" name="ronoxanDay5" id="ronoxanDay5"/></td>
		<td width="10%"><input type="text" name="ronoxanDay6" id="ronoxanDay6"/></td>
		<td width="10%"><input type="text" name="ronoxanTotals" id="ronoxanTotals"/></td>
		<td width="10%"><input type="text" name="ronoxanFinalBalance" id="ronoxanFinalBalance"/></td>
	</tr>
	<tr>
		<td width="10%">Nitrogen (Cylinder)</td>
		<td width="10%"><input type="text" name="nitrogen" id="nitrogen"/></td>
		<td width="10%"><input type="text" name="nitrogenReceivedWeek" id="nitrogenReceivedWeek"/></td>
		<td width="10%"><input type="text" name="nitrogenDay1" id="nitrogenDay1"/></td>
		<td width="10%"><input type="text" name="nitrogenDay2" id="nitrogenDay2"/></td>
		<td width="10%"><input type="text" name="nitrogenDay3" id="nitrogenDay3"/></td>
		<td width="10%"><input type="text" name="nitrogenDay4" id="nitrogenDay4"/></td>
		<td width="10%"><input type="text" name="nitrogenDay5" id="nitrogenDay5"/></td>
		<td width="10%"><input type="text" name="nitrogenDay6" id="nitrogenDay6"/></td>
		<td width="10%"><input type="text" name="nitrogenTotals" id="nitrogenTotals"/></td>
		<td width="10%"><input type="text" name="nitrogenFinalBalance" id="nitrogenFinalBalance"/></td>
	</tr>
	<tr>
		<td width="10%">Polythylene bags (Units)</td>
		<td width="10%"><input type="text" name="polythylene" id="polythylene"/></td>
		<td width="10%"><input type="text" name="polythyleneReceivedWeek" id="polythyleneReceivedWeek"/></td>
		<td width="10%"><input type="text" name="polythyleneDay1" id="polythyleneDay1"/></td>
		<td width="10%"><input type="text" name="polythyleneDay2" id="polythyleneDay2"/></td>
		<td width="10%"><input type="text" name="polythyleneDay3" id="polythyleneDay3"/></td>
		<td width="10%"><input type="text" name="polythyleneDay4" id="polythyleneDay4"/></td>
		<td width="10%"><input type="text" name="polythyleneDay5" id="polythyleneDay5"/></td>
		<td width="10%"><input type="text" name="polythyleneDay6" id="polythyleneDay6"/></td>
		<td width="10%"><input type="text" name="polythyleneTotals" id="polythyleneTotals"/></td>
		<td width="10%"><input type="text" name="polythyleneFinalBalance" id="polythyleneFinalBalance"/></td>
	</tr>
	<tr>
		<td width="10%">Polypropylene bags (Units)</td>
		<td width="10%"><input type="text" name="polypropylene" id="polypropylene"/></td>
		<td width="10%"><input type="text" name="polypropyleneReceivedWeek" id="polypropyleneReceivedWeek"/></td>
		<td width="10%"><input type="text" name="polypropyleneDay1" id="polypropyleneDay1"/></td>
		<td width="10%"><input type="text" name="polypropyleneDay2" id="polypropyleneDay2"/></td>
		<td width="10%"><input type="text" name="polypropyleneDay3" id="polypropyleneDay3"/></td>
		<td width="10%"><input type="text" name="polypropyleneDay4" id="polypropyleneDay4"/></td>
		<td width="10%"><input type="text" name="polypropyleneDay5" id="polypropyleneDay5"/></td>
		<td width="10%"><input type="text" name="polypropyleneDay6" id="polypropyleneDay6"/></td>
		<td width="10%"><input type="text" name="polypropyleneTotals" id="polypropyleneTotals"/></td>
		<td width="10%"><input type="text" name="polypropyleneFinalBalance" id="polypropyleneFinalBalance"/></td>
	</tr>
	<tr>
		<td width="10%">Sewing threaad (Units)</td>
		<td width="10%"><input type="text" name="sewingThread" id="sewingThread"/></td>
		<td width="10%"><input type="text" name="sewingThreadReceivedWeek" id="sewingThreadReceivedWeek"/></td>
		<td width="10%"><input type="text" name="sewingThreadDay1" id="sewingThreadDay1"/></td>
		<td width="10%"><input type="text" name="sewingThreadDay2" id="sewingThreadDay2"/></td>
		<td width="10%"><input type="text" name="sewingThreadDay3" id="sewingThreadDay3"/></td>
		<td width="10%"><input type="text" name="sewingThreadDay4" id="sewingThreadDay4"/></td>
		<td width="10%"><input type="text" name="sewingThreadDay5" id="sewingThreadDay5"/></td>
		<td width="10%"><input type="text" name="sewingThreadDay6" id="sewingThreadDay6"/></td>
		<td width="10%"><input type="text" name="sewingThreadTotals" id="sewingThreadTotals"/></td>
		<td width="10%"><input type="text" name="sewingThreadFinalBalance" id="sewingThreadFinalBalance"/></td>
	</tr>
	</table>
	<p>Observations:<textarea name="observations" id="observations"row="3"></textarea></p>
	<p>Date:<input type="text" name="responsibleDate" id="responsibleDate"/></p>
	<p>Responsible:<input type="text" name="responsible" id="responsible"/></p>
		</form>
	';
		$data['form'] = $internalSugar_C2;
		$data['form_id'] = 'internalSugar_C2';

		$this -> load -> view('form', $data);
	}

	public function internalSugar_C3() {
		$internalSugar_C3 = '';
		$internalSugar_C3 .= '
<form name="internalSugar_C3" id="internalSugar_C3" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalFort_C3' . '" >
	<h3>SUGAR PREMIX:TABLE C-3</h3>
	<p align="center">
		VITAMIN A PREMIX INVENTORY
	</p>
	<section class="block">
		<table width="100%">
			<tr>
				<td width="12.5%">PRO</td>
				<td width="12.5%">DUC</td>
				<td width="12.5%">TION</td>
				<td width="12.5%"></td>
				<td width="12.5%">DIST</td>
				<td width="12.5%">RIB</td>
				<td width="12.5%">UTION</td>
				<td width="12.5%"></td>
			</tr>
			<tr>
				<td width="12.5%">DATE</td>
				<td width="12.5%">LOG ID(BAG No)</td>
				<td width="12.5%">#25-kg BAGS produced</td>
				<td width="12.5%">DELIVERY No.</td>
				<td width="12.5%">DESTINATION(SUGAR FACTORY NAME)</td>
				<td width="12.5%">LOT ID(BAG No.s)</td>
				<td width="12.5%">#25-kg BAGS DISPATCHED</td>
				<td width="12.5%">OBSERVATIONS</td>
			</tr>
			<tr id="formbuttons">
				<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
			</tr>

			<tr class="clonable">
				<td width="12.5%">
				<input type="text" name="dates_1" id="dates_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<input type="text" name="lotID_1" id="lotID_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<input type="text" name="bagsProduced_1" id="bagsProduced_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<input type="text" name="deliveryNumber_1" id="deliveryNumber_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<select name="factoryName_1" id="factoryName_1" class="cloned">
					<option>Sugar Factory 1</option>
					<option>Sugar factory 2</option>
					<option>Sugar factory 3</option>
				</select></td>
				<td width="12.5%">
				<input type="text" name="dispatchedLotID_1" ID="dispatchedLotID_1" class="cloned" />
				</td>
				<td width="12.5%">
				<input type="text" name="dispatchedBags_1" id="dispatchedBags_1" class="cloned"/>
				</td>
				<td width="12.5%">
				<input type="text" name="observations_1" id="observations_1" class="cloned"/>
				</td>
			</tr>
			<tr>
				<td width="12.5%">TOTAL</td>
				<td width="12.5%">25-kg bags</td>
				<td width="12.5%">
				<input type="text" name="totals0" id="totals0"/>
				</td>
				<td width="12.5%"></td>
				<td width="12.5%">TOTALS</td>
				<td width="12.5%">RIB</td>
				<td width="12.5%">
				<input type="text" name="totals1" id="totals1"/>
				</td>
				<td width="12.5%"></td>
			</tr>
		</table>
	</section>
	<section class="column">
		<section class="row">
			<section class="left">
				Balance for next week:
			</section>
			<section class="right">
				<input type="text" name="balance" id="balance"/>
			</section>
		</section>
		<section class="row">
			<section class="left">
				Date:
			</section>
			<section class="right">
				<input type="text" name="dateResponsible" id="dateResponsible"/>
			</section>
		</section>
	</section>
	<section class="column">
		<section class="row">
			<section class="left">
				Responsible:
			</section>
			<section class="right">
				<input type="text" name="nameResponsible" id="nameResponsible">
			</section>
		</section>
	</section>

</form>

	';
		$data['form'] = $internalSugar_C3;
		$data['form_id'] = 'internalSugar_C3';

		$this -> load -> view('form', $data);
	}

	public function internalSugar_D1() {
		$internalSugar_D1 = '';
		$internalSugar_D1 .= '
	<form name="internalSugar_D1" id="internalSugar_D1" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalFort_D1' . '" >
	<h3>Sugar premix: table D-1</h3>
	<p align="center">VITAMIN A PREMIX QUALITY CONTROL: RETINOL RESULTS</p>
	<table border="0" width="100%">
	<tr>
	     <td width="14.2%">LOTS ID(BAGS NUMBERS)</td>
	     <td width="14.2%">DATE OF PRODUCTION</td>
	     <td width="14.2%">DATE SAMPLES SENT TO THE LABORATORY</td>
	     <td width="14.2%">LABORATORY REPORT(# ID)</td>
	     <td width="14.2%">REPORT DATE</td>
	     <td width="14.2%">[Vit. A](g/kg)</td>
	     <td width="14.2%">OBSERVATIONS</td>
	</tr>
	<tr class="clonable">
	     <td width="14.2%"><input type="text" name="bagNumbers_1" id="bagNumbers_1" class="cloned"/></td>
	     <td width="14.2%"><input type="text" name="productionDate_1" id="productionDate_1" class="autoDate cloned"/></td>
	     <td width="14.2%"><input type="text" name="samplesSent_1" id="samplesSent_1" class="autoDate cloned"/></td>
	     <td width="14.2%"><input type="text" name="laboratoryReport_1" id="laboratoryReport_1" class="cloned"/></td>
	     <td width="14.2%"><input type="text" name="dateReported_1" id="dateReported_1" class="autoDate cloned"/></td>
	     <td width="14.2%"><input type="text" name="vitaminA_1" id="vitaminA_1" class="cloned"/></td>
	     <td width="14.2%"><input type="text" name="vitaminAObservations_1" id="vitaminAObservations_1" class="cloned"</td>
	</tr>
	<tr id="formbuttons">
			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		</tr>
	
	</table>
	</form>
	';
		$data['form'] = $internalSugar_D1;
		$data['form_id'] = 'internalSugar_D1';

		$this -> load -> view('form', $data);
	}

	public function externalSugar_B1() {
		$externalSugar_B1 = '';
		$externalSugar_B1 .= '
<form name="externalSugar_B1" id="externalSugar_B1" method="post" action="' . base_url() . 'submit/c_form_sugar/form_externalFort_B1' . '" >
	<h3>FORTIFIED SUGAR- AUDITS AND INSPECTION- TABLE B-1</h3>
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
					<input type="text" name="visitDate" id="visitDate" class="autoDate"/>
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
					Sugar Factory:
				</section>
				<section class="right">
					<select name="sugarFactory" id="sugarFactory">
						<option value="1">Factory 1</option>
						<option value="2">Factory 2</option>
						<option value="3">Factory 3</option>
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
					<select name="publicHealthOfficer" id="publicHealthOfficer">
						<option value="1">Adams Opiyo</option>
						<option value="2">Rufus Mbugua</option>
						<option value="3">Nicodemus Maingi</option>
					</select>
				</section>
			</section>
		</section>
	</section>

	
	<table width="100%">
		<!--beginning of table-->
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

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		</tr>

</form>
	';
		$data['form'] = $externalSugar_B1;
		$data['form_id'] = 'externalSugar_B1';

		$this -> load -> view('form', $data);

	}

	public function externalSugar_B2() {
		$externalSugar_B2 = '';
		$externalSugar_B2 .= '
	<form name="externalSugar_B2" id="externalSugar_B2" method="post" action="' . base_url() . 'submit/c_form_sugar/form_externalFort_B2' . '" >
	<h3>FORTIFIED SUGAR- AUDITS AND INSPECTION TABLE B-2</h3>
	<p align="center">
		CHECKLIST OF TECHNICAL AUDIT AND INSPECTION VISIT TO SUGAR FACTORIES
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
			<label for="factory_name">Factory name:</label>
			</section>
			<section class="right">
			<input id="factoryName" name="factoryName" type="text" placeholder=""  required>
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
					<label> 1.3.2 Feeder verification</label>
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
					<label> 1.3.3 Sampling of sugar for QC</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="samplingSugar" checked="checked" id="sampling_sugar_y" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="samplingSugar" id="sampling_sugar_n" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="samplingSugar" id="sampling_sugar_na" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 1.3.4 Vitamin A assay for fortified sugar</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="vitaminAAssay" checked="checked" id="vitaminAAssay" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="vitaminAAssay" id="vitaminAAssay" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="vitaminAAsay" id="vitaminAAssay" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row-title">
				2.0 Vitamin A premix:
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
					<label> 2.2 Stored under adequate conditions</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="storedAdequate" id="storedAdequate" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="storedAdequate" id="storedAdequate" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="storedAdequate" id="storedAdequate" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 2.3 "First-in, first-out" system </label>
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
					<label> 2.4 Adequately delivered to fortification site</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="adequatelyDelivered" id="adequatelyDelivered" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="adequatelyDelivered" id="adequatelyDelivered" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="adequatelyDelivered" id="adequatelyDelivered" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 2.5 Verification of retinol levels in premix</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="retinolLevels" id="retinolLevels" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="retinolLevels" id="retinolLevels" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="retinolLevels" id="retinolLevels" value="n/a" />
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
				3.0 Sugar Fortification with vitamin A:
			</section>
			<section class="row">
				<section class="left">
					<label> 3.1 Feeder flow is verified at least every shift</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="feederFlow" id="feederFlow" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="feederFlow" id="feederFlow" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="feederFlow" id="feederFlow" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.2 Records of feeder verification are available</label>
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
					<label> 3.3 Feeder is adjusted when needed</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="feederAdjusted" id="feederAdjusted" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="feederAdjusted" id="feederAdjusted" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="feederAdjusted" id="feederAdjusted" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.4 Premix level in feeder was adequate during visit</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="premixLevelAdequate" id="premixLevelAdequate" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="premixLevelAdequate" id="premixLevelAdequate" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="premixLevelAdequate" id="premixLevelAdequate" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.5 Evidence of maintenance of the feeder</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="feederMaintenance" id="feederMaintenance" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="feederMaintenance" id="feederMaintenance" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="feederMaintenance" id="feederMaintenance" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.6 Records of sugar/premix up to date</label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="sugarPremix" id="sugarPremix" checked="checked" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="sugarPremix" id="sugarPremix" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="sugarPremix" id="sugarPremix" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row">
				<section class="left">
					<label> 3.7 Sugar samples taken for analysis in every shift</label>
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
				3.8 Corrective action taken when:
			</section>
			<section class="row">
				<section class="left">
					<label> 3.8.1 Ratio sugar produced/premix is not right</label>
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
					<label> 3.8.2 Results show retinol <5 mg/kg </label>
				</section>
				<section class="right">
					<section class="col">
						<input type="radio" name="retinolResults" id="retinolResults" value="yes" />
					</section>
					<section class="col">
						<input type="radio" name="retinolResults" id="retinolResults" value="no" />
					</section>
					<section class="col">
						<input type="radio" name="retinolResults" id="retinolResults" checked="checked" value="n/a" />
					</section>
				</section>
			</section>
			<section class="row-title">
				4.0 Quality of fortified sugar:
			</section>
			<section class="row">
				<section class="left">
					<label> 4.1 Records of sugar samples analyzed using:</label>
					<!--/section>
					<section class="right">
					<section class="col">
					<input type="radio" name="sugarSamplesAnalyzed" id="sugar_samples_analyzed_y" value="yes" />
					</section>
					<section class="col">
					<input type="radio" name="sugarSamplesAnalyzed" id="sugar_samples_analyzed_n" value="no" />
					</section>
					<section class="col">
					<input type="radio" name="sugarSamplesAnalyzed" id="sugar_samples_analyzed_na" value="n/a" />
					</section>
					</section-->
				</section>
				<section class="row">
					<section class="left">
						<label> 4.1.1 Semi quantitative method</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="semiQuantitative" id="semiQuantitative" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="semiQuantitative" id="semiQuantitative" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="semiQuantitative" id="semiQuantitative" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 4.1.2 Quantitative Method (internal lab.)</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="internalLab" id="internal_lab_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="internalLab_n" id="internal_lab_n" value="no" />
						</section>
						<section class="col">
							<input type="radio" name="internalLab" id="internal_lab_na" checked="checked" value="n/a" />
						</section>
					</section>
				</section>
				<section class="row">
					<section class="left">
						<label> 4.1.3 Quantitative Method V(external lab.)</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="externalLab" id="external_lab_y" value="yes" />
						</section>
						<section class="col">
							<input type="radio" name="externalLab" id="external_lab_n" value="no" />
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
						<label> 4.5 Fortified sugar is stored adequately</label>
					</section>
					<section class="right">
						<section class="col">
							<input type="radio" name="fortifiedSugarStored" id="fortifiedSugarStored_y" checked="checked" value="yes" />
						</section>

						<section class="col">
							<input type="radio" name="fortifiedSugarStored" id="fortifiedSugarStored_n" value="no" />
						</section>

						<section class="col">
							<input type="radio" name="fortifiedSugarStored" id="fortifiedSugarStored_na" value="n/a" />
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
						<input type="radio" name="fifoSystemDispatched" id="fifoSystem_y" checked="checked" value="yes" />
					</section>

					<section class="col">
						<input type="radio" name="fifoSystemDispatched" id="fifoSystem_n" value="no" />
					</section>

					<section class="col">
						<input type="radio" name="fifoSystemDispatched" id="fifoSystem_na" value="n/a" />
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
			           Type of Vitamin Flortificant:
 <input type="text" id="vitaminFortificant" name="vitaminFortificant" value="" placeholder="" />
				</section>

			</section>
		</section>
	</section>
	<table>
		<tr>
			<td width="144">ID Composite</td>
			<td width="144">Factory estimation[Vitamin A](mg/kg)</td>
			<td width="144">Results from inspection[Vitamin A](mg/kg)</td>
			<td width="144">ID other samples</td>
			<td width="144">Estimated average[Vitamin A](mg/kg)</td>
			<td width="144">Results from inspection[Vitamin A](mg/kg)</td>
		</tr>
		<tr class="clonable">
			<td width="144">
			<input type="text"  name="IDComposite" id="IDComposite"/>
			</td>
			<td width="144">
			<input type="text"  name="estimatedAverage0" />
			</td>
			<td width="144">
			<input type="text"  name="inspectionResults0" id="inspectionResults0"/>
			</td>
			<td width="144">
			<input type="text"  name="IDOther" id="iodineLot"/>
			</td>
			<td width="144">
			<input type="text"  name="estimatedAverage1" id="estimatedAverage"/>
			</td>
			<td width="144">
			<input type="text" name="inspectionResults1" id="inspectionResults1"/>
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

		$data['form'] = $externalSugar_B2;
		$data['form_id'] = 'externalSugar_B2';

		$this -> load -> view('form', $data);

	}

	public function externalSugar_B3() {
		$externalSugar_B3 = '';
		$externalSugar_B3 .= '
	<form name="externalSugar_B3" id="externalSugar_B3" method="post" action="' . base_url() . 'submit/c_form_sugar/form_externalFort_B3' . '" >
	<h3>FORTIFIED SUGAR- AUDITS AND INSPECTION TABLE B-3</h3>
	<p align="center">TECHNICAL AUDIT AND INSPECTION PRELIMINARY REPORT</p>
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
					<label for="labaratory">Laboratory</label>
					<input type="checkbox" name="cbo_labaratory" id="cbo_labaratory" value="labaratory">
				</section>
			</section>
			<section class="row">
				<section class="col-x4">
					<label for="maizeWarehouse">Sugar Warehouse</label>
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
			<label for="supervisorDate" >Date</label>
			<input type="text" id="supervisorDate" name="supervisorDate" value=""  class="autoDate" required/>
		</section>
	</section>
</form>
	';
		$data['form'] = $externalSugar_B3;
		$data['form_id'] = 'externalSugar_B3';

		$this -> load -> view('form', $data);

	}

	public function qualityAssurance_A1() {
		$qualityAssurance_A1 = '';
		$qualityAssurance_A1 .= '
<form name="qualityAssurance" id="qualityAssurance" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalQC_A1' . '" >
	<h3>FORTIFIED SUGAR QC/QA- TABLE A-1</h3>
	<p align="center">
		VITAMIN A PREMIX INVENTORY CONTROL LOG
	</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Harvest Year:
				</section>
				<section class="right">
					<select name="harvestYear" id="harvestYear"></select>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Date of reporting:
				</section>
				<section class="right">
					<input type"text" id="reportingDate" name="reportingDate" class="autoDate"/>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Name and Signature:
				</section>
				<section class="right">
					<input type="text" id="nameSignature" name="nameSignature"/>
				</section>
			</section>
		</section>
	</section>

	<table border="0" width="100%">
		<tr>
			<td width="11.1%"></td>
			<td width="11.1%"></td>
			<td width="11.1%">REC</td>
			<td width="11.1%">EI</td>
			<td width="11.1%">VED</td>
			<td width="11.1%">DISP</td>
			<td width="11.1%">ATCHED</td>
			<td width="11.1%"></td>
			<td width="11.1%"></td>
		</tr>
		<tr>
			<td width="11.1%">DATE</td>
			<td width="11.1%">TIME</td>
			<td width="11.1%">NO. OF BAGS(A)</td>
			<td width="11.1%">LOT ID(BAG NOs)</td>
			<td width="11.1%">PRODUCTION DATE</td>
			<td width="11.1%">NO. BAGS(B)</td>
			<td width="11.1%">LOT ID(BAG NOs.)</td>
			<td width="11.1%">IN STOCK(C) (C)=(A)-(B)</td>
			<td width="11.1%">OBSERVATIONS</td>
		</tr>
		<tr class="clonable">
			<td width="11.1%">
			<input type="text" name="dateA1_1" id="dateA1_1" class="cloned"/>
			</td>
			<td width="11.1%">
			<input type="text" name="timeA1_1" id="timeA1_1" class="cloned"/>
			</td>
			<td width="11.1%">
			<input type="text" name="bagNumbers_1" id="bagNumbers_1" class="cloned"/>
			</td>
			<td width="11.1%">
			<input type="text" name="lotID_1" id="lotID_1" class="cloned"/>
			</td>
			<td width="11.1%">
			<input type="text" name="productionDate_1" id="productionDate_1" class="cloned"/>
			</td>
			<td width="11.1%">
			<input type="text" name="dispatchedBags_1" id="dispatchedBags_1" class="cloned"/>
			</td>
			<td width="11.1%">
			<input type="text" name="dispatchedLotID_1" id="dispatchedLotID_1" class="cloned"/>
			</td>
			<td width="11.1%">
			<input type="text" name="inStock_1" id="inStock_1" class="cloned"/>
			</td>
			<td width="11.1%">
			<input type="text" name="observations_1" id="observations_1" class="cloned"/>
			</td>
		</tr>
		<tr id="formbuttons">

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		</tr>

	</table>
</form>
	';
		$data['form'] = $qualityAssurance_A1;
		$data['form_id'] = 'equalityAssurance_A1';

		$this -> load -> view('form', $data);

	}

	public function qualityAssurance_B1() {
		$qualityAssurance_B1 = '';
		$qualityAssurance_B1 .= '
<form name="qualityAssurance_B1" id="qualityAssurance_B1" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalQC_B1' . '" >
	<h3>FORTIFIED SUGAR QC/QA -TABLE B-1</h3>
	<p align="center">
		FEEDER FLOW CONTROL FOR PRODUCTION OF SUGAR FORTIFIED WITH VITAMIN A
	</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Sugar factory:
				</section>
				<section class="right">
					<select name="sugarFactory" id="sugarFactory">
						<option>Factory 1</option>
						<option>Factory 2</option>
					</select>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Harvest year:
				</section>
				<section class="right">
					<select name="harvestYear" id="harvestYear"></select>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Feeder Location:
				</section>
				<section class="right">
					<input type="text" name="feederLocation" id="feederLocation"/>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Person Responsible:
				</section>
				<section class="right">
					<input type="text" name="personResponsible" id="personResponsible"/>
				</section>
			</section>
		</section>

	</section>

	<table border="0" width="100%">
		<tr>
			<td width="10%"></td>
			<td width="10%"></td>
			<td width="10%"></td>
			<td width="10%"></td>
			<td width="10%">FEEDER</td>
			<td width="10%">FLOW</td>
			<td width="10%">(g/min)</td>
			<td width="10%"></td>
			<td width="10%"></td>
			<td width="10%"></td>
		</tr>
		<tr>
			<td width="10%">DATE</td>
			<td width="10%">TIME</td>
			<td width="10%">PRODUCTION RATE(MT/HOUR)</td>
			<td width="10%">THEORETICAL FEEDER FLOW(g/min)<sup>2</sup></td>
			<td width="10%">1</td>
			<td width="10%">2</td>
			<td width="10%">3</td>
			<td width="10%">Mean</td>
			<td width="10%">ADJUSTED</td>
			<td width="10%">OBSERVATIONS</td>
		</tr>
		<tr class="clonable">
			<td width="10%">
			<input type="text" name="qualityDate_1" id="qualityDate_1" class="cloned autoDate" />
			</td>
			<td width="10%">
			<input type="text" name="qualityTime_1" id="qualityTime_1" class="cloned mobiScroll"/>
			</td>
			<td width="10%">
			<input type="text" name="productionRate_1" id="productionRate_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlow_1" id="feederFlow_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlow1_1" id="feederFlow1_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlow2_1" id="feederFlow2_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlow3_1" id="feederFlow3_1" class="cloned"/>
			</td>
			<td width="10%">
			<input type="text" name="feederFlowMean_1" id="feederFlowMean_1" class="cloned"/>
			</td>
			<td width="10%">
			<select name="adjusted_1" id="adjusted_1" class="cloned">
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select></td>
			<td width="10%">
			<input type="text" name="feederFlowObservations_1" id="feederFlowObservations_1" class="cloned"/>
			</td>
		</tr>
		<tr id="formbuttons">

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		</tr>

	</table>
</form>
	';

		$data['form'] = $qualityAssurance_B1;
		$data['form_id'] = 'qualityAssurance_B1';

		$this -> load -> view('form', $data);
	}

	public function qualityAssurance_B2() {
		$qualityAssurance_B2 = '';
		$qualityAssurance_B2 .= '
	<form name="qualityAssurance_B2" id="qualityAssurance_B2" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalQC_B2' . '" >
	<h3>FORTIFIED SUGAR QC/QA TABLE B-2</h3>
	<p align="center">PRODUCTION LOG FOR SUGAR FORTIFIED WITH VITAMIN A</p>

	<section class="block">
		<section class="column">
			<section class="row">
				<section class="left">
					Sugar factory:
				</section>
				<section class="right">
					<select name="sugarFactory" id="sugarFactory">
						<option>Factory 1</option>
						<option>Factory 2</option>
					</select>
				</section>
			</section>

			<section class="row">
				<section class="left">
					Harvest year:
				</section>
				<section class="right">
					<select name="harvestYear" id="harvestYear"></select>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Feeder Location:
				</section>
				<section class="right">
					<input type="text" name="feederLocation" id="feederLocation"/>
				</section>
			</section>
		</section>
		<section class="column">
			<section class="row">
				<section class="left">
					Person Responsible:
				</section>
				<section class="right">
					<input type="text" name="personResponsible" id="personResponsible"/>
				</section>
			</section>
		</section>

	</section>	



	<table border="0" width="100%">
	<tr>
	       <td width="16%"></td>
	       <td width="16%"></td>
	       <td width="16%">PREMIX</td>
	       <td width="16%">USED</td>
	       <td width="16%"></td>
	       <td width="16%"></td>
	</tr>
	<tr>
	       <td width="16%">SHIFT(TIME)</td>
	       <td width="16%">SUGAR PRODUCED NO. 50KG BAGS(A)</td>
	       <td width="16%">NO. 25KG BAGS(B)</td>
	       <td width="16%">LOT ID</td>
	       <td width="16%">SUGAR/PREMIX RATION(A/B)</td>
	       <td width="16%">OBSERVATIONS</td>
	</tr>
	<tr class="clonable">
	       <td width="16%"><input type="text" name="shiftTime_1" id="shiftTime_1" class="mobiscroll cloned"/></td>
	       <td width="16%"><input type="text" name="sugarProduced_1" id="sugarProduced_1" class="cloned"/></td>
	       <td width="16%"><input type="text" name="premixBags_1" id="premixBags_1" class="cloned"/></td>
	       <td width="16%"><input type="text" name="usedLotID_1" id="usedLotID_1" class="cloned"/></td>
	       <td width="16%"><input type="text" name="sugarPremixRatio_1" id="sugarPremixRatio_1" classs="cloned"/></td>
	       <td width="16%"><input type="text" name="sugarPremixRatioObservations_1" id="sugarPremixRatioObservations_1" class="cloned"/></td>
	</tr>
	<tr id="formbuttons">

			<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		</tr>
	</table>
	
	</form>
	';
		$data['form'] = $qualityAssurance_B2;
		$data['form_id'] = 'qualityAssurance_B2';

		$this -> load -> view('form', $data);
	}

	public function qualityAssurance_C1() {
		$qualityAssurance_C1 = '';
		$qualityAssurance_C1 .= '
	<form name="qualityAssurance_C1" id="qualityAssurance_C1" method="post" action="' . base_url() . 'submit/c_form_sugar/form_internalQC_C1' . '" >
	<h3>FORTIFIED SUGAR QC/QA- TABLE C-1</h3>
	<p align="center">PRODUCTION AND QUALITY CONTROL LOG FOR FORTIFIED SUGAR<sup>1</sup>WITH VITAMIN A</p>
	<table width="100%">
                         <tr>
                             <td width="12.5%">SHIFT(Time)</td>
                             <td width="12.5%">SUGAR PRODUCED #50-kg sacks</td>
                             <td width="12.5%">PREMIX USED #25-kg bags</td>
                             <td width="12.5%">FORTIFIED SUGAR(M.T)</td>
                             <td width="12.5%">PREMIX USED</td>
                             <td width="12.5%">SUGAR/PREMIX</td>
                             <td width="12.5%">COMMENTS</td>
                             <td width="12.5%">DATE<input type="text" name="dateC1" id="dateC1"/></td>
                              
                         </tr>
                         <tr class="clonable">
                             <td width="12.5%"><input type="text" name="productionTime_1" id="productionTime_1" class="mobiscroll cloned" readonly="readonly" value="" /></td>
                             <td width="12.5%"><input type="text" name="sugarProduced_1" id="sugarProduced_1" class="cloned"/></td>
                             <td width="12.5%"><input type="text" name="premixUsed_1" id="premixUsed_1" class="cloned"/></td>
                             <td width="12.5%"><input type="text" name="sugarFortified_1" id="sugarFortified_1" class="cloned"/></td>
                             <td width="12.5%"><input type="text" name="usedPremix_1" id="usedPremix_1" class="cloned"/></td>
                             <td width="12.5%"><input type="text" name="sugarPremix_1" id="sugarPremix_1" class="cloned"/></td>
                             <td width="12.5%"><input type="text" name="comments_1" id="comments_1" class="cloned"/></td>
                            
                          </tr>
                          <tr>
                             <td width="12.5%"></td>
                             <td width="12.5%"></td>
                             <td width="12.5%"></td>
                             <td width="12.5%"></td>
                             <td width="12.5%"></td>
                             <td width="12.5%"></td>
                             <td width="12.5%"></td>
                             <td width="12.5%">Results from Quantitative Testing<sup>2</sup>:<input type="text" name="logDate" id="logDate" /></td>
                          </tr>
                          <tr id="formbuttons">

							<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			                <input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
		                 </tr>
                          
                         <tr>
                             <td width="12.5%">Daily Total</td>
                             <td width="12.5%"><input type="text" name="sugarProduced2" id="sugarProduced2"/></td>
                             <td width="12.5%"><input type="text" name="premixUsed2" id="premixUsed2"/></td>
                             <td width="12.5%"><input type="text" name="sugarFortified2" id="sugarFortified2"/></td>
                             <td width="12.5%"><input type="text" name="usedPremix2" id="usedPremix2"/></td>
							 <td width="12.5%"><input type="text" name="sugarpremix2" id="sugarPremix2"/></td>
                             <td width="12.5%">Responsible:<input type="text" name="responsible" id="responsible"/></td>
                             <td width="12.5%">Signature:<input type="text" name="sigNature" id="sigNature"/></td>
                         </tr>
                         <tr>
                             <td width="12.5%">Total to date</td>
                             <td width="12.5%"><input type="text" name="sugarProduced3" id="sugarProduced3"/></td>
                             <td width="12.5%"><input type="text" name="premixUsed3" id="premixUsed3"/></td>
                             <td width="12.5%"><input type="text" name="sugarFortified3" id="sugarFortified3"/></td>
                             <td width="12.5%"><input type="text" name="notes3" id="notes3"/></td>
                             <td width="12.5%"></td>
                             <td width="12.5%"></td>
                             <td width="12.5%"></td>
                         </tr>
                      </table>
                      <br/>
                      <br/>
                 <p><sup>1</sup> This table is based on Log-form from the Los Tarros Refinery, S.A in Guatemala.</p>
                 <p><sup>2</sup> These results may be obtained in the factory quality control laboratory or from an external laboratory.</p>
				
	</form>
	';
		$data['form'] = $qualityAssurance_C1;
		$data['form_id'] = 'qualityAssurance_C1';

		$this -> load -> view('form', $data);
	}

}
?>