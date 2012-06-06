<?php
class C_oil extends CI_Controller{

public function fortifiedOil_A1(){
   $fortifiedOil_A1='';
   $fortifiedOil_A1.='<form name="fortifiedOil_A1" id="fortifiedOil_A1" method="post" action="' . base_url() .'submit/c_form_oil/form_Fort_A1' . '">
   <h3 align="center">FORTIFIED OIL QC/QA-TABLE A-1</h3>
   <p align="center">VITAMIN A COMPOUND INVENTORY CONTROL LOG</p>
   <p align="center">&nbsp;</p>
   <p>Date of reporting:<input type="text" id="dateReported" name="dateReported" class="autoDate"  readonly="true" placeholder="click for date"/></p>
   <table border="0" width="100%">
                        <tr>
                           <td width="12.5%"></td>
                           <td width="12.5%">RECEIVED</td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%">DISPATCHED</td>
                           <td width="12.5%"></td>
                           <!--<td width="12.5%"></td>-->
                         </tr>
                         <tr>
                           <td width="12.5%">DATE</td>
                           <td width="12.5%">SUPPLIER COA #</td>
                           <td width="12.5%"># CANS(A)</td>
                           <td width="12.5%">LOT ID (CAN NOs.)</td>
                           <td width="12.5%">EXPIRATION DATE</td>
                           <td width="12.5%">LOT ID (CAN Nos.)(B=# CANS)</td>
                           <td width="12.5%">IN STOCK (C)(C)=(A)-(B)</td>
                           <!--<td width="12.5%">Receipt and QC Review(Name & signature)</td>-->
                         </tr>
                         <tr class="clonable">
                           <td width="12.5%"><input type="text" id="dateA1_1" name="dateA1_1" class="cloned autoDate" readonly="true" placeholder="click for date"/></td>
                           <td width="12.5%"><input type="text" id="oilSupplierCOA_1" name="oilSupplierCOA_1" class="cloned"/></td>
                           <td width="12.5%"><input type="number" id="numberOfCans_1" name="numberOfCans_1" class="cloned fromZero"/></td>
                           <td width="12.5%"><input type="text" id="lotID_1" name="lotID_1" class="cloned"/></td>
                           <td width="12.5%"><input type="text" id="expirationDate_1" name="expirationDate_1" class="cloned futureDate" readonly="true" placeholder="click for date"/></td>
                           <td width="12.5%"><input type="number" id="dispatchedLotID_1" name="dispatchedLotID_1" class="cloned"/></td>
                          <td width="12.5%"><input type="text" id="inStock_1" name="inStock_1" class="cloned fromZero" placeholder="auto-calculated" readonly="true"/></td>
                           <!--<td width="12.5%"><input type="text" id="receiptName" name="receiptName"/></td>-->
                         </tr>
                         <tr id="formbuttons">
								<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			                    <input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
						</tr>
                         
                    </table>
                    <p>Name and Signature:<input type="text" name="transactedBy" id="transactedBy"/></form>';
					$data['form'] = $fortifiedOil_A1;
					$data['form_id'] = 'fortifiedOil_A1';
					
		$this -> load -> view('form', $data);
   	
}
public function fortifiedOil_B1(){
   $fortifiedOil_B1='';
   $fortifiedOil_B1.='<form name="fortifiedOil_B1" id="fortifiedOil_B1" method="post" action="' . base_url() .'submit/c_form_oil/form_Fort_B1' . '">
   <h3 align="center">FORTIFIED OIL QC/QA-TABLE B-1</h3>
   <p align="center">PRODUCTION LOG FOR OIL FORTIFIED WITH VITAMIN A</p>
   <p align="center">&nbsp;</p>
   <p>Oil Factory:<select name="oilFactory" id="oilFactory">
                     <option value="1">Oil Factory 1</option>
                     <option value="2">Oil Factory 2</option>
                                              </select>                                                           
   <p>Year:<select name="harvestYear" id="harvestYear"></select></p>
   <table border="0" width="100%">
                        <tr>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%"></td>
                           <td width="12.5%">PREMIX</td>
                           <td width="12.5%">PREPARATION(Time)</td>
                           <td width="12.5%"></td>
                           
                         </tr>
                         <tr>
                           <td width="12.5%">DATE</td>
                           <td width="12.5%">BATCH #</td>
                           <td width="12.5%">BATCH SIZE (M.T)</td>
                           <td width="12.5%">VITAMIN A AMOUNT(g)</td>
                           <td width="12.5%">START</td>
                           <td width="12.5%">END</td>
                           <td width="12.5%">PREMIX ADDITION(Time)</td>
                           
                         </tr>
                         <tr class="clonable">
                           <td width="12.5%"><input type="text" id="dateA2_1" name="dateB1_1" class="cloned autoDate" readonly="true" placeholder="click for date"/></td>
                           <td width="12.5%"><input type="text" id="batchNumber_1" name="batchNumber_1" class="cloned"/></td>
                           <td width="12.5%"><input type="number" id="batchSize_1" name="batchSize_1" class="cloned fromZero"/></td>
                           <td width="12.5%"><input type="number" id="vitaminAAmount_1" name="vitaminAAmount_1" class="cloned fromZero"/></td>
                           <td width="12.5%"><input type="text" id="premixStart_1" name="premixStart_1" class="cloned mobiscroll" readonly="true" placeholder="click for time"/></td>
                           <td width="12.5%"><input type="text" id="premixEnd_1" name="premixEnd_1" class="cloned mobiscroll" readonly="true" placeholder="click for time"/></td>
                           <td width="12.5%"><input type="text" id="premixAddition_1" name="premixAddition_1" class="cloned" placeholder="auto-calculated "readonly="true"/></td>
                           <!--<td width="12.5%"><input type="text" id="receiptName" name="receiptName"/></td>-->
                         </tr>
                         <tr id="formbuttons">
							<input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
			                <input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>
						</tr>
                         
                    </table>
                    <p>Name and Signature<input type="text" id="nameSignature" name="nameSignature"/></form>';
					$data['form'] = $fortifiedOil_B1;
					$data['form_id'] = 'fortifiedOil_B1';
		$this -> load -> view('form', $data);
   	
}
 public function fortifiedOil_B2() {
		$fortifiedOil_B2 = '';
		$fortifiedOil_B2 .= '
<form name="fortifiedOil_B2" id="fortifiedOil_B2" method="post" action="' . base_url() .'submit/c_form_oil/form_Fort_B2' . '">

	<h3>OIL FORTIFICATION: TABLE B-2</h3>
	<h4>WEEKLY CHECK UP OF EQUIPMENT USED IN OIL FORTIFICATION WITH VITAMIN A</h4>
	<!--p>
		<select name="manufacturer" id="manufacturer">
			<option value="1">Company 1</option>
			<option value="2">Company 2</option>
		</select>
	</p-->
	<p>
		Date:
		<input type="text" name="checkupDate" id="checkupDate" readonly="true" placeholder="click for date"/>
	</p>
	<section class="column-wide">
		<section class="row-title">
			<section class = "left">
				<label>EQUIPMENT</label>
			</section>
			<section class="center">
				<label>CONDITION</label>
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
				<textarea type="text" name="blenderObservations" id="blenderObservations"></textarea>
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
				<textarea type="text" name="balanceObservations" id="balanceObservations"></textarea>
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
				<textarea type="text" name="pumpObservations" id="pumpObservations"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>4. Stirrers</label>
				<input type="hidden" id="stirrers" name="stirrers_4" value=""/>
			</section>
			<section class="center">
				<select name="stirrersCondition" id="stirrersCondition">
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="stirrersObservations" id="stirrersObservations"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>5. Feeding tubes</label>
				<input type="hidden" id="feeding" name="feeding_5" value=""/>
			</section>
			<section class="center">
				<select name="feedingTubesCondition" id="feedingTubesCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="feedingTubesObservations" id="feedingTubesObservations"></textarea>
			</section>
		</section>
		<section class="row">
			<section class = "left">
				<label>6. Blending tank</label>
				<input type="hidden" id="tank" name="tank_6" value=""/>
			</section>
			<section class="center">
				<select name="blendingTankCondition" id="blendingTankCondition" >
					<option value="1">Adequate</option>
					<option value="0">Inadequate</option>
				</select>
			</section>
			<section class="right">
				<textarea type="text" name="blendingTankObservations" id="blendingTankObservations"></textarea>
			</section>
		</section>
	</section>
	<br/>
	<p>
		<label>Name/Signature:</label>
		<input type="text" name="checkupName" id="checkupName"/>
</form>';

		$data['form'] = $fortifiedOil_B2;
		$data['form_id'] = 'fortifiedOil_B2';

		$this -> load -> view('form', $data);

	}
	public function fortifiedOil_C1() {
		$fortifiedOil_C1 = '';
		//php form for internal fortification of salts-C1.
		$fortifiedOil_C1 .= '
<form name="fortifiedOil_C1" id="fortifiedOil_C1" method="post" action="' . base_url() .'submit/c_form_oil/form_Fort_C1' . '">
		                         <h3>FORTIFIED OIL QC/QA- TABLE C-1</h3>
                         <h4> PRODUCTION AND QUALITY CONTROL LOG FOR FORTIFIED OIL<sup>3</sup>WITH VITAMIN A</h4>
                         <!--p>
	                         <select name="manufacturer" id="manufacturer">
		                         <option value="1">Company 1</option>
		                         <option value="2">Company 2</option>
	                         </select>
                         </p-->
                         <table width="100%">
                         <tr>
                             <td width="15%">SHIFT(Time)</td>
                             <td width="15%">OIL PRODUCED M.T</td>
                             <td width="15%">PREMIX USED(Grams)</td>
                             <td width="15%">OIL FORTIFIED/ PREMIX USED</td>
                             <td width="18%">NOTES</td>
                             <td width="18%">COMMENTS</td>
                             <td width="15%">DATE<input type="text" name="dateC1" id="dateC1" readonly="true" placeholder="click for date"/></td>
                              
                         </tr>
                         <tr class="clonable">
                             <td width="15%"><input type="text" name="productionTime_1" id="productionTime_1" class="mobiscroll cloned" value="" readonly="true" placeholder="click for time"/></td>
                             <td width="15%"><input type="number" name="oilProduced_1" id="oilProduced_1" class="cloned fromZero"/></td>
                             <td width="15%"><input type="number" name="premixUsed_1" id="premixUsed_1" class="cloned positive"/></td>
                             <td width="15%"><input type="number" name="oilFortified_1" id="oilFortified_1" class="cloned fromZero" readonly="true" placeholder="computed"/></td>
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
                             <td width="15%">Results from Quantitative Testing<sup>4</sup>:<input type="text" name="logDate" id="logDate" /></td>
                          </tr>
                          <tr id="formbuttons">
			                <input title="Adds a new row after the last" type="button" class="awesome myblue medium" id="clonetrigger" value="Add a row"/>
							<input title="Removes the last row" type="button" class="awesome myblue medium" id="cloneremove" value="Remove Row"/>

		                  </tr>
                          
                         <tr>
                             <td width="15%">Daily Total</td>
                             <td width="15%"><input type="text" name="oilProduced2" id="oilProduced2" readonly="true" placeholder="auto-calculated"/></td>
                             <td width="15%"><input type="text" name="premixUsed2" id="premixUsed2" readonly="true" placeholder="auto-calculated"/></td>
                             <td width="15%"><input type="text" name="oilFortified2" id="oilFortified2" readonly="true" placeholder="auto-calculated"/></td>
                             <!--td width="18%"><input type="text" name="notes2" id="notes2"/></td-->
                             <td width="18%">Responsible:<input type="text" name="responsible" id="responsible"/></td>
                             <!--<td width="15%">Signature:<input type="text" name="sigNature" id="sigNature"/></td>-->
                         </tr>
                         <tr>
                             <td width="15%">Total to date</td>
                             <td width="15%"><input type="text" name="oilProduced3" id="oilProduced3"  readonly="true" placeholder="auto-calculated"/></td>
                             <td width="15%"><input type="text" name="premixUsed3" id="premixUsed3"  readonly="true" placeholder="auto-calculated"/></td>
                             <td width="15%"><input type="text" name="oilFortified3" id="oilFortified3"  readonly="true" placeholder="auto-calculated"/></td>
                             <!--td width="18%"><input type="text" name="notes3" id="notes3"/></td-->
                             <td width="18%"></td>
                             <td width="15%"></td>
                         </tr>
                      </table>
                      <br/>
                      <br/>
                 <p><sup>3</sup> This table is based on Log-form from the Los Tarros Refinery, S.A in Guatemala.</p>
                 <p><sup>4</sup> These results may be obtained in the factory quality control laboratory or from an external laboratory.</p>
				
             </form>';

		$data['form'] = $fortifiedOil_C1;
		$data['form_id'] = 'fortifiedOil_C1';

		$this -> load -> view('form', $data);

	}


}
?>