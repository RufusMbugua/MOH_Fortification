<?php

namespace models;

/**
 * @Entity
 * @Table(name="externalfortifiedb2")
 */

class E_ExternalFortifiedB2 {

	/**
	 * @Id
	 * @Column(name="transactionNumber", type="int", length=11, nullable=false)
	 * */
	private $transactionNumber;
	/*
	 * @Column(name="dates", type="date", nullable=true)
	 * */
	private $dates;
	/*
	 * @Column(name="publicHealthOfficer", type="varchar",length=45, nullable=true)
	 * */
	private $publicHealthOfficer;
	/*
	 * @Column(name="manufacturerCompName", type="varchar",length=45, nullable=true)
	 * */
	private $manufacturerCompName;
	/*
	 * @Column(name="productionArea", type="varchar",length=45, nullable=true)
	 * */
	private $productionArea;
	/*
	 * @Column(name="packageArea", type="varchar",length=45, nullable=true)
	 * */
	private $packageArea;
	/*
	 * @Column(name="warehouse", type="varchar",length=45, nullable=true)
	 * */
	private $warehouse;
	/*
	 * @Column(name="staffFacilities", type="varchar",length=45, nullable=true)
	 * */
	private $staffFacilities;
	/*
	 * @Column(name="hygiene", type="varchar",length=45, nullable=true)
	 * */
	private $hygiene;
	/*
	 * @Column(name="protectiveGear", type="varchar",length=45, nullable=true)
	 * */
	private $protectiveGear;
	/*
	 * @Column(name="trainingInTasks", type="varchar",length=45, nullable=true)
	 * */
	private $trainingInTasks;
	/*
	 * @Column(name="writtenProcedures", type="varchar",length=45, nullable=true)
	 * */
	private $writtenProcedures;
	/*
	 * @Column(name="receiptsStoragePremix", type="varchar",length=45, nullable=true)
	 * */
	private $receiptStoragePremix;
	/*
	 * @Column(name="premixDilution", type="varchar",length=45, nullable=true)
	 * */
	private $premixDilution;
	/*
	 * @Column(name="feederVerification", type="varchar",length=45, nullable=true)
	 * */
	private $feederVerification;
	/*
	 * @Column(name="QCSaltSampling", type="varchar",length=45, nullable=true)
	 * */
	private $QCSaltSampling;
	/*
	 * @Column(name="iodineTest", type="varchar",length=45, nullable=true)
	 * */
	private $iodineTest;
	/*
	 * @Column(name="iodineCompupdate", type="varchar",length=45, nullable=true)
	 * */
	private $iodineCompupdate;
	/*
	 * @Column(name="coaperLot", type="varchar",length=45, nullable=true)
	 * */
	private $coaperLot;
	/*
	 * @Column(name="iodineStorageAdequate", type="varchar",length=45, nullable=true)
	 * */
	private $iodineStorageAdequate;
	/*
	 * @Column(name="fifoSystem", type="varchar",length=45, nullable=true)
	 * */
	private $fifoSystem;
	/*
	 * @Column(name="iodineCompHandling", type="varchar",length=45, nullable=true)
	 * */
	private $iodineCompHandling;
	/*
	 * @Column(name="premixPreparation", type="varchar",length=10, nullable=true)
	 * */
	private $premixPreparation;
	/*
	 * @Column(name="prmixStorageHandling", type="varchar",length=45, nullable=true)
	 * */
	private $premixStorageHandling;
	/*
	 * @Column(name="feederSprayerRecord", type="varchar",length=45, nullable=true)
	 * */
	private $feederSprayerRecord;
	/*
	 * @Column(name="feederLevelAdequate", type="varchar",length=45, nullable=true)
	 * */
	private $feederLevelAdequate;
	/*
	 * @Column(name="saltPrductionPremixRecords", type="varchar",length=45, nullable=true)
	 * */
	private $saltProductionPremixRecords;
	/*
	 * @Column(name="saltSamplingEachShift", type="varchar",length=45, nullable=true)
	 * */
	private $saltSamplingEachShift;
	/*
	 * @Column(name="saltProductionPremixRight", type="varchar",length=45, nullable=true)
	 * */
	private $saltProductionPremixRight;
	/*
	 * @Column(name="iodineResultLess40MgPerKg", type="varchar",length=45, nullable=true)
	 * */
	private $iodineResultLess40MgPerKg;
	/*
	 * @Column(name="saltSamplesAnalyzed", type="varchar",length=10, nullable=true)
	 * */
	private $saltSamplesAnalyzed;
	/*
	 * @Column(name="internalTest", type="varchar",length=45, nullable=true)
	 * */
	private $internalTest;
	/*
	 * @Column(name="externalTest", type="varchar",length=45, nullable=true)
	 * */
	private $externalTest;
	/*
	 * @Column(name="dailyCompositeSamples", type="varchar",length=45, nullable=true)
	 * */
	private $dailyCompositeSamples;
	/*
	 * @Column(name="last30SamplesAvailable", type="varchar",length=45, nullable=true)
	 * */
	private $last30SamplesAvailable;
	/*
	 * @Column(name="labellingSpecifications", type="tinyint",length=1, nullable=true)
	 * */
	private $labelingSpecifications;
	/*
	 * @Column(name="fortifiedSaltStorageAdequate", type="varchar",length=45, nullable=true)
	 * */
	private $fortifiedSaltStorageAdequate;
	/*
	 * @Column(name="recommendations", type="varchar",length=45, nullable=true)
	 * */
	private $recommendations;
	/*
	 * @Column(name="correctiveActions", type="varchar",length=45, nullable=true)
	 * */
	private $correctiveActions;
	/*
	 * @Column(name="comments", type="varchar",length=45, nullable=true)
	 * */
	private $comments;
	/*
	 * @Column(name="nonCompliances", type="varchar",length=45, nullable=true)
	 * */
	private $nonCompliances;
	/*
	 * @Column(name="suggestionsForImprovement", type="varchar",length=45, nullable=true)
	 * */
	private $suggestionsForImprovement;
	/*
	 * @Column(name="idComposite", type="varchar",length=45, nullable=true)
	 * */
	private $idComposite;
	/*
	 * @Column(name="iodineMgPerKg0", type="varchar",length=45, nullable=true)
	 * */
	private $iodineMgPerKg0;
	/*
	 * @Column(name="refIodine", type="varchar",length=45, nullable=true)
	 * */
	private $refIodine;
	/*
	 * @Column(name="iodineMgPerKg1", type="varchar",length=45, nullable=true)
	 * */
	private $iodineMgPerKg1;
	/*
	 * @Column(name="idOther", type="varchar",length=45, nullable=true)
	 * */
	private $idOther;
	/*
	 * @Column(name="iodineMgPerKg2", type="varchar",length=45, nullable=true)
	 * */
	private $iodineMgPerKg2;
	/*
	 * @Column(name="iodineMgPerKg3", type="varchar",length=45, nullable=true)
	 * */
	private $iodineMgPerKg3;
	/*
	 * @Column(name="supervisorName", type="varchar",length=45, nullable=true)
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

	public function getManufacturerCompName() {
		return $this -> manufacturerCopName;
	}

	public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
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

	public function getWrittenProcedures() {
		return $this -> writtenProcedures;
	}

	public function setWrittenProcedures($writtenProcedures) { $this -> writtenProcedures = $writtenProcedures;
	}

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

	public function getIodineTest() {
		return $this -> iodineTest;
	}

	public function setIodineTest($iodineTest) { $this -> iodineTest = $iodineTest;
	}

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

	public function getSaltSamplesAnalyzed() {
		return $this -> saltSamplesAnalyzed;
	}

	public function setSaltSamplesAnalyzed($saltSamplesAnalyzed) { $this -> saltSamplesAnalyzed = $saltSamplesAnalyzed;
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

	public function getIodineMgPerKg3() {
		return $this -> iodineMgPerKg3;
	}

	public function setIodineMgPerKg3($iodineMgPerKg3) { $this -> iodineMgPerKg3 = $iodineMgPerKg0;
	}

	public function getSupervisorName() {
		return $this -> supervisorName;
	}

	public function setSupervisorName($supervisorName) { $this -> supervisorName = $supervisorName;
	}

}
?>