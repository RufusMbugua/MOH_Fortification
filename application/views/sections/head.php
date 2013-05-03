<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, maximum-scale=3,
minimum-scale=0.5" />
		
		<!-- -->
		<!-- Attach CSS files -->
		<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css"/>
		
		<!-- Attach JavaScript files -->
			<script src="<?php echo base_url()?>js/js_libraries.js"></script>
        <script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>


	
		<!--script to form client side validation functions-->
		<!-- Run the TAB plugin -->
		<script type="text/javascript">
			// Place all Javascript code here

			$(document).ready(function() {
				$('.received.title').click(function(){
				alert('Clicked Received');
				$('.tab.received').show();    
				$('.tab.dispatched').hide();
				
				});
				
				$('.dispatched.title').click(function(){
				
				$('.tab.dispatched').show();    
				$('.tab.received').hide();
				
				});
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
				var loaded=false;
				function loadGlobalScript(){
					loaded=true;
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
					linkDomain='c_salt';
					break;
					case "oil-url":
					linkDomain='c_oil';
					break;
					case "maize-url":
					linkDomain='c_maize';
					break;
					case "wheat-url":
					linkDomain='c_wheat';
					break;
					case "sugar-url":
					linkDomain='c_sugar';
					break;
				}/*close the case*/
				if(linkDomain)
				
				$(".form-container").load('<?php echo base_url();?>'+linkDomain+'/'+linkIdUrl,function(){
				//delegate events
				//if(loaded==false)
				loadGlobalScript();getRecordsByForm();
				
				 });
				
				})/*end of which link was clicked*/
				/*----------------------------------------------------------------------------------------------------------------*/
				
				/*-----------------------------------------------------------------------------------------------------------------*/
				/*start of ajax data requests*/
				function getRecordsByForm(){
    			 $.ajax({
		            type: "GET",
		            url: "<?php echo base_url()?>c_salt/getRecordsViaJSON",
		            dataType:"json",
		            cache:"true",
		            data:"",
		            success: function(data){
		            	//$("#edit_panel").show();
		            	if(data.rTotal >0)
		            	//alert(data.rTotal);
		            	var clone_max=data.rTotal; //limit of values to be cloned
		            	do{
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
						limit_ : clone_max  //Maximum Number of Clones
					});
					
					
					/*reinitialize datepicker options on the cloned item*/
					$('.clonable label.error').remove();
					$('.cloned').removeClass('error');
					$('.autoDate').removeClass('hasDatepicker error');
					$('.futureDate').removeClass('hasDatepicker error');
		            $('.autoDate').datepicker({changeMonth: true,changeYear: true,dateFormat:"yy-mm-dd",minDate: '-10y', maxDate: "0D"});
		            $('.futureDate').datepicker({changeMonth: true,changeYear: true,dateFormat:"yy-mm-dd",minDate: '0y', maxDate: "2y"});
		          
		            /*reinitialize timepicker options on the cloned item*/
		            $('.mobiscroll').removeClass('scroller');
                    $('.mobiscroll').scroller({preset:'time'});

					var t = 'default';
					var m = 'mixed';
					$('.mobiscroll').scroller('destroy').scroller({ preset: 'time', theme: t, mode: m });
					
					
					data.rTotal--;
                   }while(data.rTotal>1);
                   //render data into the cloned elements
                   $.each(data.rData,function(i,n){
                   //	alert((i+1)+"th val: "+n["transactedBy"]);
                   	$("#fortifiedDate_"+(i+1)).val(n["dates"]);
                   	$("#fortifiedWeight_"+(i+1)).val(n["fillerWeight"]);
                   	$("#compoundWeight_"+(i+1)).val(n["iodineWeight"]);
                   	$("#finalWeight_"+(i+1)).val(n["finalPremixWeight1"]);
                   	$("#startTime_"+(i+1)).val(n["startTime"]);
                   	$("#endTime_"+(i+1)).val(n["endTime"]);
                   	$("#iodineWeight_"+(i+1)).val(n["finalPremixWeight"]);
                   	$("#qcReview_"+(i+1)).val(n["transactedBy"]);
		            		});
		            	//return false;
		            },
		            beforeSend:function()
					{
						 $("#results_panel").show();
		                 $("#search_err").html("Loading...");
		          },
		           afterSend:function()
					{
		                 $("#search_err").html("Still working...");
		            }
		        });
         return false;
    		}
				/*end of ajax data requests*/
				/*-----------------------------------------------------------------------------------------------------------------*/
		  
		}); /*close document ready*/
		</script>
