 
<script src="<?php echo base_url() ?>media/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/complete.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.dataTables.editable.js" type="text/javascript" ></script>
<script src="<?php echo base_url() ?>media/js/jquery.jeditable.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery-ui.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.validate.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>/media/js/jquery.jeditable.js" type="text/javascript"></script>


<style type="text/css">
@import "<?php echo base_url()?>/media/css/jquery.dataTables.css";
@import "<?php echo base_url() ?>media/css/demo_table_jui.css";
@import "<?php echo base_url() ?>media/themes/smoothness/jquery-ui-1.8.4.custom.css";
@import "<?php echo base_url() ?>media/css/demo_page.css";
@import "<?php echo base_url() ?>media/css/demo_table.css";
@import "<?php echo base_url() ?>media/css/demo_table_jui.css";
@import "<?php echo base_url() ?>media/css/themes/base/jquery-ui.css";
@import "<?php echo base_url() ?>media/css/site_jui.ccss.css";
 

</style>
 

<script type="text/javascript" charset="utf-8">


		    $(document).ready(function () {
		    	
		    $("#email").live("click keyup", function(event){
		   	var email=encodeURI($(this).val());
		   	var url = "<?php echo base_url().'user_management/check_user_email' ?>"+'/'+email;
		   	
		   	$('#user_name').val(email);
          	ajax_request (url);
          	}); 	

	    	$(".ulink").click(function(){
  			var status=false;
            var id  = $(this).attr("id"); 
		    var title=$(this).attr("title");		
		    var url = "<?php echo base_url().'user_management/reset_user_variable' ?>"+'/'+title+"/"+id;
		        
                
            var r=confirm("Please confirm");
            if (r==true)
            {
            ajax_request (url)	;
            }
            else
            {}
            });
            function ajax_request (url){
	        var url =url;
	        $.ajax({
                     type: "POST",
                     url: url,
                     beforeSend: function() {
	                  $('#feedback').html('');
                      },
                     success: function(msg) {
                     	
                     	
                     	switch (msg){
                     		case 'User name is available':
                     		$('#feedback').html(msg);
                     		break;
                     		case 'User name is already in use':
                     		$('#feedback').html(msg);
                     		case 'Blank email':
                     		return
                     		break;
                     		default:
                     		 alert(msg);
                     	}
                     	
              
                            
                     }
        }); 
}     
		        $('#mydatatable').dataTable({
		        	                "bJQueryUI": true,		
									"bProcessing": true
									})
                 .makeEditable({
                 	                       aoColumns: [
                                     {  
                                     },
                                 null
                                    ],
                                      sUpdateURL:function(value, settings)
                                                                        {
                                                                            return value; //Simulation of server-side response using a callback function
                                                                        }//Remove this line in your code
                                     ,
                     aoTableActions: [
										{
										    sAction: "EditData",
										    sServerActionURL: "<?php //echo base_url().'product_controller/update_product' ?>",
										    oFormOptions: { autoOpen: false, modal: true }
										}
									],
                     sUpdateURL: "<?php //echo base_url().'product_controller/update_product' ?>",
                    
                     oAddNewRowButtonOptions: {	label: "Add...",
													icons: {primary:'ui-icon-plus'} 
									},
					oDeleteRowButtonOptions: {	label: "Delete", 
													icons: {primary:'ui-icon-trash'}
									},
					 sAddURL: "<?php echo base_url().'addData' ?>",				 			
                     sAddHttpMethod: "GET", //Used only on google.code live example because google.code server do not support POST request
                    // sDeleteURL: "#",
                     // sDeleteHttpMethod: "", //Used only on google.code live example because google.code server do not support POST request
                     sAddDeleteToolbarSelector: ".dataTables_length",
                    
                 });

		    });

									
</script>
 
		<form id="formEditData" action="UpdateData" title="Edit sugar_externalfortB3ID">
		<input type="hidden" name="id" id="id"  class="DT_RowId" />
		<input type="hidden" rel="0" />

		factoryName
		<input type="text" name="factoryName" rel="1" />
		dates
		<input type="text" name="dates" rel="2" />
		SuggestionsForImprovement
		<input type="text" name="suggestionsForImprovement" rel="3" />
		Affiliation
		<input disabled="" type="text" name="Affiliation" rel="4" />
		<br /><br />
        <button id="formEditDataOk" type="submit">Ok</button>
		<button id="formEditDataCancel" type="button">Cancel</button>
</form>		
				<form id="formAddNewRow" action="#" title="Add item" style="width:400px;min-width:400px">
					<input type="hidden" name="userName" id="item_id" class="" rel="0" /><br />
        
         <label for="factoryName">Factory Name</label><br />
        <input type="text" name="factoryName" rel="1" /><br />
		<label>Dates</label><br />
		<input type="text" name="dates" rel="2" /><br />
		<label>SuggestionsForImprovement</label><br />
		<input type="text" name="suggestionsForImprovement" rel="3" /><br />
		<label>Affiliation</label><br />
		<input disabled="" type="text" name="Affiliation" rel="4" /><br />
		<input type="hidden" name="userName" id="userName" class="required" rel="5" />
       
       
        
</form>


	<table id="mydatatable" class="display">
		<thead>
			<tr>
				<th>sugar_externalfortB3ID</th>
				<th>factoryName</th>
				<th>dates</th>
				<th>suggestionsForImprovement</th>
				<th>affiliation</th>
				<th>Action</th>

			</tr>
			</thead>

                            <?php
                        foreach ($ish as $value) { ?>
<tr id="<?php echo $value['sugar_externalfortB3ID']; ?>">    
<td id="<?php echo $value['sugar_externalfortB3ID']; ?>"><?php echo $value['sugar_externalfortB3ID']; ?></td>
<td><?php echo $value['factoryName']; ?></td>
<td><?php echo $value['dates']; ?></td>
<td id="suggestionsForImprovement"><?php echo $value['suggestionsForImprovement']; ?></td>
<td><?php echo $value['supervisorName']; ?></td>
<td><a class="table-action-EditData">Edit</a></td>
</tr>

    <?php }?>
</table> 
 