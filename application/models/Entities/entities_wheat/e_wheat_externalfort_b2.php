<?php
namespace models\Entities\entities_wheat;

/**
 * @Entity
 * @Table(name="wheat_externalfortb2")
 */
 class E_Wheat_ExternalFort_B2{
	/**
	* @Id
	* @Column(name="wheat_externalFortB2ID", type="integer", length=11, nullable=false)
	* @GeneratedValue(strategy="AUTO")
	* */
	private $wheat_externalFortB2ID;
	
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
	* @Column(name="wearingProtective", type="string",length=45, nullable=true)
	* */
	private $wearingProtective;
	
	/**
	* @Column(name="trainnedInTasks", type="string",length=45, nullable=true)
	* */
	private $trainnedInTasks;
	
	/**
	* @Column(name="receiptAndStorage", type="string",length=45, nullable=true)
	* */
	private $receiptAndStorage;
	
	/**
	* @Column(name="premixDilutionApplicable", type="string",length=45, nullable=true)
	* */
	private $premixDilutionApplicable;
	
	/**
	* @Column(name="feederVerification", type="string",length=45, nullable=true)
	* */
	private $feederVerification;
	
	/**
	* @Column(name="samplingOfWheatFlour", type="string",length=45, nullable=true)
	* */
	private $samplingOfWheatFlour;
	
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
	* @Column(name="FIFOSystemPremix", type="string",length=45, nullable=true)
	* */
	private $FIFOSystemPremix;
	
	/**
	* @Column(name="FIFOSystemFlour", type="string",length=45, nullable=true)
	* */
	private $FIFOSystemFlour;
	
	/**
	* @Column(name="premixHandledWell", type="string",length=45, nullable=true)
	* */
	private $premixHandledWell;
	
	/**
	* @Column(name="premixDilution", type="string",length=45, nullable=true)
	* */
	private $premixDilution;
	
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
	* @Column(name="flourSamples", type="string",length=45, nullable=true)
	* */
	private $flourSamples;
	
	/**
	* @Column(name="ratioWheatProduced", type="string",length=45, nullable=true)
	* */
	private $ratioWheatProduced;
	
	/**
	* @Column(name="ironContent", type="string",length=45, nullable=true)
	* */
	private $ironContent;
	
	/**
	* @Column(name="spotTestIron", type="string",length=45, nullable=true)
	* */
	private $spotTestIron;
	
	/**
	* @Column(name="quantitativeMethodIron", type="string",length=45, nullable=true)
	* */
	private $quantitativeMethodIron;
	
	/**
	* @Column(name="quantitativeMethodVitaminA", type="string",length=45, nullable=true)
	* */
	private $quantitativeMethodVitaminA;
	
	/**
	* @Column(name="dailyCompositeSamples", type="string",length=45, nullable=true)
	* */
	private $dailyCompositeSamples;
	
	/**
	* @Column(name="labellingMeetsSpecifications", type="string",length=45, nullable=true)
	* */
	private $labellingMeetsSpecifications;
	
	/**
	* @Column(name="fortifiedWheatFlour", type="string",length=45, nullable=true)
	* */
	private $fortifiedWheatFlour;
	
	
	/**
	* @Column(name="recommendations", type="string",length=45, nullable=true)
	* */
	private $recommendations;
	
	/**
	* @Column(name="correctiveActionsTaken", type="string",length=45, nullable=true)
	* */
	private $correctiveActionsTaken;
	
	/**
	* @Column(name="assessment", type="string",length=45, nullable=true)
	* */
	private $assessment;
	
	/**
	* @Column(name="comments", type="string",length=45, nullable=true)
	* */
	private $comments;
	
	/**
	* @Column(name="nonCompliances", type="string",length=45, nullable=true)
	* */
	private $nonCompliances;
	
	/**
	* @Column(name="suggestions", type="string",length=45, nullable=true)
	* */
	private $suggestions;
	
	/**
	* @Column(name="typeOfIron", type="string",length=45, nullable=true)
	* */
	private $typeOfIron;
	
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
	* @Column(name="IDOtherSamples", type="string",length=45, nullable=true)
	* */
	private $IDOtherSamples;
	
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
	
	public function getWheat_externalFortB2ID() {
			return $this -> wheat_externalFortB2ID;
	}
	
	public function setWheat_externalFortB2ID($wheat_externalForB2ID) { $this -> wheat_externalFortB2ID = $wheat_externalFortB2ID;
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
	
	public function getWearingProtective() {
			return $this -> wearingProtective;
	}
	
	public function setWearingProtective($wearingProtective) { $this -> wearingProtective = $wearingProtective;
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
	
	public function getPremixDilutionApplicable() {
			return $this -> premixDilutionApplicable;
	}
	
	public function setPremixDilutionApplicable($premixDilutionApplicable) { $this -> premixDilutionApplicable = $premixDilutionApplicable;
	}
	
	public function getFeederVerification() {
			return $this -> feederVerification;
	}
	
	public function setFeederVerification($feederVerification) { $this -> feederVerification = $feederVerification;
	}
	
	public function getSamplingOfWheatFlour() {
			return $this -> samplingOfWheatFlour;
	}
	
	public function setSamplingOfWheatFlour($samplingOfWheatFlour) { $this -> samplingOfWheatFlour = $samplingOfWheatFlour;
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
	
	public function getPremixHandledWell() {
			return $this -> premixHandledWell;
	}
	
	public function setPremixHandledWell($premixHandledWell) { $this -> premixHandledWell = $premixHandledWell;
	}
	
	public function getPremixDilution() {
			return $this -> premixDilution;
	}
	
	public function setPremixDilution($premixDilution) { $this -> premixDilution = $premixDilution;
	}
	
	public function getHomogeneityAssessed() {
			return $this -> homogeneityAssessed;
	}
	
	public function setHomogeneityAssessed($homogeneityAssessed) { $this -> homogeneityAssessed = $homogeneityAssessed;
	}
	
	public function getAdequateStorage() {
			return $this -> adequateStorage;
	}
	
	public function setAdequateStorage($adequateStorage) { $this -> adequateStorage = $adequateStorage;
	}
	
	public function getRecordsOfFeeder() {
			return $this -> recordsOfFeeder;
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
	
	public function getFlourSamples() {
			return $this -> flourSamples;
	}
	
	public function setFlourSamples($flourSamples) { $this -> flourSamples = $flourSamples;
	}
	
	public function getRatioWheatProduced() {
			return $this -> ratioWheatProduced;
	}
	
	public function setRatioWheatProduced($ratioWheatProduced) { $this -> ratioWheatProduced = $ratioWheatProduced;
	}
	
	public function getIronContent() {
			return $this -> ironContent;
	}
	
	public function setIronContent($ironContent) { $this -> ironContent = $ironContent;
	}
	
	public function getSpotTestIron() {
			return $this -> spotTestIron;
	}
	
	public function setSpotTestIron($spotTestIron) { $this -> spotTestIron = $spotTestIron;
	}
	
	public function getQuantitativeMethodIron() {
			return $this -> quantitativeMethodIron;
	}
	
	public function setQuantitativeMethodIron($quantitativeMethodIron) { $this -> quantitativeMethodIron = $quantitativeMethodIron;
	}
	
	public function getQuantitativeMethodVitaminA() {
			return $this -> quantitativeMethodVitaminA;
	}
	
	public function setQuantitativeMethodVitaminA($quantitativeMethodVitaminA) { $this -> quantitativeMethodVitaminA = $quantitativeMethodVitaminA;
	}
	
	public function getDailyCompositeSamples() {
			return $this -> dailyCompositeSamples;
	}
	
	public function setDailyCompositeSamples($dailyCompositeSamples) { $this -> dailyCompositeSamples = $dailyCompositeSamples;
	}
	
	public function getLabellingMeetsSpecifications() {
			return $this -> labellingMeetsSpecifications;
	}
	
	public function setLabellingMeetsSpecifications($labellingMeetsSpecifications) { $this -> labellingMeetsSpecifications = $labellingMeetsSpecifications;
	}
	
	public function getFortifiedWheatFlour() {
			return $this -> fortifiedWheatFlour;
	}
	
	public function setFortifiedWheatFlour($fortifiedWheatFlour) { $this -> fortifiedWheatFlour = $fortifiedWheatFlour;
	}
	
	public function getRecommendations() {
			return $this -> recommendations;
	}
	
	public function setRecommendations($recommendations) { $this -> recommendations = $recommendations;
	}
	
	public function getCorrectiveActionsTaken() {
			return $this -> correctiveActionsTaken;
	}
	
	public function setCorrectiveActionsTaken($correctiveActionsTaken) { $this -> correctiveActionsTaken = $correctiveActionsTaken;
	}
	
	public function getAssessment() {
			return $this -> assessmentO;
	}
	
	public function setAssessment($assessment) { $this -> assessment = $assessment;
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
	
	public function getSuggestions() {
			return $this -> suggestions;
	}
	
	public function setSuggestions($suggestions) { $this -> suggestions = $suggestions;
	}
	
	public function getTypeOfIron() {
			return $this ->typeOfIron;
	}
	
	public function setTypeOfIron($typeOfIron) { $this -> typeOfIron = $typeOfIron;
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
			return $this -> IDOtherSamples;
	}
	
	public function setIDOther($IDOtherSamples) { $this -> IDOtherSamples = $IDOtherSamples;
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