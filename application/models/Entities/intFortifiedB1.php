<?php

namespace models\Entities;

/**
 * @Entity(repositoryClass="models")
 * @Table(name="internalfortifiedb1")
 */

class IntFortifiedB1 {

	/*
	 * @Id
	 * @Column(name="transactionNumber", type="int", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $id;

	/*
	 * @Column(name="dates", type="date", nullable=true)
	 * */
	private $dates;

	/*
	 * @Column(name="fillerWeight", type="int", length=11, nullable=true)
	 * */
	private $fillerWeight;

	/*
	 * @Column(name="iodineWeight", type="int", length=11, nullable=true)
	 * */
	private $iodineWeight;

	/*
	 * @Column(name="finalPremixWeight1", type="int", length=11, nullable=true)
	 * */
	private $finalPremixWeight1;
	/*
	 * @Column(name="startTime", type="datetime",  nullable=true)
	 * */
	private $startTime;
	/*
	 * @Column(name="endTime", type="datetime", nullable=true)
	 * */
	private $endTime;
	/*
	 * @Column(name="finalPremixWeight", type="double",  nullable=true)
	 * */
	private $finalPremixWeight;
	/*
	 * @Column(name="transactedBy", type="varchar",length=45, nullable=true)
	 * */
	private $transactedBy;
	/*
	 * @Column(name="manufacturerCompName", type="varchar",length=45, nullable=true)
	 * */
	private $manufacturerCompName;

	public function getTranscationNumber() {
		return $this -> transactionNumber;
	}

	public function setTransactionNumber($transactionNumber) { $this -> transactionNumber = $transactionNumber;
	}

	public function getDates() {
		return $this -> dates;
	}

	public function setDates($dates) { $this -> dates = $dates;
	}

	public function getFillerWeight() {
		return $this -> fillerWeight;
	}

	public function setFillerWeight($fillerWeight) { $this -> fillerWeight = $fillerWeight;
	}

	public function getIodineWeight() {
		return $this -> iodineWeight;
	}

	public function setIodineWeight($iodineWeight) { $this -> iodineWeight = $iodineWeight;
	}

	public function getFinalPremixWeight1() {
		return $this -> finalPremixWeight1;
	}

	public function setFinalPremixWeight1($finalPremixWeight1) { $this -> finalPremixWeight1 = $finalPremixWeight1;
	}

	public function getStartTime() {
		return $this -> startTime;
	}

	public function setStartTime($startTime) { $this -> startTime = $startTime;
	}

	public function getEndTime() {
		return $this -> endTime;
	}

	public function setEndTime($endTime) { $this -> endTime = $endTime;
	}

	public function getFinalPremixWeight() {
		return $this -> finalPremixWeight;
	}

	public function setFinalPremixWeight($finalPremixWeight) { $this -> finalPremixWeight = $finalPremixWeight;
	}

	public function getTransactedBy() {
		return $this -> transactedBy;
	}

	public function setTransactedBy($transactedBy) { $this -> transactedBy = $transactedBy;
	}

	public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
	}

	public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
	}

}
?>