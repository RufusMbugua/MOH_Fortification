<?php
ob_start();
$sessionEmail = $this -> session -> userdata('email');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Vehicles</title>
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url()?>css/layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/reveal.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/tabs.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/form.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/form-layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/fonts.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/mobiscroll-1.6.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/inline.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/jquery-ui-1.8.18.custom.css"/>
		<!-- Attach JavaScript files -->
		<script src="<?php echo base_url()?>js/jquery-1.7.2.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/mobiscroll-1.6.min.js" type="text/javascript" ></script>
		<script src="<?php echo base_url()?>js/jquery.orbit.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.validate.js" type="text/javascript" ></script>
		<script src="<?php echo base_url()?>js/testing.js" type="text/javascript" ></script>
		<script src="<?php echo base_url()?>js/jquery.cloneform.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>js/jquery.reveal.js" type="text/javascript" ></script>
		<!--script to form client side validation functions-->
		<!-- Run the TAB plugin -->
		<script type="text/javascript">
			$(function() {
				// Fast and dirty
				$('article.tabs section > h2').click(function() {
					$('article.tabs section').removeClass('ON');
					$(this).closest('section').addClass('ON');
				});
			});

		</script>

		<script type="text/javascript">
			// Place all Javascript code here

			$(document).ready(function() {

				$("#showFancyModal").click(function() {
					$("#profile-fancy").addClass("show");
					return false;
				});

				$("#closeFancy").click(function() {
					$("#profile-fancy").removeClass("show");
					return false;
				});

				$('#clonetrigger').click(function() {
					var yourclass = ".clonable";
					//The class you have used in your form
					var clonecount = $(yourclass).length;
					//how many clones do we already have?
					var newid = Number(clonecount) + 1;
					//Id of the new clone

					$(yourclass + ":first").fieldclone({//Clone the original element
						newid_ : newid, //Id of the new clone, (you can pass your own if you want)
						target_ : $("#formbuttons"), //where do we insert the clone? (target element)
						insert_ : "before", //where do we insert the clone? (after/before/append/prepend...)
						limit_ : 0							//Maximum Number of Clones
					});
					
					//alert(form_id);
					$('.clonable label.error').remove();
					$('.cloned').removeClass('error');
					$('.autoDate').removeClass('hasDatepicker error');
		            $('.autoDate').datepicker({dateFormat:"yy-mm-dd"});
		          
		         
		            $('.mobiscroll').removeClass('scroller');
                    $('.mobiscroll').scroller({preset:'time'});

					var t = 'default';
					var m = 'mixed';
					$('.mobiscroll').scroller('destroy').scroller({ preset: 'time', theme: t, mode: m });
					
					$(".cloned").on("keyup", function(){
	                    //alert("active element: "+$("input:text:focus").attr("id"));
	                    //do some calculations on key typed
	                  var id=$("input:text:focus").attr("id");
	                  var no=id.substr(id.indexOf('_')+1,id.length);
	                 // alert("append: "+no);
	                switch(form_id){
	               case '#smallScale_A1':
	               $("#controlKg_"+no+",#amountUsed_"+no).on("keyup",function(){
				
					$('#inStock_'+no).val($('#controlKg_'+no).val()- $('#amountUsed_'+no).val());
					});
					break;
					case '#smallScale_A2':
					 $("#premixKg_"+no+",#premixAmountUsed_"+no).on("keyup",function(){
				
					$('#premixInStock_'+no).val($('#premixKg_'+no).val()- $('#premixAmountUsed_'+no).val());
					  });
					  break;
					  case '#internalFortified_A2':
					 $("#iodineDrums_"+no+",#iodineDispatched_"+no).on("keyup",function(){
		                $('#iodineStock_'+no).val($('#iodineDrums_'+no).val()- $('#iodineDispatched_'+no).val());
						});
			
	               } 
	                });
		 
					return  false;
				});
				
				
				
			});

		</script>
	
		<!--initialize all date pickers-->
		<script>
			var visit_site = '';
			var form_id = '#<?php echo $form_id ?>';

	$(function() {
	var dates= ['#date','#inputDate','.autoDate',
	'#reportingDate','#fortifiedDate','#checkupDate','#dateC1','#visitDate',
	'#inspection_date','#supervision_date','#inspector_date','#inspectionsDate',
	'#signatureDate','#supervisorDate','#controlDate','#premixDate',
	'#inspections_date','#inspectionDate','#roSignature','#ho_signature_date',
	'#s_signature_date','#externalIodB1_date_rep_signed'];
	

	//initialize all datepickers
	for ( var i=0, iLen=dates.length ; i<iLen ; i++){
	$(dates[i]).datepicker({dateFormat:"yy-mm-dd"});
	}

	for(i=new Date().getFullYear();i>1990; i--)// year picker
	{
	$('#year').append($('<option/>').val(i).html(i));
	$('#harvestYear').append($('<option/>').val(i).html(i));
	}
	
	

	});
	
	
	

	$().ready(function() {
	var nthChild=''; //to get the vaue of the last cloned row
	$("#submit_form_data").click(function() {
	visit_site=''; //reset previous values if any
	if(form_id=='#externalFortified_B3')
	{
	//do collect visited sites
	$(form_id).find(':checkbox').each(function()
	{
	if($(this).is(':checked'))
	{

	visit_site=visit_site+$(this).val()+",";
	}
	});

	$('#areas_visited').val(visit_site);
	//alert("The checked ones: "+visit_site);
	}

	$('#<?php echo $form_id ?>').submit();

	});

	$("#reset_current_form").click(function() {

	});

	$("#close_opened_form").click(function() {
	document.location='<?php echo base_url().'front/vehicles'?>
	';
	});

	$(function(){
	//time
	//$('#startTime').scroller({preset:'time'});
	$('.mobiscroll').scroller({preset:'time'});
	//$('#productionTime').scroller({preset:'time'});
	//$('#visitTime').scroller({preset:'time'});

	var t = 'default';
	var m = 'mixed';
	$('.mobiscroll').scroller('destroy').scroller({ preset: 'time', theme: t, mode: m });
	//$('#endTime').scroller('destroy').scroller({ preset: 'time', theme: t, mode: m });
	//$('#productionTime').scroller('destroy').scroller({ preset: 'time', theme: t, mode: m });
	//$('#visitTime').scroller('destroy').scroller({ preset: 'time', theme: t, mode: m });

	});
	
	$("#controlKg_1,#amountUsed_1").keyup(function(){
				
	$('#inStock_1').val($('#controlKg_1').val()- $('#amountUsed_1').val());
					});
					
     $("#premixKg_1,#premixAmountUsed_1").keyup(function(){
				
	$('#premixInStock_1').val($('#premixKg_1').val()- $('#premixAmountUsed_1').val());
	  });
	
	 $("#iodineDispatched_1,#iodineDrums_1").keyup(function(){
		

	$('#iodineStock_1').val($('#iodineDrums_1').val()- $('#iodineDispatched_1').val());
	});
	
					
	$("#saltProduced").keyup(function(){
				
	$('#saltProduced2').val($('#saltProduced').val());
	});

	$("#premixUsed").keyup(function(){

	$('#premixUsed2').val($('#premixUsed').val());
	});

	$("#saltFortified").keyup(function(){

	$('#saltFortified2').val($('#saltFortified').val());
	});

	
	//$("[type=checkbox]").change(function(){
	//  alert('checked');
	//	alert('checked: '+$('input:checked').length);
	//	}); //end of $("[type=checkbox]").change


	});
		</script>
		<script type="text/javascript">
			$(function() {
				/* For zebra striping */
				$("table tr:nth-child(odd)").addClass("odd-row");
				/* For cell text alignment */
				$("table td:first-child, table th:first-child").addClass("first");
				/* For removing the last border */
				$("table td:last-child, table th:last-child").addClass("last");
			});

		</script>
	</head>
	<body>
		<section id="profile-before">
			<p>
				<?php  echo $sessionEmail
				?>
			</p>
			<ul>
				<li>
					<a href="#" data-reveal-id="accountSettings" class="awesome small">Account Settings</a>
				</li>
				<li>
					<?php echo anchor(base_url().'auth/logout','Logout', array('class' => 'awesome small'))
					?>
				</li>
			</ul>
		</section>
		<section class="current-body">
			<section class="container">
				<section class="within">
					<nav id="pageheader">
						<ul>
							<a class="current" href="index.php">Vehicles</a>
							<a href="#">Agents</a>
						</ul>
					</nav>
					<section id="content">
						<!-- HTML5 TABS CODE -->
						<article class="tabs">
							<section class="ON">
								<h2>Salt</h2>
								<div>
									<section class="menu-container">
										<section class="menu">
											<h2>Forms</h2>
											<ul>
												<li>
													<?php echo anchor('front/internalFort_A1', 'Fortified Salt-Table A-1');?>
												</li>
												<li>
													<?php echo anchor('front/internalFort_A2', 'Fortified Salt QC/QA -Table A-2');?>
												</li>
												<li>
													<?php echo anchor('front/internalFort_B1', 'Fortified Salt QC/QA -Table B-1');?>
												</li>
												<li>
													<?php echo anchor('front/internalFort_B2', 'Salt Fortification: Table B-2');?>
												</li>
												<li>
													<?php echo anchor('front/internalFort_C1', 'Fortified Salt QC/QA -Table C-1');?>
												</li>
												<li>
													<?php echo anchor('front/externalFort_B1', 'Fortified Salt - Audits and Inspection - Table B-1');?>
												</li>
												<li>
													<?php echo anchor('front/externalFort_B2', 'Fortified Salt - Audits and Inspection - Table B-2');?>
												</li>
												<li>
													<?php echo anchor('front/externalFort_B3', 'Fortified Salt - Audits and Inspection - Table B-3');?>
												</li>
												<li>
													<?php echo anchor('front/externalIod_B1', 'Iodized Salt - Audits and Inspection - Table B-1');?>
												</li>
												<li>
													<?php echo anchor('front/smallScale_A1', 'Fortified Salt - QA In Small Scale Operations - Table A-1');?>
												</li>
												<li>
													<?php echo anchor('front/smallScale_A2', 'Fortified Salt - QA In Small Scale Operations - Table A-2');?>
												</li>
											</ul>
										</section><!-- End of Menu: FORMS -->
									</section><!-- End of Menu-Container -->
									<section class="form-container">
										<?php
										echo $form;
										?>
									</section><!-- End of Form-Container Section-->
									<section class="form-sidebar">
										<h3>Actions</h3>
										<a title="To Save entered info" id="submit_form_data" class="awesome blue medium">Submit</a>
										<a title="To clear entire form" id="reset_current_form" class="awesome magenta medium">Reset</a>
										<a title="To close the form." id="close_opened_form" class="awesome red medium">Close</a>
									</section><!-- End of Form-SideBar
									</div><!-- End of Salt-Div -->
							</section><!-- End of Salt-Section -->
							<section>
								<h2>Oil</h2>
								<div></div><!-- End of Oil-Div -->
							</section><!-- End of Oil-Section -->
							<section>
								<h2>Sugar</h2>
								<div></div><!-- End of Sugar-Div -->
							</section><!-- End of Sugar-Section -->
							<section>
								<h2>Maize Flour</h2>
								<div></div><!-- End of Maize-Div -->
							</section><!-- End of Maize-Section -->
							<section>
								<h2>Wheat Flour</h2>
								<div></div><!-- End of Wheat-Div -->
							</section><!-- End of Wheat-Section -->
						</article>
						<!-- /HTML5 TABS CODE -->
					</section><!-- End of content -->
					</br>
				</section><!-- End of Within-->
			</section><!-- End of Container-->
		</section>
		<div id="accountSettings" class="reveal-modal">
			<div>
				here we are
			</div>
			<a class="close-reveal-modal">&#215;</a>
		</div>
	</body>
</html>
<?php ob_end_flush();?> 