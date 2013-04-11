<?php
namespace models\Entities\entities_salt;

/**
 * @Entity
 * @Table(name="internalfortifieda2")
 */
class E_IntFortifiedA2 {
	/**
	 * @Id
	 * @Column(name="transactionNumber", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $transactionNumber;

	/**
	 * @Column(name="dates", type="string", nullable=true)
	 * */
	private $dates;
	
	/**
	 * @Column(name="supplierCOA", type="string",length=45, nullable=true)
	 * */
	private $supplierCOA;
	
	/**
	 * @Column(name="noOfDrums", type="integer", length=11, nullable=false)
	 * */
	private $noOfDrums;
	
	/**
	 * @Column(name="lotId", type="string",length=45, nullable=true)
	 * */
	private $lotId;
	
	/**
	 * @Column(name="expiryDate", type="string", nullable=true)
	 * */
	private $expiryDate;
	/**
	 * @OneToMany(targetEntity="manufacturerCompound", mappedBy="manufacturerCompName")
	 * @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
	 * */
	private $manufacturerCompName;
	
	/**
	 * @Column(name="transactedBy", type="string",length=45, nullable=true)
	 * */
	private $transactedBy;
	
	/**
	 * @Column(name="dateOfReporting", type="date", nullable=true)
	 * */
	private $dateOfReporting;
	
	

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
	public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
	}

	public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
	}
	

	public function getTransactedBy() {
		return $this -> transactedBy;
	}

	public function setTransactedBy($transactedBy) { $this -> transactedBy = $transactedBy;
	}
	
	public function getDateOfReporting() {
		return $this -> dateOfReporting;
	}

	public function setDateOfReporting($dateOfReporting) { $this -> dateOfReporting = $dateOfReporting;
	}

	
}
?>