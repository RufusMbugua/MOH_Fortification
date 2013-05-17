<pre>
    <?php //print_r($ish);?>
</pre>

 
 
<script src="<?php echo base_url() ?>media/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/complete.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery-1.4.4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.dataTables.editable.js" type="text/javascript" ></script>
<script src="<?php echo base_url() ?>media/js/jquery.jeditable.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.validate.js" type="text/javascript"></script>

<style type="text/css">
@import "<?php echo base_url() ?>media/css/demo_table_jui.css";
@import "<?php echo base_url() ?>media/themes/smoothness/jquery-ui-1.8.4.custom.css";
@import "<?php echo base_url() ?>media/css/demo_page.css";
@import "<?php echo base_url() ?>media/css/demo_table.css";
@import "<?php echo base_url() ?>media/css/demo_table_jui.css";
@import "<?php echo base_url() ?>media/css/themes/base/jquery-ui.css";
@import "http://www.datatables.net/media/css/site_jui.ccss";
 

</style>
 

<script type="text/javascript" charset="utf-8">
$(document).ready( function () {
				var id = -1;//simulation of id
				$('#mydatatable').dataTable({ bJQueryUI: true,

							"sPaginationType": "full_numbers"
}).makeEditable({
									sUpdateURL: function(value, settings)
									{
                             							return(value); //Simulation of server-side response using a callback function
									},sUpdateURL:"UpdateData",
                             			sAddURL: "AddData",
                             			sAddHttpMethod: "GET",
                                    sDeleteHttpMethod: "GET",
									sDeleteURL: "DeleteData",
                    							"aoColumns": [
                    									{ 	cssclass: "required" },
                    									{
                    									},
                    									{
                									        indicator: 'Saving...',
                                                            tooltip: 'Click to edit',
                                                            loadurl: 'LoadData',
                                                            loadtype: 'GET'					
												 		 
                    									},
                    									{
                    										indicator: 'Saving...',
                                                            tooltip: 'Click to edit',
                                                            loadurl: 'LoadData',
                                                            loadtype: 'GET'	
                    									},
                    									null
/*                    									{
                                                            					indicator: 'Saving Engine Version...',
                                                            					tooltip: 'Click to select engine version',
                                                            					loadtext: 'loading...',
                           					                                type: 'select',
                               						            		onblur: 'cancel',
												submit: 'Ok',
                                                            					loadurl: 'EngineVersionList.php',
												loadtype: 'GET'
                    									},
                    									{
                                                            					indicator: 'Saving CSS Grade...',
                                                            					tooltip: 'Click to select CSS Grade',
                                                            					loadtext: 'loading...',
                           					                                type: 'select',
                               						            		onblur: 'submit',
                                                            					data: "{'':'Please select...', 'A':'A','B':'B','C':'C'}"
                                                        				}
*/											],
									oAddNewRowButtonOptions: {	label: "Add...",
													icons: {primary:'ui-icon-plus'} 
									},
									oDeleteRowButtonOptions: {	label: "Remove", 
													icons: {primary:'ui-icon-trash'}
									},

									oAddNewRowFormOptions: { 	
                                                    title: 'Add a new browser',
													show: "blind",
													hide: "explode",
                                                    modal: true
									}	,
sAddDeleteToolbarSelector: ".dataTables_length"								

										});
				
			} );

									
</script>

 
 
<div>
			<!--
				<form id="formAddNewRow" action="#" title="Add item" style="width:600px;min-width:600px">
      
        <label for="userName">User Name</label><br />
        <input type="text" name="userName" id="userName" class="required" rel="0" />
        <br />       
        <label for="userPassword">Password</label><br />
        <input type="text" name="userPassword" id="userPassword" class="required" rel="0" />
        <br />
         <label for="userRights">Rights</label><br />
	<select name="userRights" id="userRights" rel="3">
                <option>1</option>
                <option>2</option>
                <option>3</option>
        </select>
        <br />
        <label for="affiliations">Affiliations</label><br />
		<input type="radio" name="affiliations" value="Bidco Main" rel="4"> Bidco Main<br>
		<input type="radio" name="affiliations" value="Unga Mill I" rel="4"> Unga Mill I<br>
		<input type="radio" name="affiliations" value="Wheat Mill I" checked rel="4">Wheat Mill I
        <br />
</form>
-->
	<table id="mydatatable" class="display">
		<thead>
			<tr>
				<th>sugar_externalfortB3ID</th>
				<th>factoryName</th>
				<th>dates</th>
				<th>suggestionsForImprovement</th>
				<th>affiliation</th>

			</tr>
			</thead>

                            <?php
                        foreach ($ish as $value) { ?>
<tr id="<?php echo $value['sugar_externalfortB3ID']; ?>">    
<td><?php echo $value['sugar_externalfortB3ID']; ?></td>
<td><?php echo $value['factoryName']; ?></td>
<td><?php echo $value['dates']; ?></td>
<td id="suggestionsForImprovement"><?php echo $value['suggestionsForImprovement']; ?></td>
<td><?php echo $value['supervisorName']; ?></td>
</tr>

    <?php }?>
</table></div>
 