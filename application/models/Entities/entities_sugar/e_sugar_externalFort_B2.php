<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_externalfortb2")
 */
 class E_Sugar_externalFort_B2{
 	/**
* @Id
* @Column(name="sugar_externalfortB2ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_externalfortB2ID;
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
* @Column(name="trainedInTasks", type="string",length=45, nullable=true)
* */
private $trainedInTasks;
/**
* @Column(name="receiptAndStorage", type="string",length=45, nullable=true)
* */
private $receiptAndStorage;
/**
* @Column(name="feederVerification", type="string",length=45, nullable=true)
* */
private $feederVerification;
/**
* @Column(name="sugarSampling", type="string",length=45, nullable=true)
* */
private $sugarSampling;
/**
* @Column(name="vitaminAAssay", type="string",length=45, nullable=true)
* */
private $vitaminAAssay;
/**
* @Column(name="premixInventory", type="string",length=45, nullable=true)
* */
private $premixInventory;
/**
* @Column(name="adequateStorage", type="string",length=45, nullable=true)
* */
private $adequateStorage;
/**
* @Column(name="FIFOSystem", type="string",length=45, nullable=true)
* */
private $FIFOSystem;
/**
* @Column(name="deliveredAdequately", type="string",length=45, nullable=true)
* */
private $deliveredAdequately;
/**
* @Column(name="retinolLevels", type="string",length=45, nullable=true)
* */
private $retinolLevels;
/**
* @Column(name="feederFlow", type="string",length=45, nullable=true)
* */
private $feederFlow;
/**
* @Column(name="feederRecords", type="string",length=45, nullable=true)
* */
private $feederRecords;
/**
* @Column(name="feederAdjusted", type="string",length=45, nullable=true)
* */
private $feederAdjusted;
/**
* @Column(name="premixLevelAdequate", type="string",length=45, nullable=true)
* */
private $premixLevelAdequate;
/**
* @Column(name="maintenanceEvidence", type="string",length=45, nullable=true)
* */
private $maintenanceEvidence;
/**
* @Column(name="sugarRecords", type="string",length=45, nullable=true)
* */
private $sugarRecords;
/**
* @Column(name="sugarSamples", type="string",length=45, nullable=true)
* */
private $sugarSamples;
/**
* @Column(name="sugarRatio", type="string",length=45, nullable=true)
* */
private $sugarRatio;
/**
* @Column(name="retinolResults", type="string",length=45, nullable=true)
* */
private $retinolResults;
/**
* @Column(name="semiQuantitativeMethod", type="string",length=45, nullable=true)
* */
private $semiQuantitativeMethod;
/**
* @Column(name="internalLab", type="string",length=45, nullable=true)
* */
private $internalLab;
/**
* @Column(name="externalLab", type="string",length=45, nullable=true)
* */
private $externalLab;
/**
* @Column(name="dailySamples", type="string",length=45, nullable=true)
* */
private $dailySamples;
/**
* @Column(name="last30Samples", type="string",length=45, nullable=true)
* */
private $last30Samples;
/**
* @Column(name="labelingSpecifications", type="string",length=45, nullable=true)
* */
private $labelingSpecifications;
/**
* @Column(name="fortifiedSugar", type="string",length=45, nullable=true)
* */
private $fortifiedSugar;
/**
* @Column(name="FIFOSystemDispatch", type="string",length=45, nullable=true)
* */
private $FIFOSystemDispatch;
/**
* @Column(name="recommendations", type="string",length=45, nullable=true)
* */
private $recommendations;
/**
* @Column(name="correctiveActions", type="string",length=45, nullable=true)
* */
private $correctiveActions;
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
* @Column(name="premixType", type="string",length=45, nullable=true)
* */
private $premixType;
/**
* @Column(name="IDSamples", type="string",length=45, nullable=true)
* */
private $IDSamples;
/**
* @Column(name="estimatedAverage0", type="string",length=45, nullable=true)
* */
private $estimatedAverage0;
/**
* @Column(name="inspectionResults0", type="string",length=45, nullable=true)
* */
private $inspectionResults0;
/**
* @Column(name="IDOtherSamples", type="string",length=45, nullable=true)
* */
private $IDOtherSamples;
/**
* @Column(name="estimatedAverage1", type="string",length=45, nullable=true)
* */
private $estimatedAverage1;
/**
* @Column(name="inspectionResults1", type="string",length=45, nullable=true)
* */
private $inspectionResults1;
/**
* @Column(name="officerName", type="string",length=45, nullable=true)
* */
private $officerName;
/**
* @Column(name="officerSignature", type="string",length=45, nullable=true)
* */
private $officerSignature;
/**
* @Column(name="officerDate", type="string",length=45, nullable=true)
* */
private $officerDate;
/**
* @Column(name="supervisorName", type="string",length=45, nullable=true)
* */
private $supervisorName;
/**
* @Column(name="supervisorSignature", type="string",length=45, nullable=true)
* */
private $supervisorSignature;
/**
* @Column(name="supervisorDate", type="date",length=45, nullable=true)
* */
private $supervisorDate;
public function getSugar_externalfortB2ID() {
		return $this -> sugar_externalfortB2ID;
}

public function setSugar_externalfortB2ID($sugar_externalforB2ID) { $this -> sugar_externalfortB2ID = $sugar_externalfortB2ID;
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

public function setStaffFacilities($staffFacilities) { $this -> staffFacilites = $staffFacilities;
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
		return $this -> trainedInTasks;
}

public function setTrainedInTasks($trainedInTasks) { $this -> trainedInTasks = $trainedInTasks;
}
public function getReceiptAndStorage() {
		return $this -> receiptAndStorage;
}

public function setReceiptAndStorage($receiptAndStorage) { $this -> receiptAndStorage = $receiptAndStorage;
}

public function getFeederVerification() {
		return $this -> feederVerification;
}

public function setFeederVerification($feederVerification) { $this -> feederVerification = $feederVerification;
}
public function getSugarSampling() {
		return $this -> sugarSampling;
}

public function setSugarSampling($sugarSampling) { $this -> sugarSampling = $sugarSampling;
}
public function getVitaminAAssay() {
		return $this -> vitaminAAssay;
}

public function setVitaminAAssay($vitaminAAssay) { $this -> vitaminAAssay = $vitaminAAssay;
}
public function getPremixInventory() {
		return $this -> premixInventory;
}

public function setPremixInventory($premixInventory) { $this -> premixInventory = $premixInventory;
}
public function getAdequateStorage() {
		return $this -> adequateStorage;
}

public function setAdequateStorage($adequateStorage) { $this -> adequateStorage = $adequateStorage;
}
public function getFIFOSystem() {
		return $this -> FIFOSystem;
}

public function setFIFOSystem($FIFOSystem) { $this -> FIFOSystem = $FIFOSystem;
}
public function getDeliveredAdequately() {
		return $this -> deliveredAdequately;
}

public function setDeliveredAdequately($deliveredAdequately) { $this -> deliveredAdequately = $deliveredAdequately;
}
public function getRetinolLevels() {
		return $this -> retinolLevels;
}

public function setRetinolLevels($retinolLevels) { $this -> retinolLevels = $retinolLevels;
}
public function getFeederFlow() {
		return $this -> feederFlow;
}

public function setFeederFlow($feederFlow) { $this -> feederFlow = $feederFlow;
}
public function getFeederRecords() {
		return $this -> feederRecords;
}

public function setFeederRecords($feederRecords) { $this -> feederRecords = $feederRecords;
}
public function getFeederAdjusted() {
		return $this -> feederAdjusted;
}

public function setFeederAdjusted($feederAdjusted) { $this -> feederAdjusted = $feederAdjusted;
}
public function getPremixLevelAdequate() {
		return $this -> premixLevelAdequate;
}

public function setPremixLevelAdequate($premixLevelAdequate) { $this -> premixLevelAdequate = $premixLevelAdequate;
}
public function getMaintenanceEvidence() {
		return $this -> maintenanceEvidence;
}

public function setMaintenanceEvidence($maintenanceEvidence) { $this -> maintenanceEvidence = $maintenanceEvidence;
}
public function getSugarRecords() {
		return $this -> sugarRecords;
}

public function setSugarRecords($sugarRecords) { $this -> sugarRecords = $sugarRecords;
}
public function getSugarRatio() {
		return $this -> sugarRatio;
}

public function setSugarRatio($sugarRatio) { $this -> sugarRatio = $sugarRatio;
}
public function getRetinolResults() {
		return $this -> retinolResults;
}

public function setRetinolResults($retinolResults) { $this -> retinolResults = $retinolResults;
}
public function getSemiQuantitativeMethods() {
		return $this -> semiQuantitativeMethod;
}

public function setSemiQuantitativeMethod($semiQuantitativeMethod) { $this -> semiQuantitativeMethod = $semiQuantitativeMethod;
}
public function getInternalLab() {
		return $this -> internalLab;
}

public function setInternalLab($internalLab) { $this -> internalLab = $internalLab;
}
public function getExternalLab() {
		return $this -> externalLab;
}

public function setExternalLab($externalLab) { $this -> externalLab = $externalLab;
}
public function getDailySamples() {
		return $this -> dailySamples;
}

public function setDailySamples($dailySamples) { $this -> dailySamples = $dailySamples;
}
public function getLast30Samples() {
		return $this -> last30Samples;
}

public function setLast30Samples($last30Samples) { $this -> last30Samples = $last30Samples;
}
public function getLabelingSpecifications() {
		return $this -> labelingSpecifications;
}

public function setLabelingSpecifications($labelingSpecifications) { $this -> labelingSpecifications = $labelingSpecifications;
}
public function getFortifiedSugar() {
		return $this -> fortifiedSugar;
}

public function setFortifiedSugar($fortifiedSugar) { $this -> fortifiedSugar = $fortifiedSugar;
}
public function getFIFOSystemDispatch() {
		return $this -> FIFOSystemDispatch;
}

public function setFIFOSystemDispatch($FIFOSystemDispatch) { $this -> FIFOSystemDispatch = $FIFOSystemDispatch;
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
public function getAssessment() {
		return $this -> assessment;
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
public function getPremixType() {
		return $this ->premixType;
}

public function setPremixType($premixType) { $this -> premixType = $premixType;
}
public function getIDSamples() {
		return $this -> IDSamples;
}

public function setIDsamples($IDSamples) { $this -> IDSamples = $IDSamples;
}
public function getEstimatedAverage0() {
		return $this -> estimatedAverage0;
}

public function setEstimatedAverage0($estimatedAverage0) { $this -> estimatedAverage0 = $estimatedAverage0;
}
public function getInspectionResults0() {
		return $this -> inspectionResults0;
}

public function setInspectionResults0($inspectionResults0) { $this -> inspectionResults0 = $inspectionResults0;
}
public function getIDOtherSamples() {
		return $this -> IDOtherSamples;
}

public function setIDOtherSamples($IDOtherSamples) { $this ->IDOtherSamples = $IDOtherSamples;
}
public function getEstimatedAverage1() {
		return $this -> estimatedAverage1;
}

public function setEstimatedAverage1($estimatedAverage1) { $this -> estimatedAverage1 = $estimatedAverage1;
}
public function getInspectionResults1() {
		return $this -> inspectionResults1;
}

public function setInspectionResults1($inspectionResults1) { $this -> inspectionResults1 = $inspectionResults1;
}
public function getOfficerName() {
		return $this -> officerName;
}

public function setOfficerName($officerName) { $this -> officerName = $officerName;
}
public function getOfficerSignature() {
		return $this -> officerSignature;
}

public function setOfficerSignature($officerSignature) { $this -> officerSignature = $officerSignature;
}
public function getOfficerDate() {
		return $this -> officerDate;
}

public function setOfficerDate($officerDate) { $this -> officerDate = $officerDate;
}
public function getSupervisorName() {
		return $this -> supervisorName;
}

public function setSupervisorName($supervisorName) { $this -> supervisorName = $supervisorName;
}
public function getSupervisorSignature() {
		return $this -> supervisorSignature;
}

public function setSupervisorSignature($supervisorSignature) { $this -> supervisorSignature = $supervisorSignature;
}
public function getSupervisorDate() {
		return $this -> supervisorDate;
}

public function setSupervisorDate($supervisorDate) { $this -> supervisorDate = $supervisorDate;
}
 }
?>