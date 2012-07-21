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
		<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css"/>
		<!--link rel="stylesheet" href="<?php echo base_url()?>css/layout-opt.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/awesomebuttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/buttons.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/orbit.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/reveal.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/post.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/form-opt.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/form-layout.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/fonts.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/mobiscroll-1.6.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/inline.css"/>
		<link rel="stylesheet" href="<?php echo base_url()?>css/jquery-ui-1.8.18.custom.css"/-->
		<!-- Attach JavaScript files -->
		<!--script src="<?php echo base_url()?>js/jquery-1.7.2.min.js"></script-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="<?php echo base_url()?>js/js_libraries.js"></script>
		<!--script src="<?php echo base_url()?>js/jquery-ui-1.8.18.custom.min.js"></script>
		<script src="<?php echo base_url()?>js/jquery.cloneform.js"></script>
		<script src="<?php echo base_url()?>js/jquery.validate.js"></script>
		<script src="<?php echo base_url()?>js/mobiscroll-1.6.min.js"></script>
		<script src="<?php echo base_url()?>js/jquery.orbit.js"></script>
		<script src="<?php echo base_url()?>js/validation.js"></script>
		<script src="<?php echo base_url()?>js/jquery.reveal.js"></script>
		<script src="<?php echo base_url()?>js/menuloader.js"></script-->
		<!--script to form client side validation functions-->
		<!-- Run the TAB plugin -->
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
			});/*end of doc ready*/

		</script>
	
		<!--initialize all date pickers-->
		<script>
		
	    $().ready(function() {	
	
	    });/*close ready doc*/
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
		<script>
		$().ready(function(){
			/**
			 * variables
			 */
			var form_id='';
			var link_id='';
			var linkIdUrl='';
			var linkSub='';
			var linkDomain='';
			var visit_site = ''; 
			var devices='';
			
			
			/*----------------------------------------------------------------------------------------------------------------*/
				
				/*get devices by manufacturer/vehicle type...in the long term, do it nicely with some dynamic html:)*/
				function getDevices(){
					$(function(){
					if(form_id=='#internalFortified_B2'){
					devices=['drier','balance','pump','sprayingEquipment','blender'];
					}else if(form_id=='#fortifiedOil_B2'){
						devices=['balance','pump','feeding','blender','stirrers','tank'];
					}
					<?php if($this -> session -> userdata('devices'))
					foreach($this -> session -> userdata('devices') as $key=>$value){?>
						$('#'+devices['<?php print $key ?>']).val('<?php print $value['deviceCompNumber']?>');
						<?php }?>
					
				});
				}/*end of getDevices*/
				
				/*----------------------------------------------------------------------------------------------------------------*/
				
			    //start of close_opened_form click event
				$("#close_opened_form").click(function() {
				$(".form-container").load('<?php echo base_url().'c_front/formviewer';?>',function(){
				//delegate events
				loadGlobalScript();
				
				 });
				});/*end of close_opened_form click event
				
				/*----------------------------------------------------------------------------------------------------------------*/
			
		      /*start of loadGlobalJS*/
				var onload_queue = [];
				var dom_loaded = false;
				
				function loadGlobalJS(src, callback) {
				  var script = document.createElement('script'); 
				  script.type = "text/javascript";
				  script.async = true;
				  script.src = src;
				  script.onload = script.onreadystatechange = function() {
				    if (dom_loaded) 
				      callback();
				    else 
				      onload_queue.push(callback);
				    // clean up for IE and Opera
				    script.onload = null;
				    script.onreadystatechange = null;
				  };
				  var head = document.getElementsByTagName('head')[0];
				  head.appendChild(script);
				}/*end of loadGlobalJS*/
				
				function domLoaded() {
				   dom_loaded = true;
				   var len = onload_queue.length;
				   for (var i = 0; i < len; i++) {
				     onload_queue[i]();
				   }
				   onload_queue = null;
				};/*end of domLoaded*/
				
				/*-----------------------------------------------------------------------------------------------------------*/
				function isCheckBoxChecked(thisForm){/*start of function isCheckBoxChecked*/
					//form_id='#'+$(".form-container").find('form').attr('id'); /*what form has been loaded now?*/
					if(thisForm=='#internalFortified_A1' || thisForm=='#internalMaizeFlour_A1' || thisForm=='#internalWheatFlour_A1')
				{
					var widowed=''; var cbo='';
					//set value of a non-checked checkbox
				 $(thisForm).find(':checkbox').each(function(){
					if($(this).is(':unchecked')){
			          cbo=$(this).attr("id");
			        $('#'+cbo+'_cb').val('no');
			       }else if($(this).is(':checked')){
			       	 cbo=$(this).attr("id");
			       	$('#'+cbo+'_cb').val('yes');
			       }
				
				});
				}//end of if(form_id=='#internalFortified_A1')
				
				}/*end of function isCheckBoxChecked*/
				
				/*-----------------------------------------------------------------------------------------------------------*/
				
				function getAreasVisited(thisForm){/*start of function getAreasVisited*/
				visit_site=''; //reset previous values if any
				if(thisForm=='#externalFortified_B3' || thisForm=='#externalMaizeFlour_B3' || thisForm=='#externalWheatFlour_B3')
				{
				//do collect visited sites
				$(thisForm).find(':checkbox').each(function()
				{
				if($(this).is(':checked'))
				{
			
				visit_site=visit_site+$(this).val()+",";
				}
				});
			    //alert('Visited: '+visit_site);
				$('#areas_visited').val(visit_site);
				}
				}/*end of function getAreasVisited*/
		
		       /*--------------------------------------------------------------------------------------------------------------------------*/	
				
				 domLoaded();
				
				/*----------------------------------------------------------------------------------------------------------------*/
				
				/*submit form event*/
				/*start of submit_form_data click event*/
				//function triggerFormSubmit(){
				$("#submit_form_data").click(function() {
					
				/*set names of the areas visited*/
				getAreasVisited(form_id);
				
				/*integrity of the boxes*/
				isCheckBoxChecked(form_id);
				
				//get devices if needed
				getDevices();
				
				$(form_id).submit();
			
				});//}/*end of submit_form_data click event*/
				
				/*----------------------------------------------------------------------------------------------------------------*/
				
				/*reset form event*/
				/*start of reset_current_form click event*/
				$("#reset_current_form").click(function() {
					$(form_id).resetForm();

				});/*end of reset_current_form click event*/
				
				/*----------------------------------------------------------------------------------------------------------------*/
				
				function loadGlobalScript(){
					var scripts=['<?php echo base_url().'js/js_ajax_load.js';?>'];
					for(i=0;i<scripts.length;i++){
						loadGlobalJS(scripts[i],function(){});
					}
					form_id='#'+$(".form-container").find('form').attr('id'); 
				}
				/*----------------------------------------------------------------------------------------------------------------*/
				
				//so which link was clicked?
			  $('li').on('click',function(){
				link_id='#'+$(this).find('a').attr('id');
				linkSub=$(link_id).attr('class');
				linkIdUrl=link_id.substr(link_id.indexOf('#')+1,(link_id.indexOf('_li')-1));
				//load url based on the class and id returned
				switch(linkSub){
					case "salt-url":
					linkDomain='C_Salt';
					break;
					case "oil-url":
					linkDomain='C_Oil';
					break;
					case "maize-url":
					linkDomain='C_Maize';
					break;
					case "wheat-url":
					linkDomain='C_Wheat';
					break;
					case "sugar-url":
					linkDomain='C_Sugar';
					break;
				}/*close the case*/
				if(linkDomain)
				$(".form-container").load('<?php echo base_url();?>'+linkDomain+'/'+linkIdUrl,function(){
				//delegate events
				loadGlobalScript();
				
				 });
				
				})/*end of which link was clicked*/
				/*----------------------------------------------------------------------------------------------------------------*/
		  
		}); /*close document ready*/
		</script>
	</head>
	<body>
			<section class="banner">
			<section class="logo">
				<img src="<?php echo base_url(); ?>images/coat_of_arms-resized.png" />

			</section>
			<section class="credentials">
				<section class="title">
					Ministry Of Public Health and Sanitation
				</section>
				<section class="subtitle">
					Department of Family Health<p></p>
				</section>
				<section class="division">
					Division of Nutrition<p></p><p></p>
				</section>
			</section>
			<section class="date">
				
				 <?php echo date("l F d, Y"); ?>
			</section>
		</section>
		<section class="left-side">
		<section id="profile-before">
			
				<section class="title"><?php  echo $sessionEmail;
				?></section>
			<section class="other">
			<ul>
				<li>
					<a href="#" data-reveal-id="accountSettings" class="awesome small">Account Settings</a>
				</li>
				<li>
					<?php echo anchor(base_url().'c_auth/logout','Logout', array('class' => 'awesome small'))
					?>
				</li>
			</ul></section>
		</section>
		<section class="form-sidebar">
										<h3>Actions</h3>
										<section class="buttons">
										<a title="To Save entered info" id="submit_form_data" class="awesome blue medium">Submit</a>
										<a title="To clear entire form" id="reset_current_form" class="awesome magenta medium">Reset</a>
										<a title="To close the form." id="close_opened_form" class="awesome red medium">Close</a></section>
						</section><!-- End of Form-SideBar -->
						</section>
		<section class="current-body">
			<nav id="pageheader" >
				<section class="search">
					<form>
						<input type="search" placeholder="Search Here" />
					</form>
				</section>
				<section class="links">
						<ul>
							<a href="<?php echo base_url().'c_front/vehicles' ?>">Vehicles</a>
							<a class="current" href="<?php echo base_url().'c_front/reports' ?>">Reports</a>
						</ul>
						</section>
					</nav>
			
						
							<section class="menu-container">
										<section class="menu salt">
											<h2>Salt</h2>
											<div title="click to expand" class="max salt">+</div>
												<div title="click to minimize" class="min salt" style="display:none">-</div>
											<ul>
																						
												
											</ul>
										</section><!-- End of Menu: Salt Forms -->
										<section class="menu oil">
											<h2>Oil</h2>
											<div title="click to expand" class="max oil">+</div>
												<div title="click to minimize" class="min oil" style="display:none">-</div>
											<ul>
												
											</ul>
										</section><!-- End of Menu: Oil Forms -->
											<section class="menu sugar">
												
											<h2>Sugar</h2>
											<div title="click to expand" class="max sugar">+</div>
												<div title="click to minimize" class="min sugar" style="display:none">-</div>
											<ul>
												
											</ul>
										</section><!-- End of Menu: Sugar Forms -->
										
										<section class="menu maize">
											<h2>Maize</h2>
											<div title="click to expand" class="max maize">+</div>
												<div title="click to minimize" class="min maize" style="display:none">-</div>
											<ul>
												
											</ul>
										</section><!-- End of Menu: Maize Forms -->
										
										<section class="menu wheat">
											<h2>Wheat</h2>
											<div title="click to expand" class="max wheat">+</div>
												<div title="click to minimize" class="min wheat" style="display:none">-</div>
											<ul>
												
											</ul>
										</section><!-- End of Menu: Wheat Forms -->
												
									</section><!-- End of Menu-Container -->
												
									<section class="form-container">
										<?php
										echo $form;
										?>
									</section><!-- End of Form-Container Section-->							
							
						
					
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