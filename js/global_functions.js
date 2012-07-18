/*all jquery custom functions are loaded from here*/
$(document).ready(function() {
	/**
	 * variables
	 */
	var nthChild=''; //to get the vaue of the last cloned row
	var form_id = '';
	var lastRowId=1;	
	var timeDiff='';	
	            
		        /*start of form calculations on key up*/
				/*----------------------------------------------------------------------------------------------------------------*/
				 form_id='#'+$(".form-container").find('form').attr('id'); /*what form has been loaded now?*/
				
				/*-----------------start of computation of daily totals------------------------------------------------------------*/
				switch(form_id){
					case '#internalFortified_C1':/*salt module*/
				$('.cloned').on('focusout',function(){
					if(lastRowId==1){
					$('#saltProduced2').val($('#saltProduced_1').val());
				  $('#premixUsed2').val($('#premixUsed_1').val());
				 $("#saltFortified_"+2).val((($('#saltProduced_'+1).val()*1000)/$('#premixUsed_'+1).val()).toFixed(2));
				  
				 $('#saltProduced3').val($('#saltProduced2').val());
				 $('#premixUsed3').val($('#premixUsed2').val());
				 $('#saltFortified3').val($('#saltFortified2').val());
				 }else{
				 	 computeSaltDailies();
				 }
				});
				break;
				
				case '#fortifiedOil_C1':/*oil module*/
					$('.cloned').on('focusout',function(){
						
				  if(lastRowId==1){
			      $('#oilProduced2').val($('#oilProduced_1').val());
				  $('#premixUsed2').val($('#premixUsed_1').val());
				  $('#oilFortified2').val($('#oilFortified_1').val());
				  
				  $('#oilProduced3').val($('#oilProduced2').val());
				  $('#premixUsed3').val($('#premixUsed2').val());
				  $('#oilFortified3').val($('#oilFortified2').val());
				  }else{
				  	computeOilDailies();
				  }
				  
				  
				});
				break;
				
				case '#internalWheatFlour_C1':/*wheat module*/
					$('.cloned').on('focusout',function(){
						
				  if(lastRowId==1){
			      $('#wheatFlourProduced2').val($('#wheatFlourProduced_1').val());
				  $('#premixUsed2').val($('#premixUsed_1').val());
				  $('#wheatFlour2').val($('#wheatFlour_1').val());
				  
				  $('#wheatProduced3').val($('#wheatProduced2').val());
				  $('#premixUsed3').val($('#premixUsed2').val());
				  $('#wheatFlour3').val($('#wheatFlour2').val());
				  }else{
				  	computeWheatDailies();
				  }
				});
				break;
				
				case '#internalMaizeFlour_C1':/*maize module*/
				$('.cloned').on('focusout',function(){
						
				  if(lastRowId==1){
			      $('#maizeProduced2').val($('#maizeProduced_1').val());
				  $('#premixUsed2').val($('#premixUsed_1').val());
				  $('#maizeFortified2').val($('#ratioMaizeFlour_1').val());
				  
				  $('#maizeProduced3').val($('#oilProduced2').val());
				  $('#premixUsed3').val($('#premixUsed2').val());
				  $('#maizeFortified3').val($('#maizeFortified2').val());
				  }else{
				  	computeMaizeDailies();
				  }
				});
				break;
				/*-----------------end of computation of daily totals------------------------------------------------------------*/
				
				/*start of computeTimeDifference*/
				/*----------------------------------------------------------------------------------------------------------------*/
				case '#fortifiedOil_B1':/*oil module*/
				//computeTimeDifference("11:30 AM","01:17 AM");
	            
				$('.cloned').on('change focusout',function(){
				timeDiff=computeTimeDifference($("#premixStart_1").val(),$("#premixEnd_1").val());
				
				
				 $("#premixAddition_1").val(timeDiff);
				});
				/*----------------------------------------------------------------------------------------------------------------*/
				break;
				}
				
				
				
				
				$("#controlKg_1,#amountUsed_1").keyup(function(){/*salt module*/
				   $('#inStock_1').val($('#controlKg_1').val()- $('#amountUsed_1').val());
				});
				
								
			     $("#premixKg_1,#premixAmountUsed_1").keyup(function(){	/*salt module*/
				   $('#premixInStock_1').val($('#premixKg_1').val()- $('#premixAmountUsed_1').val());
				  });
				  
				
				 $("#iodineDispatched_1,#iodineDrums_1").keyup(function(){/*salt module*/
					$('#iodineStock_1').val($('#iodineDrums_1').val()- $('#iodineDispatched_1').val());
				});
				
				
				$("#numberOfCans_1,#dispatchedLotID_1").on("keyup",function(){/*oil module*/
			       $('#inStock_1').val($('#numberOfCans_1').val()- $('#dispatchedLotID_1').val());
				});
				
				$("#quantity_"+1+",#dispatchedQuantity_"+1).on("keyup",function(){/*maize,wheat module*/
               		 $('#balance_'+1).val($('#quantity_'+1).val()- $('#dispatchedQuantity_'+1).val());
				});
				
				
				$("#saltProduced").keyup(function(){/*salt module*/
				  $('#saltProduced2').val($('#saltProduced').val());
				});
				
			
				$("#premixUsed").keyup(function(){/*salt module*/
				  $('#premixUsed2').val($('#premixUsed').val());
				});
				
			
				$("#saltFortified").keyup(function(){/*salt module*/
				  $('#saltFortified2').val($('#saltFortified').val());
				  
				  /*-----------------------------------------------------------------------------------------------------------------------------*/
				  /*maize,wheat module--feeder ratio and flow average calculations*/
				 if(form_id=='#internalMaizeFlour_B1' || form_id=='#internalWheatFlour_B1'){
				 	 $("#productionRate_1").change(function(){
				  $('#theoreticFeeder_1').val(($('#productionRate_1').val()*(100/6)).toFixed(2));
				  });
				  
				  $("#feederFlow1_"+1+",#feederFlow2_"+1+",#feederFlow3_"+1).keyup(function(){
				  $('#feederFlowAverage_'+1).val(((parseFloat($("#feederFlow1_"+1).val())+
				                                  parseFloat($("#feederFlow2_"+1).val())+
				                                  parseFloat($("#feederFlow3_"+1).val()))/3).toFixed(2));
				});
				/*-----------------------------------------------------------------------------------------------------------------------------*/
				    /*maize,wheat module-ratio of premix to fortified produce*/
				 	}else if(form_id=='#internalMaizeFlour_B2' || form_id=='#internalWheatFlour_B2'){
				 	$("#flourMT_"+1+", #premixUsed_"+1).on('keyup',function(){
				     $('#flourPremixRatio_'+1).val(($('#flourMT_'+1).val()/('#premixUsed_'+no).val()).toFixed(2));
				   });
				 }
				 /*-----------------------------------------------------------------------------------------------------------------------------*/
			
				});/*end of form calculations on key up*/
				
				/*----------------------------------------------------------------------------------------------------------------*/
			/*start of clone trigger functions*/
			$('#clonetrigger').click(function() {
		            form_id='#'+$(".form-container").find('form').attr('id'); /*what form has been loaded now?*/
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
					
					$(".cloned").on("keyup", function(){
	                    //alert("active element: "+$("input:text:focus").attr("id"));

	                   //alert('Last Id: '+clonecount);
	                   lastRowId=clonecount+1;
	                    //do some calculations on key typed
	                 // var id=$("input:text:focus").attr("id");
	                 var id=$(this).attr('id');
	                  var no=id.substr(id.indexOf('_')+1,id.length);
	                 // alert("append: "+no);
	                switch(form_id){
	                	
	               case '#smallScale_A1':/*salt module*/
	               $("#controlKg_"+no+",#amountUsed_"+no).on("keyup",function(){
				
					$('#inStock_'+no).val($('#controlKg_'+no).val()- $('#amountUsed_'+no).val());
					});
					break;
					case '#smallScale_A2':/*salt module*/
					 $("#controlKg_"+no+",#amountUsed_"+no).on("keyup",function(){
				
					$('#inStock_'+no).val($('#controlKg_'+no).val()- $('#amountUsed_'+no).val());
					  });
					  break;
					  
				  /*---------------------------------start of dispatches computation-----------------------------------------------------------------------*/
					  case '#internalFortified_A2':/*salt module--dispatches computation*/
					 $("#iodineDrums_"+no+",#iodineDispatched_"+no).on("keyup",function(){
		                $('#iodineStock_'+no).val($('#iodineDrums_'+no).val()- $('#iodineDispatched_'+no).val());
						});
						break;

					/*------------------------------------------------------------------------------------------*/
					case '#fortifiedOil_A1':/*oil module--dispatches computation*/
					$("#numberOfCans_"+no+",#dispatchedLotID_"+no).on("keyup",function(){
		                $('#inStock_'+no).val($('#numberOfCans_'+no).val()- $('#dispatchedLotID_'+no).val());
						});
					break;

					/*---------------------------------------------------------------------------------------------*/
					case '#internalMaizeFlour_A2':/*maize module--dispatches computation*/
					     $("#quantity_"+no+",#dispatchedQuantity_"+no).on("keyup",function(){
					      computeDispatches(no);
					     });
					break;
					/*---------------------------------------------------------------------------------------------*/
					/*---------------------------------------------------------------------------------------------*/
					case '#internalWheatFlour_A2':/*wheat module--dispatches computation*/
					      $("#quantity_"+no+",#dispatchedQuantity_"+no).on("keyup",function(){
					      computeDispatches(no);
					      });
					break;
				  /*---------------------------------end of dispatches computation-----------------------------------------------------------------------*/
				 
				 /*---------------------------------start of daily totals computation-----------------------------------------------------------------------*/
					  case '#internalFortified_C1':/*salt module--daily totals computation*/
					 // $("#saltProduced_"+no+",#premixUsed_"+no+",#saltFortified_"+no).on("keyup",function(){
					 	$(".cloned").on("focusout",function(){
				           computeSaltDailies();
						}); 
					break;
					/*-------------------------------------------------------------------*/
					case '#fortifiedOil_C1':/*oil module--daily totals computation*/
					
					  //$("#oilProduced_"+no+",#premixUsed_"+no).on("keyup",function(){
					  	$('.cloned').on('focusout',function(){
					  	   computeOilDailies();
						}); 
					/*-------------------------------------------------------------------*/
						
					break;
					case '#internalMaizeFlour_C1' :/*maize module--daily totals computation*/
					   $(".cloned").on("focusout",function(){
				           computeMaizeDailies();
						}); 
					break;
					/*-------------------------------------------------------------------*/
					case '#internalWheatFlour_C1' :/*wheat module--daily totals computation*/
					   $(".cloned").on("focusout",function(){
				           computeWheatDailies();
						}); 
					break;
					/*-------------------------------------------------------------------*/
					/*---------------------------------end of daily totals computation-----------------------------------------------------------------------*/
					
					/*start of computation for the ratios*/
					/*-------------------------------------------------------------------------------------------------------*/
					case '#internalMaizeFlour_B1':/*maize module--theoretic feeder computation*/
					      computeFeederFlow(no);
					break;
					case '#internalWheatFlour_B1':/*wheat module--theoretic feeder computation*/
					      computeFeederFlow(no);
					break;
					
					case '#internalMaizeFlour_B2':/*maize module--premix to fortified produce computation*/
					     computePremixToProduceRatio(no);
					break;
					case '#internalWheatFlour_B2':/*maize module--premix to fortified produce computation*/
					     computePremixToProduceRatio(no);
					break;
					
					/*end of computation for the ratios*/
					/*-------------------------------------------------------------------------------------------------------*/
					
						/*start of computeTimeDifference*/
					/*----------------------------------------------------------------------------------------------------------------*/
					case '#fortifiedOil_B1':/*oil module*/
					//computeTimeDifference("11:30 AM","01:17 AM");
		            
					$('.cloned').on('change foucusout',function(){
					timeDiff=computeTimeDifference($("#premixStart_"+no).val(),$("#premixEnd_"+no).val());
					 $("#premixAddition_"+no).val(timeDiff);
					});
					/*----------------------------------------------------------------------------------------------------------------*/
					break; 
	                    } /*end of the case*/
				
	               }); //end of cloned key up function
		 
					return  false;
				});/*end of clone trigger*/
				
				/*----------------------------------------------------------------------------------------------------------------*/
				/*start of clone_remove*/
				$('#cloneremove').click(function() {
					//alert($(".clonable").find("tr:last").attr('name'));
					if($(".clonable").length>1)
					$(".clonable:last").after().remove();
					
				 
				 return false;
				 });
				 /*end of clone_remove*/
				/*-----------------------------------------------------------------------------------------------------------------*/
				
				/*start of datetime functions*/
				$(function() {
				var dates= ['#date','#inputDate','.autoDate','.futureDate',
				'#reportingDate','#fortifiedDate','#checkupDate','#dateC1','#visitDate',
				'#inspection_date','#supervision_date','#inspector_date','#inspectionsDate',
				'#signatureDate','#supervisorDate','#controlDate','#premixDate',
				'#inspections_date','#inspectionDate','#roSignature','#ho_signature_date',
				'#s_signature_date','#externalIodB1_date_rep_signed'];
				
				
				//initialize all datepickers
				for ( var i=0, iLen=dates.length ; i<iLen ; i++){
					if(dates[i]=='.futureDate'){
				$(dates[i]).datepicker({changeMonth: true,changeYear: true,dateFormat:"yy-mm-dd",minDate: '0y', maxDate: "2y"});
				}else{
					
					$(dates[i]).datepicker({changeMonth: true,changeYear: true,dateFormat:"yy-mm-dd",minDate: '-10y', maxDate: "0D"});
				}
				}
				
				for(i=new Date().getFullYear();i>1990; i--)// year picker
				{
				$('#year').append($('<option/>').val(i).html(i));
				$('#harvestYear').append($('<option/>').val(i).html(i));
				}
				}); /*end of datetime functions*/
				
				/*----------------------------------------------------------------------------------------------------------------*/

				//submit button event was here but moved to the index page
				
				/*----------------------------------------------------------------------------------------------------------------*/
				//reset current form was here--.but moved to the index page
				/*----------------------------------------------------------------------------------------------------------------*/
				
				/*start of mobiscroller time picker function*/
				$(function(){
				$('.mobiscroll').scroller({preset:'time'});
			
				var t = 'default';
				var m = 'mixed';
				$('.mobiscroll').scroller('destroy').scroller({ preset: 'time', theme: t, mode: m });
			
				});/*end of mobiscroller time picker function*/
				
				/*----------------------------------------------------------------------------------------------------------------*/
				/*computeSaltDailies*/
				function computeSaltDailies(){
					sp=0;pu=0;sf=0;
				      //if(no!=1)
				      for(i=1;i<=lastRowId;++i){
				      $("#saltFortified_"+i).val((($('#saltProduced_'+i).val()*1000)/$('#premixUsed_'+i).val()).toFixed(2));
					  sp=sp+parseFloat($('#saltProduced_'+i).val());
					  pu=pu+parseFloat($('#premixUsed_'+i).val());
					  sf=sf+parseFloat($("#saltFortified_"+i).val());
					  
					 //alert(sp+' '+pu+' '+sf);
					  }
					 // alert(sf);
					   $('#saltProduced2').val(sp.toFixed(2));
					  $('#premixUsed2').val(pu.toFixed(2));
					  $('#saltFortified2').val(sf.toFixed(2));
					 
					  $('#saltProduced3').val($('#saltProduced2').val());
					  $('#premixUsed3').val($('#premixUsed2').val());
					  $('#saltFortified3').val($('#saltFortified2').val());
				}
				
				/*----------------------------------------------------------------------------------------------------------------*/
				
				/*computeOilDailies*/
				function computeOilDailies(){
					sp=0;pu=0;sf=0;
					for(i=1;i<=lastRowId;++i){
						$("#oilFortified_"+i).val((($('#oilProduced_'+i).val()*1000)/$('#premixUsed_'+i).val()).toFixed(2));
					  sp=sp+parseFloat($('#oilProduced_'+i).val());
					  pu=pu+parseFloat($('#premixUsed_'+i).val());
					  sf=sf+parseFloat($("#oilFortified_"+i).val());
					  }
					  
					  $('#oilProduced2').val(sp.toFixed(2));
					  $('#premixUsed2').val(pu.toFixed(2));
					  $('#oilFortified2').val(sf.toFixed(2));
					  
					  $('#oilProduced3').val($('#oilProduced2').val());
					  $('#premixUsed3').val($('#premixUsed2').val());
					  $('#oilFortified3').val($('#oilFortified2').val());
				}
				
				/*-----------------------------------------------------------------------------------------------------------------*/
				
				/*computeMaizeDailies*/
				function computeMaizeDailies(){
					sp=0;pu=0;sf=0;
					for(i=1;i<=lastRowId;++i){
						$("#ratioMaizeFlour_"+i).val((($('#maizeProduced_'+i).val()*1000)/$('#premixUsed_'+i).val()).toFixed(2));
					  sp=sp+parseFloat($('#maizeProduced_'+i).val());
					  pu=pu+parseFloat($('#premixUsed_'+i).val());
					  sf=sf+parseFloat($("#ratioMaizeFlour_"+i).val());
					  }
					  
					  $('#maizeProduced2').val(sp.toFixed(2));
					  $('#premixUsed2').val(pu.toFixed(2));
					  $('#maizeFortified2').val(sf.toFixed(2));
					  
					  $('#maizeProduced3').val($('#maizeProduced2').val());
					  $('#premixUsed3').val($('#premixUsed2').val());
					  $('#maizeFortified3').val($('#maizeFortified2').val());
				}
				
				/*-----------------------------------------------------------------------------------------------------------------*/
				
				/*computeOilDailies*/
				function computeWheatDailies(){
					sp=0;pu=0;sf=0;
					for(i=1;i<=lastRowId;++i){
						$("#wheatFlour_"+i).val((($('#wheatFlourProduced_'+i).val()*1000)/$('#premixUsed_'+i).val()).toFixed(2));
					  sp=sp+parseFloat($('#wheatFlourProduced_'+i).val());
					  pu=pu+parseFloat($('#premixUsed_'+i).val());
					  sf=sf+parseFloat($("#wheatFlour_"+i).val());
					  }
					  
					  $('#wheatFlourProduced2').val(sp.toFixed(2));
					  $('#premixUsed2').val(pu.toFixed(2));
					  $('#wheatFlour2').val(sf.toFixed(2));
					  
					  $('#wheatFlourProduced3').val($('#wheatFlourProduced2').val());
					  $('#premixUsed3').val($('#premixUsed2').val());
					  $('#wheatFlour3').val($('#wheatFlour2').val());
				}
				
				/*-----------------------------------------------------------------------------------------------------------------*/
				
				/*theoreticFeederFlow*/
				function computeFeederFlow(no){
				  $("#productionRate_"+no).on('focusout',function(){
				     $('#theoreticFeeder_'+no).val(($('#productionRate_'+no).val()*(100/6)).toFixed(2));
				    });
				   
				   $("#feederFlow1_"+no+",#feederFlow2_"+no+",#feederFlow3_"+no).on('keyup',function(){
				  $('#feederFlowAverage_'+no).val(((parseFloat($("#feederFlow1_"+no).val())+
				                                  parseFloat($("#feederFlow2_"+no).val())+
				                                  parseFloat($("#feederFlow3_"+no).val()))/3).toFixed(2));
				  });	
				}
				
				/*-----------------------------------------------------------------------------------------------------------------*/
				
				/*premixToProductionRatio*/
				function computePremixToProduceRatio(no){
					$("#flourMT_"+no+", #premixUsed_"+no).on('keyup',function(){
				     $('#flourPremixRatio_'+no).val((($('#flourMT_'+no).val()*1000)/$('#premixUsed_'+no).val()).toFixed(2));
				   });
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				
				/*dispatchComputation*/
				function computeDispatches(n){
		                $('#balance_'+n).val($('#quantity_'+n).val()- $('#dispatchedQuantity_'+n).val());
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				
				
				/*computeTimeDifference*/
				/*referenced from stack overflow*/
				function computeTimeDifference(start,end){
				//var start = '8:00';
			    //var end = '23:30';
			    var diff;
			    start=convertTimeTo24HourSystem(start);
			    end=convertTimeTo24HourSystem(end);
			
			    s = start.split(':');
			    e = end.split(':');
			  //  alert("End: "+e);
			   // alert("Start: "+s);
			    min = parseInt(e[1])-parseInt(s[1]);
			    hour_carry = 0;
			    if(min < 0){
			        min += 60;
			        hour_carry += 1;
			    }
			    //alert("Start H: "+parseInt(s[0]));
			    hour = parseInt(e[0])-parseInt(s[0])-hour_carry;
			    diff = hour + "Hrs " + min+" min";
			    //alert("Time diff is: "+diff);
			    
			    return diff;
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				
				/*mini-method to check for 12 and convert subsequenlty to the 24hour system*/
				function convertTimeTo24HourSystem(h){
				if(h.indexOf('12') !=-1 && h.indexOf('A') !=-1){
					
					h=h.replace('12','00');
					h=h.substr(0,h.indexOf("A")-1);
					//alert("24H Clock: "+h);
				}
				
				if(h.indexOf('12')==-1 && h.indexOf('P') !=-1){
					t=h.substr(0,h.indexOf("P"));
					
					t1=t.split(':');
					hh=parseInt(t1[0])+(12);
					h=h.replace(t,hh+":"+t1[1]);
					h=h.substr(0,h.indexOf("P")-1);
					//alert("Time (24H) is: "+h);
				}
				
				if(h.substr(0,1)=="0" && h.substr(1,1)!="0" ){//eliminate the leading zero
						t=h.split(":");
						t1=t[0];
						t1=t1.replace("0","");
						h=t1+":"+t[1];
						//alert("New time "+h);
					}
				return h;
				}
				/*-----------------------------------------------------------------------------------------------------------------*/
				// Fast and dirty
				$('article.tabs section > h2').click(function() {
					$('article.tabs section').removeClass('ON');
					$(this).closest('section').addClass('ON');
				});
			});
});/*end of parent document ready function*/