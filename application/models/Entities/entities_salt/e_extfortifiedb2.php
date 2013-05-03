<?php

namespace models\Entities\entities_salt;

/**
 * @Entity
 * @Table(name="externalfortifiedb2")
 */

class E_ExtFortifiedB2 {

	/**
	 * @Id
	 * @Column(name="transactionNumber", type="int", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $transactionNumber;
	
	/**
	 * @Column(name="dates", type="date", nullable=false)
	 * */
	private $dates;
	
	/**
	 * @Column(name="publicHealthOfficer", type="string",length=45, nullable=true)
	 * */
	private $publicHealthOfficer;
	
	/**
	 * @Column(name="factoryName", type="string",length=45, nullable=false)
	 * @ManyToOne(targetEntity="factories", inversedBy="factoryName")
	 * */
	private $factoryName;
	
	/**
	 * @Column(name="productionArea", type="string",length=45, nullable=true)
	 * */
	private $productionArea;
	
	/**
	 * @Column(name="packageArea", type="string",length=45, nullable=true)
	 * */
	private $packageArea;
	
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
	 * @Column(name="protectiveGear", type="string",length=45, nullable=true)
	 * */
	private $protectiveGear;
	
	/**
	 * @Column(name="trainingInTasks", type="string",length=45, nullable=true)
	 * */
	private $trainingInTasks;
	
	
	/**
	 * @Column(name="receiptStoragePremix", type="string",length=45, nullable=true)
	 * */
	private $receiptStoragePremix;
	
	/**
	 * @Column(name="premixDilution", type="string",length=45, nullable=true)
	 * */
	private $premixDilution;
	
	/**
	 * @Column(name="feederVerification", type="string",length=45, nullable=true)
	 * */
	private $feederVerification;
	
	/**
	 * @Column(name="QCSaltSampling", type="string",length=45, nullable=true)
	 * */
	private $QCSaltSampling;
	
	/**
	 * @Column(name="iodineTest", type="string",length=45, nullable=true)
	 * */
	private $iodineTest;
	
	/**
	 * @Column(name="iodineCompoundUptoDate", type="string",length=45, nullable=true)
	 * */
	private $iodineCompupdate;
	
	/**
	 * @Column(name="coaperLot", type="string",length=45, nullable=true)
	 * */
	private $coaperLot;
	
	/**
	 * @Column(name="iodineStorageAdequate", type="string",length=45, nullable=true)
	 * */
	private $iodineStorageAdequate;
	
	/**
	 * @Column(name="fifoSystem", type="string",length=45, nullable=true)
	 * */
	private $fifoSystem;
	
	/**
	 * @Column(name="iodineCompoundHandling", type="string",length=45, nullable=true)
	 * */
	private $iodineCompHandling;
	
	/**
	 * @Column(name="premixPreparation", type="string",length=10, nullable=true)
	 * */
	private $premixPreparation;
	
	/**
	 * @Column(name="premixStorageHandling", type="string",length=45, nullable=true)
	 * */
	private $premixStorageHandling;
	
	/**
	 * @Column(name="feederSprayerRecord", type="string",length=45, nullable=true)
	 * */
	private $feederSprayerRecord;
	
	/**
	 * @Column(name="feederLevelAdequate", type="string",length=45, nullable=true)
	 * */
	private $feederLevelAdequate;
	
	/**
	 * @Column(name="saltProductionPremixRecords", type="string",length=45, nullable=true)
	 * */
	private $saltProductionPremixRecords;
	
	/**
	 * @Column(name="saltSamplingEachShift", type="string",length=45, nullable=true)
	 * */
	private $saltSamplingEachShift;
	
	/**
	 * @Column(name="saltProductionPremixRight", type="string",length=45, nullable=true)
	 * */
	private $saltProductionPremixRight;
	
	/**
	 * @Column(name="iodineResultLess40MgPerKg", type="string",length=45, nullable=true)
	 * */
	private $iodineResultLess40MgPerKg;
	
	/**
	 * @Column(name="internalTest", type="string",length=45, nullable=true)
	 * */
	private $internalTest;
	
	/**
	 * @Column(name="externalTest", type="string",length=45, nullable=true)
	 * */
	private $externalTest;
	
	/**
	 * @Column(name="dailyCompositeSamples", type="string",length=45, nullable=true)
	 * */
	private $dailyCompositeSamples;
	
	/**
	 * @Column(name="last30SamplesAvailable", type="string",length=45, nullable=true)
	 * */
	private $last30SamplesAvailable;
	
	/**
	 * @Column(name="labelingSpecifications", type="string",length=45, nullable=true)
	 * */
	private $labelingSpecifications;
	
	/**
	 * @Column(name="fortifiedSaltStoredAdequate", type="string",length=45, nullable=true)
	 * */
	private $fortifiedSaltStorageAdequate;
	
