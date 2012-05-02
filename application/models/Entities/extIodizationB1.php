<?php

namespace models;

/**
 * @Entity
 * @Table(name="externaliodizationb1")
 */

class ExtIodizationB1 {
	/*
	 * @Id
	 * @Column(name="transactionNumber", type="int", length=11, nullable=false)
	 * */
	private $transactionNumber;

	/*
	 * @Column(name="manufacturerCompName", type="varchar", length=45, nullable=true)
	 * */
	private $manufacturerCompName;
	/*
	 * @Column(name="dates", type="date", nullable=true)
	 * */
	private $dates;
	/*
	 * @Column(name="inspector", type="varchar", length=45, nullable=true)
	 * */
	private $inspector;
	/*
	 * @Column(name="inventoryUpToDate", type="varchar", length=45, nullable=true)
	 * */
	private $inventoryUpToDate;
	/*
	 * @Column(name="sufficientIodine3Months", type="varchar", length=45, nullable=true)
	 * */
	private $sufficientIodine3Months;
	/*
	 * @Column(name="adequateStorage", type="varchar", length=45, nullable=true)
	 * */
	private $adequateStorage;
	/*
	 * @Column(name="potassiumIodateAmounts", type="varchar", length=45, nullable=false)
	 * */
	private $potassiumIodateAmounts;
	/*
	 * @Column(name="premixRecords", type="varchar", length=45, nullable=true)
	 * */
	private $premixRecords;
	/*
	 * @Column(name="fifoSystem", type="varchar", length=45, nullable=true)
	 * */
	private $fifoSystem;
	/*
	 * @Column(name="saltVSPremix", type="varchar", length=45, nullable=true)
	 * */
	private $saltVSPremix;
	/*
	 * @Column(name="iodizedSaltUpdate", type="varchar", length=45, nullable=true)
	 * */
	private $iodizedSaltUpdate;
	/*
	 * @Column(name="saltPkgAdequate", type="varchar", length=45, nullable=true)
	 * */
	private $saltPkgAdequate;
	/*
	 * @Column(name="sampleNumber", type="varchar", length=45, nullable=true)
	 * */
	private $sampleNumber;
	/*
	 * @Column(name="iodineContent0", type="varchar", length=45, nullable=true)
	 * */
	private $iodineContent0;
	/*
	 * @Column(name="sampleReprocessed", type="varchar", length=45, nullable=true)
	 * */
	private $sampleReprocessed;
	/*
	 * @Column(name="iodineContent1", type="varchar", length=45, nullable=true)
	 * */
	private $iodineContent1;
	/*
	 * @Column(name="nonCompliances", type="varchar", length=45, nullable=true)
	 * */
	private $nonCompliances;
	/*
	 * @Column(name="suggestionsForImprovement", type="varchar", length=45, nullable=true)
	 * */
	private $suggestionForImprovement;
	/*
	 * @Column(name="supervisorName", type="varchar", length=45, nullable=true)
	 * */
	private $supervisorName;

	/*
	 * Getters and Setters
	 * */
	public function getTranscationNumber() {
		return $this -> transactionNumber;
	}

	public function settransactionNumber($transactionNumber) { $this -> transactionNumber = $transactionNumber;
	}

	public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
	}

	public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
	}

	public function getDates() {
		return $this -> dates;
	}

	public function setDates($dates) { $this -> dates = $dates;
	}

	public function getInspector() {
		return $this -> inspector;
	}

	public function setInspector($inspector) { $this -> inspector = $inspector;
	}

	public function getInventoryUpToDate() {
		return $this -> inventoryUpToDate;
	}

	public function setInventoryUpToDate($inventoryUpToDate) { $this -> inventoryUpToDate = $inventoryUpToDate;
	}

	public function getSufficientIodine3Months() {
		return $this -> sufficientIodine3Months;
	}

	public function setSufficientIodine3Months($sufficientIodine3Months) { $this -> sufficientIodine3Months = $sufficientIodine3Months;
	}

	public function getAdequateStorage() {
		return $this -> adequateStorage;
	}

	public function setAdequateStorage($adequateStorage) { $this -> adequateStorage = $adequateStorage;
	}

	public function getPotassiumIodateAmounts() {
		return $this -> potassiumIodateAmounts;
	}

	public function setPotassiumIodateAmounts($potassiumIodateAmounts) { $this -> potassiumIodateAmounts = $potassiumIodateAmounts;
	}

	public function getPremixRecords() {
		return $this -> premixRecords;
	}

	public function setPremixRecords($premixRecords) { $this -> premixRecords = $premixRecords;
	}

	public function getFifoSystem() {
		return $this -> fifoSystem;
	}

	public function setFifoSystem($fifoSystem) { $this -> fifoSystem = $fifoSystem;
	}

	public function getSaltVSPremix() {
		return $this -> saltVSPremix;
	}

	public function setSaltVSPremix($saltVSPremix) { $this -> saltVSPremix = $saltVSPremix;
	}

	public function getIodizedSaltUpdate() {
		return $this -> iodizedSaltUpdate;
	}

	public function setIodizedSaltUpdate($iodizedSaltUpdate) { $this -> iodizedSaltUpdate = $iodizedSaltUpdate;
	}

	public function getSaltPkgAdequate() {
		return $this -> saltPkgAdequate;
	}

	public function setSaltPkgAdequate($saltPkgAdequate) { $this -> saltPkgAdequate = $saltPkgAdequate;
	}

	public function getSampleNumber() {
		return $this -> sampleNumber;
	}

	public function setSampleNumber($sampleNumber) { $this -> sampleNumber = $sampleNumber;
	}

	public function getIodineContent0() {
		return $this -> iodineContent0;
	}

	public function setIodineContent0($iodineContent0) { $this -> iodineContent0 = $iodineContent0;
	}

	public function getSampleReprocessed() {
		return $this -> sampleReprocessed;
	}

	public function setSampleReprocessed($sampleReprocessed) { $this -> sampleReprocessed = $sampleReprocessed;
	}

	public function getIodineContent1() {
		return $this -> iodineContent1;
	}

	public function setIodineContent1($iodineContent1) { $this -> iodineContent1 = $iodineContent1;
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

	public function getSupervisorName() {
		return $this -> supervisorName;
	}

	public function setSupervisorName($supervisorName) { $this -> supervisorName = $supervisorName;
	}

}
?>