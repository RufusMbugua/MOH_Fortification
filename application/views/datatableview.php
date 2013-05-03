<pre>
    <?php //print_r($ish);?>
</pre>

 
 
<script src="<?php echo base_url() ?>media/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>media/js/jquery.dataTables.js" type="text/javascript"></script>
<style type="text/css">
@import "<?php echo base_url() ?>media/css/demo_table_jui.css";
@import "<?php echo base_url() ?>media/themes/smoothness/jquery-ui-1.8.4.custom.css";
</style>
<style type="text/css">
*{
	font-family: arial;
}
</style>

<script type="text/javascript" charset="utf-8">
 
$(document).ready(function() {
    $('#datatables').dataTable({
    	"aPaginationType":"full_numbers",
    	"aaSorting":[[1, "asc"]],
    	"bJQueryUI":true
    	});
} );

</script>

 
 
<div>
	<table id="datatables" class="display">
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
<tr>
    
<td><?php echo $value['sugar_externalfortB3ID']; ?></td>
<td><?php echo $value['factoryName']; ?></td>
<td><?php echo $value['dates']; ?></td>
<td><?php echo $value['suggestionsForImprovement']; ?></td>
<td><?php echo $value['supervisorName']; ?></td>
</tr>

    <?php }?>
</table></div>
 