	/**
	 * @Column(name="recommendations", type="string",length=45, nullable=true)
	 * */
	private $recommendations;
	
	/**
	 * @Column(name="correctiveActions", type="string",length=45, nullable=true)
	 * */
	private $correctiveActions;
	
	/**
	 * @Column(name="assessmentOfCorrectiveAction", type="integer",length=1, nullable=true)
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
	 * @Column(name="idComposite", type="string",length=45, nullable=true)
	 * */
	private $idComposite;
	
	/**
	 * @Column(name="premixType", type="string",length=45, nullable=true)
	 * */
	private $premixType;
	
	/**
	 * @Column(name="iodineMgPerKg0", type="string",length=45, nullable=true)
	 * */
	private $iodineMgPerKg0;
	
	/**
	 * @Column(name="refIodine", type="string",length=45, nullable=true)
	 * */
	private $refIodine;
	
	/**
	 * @Column(name="iodineMgPerKg1", type="string",length=45, nullable=true)
	 * */
	private $iodineMgPerKg1;
	
	/**
	 * @Column(name="idOther", type="string",length=45, nullable=true)
	 * */
	private $idOther;
	
	/**
	 * @Column(name="iodineMgPerKg2", type="string",length=45, nullable=true)
	 * */
	private $iodineMgPerKg2;
	
	
	
	/**
	 * @Column(name="supervisorName", type="string",length=45, nullable=true)
	 * */
	private $supervisorName;
	

	public function getTransactionNumber() {
		return $this -> transactionNumber;
	}

