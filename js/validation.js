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
    
    /*get form id from after ajax request from the user click event*/
   
    //var form_id='#'+$(".form-container").find('form').attr('id');
   // alert('Found: '+form_id);

	// validate iodine inspection form on keyup and submit
	$("#internalFortified_A1").validate({/*salt module*/
		rules: {
			manufacturer:"required",
			productType:"required",
			date:"required",
			
			quantity:{
				required:true,
				positiveNumber:true},
				
			integrityObservation:{
				required:true,
				alphaNumerals:false},
				
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
				minlength: 1
			},
			actionsTaken: {
				required: true
			},
			accepted:"required"
		},
		messages: {
			productType: "Please enter the productType",
			manufacturer:"please enter the manufacturer name",
			inspectedBy:"please enter the name of the inspector",
			receivedBy:"Please provide a name of the person who received the order",
			date:"Please enter the date of inspection",
			inputDate:"Please enter the date of receipt",
			quantity:{
				required:"Provide the quantity as observed"
			},
			integrityObservation:{required:"Comment on the quantity as observed"},
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
				minlength: "The purchase order # must be > 1 character"
			},
			actionsTaken: {
				required: "Please comment on reasons for rejection/action taken"
			},
			accepted:"Rejected or Accepted?",
			
		}
		});/*end of #internalFortified_A1*/
		
		/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
		
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
			iodineType:"required",
			inspectionOfficerName:"required",
			inspectionOfficerSign:"required",
			inspectionDate:"required",
			supervisorSign:"required",
			supervisionDate:"required",
			productionArea:"required",
			packagingArea:"required",
			warehouse:"required",
			staffFacilities:"required",
			hygiene:"required",
			protectiveClothing:"required",
			trainedInTask:"required",
			receiptAndStorage:"required",
			premixDilution:"required",
			feederVerification:"required",
			samplingSalt:"required",
			saltIodineTest:"required",
			iodineInventoryUptodate:"required",
			certificateOfAnalysis:"required",
			iodineStoredWell:"required",
			fifoSystem:"required",
			iodineHandling:"required",
			premixPreparation:"required",
			storageHandlingArea:"required",
			iodineHandling:"required",
			storageHandling:"required",
			feederRecordsAvailable:"required",
			premixLevelAdequate:{required:true},
			saltRecordsUptodate:"required",
			ratioAction:"required",
			iodineResultsLevel:"required",
			saltSamplesAnalyzed:"required",
			internalTest:"required",
			externalLab:"required",
			dailyCompoPrepared:"required",
			lastSamplesStored:"required",
			goodLabeling:"required",
			fortifiedSaltStored:"required",
		},
		messages: {
			inspectionRegistry:"Provide an inspection registry #",
			inspectionDate:"Please provide the date of inspection",
			inspectionOfficer:"Name of inspection officer is required",
			millName:"Provide the name of the mill name",
			address:"Provide the address of the factory/mill",
			telephone:"Provide the telephone # of the factory/mill",
			email:{
				required:"Please provide an email address",
				email:"Not a valid email address. E.g john.doe@moh.go.ke"},
			iodineType:"Specifiy the iodine type in the salt",
			inspectionOfficerName:"Please provide the name of the inspection officer",
			inspectionOfficerSign:"Please sign with the initials of the inspection officer",
			inspectionDate:"Provide the date of inspection",
			supervisorName:"Please provide the name of the supervising officer",
			supervisorSign:"Please sign with the initials of the supervising officer",
			supervisionDate:"Date of supervision",
			productionArea:"Is the production area clean and sanitable?",
			packagingArea:"Is the packaging area clean and sanitable?",
			warehouse:"Is the warehouse area clean and sanitable?",
			staffFacilities:"Are the staff facilities and toilettes clean and sanitable?",
			hygiene:"Is the hygiene at the required level?",
			protectiveClothing:"Do personnel wear protective clothing?",
			trainedInTask:"Are the personnel trained in their tasks?",
			receiptAndStorage:"Are there receipt and storage written procedures or instructions?",
			premixDilution:"Are there premix dilution written procedures or instructions?",
			feederVerification:"Written procedures or instructions exist for this?",
			samplingSalt:"Written procedures or instructions exist for this?",
			saltIodineTest:"Written procedures or instructions exist for this?",
			iodineInventoryUptodate:"Is the inventory up to date?",
			certificateOfAnalysis:"Is there a certificate of analysis?",
			iodineStoredWell:"Has the iodine been stored well?",
			fifoSystem:"Does a 'first-in first-out' system exist?",
			iodineHandling:"Is the hadling of the iodine upto standard?",
			premixPreparation:"Is there a premix preparation?",
			storageHandlingArea:"How adequate is the storage handling area?",
			iodineHandling:"Iodine handling adequate?",
			storageHandling:"Storage handling adequate?",
			feederRecordsAvailable:"Available?",
			premixLevelAdequate:{required:"Adequate premix level?"},
			saltRecordsUptodate:"Are the fortified salt records up to date?",
			ratioAction:"Is there any action taken on the ratio of fortified salt/premix?",
			iodineResultsLevel:"Is the iodine reuslts< 40mg/kg",
			saltSamplesAnalyzed:"Analysis of the salt samples?",
			internalTest:"Use of internal test?",
			externalLab:"Use of external test?",
			dailyCompoPrepared:"Is there preparation of a daily composite sample?",
			lastSamplesStored:"Have the last 30 samples been stored?",
			goodLabeling:"Does labeling meet the requirements",
			fortifiedSaltStored:"Is the fortified salt storeed adequately?"
		}
		});
		
		/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
		
		$("#internalFortified_A2").validate({/*salt module*/
		rules: {
			compManufacturer:{required:true},
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
			compManufacturer:{required:"Provide the name of the compound manufacturer"},
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
				
				
			}
		}
	}); /*end of #internalFortified_A2*/
	
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#smallScale_A2").validate({/*salt module*/

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
	
	/*------------------------------------------------------------------------------------------------------------------------------------*/
	$("#externalfortifiedB1").validate({/*salt module*/

	// validate  form on keyup and submit
		rules: {
			visitDate: "required",
			visitTime: "required",
			saltFactory:"required",
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
			saltFactory:"*Required",
			visitAddress:"*Required",
			phealthOfficer:"*Required",
			auditorName:"*Required",
			auditorPosition:"*Required",
			auditorSignature:"*Required",
			auditorOpening:"*Required",
			auditorClosing:"*Required"

		}
	});
	

	/*------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#externalIodizationB1").validate({/*salt module*/
		rules: {
			processedSamples:{required:true,positiveNumber:true},
			iodineContents:{required:true,positiveNumber:true},
			averageSample:{required:true,positiveNumber:true},
			averageSamples:{required:true,positiveNumber:true},
			inspectionRegistry: {
				required: true
			},
			inspectionsDate: {
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
				required: true
			},
			inspectorEmail: {
				required: true,email:true
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
			inspector:{
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
				required:true
			},
			signatureSupervisor:{
				required:false
			},
			supervisorDate:{
				required:false
			},
			inventory:{required:true},
			sufficient:{required:true},
			storage:{required:true},
			potassium:{required:true},
			precord:{required:true},
			fifo:{required:true},
			premix:{required:true},
			records:{required:true},
			packaging:{required:true},
			iodineContent0:{required:true,positiveNumber:true},
			reprocessedSamples:{required:true},
			iodineContent1:{required:true,positiveNumber:true},
			factoryRepresentative:{required:true}
			},
		messages: {
			inspectionRegistry: {required:"*Required"},
			inspectionsDate:{required:"*Required"},
			inspector:{required:"*Required"},
			iodizationCenter:{required:"*Required"},
			inspectionAddress:{required:"*Required"},
			inspectorTelephone:{required:"*Required"},
			inspectorFax:{required:"Fax address available?"},
			inspectorEmail:{required:"*Required"},
			sampleNumber:{required:"*Required"},
			iodineContent:{required:"*Required"},
			processedSamples:{required:"*Required"},
			iodineContents:{required:"*Required"},
			averageSample:{required:"*Required"},
			averageSamples:{required:"*Required"},
			nonCompliances:{required:"*Required"},
			improvementSuggestions:{required:"*Required"},
			inspectorEmail:{required:"*Required",email:"Not a valid email. Valid: joe@moh.go.ke"},
			factoryRepresentative:{required:"*Required"},
			externalIodB1_date_rep_signed:{required:"*Required"},
			inspectorSignature:{required:"*Required"},
			signatureRepresentative:{required:"*Required"},
			signatureDate:{required:"*Required"},
			supervisorName:{required:"*Required"},
			signatureSupervisor:{required:"*Required"},
			supervisorDate:{required:"*Required"},
			inventory:{required:"Inventory is up to date?"},
			sufficient:{required:"Sufficient peremix for 3 months?"},
			storage:{required:"Storage is adequate?"},
			potassium:{required:"Potassium iodate amount is as required"},
			precord:{required:"Records of premix available?"},
			fifo:{required:"FIFO system used in dispatching?"},
			premix:{required:"Salt/premix is proportionate"},
			records:{required:"Records of iodized salt updated"},
			packaging:{required:"Salt packaging is adequate"},
			iodineContent0:{required:"*Required"},
			reprocessedSamples:{required:"*Required"},
			iodineContent1:{required:"*Required"}
		}
	}); /*end of externalIodizationB1*/
	
	$("#internalFortified_B1").validate({

	// validate  form on keyup and submit
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
	
	$("#internalFortified_C1").validate({/*salt module*/

	// validate form on keyup and submit
		rules: {
			dateC1:{required:true},
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
			saltProduced2:{required:true,zeroAndAbove:true},
			premixUsed2:{required:true,zeroAndAbove:true},
			salFortified2:{required:true,zeroAndAbove:true},
			notes2:"required",
			responsible:"required",
			sigNature:"required",
			saltProduced3:{required:true,zeroAndAbove:true},
			premixUsed3:{required:true,zeroAndAbove:true},
			saltFortified3:{required:true,zeroAndAbove:true},
			notes3:"required",
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
				required: true,zeroAndAbove:true
				
			},
			premixUsed2: {
				required: true,zeroAndAbove:true
				
			},
			saltFortified2: {
				required: true,zeroAndAbove:true
				
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
				required:true,zeroAndAbove:true
				
			},
			premixUsed3: {
				required:true,zeroAndAbove:true
				
			},
			saltFortified3: {
				required:true,zeroAndAbove:true
				
			},
			notes3: {
				required: true
				
			}
			
			
			},
		messages: {
			dateC1:{ required:"*Required"},
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
			notes2:"*Required",
			responsible:"*Required",
			sigNature:"*Required",
			saltProduced3:"*Required",
			premixUsed3:"*Required",
			saltFortified3:"*Required",
			notes3:"*Required",
			
		}
	});
	
	$("#internalFortified_B2").validate({/*salt module*/

	// validate form on keyup and submit
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
	}); /*end of internalFortified_B2*/


	/*-----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	$("#externalFortified_B3").validate({/*salt module*/

	// validate  form on keyup and submit
		rules: {
			inspectionRegistry: "required",
			inspectionDate: "required",
			factoryRepresentative:"required",
			address:"required",
			telephone:"required",
			nonCompliances:"required",
			suggestions:"required",
			suggestionsForImprovement:"required",
			publicHealthOfficer:"required",
			inspectorDate:"required",
			receivedBy:"required",
			receivedDate:"required",
			supervisorName:"required",
			supervisorSignatureDate:"required"
			},
		messages: {
			inspectionRegistry: "*Required",
			inspectionDate: "*Required",
			factoryRepresentative:"*Required",
			address:"*Required",
			telephone:"*Required",
			nonCompliances:"*Required",
			suggestionsForImprovement:"*Required",
			publicHealthOfficer:"*Required",
			supervisorSignatureDate:"*Required",
			supervisorName:"*Required",
			receivedBy:"*Required",
			inspectorDate:"*Required",
			receivedDate:"*Required"
		}
	});/*end of externalFortified_B3*/
	
	/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
   /*start of oil module*/
   $("#fortifiedOil_A1").validate({/*oil module*/
		rules: {
			
			dateReported: {
				required: true
				
			},
			transactedBy: {
				required: true
			}
			
          /*the rest are validated in the class error 'cloned'*/
			
			},
		messages: {
			dateReported:{
				required:"Required"},
			transactedBy:{required:"*Required"}		
			}
	}); /*end of #fortifiedOil_A1*/
	
	/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#fortifiedOil_B1").validate({/*oil module*/

	
		rules: {
			
			oilFactory: {
				required: true
				
			},
			harvestYear: {
				required: true
			},
			nameSignature:{
				required:true
			}
			
          /*the rest are validated in the class error 'cloned'*/
			
			},
		messages: {
			dateReported:{
				required:"Required"},
			transactedBy:{
				required:"*Required"},
			nameSignature:{
				required:"*Required"}	
			}
			
	}); /*end of #fortifiedOil_B1*/
	
	/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	$("#fortifiedOil_B2").validate({/*oil module*/

	// validate form on keyup and/or submit
		rules: {
			checkupDate: {
				required: true
				
			},
			blenderObservations: {
				required: true
			},
			balanceObservations: {
				required: true
				
			},
			pumpObservations: {
				required: true
				
			},
			stirrersObservations: {
				required: true
				
			},
			feedingTubesObservations:{
				required:true
			},
			blendingTankObservations:{
				required:true
			},
			checkupName: {
				required: true
				
			}
			
			},
		messages: {
			checkupDate: {
				required: "*Required"
				
			},
			blenderObservations: {
				required: "*Required"
			},
			balanceObservations: {
				required: "*Required"
				
			},
			pumpObservations: {
				required: "*Required"
				
			},
			stirrersObservations: {
				required: "*Required"
				
			},
			feedingTubesObservations:{
				required:"*Required"
			},
			blendingTankObservations:{
				required:"*Required"
			},
			checkupName: {
				required: "*Required"
				
			}
		}
	});/*end of fortifiedOil_B2*/
	
	/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
		$("#fortifiedOil_C1").validate({/*oil module*/

	// validate form on keyup and submit
		rules: {
			dateC1:{required:true},
			logDate:{required:true},
			oilProduced2:{required:true,zeroAndAbove:true},
			premixUsed2:{required:true,zeroAndAbove:true},
			oilFortified2:{required:true,zeroAndAbove:true},
			notes2:{required:true},
			responsible:{required:true},
			sigNature:{required:true},
			oilProduced3:{required:true,zeroAndAbove:true},
			premixUsed3:{required:true,zeroAndAbove:true},
			oilFortified3:{required:true,zeroAndAbove:true},
			notes3:{required:true},
			},
		messages: {
			dateC1:{required:"*Required"},
			logDate:{required:"*Required"},
			oilProduced2:{required:"*Required"},
			premixUsed2:{required:"*Required"},
			oilFortified2:{required:"*Required"},
			notes2:{required:"*Required"},
			responsible:{required:"*Required"},
			sigNature:{required:"*Required"},
			oilProduced3:{required:"*Required"},
			premixUsed3:{required:"*Required"},
			oilFortified3:{required:"*Required"},
			notes3:{required:"*Required"}
			
		}
	}); /*end of fortifiedOil_C1*/
	
   /*end of oil module*/
  /*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
  /*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
  
  /*start of maize module*/
 /*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

 	// validate iodine inspection form on keyup and submit
	$("#internalMaizeFlour_A1").validate({/*maize module*/
		rules: {
			manufacturer:"required",
			productType:"required",
			date:"required",
			
			quantity:{
				required:true,
				positiveNumber:true},
				
			integrityObservation:{
				required:true,
				alphaNumerals:false},
				
			lotObservation:"required",
			productionObservation:"required",
			expirationObservation:"required",
			micronutrientObservation:"required",
			certificateObservation:"required",
			reviewedBy:"required",
			inspectedBy:"required",
			inputDate:"required",
			iodine_compounds_batch_status:"required",
			purchaseOrder: {
				required: true,
				minlength: 1
			},
			actionsTaken: {
				required: true
			},
			accepted:"required"
		},
		messages: {
			productType: "Please enter the productType",
			manufacturer:"please enter the manufacturer name",
			inspectedBy:"please enter the name of the inspector",
			reviewedBy:"Please provide a name of the person who reviewed the compounds",
			date:"Please enter the date of inspection",
			inputDate:"Please enter the date of receipt",
			quantity:{
				required:"Provide the quantity as observed"
			},
			integrityObservation:{required:"Comment on the quantity as observed"},
			lotObservation:"Comment on the lot number as observed",
			productionObservation:"Comment on the production date as observed",
			expirationObservation:"Comment on the expiration date as observed",
			micronutrientObservation:"Comment on the micro-nuntrients levels as observed",
			certificateObservation:"Comment on the Certificate of Analysis as observed",
			iodine_compounds_batch_status:"Do you reject or accept the order?",
			
			productType: {
				required: "Please enter a product type"
			},
			purchaseOrder: {
				required: "Please provide the purchase order #",
				minlength: "The purchase order # must be > 1 character"
			},
			actionsTaken: {
				required: "Please comment on reasons for rejection/action taken"
			},
			accepted:"Rejected or Accepted?",
			
		}
		});/*end of #internalMaizeFlour_A1*/
		
		/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
		
		$("#internalMaizeFlour_A2").validate({/*maize module*/
		rules: {
			compManufacturer:{required:true},
			dateOfReporting:{required:true},
            signature:{required:true}
            /*the rest are enforced in the cloned class*/
			},
		messages: {
			compManufacturer:{required:"Provide the name of the compound manufacturer"},
			dateOfReporting:{required:"*Required"},
            signature:{required:"*Required"}
			
		}
	}); /*end of #internalMaizeFlour_A2*/
	
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#internalMaizeFlour_B1").validate({/*maize module*/
		rules: {
			feederLocation:{required:true},
            personResponsible:{required:true}
            /*the rest are enforced in the cloned class*/
			},
		messages: {
			feederLocation:{required:"*Required"},
           personResponsible:{required:"*Required"}
			
		}
	}); /*end of #internalMaizeFlour_B1*/
	
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#internalMaizeFlour_B2").validate({/*maize module*/
		rules: {
			productionLine:{required:true},
            dateB2:{required:true},
            personResponsible:{required:true}
            /*the rest are enforced in the cloned class*/
			},
		messages: {
			fproductionLine:{required:"*Required"},
            dateB2:{required:"*Required"},
            personResponsible:{required:"*Required"}
			
		}
	}); /*end of #internalMaizeFlour_B2*/
	
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#internalMaizeFlour_C1").validate({/*maize module*/

	// validate form on keyup and submit
		rules: {
			dateC1:{required:true},
			logDate:{required:true},
			maizeProduced2:{required:true,zeroAndAbove:true},
			premixUsed2:{required:true,zeroAndAbove:true},
			maizeFortified2:{required:true,zeroAndAbove:true},
			notes2:{required:true},
			responsible:{required:true},
			sigNature:{required:true},
			maizeProduced3:{required:true,zeroAndAbove:true},
			premixUsed3:{required:true,zeroAndAbove:true},
			maizeFortified3:{required:true,zeroAndAbove:true},
			notes3:{required:true},
			},
		messages: {
			dateC1:{required:"*Required"},
			logDate:{required:"*Required"},
			maizeProduced2:{required:"*Required"},
			premixUsed2:{required:"*Required"},
			maizeFortified2:{required:"*Required"},
			notes2:{required:"*Required"},
			responsible:{required:"*Required"},
			sigNature:{required:"*Required"},
			maizeProduced3:{required:"*Required"},
			premixUsed3:{required:"*Required"},
			maizeFortified3:{required:"*Required"},
			notes3:{required:"*Required"}
			
		}
	}); /*end of #internalMaizeFlour_C1*/
	/*------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#externalMaizeFlour_B1").validate({/*maize module*/

	// validate  form on keyup and submit
		rules: {
			dateB1:{required:true},
			maizeMill:{required:true},
			publicHealthOfficer:{required:true}, 
			time:{required:true}, 
			address:{required:true},
			/*the rest are captured in the cloned class*/
			},
		messages: {
		  	dateB1:{required:"*Required"},
			maizeMill:{required:"*Required"},
			publicHealthOfficer:{required:"*Required"}, 
			time:{required:"*Required"}, 
			address:{required:"*Required"},

		}
	}); /*end of externalMaizeFlour_B1*/
	
	/*------------------------------------------------------------------------------------------------------------------------------------*/
	
	// validate external audit  form of fortified maize flour on keyup and submit
	$("#externalMaizeFlour_B2").validate({/*maize module*/
	
		rules: {
			inspectionRegistry :"required",
			inspectionDate:"required",
			inspectionOfficerName:"required",
			address:"required",
			telephone:"required",
			fax:"required",
			email: {
				required: true,
				email: true
			},
			iodineType:"required",
			productionArea:"required",
			packagingArea:"required",
			warehouse:"required",
			staffFacilities:"required",
			hygiene:"required",
			protectiveClothing:"required",
			trainedInTask:"required",
			receiptAndStorage:"required",
			premixDilution:"required",
			feederVerification:"required",
			samplingMaize:"required",
			maizeSpotTest:"required",
			premixInventoryUpToDate:"required",
			certificateOfAnalysis:"required",
			premixStoredWell:"required",
			fifoSystemPremix:"required",
			fifoSystemFlour:"required",
			premixHandling:"required",
			premixDilutionApplicable:"required",
			homogeneityAssessed:"required",
			storageHandlingArea:"required",
			feederRecordsAvailable:"required",
			premixLevelAdequate:{required:true},
			flourRecordsUpToDate:"required",
			ratioAction:"required",
			shiftSamplesTaken:"required",
			ironContent:"required",
			spotTest:"required",
			externalLabIron:"required",
			externalLabVitaminA:"required",
			dailyCompPrepared:"required",
			lastSamplesStored:"required",
			goodLabeling:"required",
			fortifiedMaizeStored:"required",
			supervisorName:"required", 
            supervisionDate:"required"
		},
		messages: {
			inspectionRegistry:"Provide an inspection registry #",
			inspectionDate:"Please provide the date of inspection",
			inspectionOfficer:"Name of inspection officer is required",
			address:"Provide the address of the factory/mill",
			telephone:"Provide the telephone # of the factory/mill",
			email:{
				required:"Please provide an email address",
				email:"Not a valid email address. E.g john.doe@moh.go.ke"},
			fax:"Faxing number available?",
			iodineType:"Specifiy the iodine type in the flour",
			inspectionDate:"Provide the date of inspection",
			supervisorName:"Please provide the name of the supervising officer",
			supervisionDate:"Date of supervision",
			productionArea:"Is the production area clean and sanitable?",
			packagingArea:"Is the packaging area clean and sanitable?",
			warehouse:"Is the warehouse area clean and sanitable?",
			staffFacilities:"Are the staff facilities and toilettes clean and sanitable?",
			hygiene:"Is the hygiene at the required level?",
			protectiveClothing:"Do personnel wear protective clothing?",
			trainedInTask:"Are the personnel trained in their tasks?",
			receiptAndStorage:"Are there receipt and storage written procedures or instructions?",
			premixDilution:"Are there premix dilution written procedures or instructions?",
			feederVerification:"Written procedures or instructions exist for this?",
			samplingMaize:"Written procedures or instructions exist for this?",
			maizeSpotTest:"Written procedures or instructions exist for this?",
			premixInventoryUptodate:"Is the inventory up to date?",
			certificateOfAnalysis:"Is there a certificate of analysis?",
			premixStoredWell:"Has the iodine been stored well?",
			fifoSystemFlour:"Is FIFO, 'first-in first-out', system applied to dispatches?",
			fifoSystemPremix:"Is FIFO, 'first-in first-out', system applied to dispatches?",
			premixHandling:"Is the hadling of the iodine upto standard?",
			premixDilutionApplicable:"Is there a premix dilution?",
			homogeneityAssessed:"Is homogenity assessed?",
			storageHandlingArea:"How adequate is the storage handling area?",
			storageHandling:"Storage handling adequate?",
			feederRecordsAvailable:"Available?",
			premixLevelAdequate:{required:"Adequate premix level?"},
			flourRecordsUpToDate:"Are the fortified flour records up to date?",
			ratioAction:"Is there any action taken on the ratio of fortified flour/premix?",
			ironContent:"Is the iron content above factory minimum?",
			spotTest:"Records of flour samples analyzed using this?",
			externalLabIron:"Records of flour samples analyzed using this?",
			externalLabVitaminA:"Use of external test?",
			dailyCompPrepared:"Is there preparation of a daily composite sample?",
			lastSamplesStored:"Have the last 30 samples been stored?",
			goodLabeling:"Does labeling meet the requirements",
			fortifiedMaizeStored:"Is the fortified maize storeed adequately?"
		}
		});/*end of externalMaizeFlour_B2*/
	
	/*-------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#externalMaizeFlour_B3").validate({/*maize module*/
	// validate  form on keyup and submit
		rules: {
			inspectionRegistry: "required",
			inspectionDate: "required",
			factoryRepresentative:"required",
			address:"required",
			telephone:"required",
			nonCompliances:"required",
			suggestionsForImprovement:"required",
			publicHealthOfficer:"required",
			inspectorDate:"required",
			receivedBy:"required",
			receivedDate:"required",
			supervisorName:"required", 
            supervisorSignatureDate:"required"
			},
		messages: {
			inspectionRegistry: "required",
			inspectionDate: "required",
			factoryRepresentative:"required",
			address:"required",
			telephone:"required",
			nonCompliances:"required",
			suggestionsForImprovement:"required",
			publicHealthOfficer:"required",
			inspectorDate:"required",
			receivedBy:"required",
			receivedDate:"required",
			supervisorName:"required", 
            supervisorSignatureDate:"required"
		}
	});/*end of externalMaizeFlour_B3*/
	
	/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/

   
   /*end of maize module*/
   /*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
   /*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/  
  
  /*start of wheat module*/
 /*------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
   // validate iodine inspection form on keyup and submit
	$("#internalWheatFlour_A1").validate({/*wheat module*/
		rules: {
			manufacturer:"required",
			productType:"required",
			date:"required",
			
			quantity:{
				required:true,
				positiveNumber:true},
				
			integrityObservation:{
				required:true,
				alphaNumerals:false},
				
			lotObservation:"required",
			productObservation:"required",
			expirationObservation:"required",
			contentObservation:"required",
			certificateObservation:"required",
			receivedBy:"required",
			inspectedBy:"required",
			inputDate:"required",
			purchaseOrder: {
				required: true,
				minlength: 1
			},
			actionsTaken: {
				required: true
			},
			accepted:"required"
		},
		messages: {
			productType: "Please enter the productType",
			manufacturer:"please enter the manufacturer name",
			inspectedBy:"please enter the name of the inspector",
			receivedBy:"Please provide a name of the person who reviewed the compounds",
			date:"Please enter the date of inspection",
			inputDate:"Please enter the date of receipt",
			quantity:{
				required:"Provide the quantity as observed"
			},
			integrityObservation:{required:"Comment on the quantity as observed"},
			lotObservation:"Comment on the lot number as observed",
			productObservation:"Comment on the production date as observed",
			expirationObservation:"Comment on the expiration date as observed",
			contentObservation:"Comment on the content claimed on label as observed",
			certificateObservation:"Comment on the Certificate of Analysis as observed",
			
			productType: {
				required: "Please enter a product type"
			},
			purchaseOrder: {
				required: "Please provide the purchase order #",
				minlength: "The purchase order # must be > 1 character"
			},
			actionsTaken: {
				required: "Please comment on reasons for rejection/action taken"
			},
			accepted:"Rejected or Accepted?",
			
		}
		});/*end of #internalWheatFlour_A1*/
		
		/*--------------------------------------------------------------------------------------------------------------------------------------------------*/
		
		$("#internalWheatFlour_A2").validate({/*wheat module*/
		rules: {
			compManufacturer:{required:true},
			dateOfReporting:{required:true},
            signature:{required:true}
            /*the rest are enforced in the cloned class*/
			},
		messages: {
			compManufacturer:{required:"Provide the name of the compound manufacturer"},
			dateOfReporting:{required:"*Required"},
            signature:{required:"*Required"}
			
		}
	}); /*end of #internalWheatFlour_A2*/
	
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#internalWheatFlour_B1").validate({/*wheat module*/
		rules: {
			feederLocation:{required:true},
            personResponsible:{required:true}
            /*the rest are enforced in the cloned class*/
			},
		messages: {
			feederLocation:{required:"*Required"},
           personResponsible:{required:"*Required"}
			
		}
	}); /*end of #internalWheatFlour_B1*/
	
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#internalWheatFlour_B2").validate({/*wheat module*/
		rules: {
            personResponsible:{required:true}
            /*the rest are enforced in the cloned class*/
			},
		messages: {
           personResponsible:{required:"*Required"}
			
		}
	}); /*end of #internalWheatFlour_B2*/
	
	/*----------------------------------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#internalWheatFlour_C1").validate({/*wheat module*/

	// validate form on keyup and submit
		rules: {
			dateC1:{required:true},
			logDate:{required:true},
			wheatFlourProduced2:{required:true,zeroAndAbove:true},
			premixUsed2:{required:true,zeroAndAbove:true},
			wheatFlour2:{required:true,zeroAndAbove:true},
			notes2:{required:true},
			responsible:{required:true},
			sigNature:{required:true},
			wheatFlourProduced3:{required:true,zeroAndAbove:true},
			premixUsed3:{required:true,zeroAndAbove:true},
			wheatFlour3:{required:true,zeroAndAbove:true},
			notes3:{required:true},
			},
		messages: {
			dateC1:{required:"*Required"},
			logDate:{required:"*Required"},
			wheatFlourProduced2:{required:"*Required"},
			premixUsed2:{required:"*Required"},
			wheatFlour2:{required:"*Required"},
			notes2:{required:"*Required"},
			responsible:{required:"*Required"},
			sigNature:{required:"*Required"},
			wheatFlourProduced3:{required:"*Required"},
			premixUsed3:{required:"*Required"},
			wheatFlour3:{required:"*Required"},
			notes3:{required:"*Required"}
			
		}
	}); /*end of #internalWheatFlour_C1*/
	/*------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#externalWheatFlour_B1").validate({/*wheat module*/

	// validate  form on keyup and submit
		rules: {
			dateB1:{required:true},
			wheatMill:{required:true},
			publicHealthOfficer:{required:true}, 
			time:{required:true}, 
			address:{required:true},
			/*the rest are captured in the cloned class*/
			},
		messages: {
		  	dateB1:{required:"*Required"},
			wheatMill:{required:"*Required"},
			publicHealthOfficer:{required:"*Required"}, 
			time:{required:"*Required"}, 
			address:{required:"*Required"},

		}
	}); /*end of externalWheatFlour_B1*/
	
	/*------------------------------------------------------------------------------------------------------------------------------------*/
	
	// validate external audit  form of fortified wheat flour on keyup and submit
	$("#externalWheatFlour_B2").validate({/*wheat module*/
	
		rules: {
			inspectionRegistry :"required",
			inspectionDate:"required",
			inspectionOfficerName:"required",
			address:"required",
			telephone:"required",
			fax:"required",
			email: {
				required: true,
				email: true
			},
			iodineType:"required",
			productionArea:"required",
			packagingArea:"required",
			warehouse:"required",
			staffFacilities:"required",
			hygiene:"required",
			protectiveClothing:"required",
			trainedInTask:"required",
			receiptAndStorage:"required",
			premixDilution:"required",
			feederVerification:"required",
			samplingWheat:"required",
			wheatSpotTest:"required",
			premixInventoryUpToDate:"required",
			certificateOfAnalysis:"required",
			premixStoredWell:"required",
			fifoSystemPremix:"required",
			fifoSystemFlour:"required",
			premixHandling:"required",
			premixDilutionApplicable:"required",
			homogeneityAssessed:"required",
			storageHandlingArea:"required",
			feederRecordsAvailable:"required",
			premixLevelAdequate:{required:true},
			flourRecordsUpToDate:"required",
			ratioAction:"required",
			shiftSamplesTaken:"required",
			ironContent:"required",
			spotTest:"required",
			externalLabIron:"required",
			externalLabVitaminA:"required",
			dailyCompPrepared:"required",
			lastSamplesStored:"required",
			goodLabeling:"required",
			fortifiedWheatStored:"required",
			supervisorName:"required", 
            supervisionDate:"required"
		},
		messages: {
			inspectionRegistry:"Provide an inspection registry #",
			inspectionDate:"Please provide the date of inspection",
			inspectionOfficer:"Name of inspection officer is required",
			address:"Provide the address of the factory/mill",
			telephone:"Provide the telephone # of the factory/mill",
			email:{
				required:"Please provide an email address",
				email:"Not a valid email address. E.g john.doe@moh.go.ke"},
			fax:"Faxing number available?",
			iodineType:"Specifiy the iodine type in the flour",
			inspectionDate:"Provide the date of inspection",
			supervisorName:"Please provide the name of the supervising officer",
			supervisionDate:"Date of supervision",
			productionArea:"Is the production area clean and sanitable?",
			packagingArea:"Is the packaging area clean and sanitable?",
			warehouse:"Is the warehouse area clean and sanitable?",
			staffFacilities:"Are the staff facilities and toilettes clean and sanitable?",
			hygiene:"Is the hygiene at the required level?",
			protectiveClothing:"Do personnel wear protective clothing?",
			trainedInTask:"Are the personnel trained in their tasks?",
			receiptAndStorage:"Are there receipt and storage written procedures or instructions?",
			premixDilution:"Are there premix dilution written procedures or instructions?",
			feederVerification:"Written procedures or instructions exist for this?",
			samplingMaize:"Written procedures or instructions exist for this?",
			wheatSpotTest:"Written procedures or instructions exist for this?",
			premixInventoryUptodate:"Is the inventory up to date?",
			certificateOfAnalysis:"Is there a certificate of analysis?",
			premixStoredWell:"Has the iodine been stored well?",
			fifoSystemFlour:"Is FIFO, 'first-in first-out', system applied to dispatches?",
			fifoSystemPremix:"Is FIFO, 'first-in first-out', system applied to dispatches?",
			premixHandling:"Is the hadling of the iodine upto standard?",
			premixDilutionApplicable:"Is there a premix dilution?",
			homogeneityAssessed:"Is homogenity assessed?",
			storageHandlingArea:"How adequate is the storage handling area?",
			storageHandling:"Storage handling adequate?",
			feederRecordsAvailable:"Available?",
			premixLevelAdequate:{required:"Adequate premix level?"},
			flourRecordsUpToDate:"Are the fortified flour records up to date?",
			ratioAction:"Is there any action taken on the ratio of fortified flour/premix?",
			ironContent:"Is the iron content above factory minimum?",
			spotTest:"Records of flour samples analyzed using this?",
			externalLabIron:"Records of flour samples analyzed using this?",
			externalLabVitaminA:"Use of external test?",
			dailyCompPrepared:"Is there preparation of a daily composite sample?",
			lastSamplesStored:"Have the last 30 samples been stored?",
			goodLabeling:"Does labeling meet the requirements",
			fortifiedWheatStored:"Is the fortified wheat stored adequately?"
		}
		});/*end of externalWheatFlour_B2*/
	
	/*-------------------------------------------------------------------------------------------------------------------------------------*/
	
	$("#externalWheatFlour_B3").validate({/*wheat module*/
	// validate  form on keyup and submit
		rules: {
			inspectionRegistry: "required",
			inspectionDate: "required",
			factoryRepresentative:"required",
			address:"required",
			telephone:"required",
			nonCompliances:"required",
			suggestionsForImprovement:"required",
			publicHealthOfficer:"required",
			inspectorDate:"required",
			receivedBy:"required",
			receivedDate:"required",
			supervisorName:"required", 
            supervisorSignatureDate:"required"
			},
		messages: {
			inspectionRegistry: "required",
			inspectionDate: "required",
			factoryRepresentative:"required",
			address:"required",
			telephone:"required",
			nonCompliances:"required",
			suggestionsForImprovement:"required",
			publicHealthOfficer:"required",
			inspectorDate:"required",
			receivedBy:"required",
			receivedDate:"required",
			supervisorName:"required", 
            supervisorSignatureDate:"required"
		}
	});/*end of externalMaizeFlour_B3*/
	
	/*---------------------------------------------------------------------------------------------------------------------------------------------------------------*/
		/*--------------------------------------------------------------------------------------------------------------------------------------------------*/
		/*--------------------------------------------------------------------------------------------------------------------------------------------------*/
        /*end of wheat module*/
   
});