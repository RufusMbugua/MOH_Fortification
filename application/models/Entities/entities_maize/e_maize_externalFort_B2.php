<?php
namespace models\Entities\entities_maize;

/**
 * @Entity
 * @Table(name="maize_externalfortb2")
 */
 class E_Maize_externalFort_B2{
		 	/**
		* @Id
		* @Column(name="maize_externalfortb2ID", type="integer", length=11, nullable=false)
		* @GeneratedValue(strategy="AUTO")
		* */
		private $maize_externalfortb2ID;
		/**
		* @Column(name="inspectionRegistry", type="string",length=45, nullable=true)
		* */
		private $inspectionRegistry;
		/**
		* @Column(name="dates", type="date",length=45, nullable=true)
		* */
		private $dates;
		/**
		* @Column(name="publicHealthOfficer", type="string",length=45, nullable=true)
		* */
		private $publicHealthOfficer;
		/**
		* @Column(name="factoryName", type="string",length=45, nullable=true)
		* */
		private $factoryName;
		/**
		* @Column(name="productionArea", type="string",length=45, nullable=true)
		* */
		private $productionArea;
		/**
		* @Column(name="packagingArea", type="string",length=45, nullable=true)
		* */
		private $packagingArea;
		/**
		* @Column(name="warehouse", type="string",length=45, nullable=true)
		* */
		private $warehouse;
		/**
		* @Column(name="staffFacilities", type="string",length=45, nullable=true)
		* */
		private $staffFacilities;
		/**
		* @Column(name="hygiene", type="string",length=45, nullable=true)
		* */
		private $hygiene;
		/**
		* @Column(name="protectiveClothing", type="string",length=45, nullable=true)
		* */
		private $protectiveClothing;
		/**
		* @Column(name="trainnedInTasks", type="string",length=45, nullable=true)
		* */
		private $trainnedInTasks;
		/**
		* @Column(name="receiptAndStorage", type="string",length=45, nullable=true)
		* */
		private $receiptAndStorage;
		/**
		* @Column(name="premixDilution", type="string",length=45, nullable=true)
		* */
		private $premixDilution;
		/**
		* @Column(name="feederVerification", type="string",length=45, nullable=true)
		* */
		private $feederVerification;
		/**
		* @Column(name="samplingOfMaize", type="string",length=45, nullable=true)
		* */
		private $samplingOfMaize;
		/**
		* @Column(name="ironSpotTest", type="string",length=45, nullable=true)
		* */
		private $ironSpotTest;
		/**
		* @Column(name="premixInventory", type="string",length=45, nullable=true)
		* */
		private $premixInventory;
		/**
		* @Column(name="COAReceived", type="string",length=45, nullable=true)
		* */
		private $COAReceived;
		/**
		* @Column(name="premixStored", type="string",length=45, nullable=true)
		* */
		private $premixStored;
		/**
		* @Column(name="premixHandledWell", type="string",length=45, nullable=true)
		* */
		private $premixHandledWell;
		/**
		* @Column(name="premixDilutionApplicable", type="string",length=45, nullable=true)
		* */
		private $premixDilutionApplicable;
		/**
		* @Column(name="homogeneityAssessed", type="string",length=45, nullable=true)
		* */
		private $homogeneityAssessed;
		/**
		* @Column(name="adequateStorage", type="string",length=45, nullable=true)
		* */
		private $adequateStorage;
		/**
		* @Column(name="recordsOfFeeder", type="string",length=45, nullable=true)
		* */
		private $recordsOfFeeder;
		/**
		* @Column(name="premixLevel", type="string",length=45, nullable=true)
		* */
		private $premixLevel;
		/**
		* @Column(name="recordsOfFlour", type="string",length=45, nullable=true)
		* */
		private $recordsOfFlour;
		/**
		* @Column(name="flourSamplesTaken", type="string",length=45, nullable=true)
		* */
		private $flourSamplesTaken;
		/**
		* @Column(name="ratioMaizeProduced", type="string",length=45, nullable=true)
		* */
		private $ratioMaizeProduced;
		/**
		* @Column(name="ironContent", type="string",length=45, nullable=true)
		* */
		private $ironContent;
		/**
		* @Column(name="spotTest", type="string",length=45, nullable=true)
		* */
		private $spotTest;
		/**
		* @Column(name="quantitativeMethodIron", type="string",length=45, nullable=true)
		* */
		private $quantitativeMethodIron;
		/**
		* @Column(name="quantitativeMethodVitamin", type="string",length=45, nullable=true)
		* */
		private $quantitativeMethodVitamin;
		/**
		* @Column(name="dailyCompositeSamples", type="string",length=45, nullable=true)
		* */
		private $dailyCompositeSamples;
		/**
		* @Column(name="last30Samples", type="string",length=45, nullable=true)
		* */
		private $last30Samples;
		/**
		* @Column(name="labelingMeetsSpecifications", type="string",length=45, nullable=true)
		* */
		private $labelingMeetsSpecifications;
		/**
		* @Column(name="fortifiedMaizeFlour", type="string",length=45, nullable=true)
		* */
		private $fortifiedMaizeFlour;
		
		/**
		* @Column(name="FIFOSystemPremix", type="string",length=45, nullable=true)
		* */
		private $FIFOSystemPremix;
		
		/**
		* @Column(name="FIFOSystemFlour", type="string",length=45, nullable=true)
		* */
		private $FIFOSystemFlour;
		
		/**
		* @Column(name="recommendations", type="string",length=45, nullable=true)
		* */
		private $recommendations;
		/**
		* @Column(name="correctiveActions", type="string",length=45, nullable=true)
		* */
		private $correctiveActions;
		/**
		* @Column(name="assessmentOfCorrectiveAction", type="string",length=45, nullable=true)
		* */
		private $assessmentOfCorrectiveAction;
		/**
		* @Column(name="comments", type="string",length=45, nullable=true)
		* */
		private $comments;
		/**
		* @Column(name="nonCompliances", type="string",length=45, nullable=true)
		* */
		private $nonCompliances;
		/**
		* @Column(name="suggestionsForImprovement", type="string",length=45, nullable=true)
		* */
		private $suggestionsForImprovement;
		/**
		* @Column(name="premixType", type="string",length=45, nullable=true)
		* */
		private $premixType;
		/**
		* @Column(name="compositeID", type="string",length=45, nullable=true)
		* */
		private $compositeID;
		
		/**
		* @Column(name="factoryEstimatesIronMgPerKg", type="decimal", nullable=true)
		* */
		private $factoryEstimatesIronMgPerKg;
		
		/**
		* @Column(name="labResultsIronMgPerKg", type="decimal", nullable=true)
		* */
		private $labResultsIronMgPerKg;
		
		/**
		* @Column(name="inspectionVitaminMgPerKg0", type="decimal",nullable=true)
		* */
		private $inspectionVitaminMgPerKg0;
		
		/**
		* @Column(name="IDOther", type="string",length=45, nullable=true)
		* */
		private $IDOther;
		
		/**
		* @Column(name="ironMgPerKg2", type="decimal",nullable=true)
		* */
		private $ironMgPerKg2;
		
		/**
		* @Column(name="vitaminAMgPerKg1", type="decimal",nullable=true)
		* */
		private $vitaminAMgPerKg1;
		
		/**
		* @Column(name="supervisorName", type="string",length=45, nullable=true)
		* */
		private $supervisorName;
		
		/**
		* @Column(name="supervisorDate", type="date",length=45, nullable=true)
		* */
		private $supervisorDate;
		
		
		public function getMaize_externalfortb2ID() {
				return $this -> maize_externalfortb2ID;
		}
		
		public function setMaize_externalfortb2ID($maize_externalforb2ID) { $this -> maize_externalfortb2ID = $maize_externalfortb2ID;
		}
		public function getInspectionRegistry() {
				return $this -> inspectionRegistry;
		}
		
		public function setInspectionRegistry($inspectionRegistry) { $this -> inspectionRegistry = $inspectionRegistry;
		}
		public function getDates() {
				return $this -> dates;
		}
		
		public function setDates($dates) { $this -> dates = $dates;
		}
		public function getPublicHealthOfficer() {
				return $this -> publicHealthOfficer;
		}
		
		public function setPublicHealthOfficer($publicHealthOfficer) { $this -> publicHealthOfficer = $publicHealthOfficer;
		}
		public function getFactoryName() {
				return $this -> factoryName;
		}
		
		public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
		}
		public function getProductionArea() {
				return $this -> productionArea;
		}
		
		public function setProductionArea($productionArea) { $this -> productionArea = $productionArea;
		}
		public function getPackagingArea() {
				return $this -> packagingArea;
		}
		
		public function setPackagingArea($packagingArea) { $this -> packagingArea = $packagingArea;
		}
		public function getWarehouse() {
				return $this -> warehouse;
		}
		
		public function setWarehouse($warehouse) { $this -> warehouse = $warehouse;
		}
		public function getStaffFacilities() {
				return $this -> staffFacilities;
		}
		
		public function setStaffFacilities($staffFacilities) { $this -> staffFacilities = $staffFacilities;
		}
		public function getHygiene() {
				return $this -> hygiene;
		}
		
		public function setHygiene($hygiene) { $this -> hygiene = $hygiene;
		}
		public function getProtectiveClothing() {
				return $this -> protectiveClothing;
		}
		
		public function setProtectiveClothing($protectiveClothing) { $this -> protectiveClothing = $protectiveClothing;
		}
		public function getTrainedInTasks() {
				return $this -> trainnedInTasks;
		}
		
		public function setTrainedInTasks($trainnedInTasks) { $this -> trainnedInTasks = $trainnedInTasks;
		}
		public function getReceiptAndStorage() {
				return $this -> receiptAndStorage;
		}
		
		public function setReceiptAndStorage($receiptAndStorage) { $this -> receiptAndStorage = $receiptAndStorage;
		}
		public function getPremixDilution() {
				return $this -> premixDilution;
		}
		
		public function setPremixDilution($premixDilution) { $this -> premixDilution = $premixDilution;
		}
		public function getFeederVerification() {
				return $this -> feederVerification;
		}
		
		public function setFeederVerification($feederVerification) { $this -> feederVerification = $feederVerification;
		}
		public function getSamplingOfMaize() {
				return $this -> samplingOfMaize;
		}
		
		public function setSamplingOfMaize($samplingOfMaize) { $this -> samplingOfMaize = $samplingOfMaize;
		}
		public function getIronSpotTest() {
				return $this -> ironSpotTest;
		}
		
		public function setIronSpotTest($ironSpotTest) { $this -> ironSpotTest = $ironSpotTest;
		}
		public function getPremixInventory() {
				return $this -> premixInventory;
		}
		
		public function setPremixInventory($premixInventory) { $this -> premixInventory = $premixInventory;
		}
		public function getCOAReceived() {
				return $this -> COAReceived;
		}
		
		public function setCOAReceived($COAReceived) { $this -> COAReceived = $COAReceived;
		}
		public function getPremixStored() {
				return $this -> premixStored;
		}
		
		public function setPremixStored($premixStored) { $this -> premixStored = $premixStored;
		}
		public function getPremixHandledWell() {
				return $this -> premixHandledWell;
		}
		
		public function setPremixHandledWell($premixHandledWell) { $this -> premixHandledWell = $premixHandledWell;
		}
		public function getPremixDilutionApplicable() {
				return $this -> premixDilutionApplicable;
		}
		
		public function setPremixDilutionApplicable($premixDilutionApplicable) { $this -> premixDilutionApplicable = $premixDilutionApplicable;
		}
		public function getHomogeneityAssessed() {
				return $this -> homogeneityAssessed;
		}
		
		public function setHomogenityAssessed($homogeneityAssessed) { $this -> homogeneityAssessed = $homogeneityAssessed;
		}
		public function getAdequateStorage() {
				return $this -> adequateStorage;
		}
		
		public function setAdequateStorage($adequateStorage) { $this -> adequateStorage = $adequateStorage;
		}
		public function getRecordsOfFeeder() {
				return $this -> dates;
		}
		
		public function setRecordsOfFeeder($recordsOfFeeder) { $this -> recordsOfFeeder = $recordsOfFeeder;
		}
		public function getPremixLevel() {
				return $this -> premixLevel;
		}
		
		public function setPremixLevel($premixLevel) { $this -> premixLevel = $premixLevel;
		}
		public function getRecordsOfFlour() {
				return $this -> recordsOfFlour;
		}
		
		public function setRecordsOfFlour($recordsOfFlour) { $this -> recordsOfFlour = $recordsOfFlour;
		}
		public function getFlourSamplesTaken() {
				return $this -> flourSamplesTaken;
		}
		
		public function setFlourSamplesTaken($flourSamplesTaken) { $this -> flourSamplesTaken = $flourSamplesTaken;
		}
		public function getRatioMaizeProduced() {
				return $this -> ratioMaizeProduced;
		}
		
		public function setRatioMaizeProduced($ratioMaizeProduced) { $this -> ratioMaizeProduced = $ratioMaizeProduced;
		}
		public function getIronContent() {
				return $this -> ironContent;
		}
		
		public function setIronContent($ironContent) { $this -> ironContent = $ironContent;
		}
		public function getSpotTest() {
				return $this -> spotTest;
		}
		
		public function setSpotTest($spotTest) { $this -> spotTest = $spotTest;
		}
		public function getQuantitativeMethodIron() {
				return $this -> quantitativeMethodIron;
		}
		
		public function setQuantitativeMethodIron($quantitativeMethodIron) { $this -> quantitativeMethodIron = $quantitativeMethodIron;
		}
		public function getQuantitativeMethodVitamin() {
				return $this -> quantitativeMethodVitamin;
		}
		
		public function setQuantitativeMethodVitamin($quantitativeMethodVitamin) { $this -> quantitativeMethodVitamin = $quantitativeMethodVitamin;
		}
		public function getDailyCompositeSamples() {
				return $this -> dailyCompositeSamples;
		}
		
		public function setDailyCompositeSamples($dailyCompositeSamples) { $this -> dailyCompositeSamples = $dailyCompositeSamples;
		}
		public function getLast30Samples() {
				return $this -> last30Samples;
		}
		
		public function setLast30Samples($last30Samples) { $this -> last30Samples = $last30Samples;
		}
		public function getLabelingMeetsSpecifications() {
				return $this -> labelingMeetsSpecifications;
		}
		
		public function setLabelingMeetsSpecifications($labelingMeetsSpecifications) { $this -> labelingMeetsSpecifications = $labelingMeetsSpecifications;
		}
		public function getFortifiedMaizeFlour() {
				return $this -> fortifiedMaizeFlour;
		}
		
		public function setFortifiedMaizeFlour($fortifiedMaizeFlour) { $this -> fortifiedMaizeFlour = $fortifiedMaizeFlour;
		}
		
		public function getFIFOSystemPremix() {
				return $this -> FIFOSystemPremix;
		}
		
		public function setFIFOSystemPremix($FIFOSystemPremix) { $this -> FIFOSystemPremix = $FIFOSystemPremix;
		}
		
		public function getFIFOSystemFlour() {
				return $this -> FIFOSystemFlour;
		}
		
		public function setFIFOSystemFlour($FIFOSystemFlour) { $this -> FIFOSystemFlour = $FIFOSystemFlour;
		}
		
		public function getRecommendations() {
				return $this -> recommendations;
		}
		
		public function setRecommendations($recommendations) { $this -> recommendations = $recommendations;
		}
		public function getCorrectiveActions() {
				return $this -> correctiveActions;
		}
		
		public function setCorrectiveActions($correctiveActions) { $this -> correctiveActions = $correctiveActions;
		}
		public function getAssessmentOfCorrectiveAction() {
				return $this -> assessmentOfCorrectiveAction;
		}
		
		public function setAssessmentOfCorrectiveAction($assessmentOfCorrectiveAction) { $this -> assessmentOfCorrectiveAction = $assessmentOfCorrectiveAction;
		}
		public function getComments() {
				return $this -> comments;
		}
		
		public function setComments($comments) { $this -> comments = $comments;
		}
		public function getNonCompliances() {
				return $this -> nonCompliances;
		}
		
		public function setNonCompliances($nonCompliances) { $this -> nonCompliances = $nonCompliances;
		}
		public function getSuggestionsForImprovement() {
				return $this -> suggestionsForImprovement;
		}
		
		public function setSuggestionsForImprovement($suggestionsForImprovement) { $this -> suggestionsForImprovement = $suggestionsForImprovement;
		}
		public function getPremixType() {
				return $this ->premixType;
		}
		
		public function setPremixType($premixType) { $this -> premixType = $premixType;
		}
		
		public function getCompositeID() {
				return $this -> compositeID;
		}
		
		public function setCompositeID($compositeID) { $this -> compositeID = $compositeID;
		}
		public function getFactoryEstimatesIronMgPerKg() {
				return $this -> factoryEstimatesIronMgPerKg;
		}
		
		public function setFactoryEstimatesIronMgPerKg($factoryEstimatesIronMgPerKg) { $this -> factoryEstimatesIronMgPerKg = $factoryEstimatesIronMgPerKg;
		}
		
		public function getIronMgPerKg2() {
				return $this -> ironMgPerKg2;
		}
		
		public function setIronMgPerKg2($ironMgPerKg2) { $this -> ironMgPerKg2 = $ironMgPerKg2;
		}
		
		public function getLabResultsIronMgPerKg() {
				return $this -> labResultsIronMgPerKg;
		}
		
		public function setLabResultsIronMgPerKg($labResultsIronMgPerKg) { $this -> labResultsIronMgPerKg = $labResultsIronMgPerKg;
		}
		public function getInspectionVitaminMgPerKg0() {
				return $this -> inspectionVitaminMgPerKg0;
		}
		
		public function setInspectionVitaminMgPerKg0($inspectionVitaminMgPerKg0) { $this -> inspectionVitaminMgPerKg0 = $inspectionVitaminMgPerKg0;
		}
		public function getIDOther() {
				return $this -> IDOther;
		}
		
		public function setIDOther($IDOther) { $this -> IDOther = $IDOther;
		}
		public function getInspectionVitaminMgPerKg1() {
				return $this -> vitaminAMgPerKg1;
		}
		
		public function setInspectionVitaminMgPerKg1($vitaminAMgPerKg1) { $this -> vitaminAMgPerKg1 = $vitaminAMgPerKg1;
		}
		public function getSupervisorName() {
				return $this -> supervisorName;
		}
		
		public function setSupervisorName($supervisorName) { $this -> supervisorName = $supervisorName;
		}
		public function getSupervisorDate() {
				return $this -> supervisorDate;
		}
		
		public function setSupervisorDate($supervisorDate) { $this -> supervisorDate = $supervisorDate;
		}
 }
?>