	public function setTransactionNumber($transactionNumber) { $this -> transactionNumber = $transactionNumber;
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

	public function getPackageArea() {
		return $this -> packageArea;
	}

	public function setPackageArea($packageArea) { $this -> packageArea = $packageArea;
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

	public function getProtectiveGear() {
		return $this -> protectiveGear;
	}

	public function setProtectiveGear($protectiveGear) { $this -> protectiveGear = $protectiveGear;
	}

	public function getTrainingInTasks() {
		return $this -> trainingInTasks;
	}

	public function setTrainingInTasks($trainingInTasks) { $this -> trainingInTasks = $trainingInTasks;
	}

	/*public function getWrittenProcedures() {
		return $this -> writtenProcedures;
	}

	public function setWrittenProcedures($writtenProcedures) { $this -> writtenProcedures = $writtenProcedures;
	}*/

	public function getReceiptsStoragePremix() {
		return $this -> receiptStoragePremix;
	}

	public function setReceiptsStoragePremix($receiptStoragePremix) { $this -> receiptStoragePremix = $receiptStoragePremix;
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

	public function getQCSaltSampling() {
		return $this -> QCSaltSampling;
	}

	public function setQCSaltSampling($QCSaltSampling) { $this -> QCSaltSampling = $QCSaltSampling;
	}

	public function getIodineTest() {
		return $this -> iodineTest;
	}

	public function setIodineTest($iodineTest) { $this -> iodineTest = $iodineTest;
	}

	/*public function getIodineTest() {
		return $this -> iodineTest;
	}

	public function setIodineTest($iodineTest) { $this -> iodineTest = $iodineTest;
	}*/

	public function getIodineCompupdate() {
		return $this -> iodineCompupdate;
	}

	public function setIodineCompupdate($iodineCompupdate) { $this -> iodineCompupdate = $iodineCompupdate;
	}

	public function getCoaperLot() {
		return $this -> coaperLot;
	}

	public function setCoaperLot($coaperLot) { $this -> coaperLot = $coaperLot;
	}

	public function getIodineStorageAdequate() {
		return $this -> iodineStorageAdequate;
	}

	public function setIodineStorageAdequate($iodineStorageAdequate) { $this -> iodineStorageAdequate = $iodineStorageAdequate;
	}

	public function getFifoSystem() {
		return $this -> fifoSystem;
	}

	public function setFifoSystem($fifoSystem) { $this -> fifoSystem = $fifoSystem;
	}

	public function getIodineCompHandling() {
		return $this -> iodineCompHandling;
	}

	public function setIodineCompHandling($iodineCompHandling) { $this -> iodineCompHandling = $iodineCompHandling;
	}

	public function getPremixPreparation() {
		return $this -> premixPreparation;
	}

	public function setPremixPreparation($premixPreparation) { $this -> premixPreparation = $premixPreparation;
	}

	public function getPremixStorageHandling() {
		return $this -> premixStorageHandling;
	}

	public function setPremixStorageHandling($premixStorageHandling) { $this -> premixStorageHandling = $premixStorageHandling;
	}

	public function getFeederSprayerRecord() {
		return $this -> feederSprayerRecord;
	}

	public function setFeederSprayerRecord($feederSprayerRecord) { $this -> feederSprayerRecord = $feederSprayerRecord;
	}

	public function getFeederLevelAdequate() {
		return $this -> feederLevelAdequate;
	}

	public function setFeederLevelAdequate($feederLevelAdequate) { $this -> feederLevelAdequate = $feederLevelAdequate;
	}

	public function getSaltProductionPremixRecords() {
		return $this -> saltProductionPremixRecords;
	}

	public function setSaltProductionPremixRecords($saltProductionPremixRecords) { $this -> saltProductionPremixRecords = $saltProductionPremixRecords;
	}

	public function getSaltSamplingEachShift() {
		return $this -> saltSamplingEachShift;
	}

	public function setSaltSamplingEachShift($saltSamplingEachShift) { $this -> saltSamplingEachShift = $saltSamplingEachShift;
	}

	public function getSaltProductionPremixRight() {
		return $this -> saltProductionPremixRight;
	}

	public function setSaltProductionPremixRight($saltProductionPremixRight) { $this -> saltProductionPremixRight = $saltProductionPremixRight;
	}

	public function getIodineResultLess40MgPerKg() {
		return $this -> iodineResultLess40MgPerKg;
	}

	public function setIodineResultLess40MgPerKg($iodineResultLess40MgPerKg) { $this -> iodineResultLess40MgPerKg = $iodineResultLess40MgPerKg;
	}

	public function getInternalTest() {
		return $this -> internalTest;
	}

	public function setInternalTest($internalTest) { $this -> internalTest = $internalTest;
	}

	public function getExternalTest() {
		return $this -> externalTest;
	}

	public function setExternalTest($externalTest) { $this -> externalTest = $externalTest;
	}

	public function getDailyCompositeSamples() {
		return $this -> dailyCompositeSamples;
	}

	public function setDailyCompositeSamples($dailyCompositeSamples) { $this -> dailyCompositeSamples = $dailyCompositeSamples;
	}

	public function getLast30SamplesAvailable() {
		return $this -> last30SamplesAvailable;
	}

	public function setLast30SamplesAvailable($last30SamplesAvailable) { $this -> last30SamplesAvailable = $last30SamplesAvailable;
	}

	public function getLabelingSpecifications() {
		return $this -> labelingSpecifications;
	}

	public function setLabelingSpecifications($labelingSpecifications) { $this -> labelingSpecifications = $labelingSpecifications;
	}

	public function getFortifiedSaltStorageAdequate() {
		return $this -> fortifiedSaltStorageAdequate;
	}

	public function setFortifiedSaltStorageAdequate($fortifiedSaltStorageAdequate) { $this -> fortifiedSaltStorageAdequate = $fortifiedSaltStorageAdequate;
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
	
	public function getAssessmentOfCorrectiveAction(){return $this->assessmentOfCorrectiveAction;}
	
	public function setAssessmentOfCorrectiveAction($assessment){$this->assessmentOfCorrectiveAction=$assessment;}

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
	
	public function getPremixType(){return $this->premixType;}
	
	public function setPremixType($premixType){$this->premixType=$premixType;}

	public function getIdComposite() {
		return $this -> idComposite;
	}

	public function setIdComposite($idComposite) { $this -> idComposite = $idComposite;
	}

	public function getIodineMgPerKg0() {
		return $this -> iodineMgPerKg0;
	}

	public function setIodineMgPerKg0($iodineMgPerKg0) { $this -> iodineMgPerKg0 = $iodineMgPerKg0;
	}

	public function getRefIodine() {
		return $this -> refIodine;
	}

	public function setRefIodine($refIodine) { $this -> refIodine = $refIodine;
	}

	public function getIodineMgPerKg1() {
		return $this -> iodineMgPerKg1;
	}

	public function setIodineMgPerKg1($iodineMgPerKg1) { $this -> iodineMgPerKg1 = $iodineMgPerKg1;
	}

	public function getIdOther() {
		return $this -> idOther;
	}

	public function setIdOther($idOther) { $this -> idOther = $idOther;
	}

	public function getIodineMgPerKg2() {
		return $this -> iodineMgPerKg2;
	}

	public function setIodineMgPerKg2($iodineMgPerKg2) { $this -> iodineMgPerKg2 = $iodineMgPerKg2;
	}

	/*public function getIodineMgPerKg3() {
		return $this -> iodineMgPerKg3;
	}

	public function setIodineMgPerKg3($iodineMgPerKg3) { $this -> iodineMgPerKg3 = $iodineMgPerKg3;
	}*/

	public function getSupervisorName() {
		return $this -> supervisorName;
	}

	public function setSupervisorName($supervisorName) { $this -> supervisorName = $supervisorName;
	}

}
?>