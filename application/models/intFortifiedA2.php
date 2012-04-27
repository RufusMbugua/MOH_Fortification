<?php

namespace models;

/**
 * @Entity
 * @Table(name="internalfortifieda2")
 */

class IntFortifiedA2 {
	/*
	 * @Id
	 * @Column(name="transactionNumber", type="int", length=11, nullable=false)
	 * */
	private $transactionNumber;

	/*
	 * @Column(name="dates", type="date", nullable=true)
	 * */
	private $dates;
	/*
	 * @Column(name="supplierCOA", type="varchar",length=45, nullable=true)
	 * */
	private $supplierCOA;
	/*
	 * @Column(name="noOfDrums", type="int", length=11, nullable=false)
	 * */
	private $noOfDrums;
	/*
	 * @Column(name="lotId", type="varchar",length=45, nullable=true)
	 * */
	private $lotId;
	/*
	 * @Column(name="expiryDate", type="date", nullable=true)
	 * */
	private $expiryDate;
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

	public function getSupplierCOA() {
		return $this -> supplierCOA;
	}

	public function setSupplierCOA($supplierCOA) { $this -> supplierCOA = $supplierCOA;
	}

	public function getNoOfDrums() {
		return $this -> noOfDrums;
	}

	public function setNoOfDrums($noOfDrums) { $this -> noOfDrums = $noOfDrums;
	}

	public function getLotId() {
		return $this -> lotId;
	}

	public function setLotId($lotId) { $this -> lotId = $lotId;
	}

	public function getExpiryDate() {
		return $this -> expiryDate;
	}

	public function setExpiryDate($expiryDate) { $this -> expiryDate = $expiryDate;
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