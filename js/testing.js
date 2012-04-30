// JavaScript Document

/*	$.validator.setDefaults({
	submitHandler: function() { 
	//show some notification on submission
	alert("submitted!"); }

	});*/
$().ready(function() {
    $.validator.addMethod('positiveNumber',
    function (value) { 
        return Number(value) > 0;
    }, 'Value must be > 0');
    
     $.validator.addMethod('zeroAndAbove',
    function (value) { 
        return Number(value) >= 0;
    }, 'Value must be >= 0');
    
    
   $.validator.addMethod("alphaNumerals", function(value, element) {
        return this.optional(element) || /^[a-z0-9\-]+$/i.test(value);
    }, "Only letters (a-z), numbers(0-9), or dash (-) is allowed.");
    
     $.validator.addClassRules({
        cloned:{
        required: true
    },
    positive:{
    	positiveNumber:true
    	},
    fromZero:{
    	zeroAndAbove:true
    	}
    });
    
   


	// validate iodine inspection form on keyup and submit
	$("#internalFortified_A1").validate({
		rules: {
			manufacturer:"required",
			productType:"required",
			date:"required",
			
			quantity:{
				required:true,
				positiveNumber:true},
				
			integrityObservation:{
				required:true,
				alphaNumerals:true},
				
			lotObservation:"required",
			productObservation:"required",
			expirationObservation:"required",
			contentObservation:"required",
			certificateObservation:"required",
			receivedBy:"required",
			inspectedBy:"required",
			inputDate:"required",
			iodine_compounds_batch_status:"required",
			purchaseOrder: {
				required: true,
				minlength: 4
			},
			actionsTaken: {
				required: true
			}
		},
		messages: {
			productType: "Please enter the productType",
			manufacturer:"please enter the manufacturer name",
			inspectedBy:"please enter the name of the inspector",
			receivedBy:"Please provide a name of the person who received the order",
			date:"Please enter the date of inspection",
			quantity:{
				required:"Provide the quantity as observed"
			},
			integrityObservation:"Comment on the quantity as observed",
			lotObservation:"Comment on the lot number as observed",
			productObservation:"Comment on the production date as observed",
			expirationObservation:"Comment on the expiration date as observed",
			contentObservation:"Comment on the content claimed on label as observed",
			certificateObservation:"Comment on the Certificate of Analysis as observed",
			iodine_compounds_batch_status:"Do you reject or accept the order?",
			
			productType: {
				required: "Please enter a product type"
			},
			purchaseOrder: {
				required: "Please provide the purchase order #",
				minlength: "The purchase order # must be > 3 characters"
			},
			actionsTaken: {
				required: "Please comment on reasons for rejection/action taken"
			},
			cloned:{required:"required"}
		}
		});
		
		// validate external audit  form of fortified salt on keyup and submit
	$("#externalFortified_B2").validate({
		rules: {
			inspection_registry:"required",
			inspectionDate:"required",
			inspection_officer:"required",
			mill_name:"required",
			address:"required",
			telephone:"required",
			email: {
				required: true,
				email: true
			},
			iodine_type:"required",
			inspection_officer_name:"required",
			inspection_officer_sign:"required",
			inspection_date:"required",
			supervisor_sign:"required",
			supervision_date:"required",
			production_area:"required",
			packaging_area:"required",
			warehouse:"required",
			staff_facilities:"required",
			hygiene:"required",
			protective_clothing:"required",
			trained_in_task:"required",
			receipt_and_storage:"required",
			premix_dilution:"required",
			feeder_verification:"required",
			sampling_salt:"required",
			salt_iodine_test:"required",
			iodine_inventory_uptodate:"required",
			certificate_of_analysis:"required",
			iodine_stored_well:"required",
			fifo_system:"required",
			iodine_handling:"required",
			premix_preparation:"required",
			storage_handling_area:"required",
			iodine_handling:"required",
			storage_handling:"required",
			feeder_records_available:"required",
			premix_level_adequate:{required:false},
			salt_records_uptodate:"required",
			ratio_action:"required",
			iodine_results_level:"required",
			salt_samples_analyzed:"required",
			internal_test:"required",
			external_lab:"required",
			daily_compo_prepared:"required",
			last_samples_stored:"required",
			good_labeling:"required",
			fortified_salt_stored:"required",
		},
		messages: {
			inspection_registry:"Provide an inspection registry #",
			inspectionDate:"Please provide the date of inspection",
			inspection_officer:"Name of inspection officer is required",
			mill_name:"Provide the name of the mill name",
			address:"Provide the address of the factory/mill",
			telephone:"Provide the telephone # of the factory/mill",
			email:{
				required:"Please provide an email address",
				email:"Not a valid email address. E.g john.doe@moh.go.ke"},
			iodine_type:"Specifiy the iodine type in the salt",
			inspection_officer_name:"Please provide the name of the inspection officer",
			inspection_officer_sign:"Please sign with the initials of the inspection officer",
			inspection_date:"Provide the date of inspection",
			supervisor_name:"Please provide the name of the supervising officer",
			supervisor_sign:"Please sign with the initials of the supervising officer",
			supervision_date:"Date of supervision",
			production_area:"Is the production area clean and sanitable?",
			packaging_area:"Is the packaging area clean and sanitable?",
			warehouse:"Is the warehouse area clean and sanitable?",
			staff_facilities:"Are the staff facilities and toilettes clean and sanitable?",
			hygiene:"Is the hygiene at the required level?",
			protective_clothing:"Do personnel wear protective clothing?",
			trained_in_task:"Are the personnel trained in their tasks?",
			receipt_and_storage:"Are there receipt and storage written procedures or instructions?",
			premix_dilution:"Are there premix dilution written procedures or instructions?",
			feeder_verification:"Written procedures or instructions exist for this?",
			sampling_salt:"Written procedures or instructions exist for this?",
			salt_iodine_test:"Written procedures or instructions exist for this?",
			iodine_inventory_uptodate:"Is the inventory up to date?",
			certificate_of_analysis:"Is there a certificate of analysis?",
			iodine_stored_well:"Has the iodine been stored well?",
			fifo_system:"Does a 'first-in first-out' system exist?",
			iodine_handling:"Is the hadling of the iodine upto standard?",
			premix_preparation:"Is there a premix preparation?",
			storage_handling_area:"How adequate is the storage handling area?",
			iodine_handling:"Iodine handling adequate?",
			storage_handling:"Storage handling adequate?",
			feeder_records_available:"Available?",
			premix_level_adequate:"Adequate premix level?",
			salt_records_uptodate:"Are the fortified salt records up to date?",
			ratio_action:"Is there any action taken on the ratio of fortified salt/premix?",
			iodine_results_level:"Is the iodine reuslts< 40mg/kg",
			salt_samples_analyzed:"Analysis of the salt samples?",
			internal_test:"Use of internal test?",
			external_lab:"Use of external test?",
			daily_compo_prepared:"Is there preparation of a daily composite sample?",
			last_samples_stored:"Have the last 30 samples been stored?",
			good_labeling:"Does labeling meet the requirements",
			fortified_salt_stored:"Is the fortified salt storeed adequately?"
		}
		});
		
		$("#internalFortified_A2").validate({

	
		rules: {
			
			iodineSupplier1: "required",
			iodineDrums:{
				required:true,
				positiveNumber:true},
			iodineLot:"required",
			iodineExpiration:"required",
			iodineDispatched:"required",
			iodineStock:{required:false,zeroAndAbove:true},
			iodineReceipt:"required",
			identification:"required",
			iodineKgs:{
				required:true,
				positiveNumber:true},
			iodineIdentification:"required",
			iodineMgs:{
				required:true,
				positiveNumber:true},
			reportingDate:"required",
			reportersName:"required",
			reportersSignature:"required",
			
			
			iodineDate_1: {
				required: true
				
			},
			iodineSupplier1: {
				required: true
			},
			iodineLot: {
				required: true
				
			},
			iodineExpiration: {
				required: true
				
			},
			
		
			iodineDispatched: {
				required: true
				
			},
			iodineReceipt: {
				required: true
				
			},
			identification: {
				required: true
				
			},
			iodineIdentification: {
				required: true
				
			},
			reportingDate: {
				required: true
				
			},
			reportersName: {
				required: true
				
			},
			reportersSignature: {
				required: true
				
			}
			
			},
		messages: {
			iodineSupplier1: "*Required",
			iodineDrums:"*Required",
			iodineLot:"*Required",
			iodineExpiration:"*Required",
			iodineDispatched:"*Required",
			iodineStock:{required:"*Required"},
			iodineReceipt:"*Required",
			identification:"*Required",
			iodineKgs:{
				required:"Required"},
			iodineIdentification:"*Required",
			iodineMgs:{
				required:"Required"},
			reportingDate:"*Required",
			reportersName:"*Required",
			reportersSignature:"*Required",
			
			
			iodineDate_1: {
				required: "Required"
				
			},
			iodineSuppler1: {
				required: "Required"
				
			},
			iodineDrums: {
				required: "Required",
				
				
			},
		}
	});
	
	$("#smallScale_A2").validate({

	// validate form on keyup and submit
		rules: {
			premixLot:"required",
			
			harvestYear: {
				required: true
				
			},
			premixDate: {
				required: true
			},
			SupplierNames: {
				required: true
				
			},
			premixKg: {
				required: true,positiveNumber:true
				
			},
			premixContent: {
				required: true,positiveNumber:true
				
			},
			
		
			premixAmountUsed: {
				required: true,positiveNumber:true
				
			},
			premixInStock: {
				required: true, zeroAndAbove:true
				
			},
			premixSaltProduced:{
				required:true,positiveNumber:true
			}
			
			},
		messages: {
			premixharvestYear:{required:"*Required"},
			premixDate:{required:"*Required"},
			SupplierNames:{required:"*Required"},
			premixKg:{required:"*Required"},
			premixContent:{required:"*Required"},
			premixAmountUsed:{required:"*Required"},
			premixInStock:{required:"*Required"},
			premixSaltProduced:{required:"*Required"},
			premixLot:"*Required"
			
		}
	});
	
	$("#smallScale_A1").validate({
		rules: {
			harvestYear: "required",
			controlDate: "required",
			supplierName:"required",
			controlKg:{
				required:true,
				positiveNumber:true},
			iodineContent:{
				required:true,
				positiveNumber:true},
			amountUsed:{
				required:true,
				positiveNumber:true},
			inStock:{
				required:true,
				zeroAndAbove:true},
			premixAmount:{
				required:true,
				positiveNumber:true},
			controlLot:"required",
			
			harvestYear: {
				required: true
				
			},
			controlDate: {
				required: true
			},
			supplierName: {
				required: true
				
			},
			
			controlLot:{
				required:true
			}
			
			},
		messages: {
			harvestYear: "*Required",
			controlDate: "*Required",
			supplierName:"*Required",
			controlKg:{
				required:"*Required"},
			iodineContent:{required:"*Required"},
			amountUsed:{required:"*Required"},
			inStock:{required:"*Required"},
			premixAmount:{required:"*Required"},
			controlLot:"*Required"
		}
	});
	
	$("#externalfortifiedB1").validate({

	// validate signup form on keyup and submit
		rules: {
			visitDate: "required",
			visitTime: "required",
			oilFactory:"required",
			visitAddress:"required",
			phealthOfficer:"required",
			auditorName:"required",
			auditorPosition:"required",
			auditorSignature:"required",
			auditorOpening:"required",
			auditorClosing:"required",
			
			visitDate: {
				required: true
				
			},
			visitTime: {
				required: true
			},
			oilFactory: {
				required: true
				
			},
			visitAddress: {
				required: true
				
			},
			phealhOfficer: {
				required: true
				
			},
			
		
			auditorName: {
				required: true
				
			},
			auditorPosition: {
				required: true
				
			},
			auditorSignature:{
				required:true
			},
			auditorOpening:{
				required:true
			},
			auditorClosing:{
				required:true
			}
			
			},
		messages: {
			visitDate: "*Required",
			visitTime: "*Required",
			oilFactory:"*Required",
			visitAddress:"*Required",
			phealthOfficer:"*Required",
			auditorName:"*Required",
			auditorPosition:"*Required",
			auditorSignature:"*Required",
			auditorOpening:"*Required",
			auditorClosing:"*Required"

		}
	});
	
	$("#externalIodizationB1").validate({
		rules: {
			inspectionRegistry: "required",
			inspectionDate: "required",
			inspecTor:"required",
			iodizationCenter:"required",
			inspectionAddress:"required",
			inspectorTelephone:"required",
			inspectorEmail:"required",
			sampleNumber:"required",
			iodineContent:"required",
			processedSamples:{required:true,positiveNumber:true},
			iodineContents:{required:true,positiveNumber:true},
			averageSample:{required:true,positiveNumber:true},
			averageSamples:{required:true,positiveNumber:true},
			nonCompliances:"required",
			improvementSuggestions:"required",
			insPector:"required",
			inspectorSignature:"required",
			signatureRepresentative:"required",
			
			
			inspectionRegistry: {
				required: true
				
			},
			inspectionsDate: {
				required: true
			},
			inspecTor: {
				required: true
				
			},
			iodizationCenter: {
				required: true
				
			},
			inspectionAddress: {
				required: true
				
			},
			
		
			inspectorTelephone: {
				required: true
				
			},
			inspectorFax: {
				required: false
				
			},
			inspectorEmail: {
				required: true
				
			},
			sampleNumber: {
				required: true
				
			},
			iodineContent: {
				required: true
				
			},
			nonCompliances: {
				required: true
				
			},
			improvementSuggestions:{
				required:true
			},
			insPector:{
				required:true
			},
			factoryRepresentative:{
				required:false
			},
			externalIodB1_date_rep_signed:{
				required:false
			},
			inspectorSignature:{
				required:true
			},
			signatureRepresentative:{
				required:true
			},
			signatureDate:{
				required:false
			},
			supervisorName:{
				required:false
			},
			signatureSupervisor:{
				required:false
			},
			supervisorDate:{
				required:false
			}
			
			},
		messages: {
			inspectionRegistry: "*Required",
			inspectionsDate: "*Required",
			inspecTor:"*Required",
			iodizationCenter:"*Required",
			inspectionAddress:"*Required",
			inspectorTelephone:"*Required",
			inspectorFax:"*Required",
			inspectorEmail:"*Required",
			sampleNumber:"*Required",
			iodinContent:"*Required",
			processedSamples:{required:"*Required"},
			iodineContents:{required:"*Required"},
			averageSample:{required:"*Required"},
			averageSamples:{required:"*Required"},
			nonCompliances:"*Required",
			improvementSuggestions:"*Required",
			insPector:"*Required",
			factoryRepresentative:"*Required",
			externalIodB1_date_rep_signed:"*Required",
			inspectorSignature:"*Required",
			signatureRepresentative:"*Required",
			signatureDate:"*Required",
			supervisorName:"*Required",
			signatureSupervisor:"*Required",
			supervisorDate:"*Required",
			
			
			
			
		}
	});
	
	$("#internalFortified_B1").validate({

	// validate signup form on keyup and submit
		rules: {
			saltFactory: "required",
			year: "required",
			fortifiedDate:"required",
			fortifiedWeight:{
				required:true,
				positiveNumber:true
			},
			compoundWeight:{
				required:true,
				positiveNumber:true
			},
			finalWeight:{
				required:true,
				positiveNumber:true
			},
			startTime:"required",
			endTime:"required",
			iodineWeight:{
				required:true,
				positiveNumber:true
			},
			qcReview:"required",
			
			
			saltFactory: {
				required: true
				
			},
			year: {
				required: true
			},
			fortifiedDate: {
				required: true
				
				
			},
			startTime: {
				required: true
				
			},
			endTime: {
				required: true
				
			},
			qcReview: {
				required: true
			}
			
			},
		messages: {
			saltFactory: "*Required",
			year: {required:"*Required"},
			fortifiedDate:"*Required",
			fortifiedWeight:{required:"*Required"},
			compoundWeight:{required:"*Required"},
			finalWeight:{required:"*Required"},
			startTime:"*Required",
			endTime:"*Required",
			iodineWeight:{required:"*Required"},
			qcReview:"*Required",
			
			
		}
	});
	
	$("#internalFortified_C1").validate({

	// validate signup form on keyup and submit
		rules: {
			dateC1: "required",
			productionTime: "required",
			saltProduced:{required:true,positiveNumber:true},
			premixUsed:{required:true,positiveNumber:true},
			saltFortified:{required:true,positiveNumber:true},
			notes:"required",
			comments:"required",
			logDate:"required",
			productionTime1:"required",
			saltProduced1:"required",
			premixUsed1:"required",
			saltsFortified1:"required",
			notes1:"required",
			comments1:"required",
			logDate1:"required",
			saltProduced2:"required",
			premixUsed2:"required",
			salFortified2:"required",
			notes2:"required",
			responsible:"required",
			sigNature:"required",
			saltProduced3:"required",
			premixUsed3:"required",
			saltFortified3:"required",
			notes3:"required",
			
			
			
			dateC1: {
				required: true
				
			},
			productionTime: {
				required: true
			},
			notes: {
				required: true
				
			},
			comments: {
				required: true
				
			},
			logDate: {
				required: true
				
			},
			productionTime1: {
				required: true
				
			},
			saltProduced1: {
				required: true
				
			},
			premixUsed1: {
				required: true
				
			},
			saltsFortified1: {
				required: true
			
			},
			notes1: {
				required: true
				
			},
			comments1: {
				required: true
				
			},
			logDate1: {
				required: true
				
			},
			saltProduced2: {
				required: true
				
			},
			premixUsed2: {
				required: true
				
			},
			saltFortified2: {
				required: true
				
			},
			notes2: {
				required: true
				
			},
			responsible: {
				required: true
				
			},
			sigNature: {
				required: true
				
			},
			saltProduced3: {
				required: true
				
			},
			premixUsed3: {
				required: true
				
			},
			saltFortified3: {
				required: true
				
			},
			notes3: {
				required: true
				
			}
			
			
			},
		messages: {
			dateC1: "*Required",
			productionTime: "*Required",
			saltProduced:"*Required",
			premixUsed:"*Required",
			saltFortified:"*Required",
			notes:"*Required",
			comments:"*Required",
			logDate:"*Required",
			productionTime1:"*Required",
			saltProduced:{required:"*Required"},
			premixUsed:{required:"*Required"},
			saltsFortified:{required:"*Required"},
			notes1:"*Required",
			comments1:"*Required",
			logDate1:"*Required",
			saltProduced2:"*Required",
			premixUsed2:"*Required",
			saltFortified2:"*Required",
			notes2:"*Required",
			responsible:"*Required",
			sigNature:"*Required",
			saltProduced3:"*Required",
			premixUsed3:"*Required",
			saltFortified3:"*Required",
			notes3:"*Required",
			
		}
	});
	
	$("#internalFortified_B2").validate({

	// validate signup form on keyup and submit
		rules: {
			checkupDate: "required",
			blenderObservations: "required",
			balanceObservations:"required",
			pumpObservations:"required",
			drierObservations:"required",
			sprayerObservations:"required",
			checkupName:"required",
			
			checkupDate: {
				required: true
				
			},
			blenderObservations: {
				required: true
			},
			pumpObservations: {
				required: true
				
			},
			drierObservations: {
				required: true
				
			},
			
		
			sprayerObservations: {
				required: true
				
			},
			checkupName: {
				required: true
				
			}
			
			},
		messages: {
			checkupDate: "*Required",
			blenderObservations: "*Required",
			balanceObervations:"*Required",
			pumpObservations:"*Required",
			drierObservations:"*Required",
			sprayerObservations:"*Required",
			checkupName:"*Required"
		}
	});
	
	
	$("#externalFortified_B3").validate({

	// validate signup form on keyup and submit
		rules: {
			inspection_registry: "required",
			inspections_date: "required",
			factory_name:"required",
			factory_rep:"required",
			address:"required",
			telephone:"required",
			cbo_production: {
				required: false //,checkOne:true
				
			},
			cbo_packaging:{
				required:false //,checkOne:true
			},
			cbo_fortification_site:{
				required:false //,checkOne:true
			},
			cbo_labaratory:{
				required:false //,checkOne:true
			},
			cbo_warehouse:{
				required:false //,checkOne:true
			},
			cbo_rm_salt_warehouse:{
				required:false //,checkOne:true
			},
			cbo_other:{
				required:false //,checkOne:true
			},
			compliances_list:"required",
			suggestions:"required",
			health_officer:"required",
			ho_signature:"required",
			ho_signature_date:"required",
			supervisor_name:"required",
			
			inspection_registry: {
				required: true
				
			},
			inspections_date: {
				required: true
			},
			factory_name: {
				required: true
				
			},
			factory_reps: {
				required: true
				
			},
			address: {
				required: true
				
			},
			
		
			telephone: {
				required: true
				
			},
			compliances_list:{
				required:true
			},
			suggestions:{
				required:true
			},
			health_officer:{
				required:true
			},
			factory_reps:{
				required:false
			},
			ho_signature:{
				required:true
			},
			ro_signature:{
				required:false
			},
			ho_signature_date:{
				required:true
			},
			roSignature:{
				required:false
			},
			supervisor_name:{
				required:false
			},
			s_signature_date:{
				required:false
			}
			},
		messages: {
			inspection_registry: "*Required",
			inspections_date: "*Required",
			factory_name:"*Required",
			factory_rep:"*Required",
			address:"*Required",
			telephone:"*Required",
			cbo_production:{required:"*Required"},
			cbo_packaging:{required:"*Required"},
			cbo_fortification_site:{required:"*Required"},
			cbo_labaratory:{required:"*Required"},
			cbo_warehouse:{required:"*Required"},
			cbo_rm_salt_warehouse:{required:"*Required"},
			cbo_other:{required:"*Required"},
			compliances:"*Required",
			suggestions:"*Required",
			health_officer:"*Required",
			factory_reps:"*Required",
			ho_signature:"*Required",
			ro_signature:"*Required",
			ho_signature_date:"*Required",
			roSignature:"*Required",
			supervisor_name:"*Required",
			s_signature_date:"*Required"
				
		
		}
	});
	

	/*these values will find some use later*/
	
	/*$("#productType").focus(function() {
		var productType = $("#productType").val();
		var purchaseOrder = $("#purchaseOrder").val();
		var manufacturer =$("#manufacturer").val();
		var inspectedBy =$("#inspectedBy").val();
		var date =$("#date").val();
		var quantity =$("#quantity").val();
		var integrityObservation =$("#integrityObservation").val();
		var lotNumber =$("#lotNumber")..is(":checked");
		var lotObservation =$("#lotObservation").val();
		var productionDate =$("#productionDate").is(":checked");
		var productObservation =$("#productObservation").val();
		var expirationDate =$("#expirationDate").is(":checked");
		var expirationObservation =$("#expirationObservation").val();
		var contentClaimed =$("#contentClaimed").is(":checked");
		var contentObservation =$("#contentObservation").val();
		var certOfanalysis =$("#certOfanalysis").is(":checked");
		var certificateObservation =$("#certificateObservation").val();
		var other =$("#other").val();
		var otherObservation =$("#otherObservation").val();
		var accepted =$("#accepted").is(":checked");
		var rejected =$("#rejected").is(":checked");
		var actionsTaken =$("#actionsTaken").val();
		var receivedBy =$("#receivedBy").val();
		var inputDate  =$("#inputDate").val();
		
	})*/
});