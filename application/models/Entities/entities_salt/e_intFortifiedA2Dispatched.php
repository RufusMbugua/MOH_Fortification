<?php
namespace models\Entites\entites_salt;
/**
 * @Entity
 * @Table(name="internalfortifieda2dispatched")
 */
class E_IntFortifiedA2Dispatched {
	/**
	 * @Id
	 * @Column(name="dispatchedNumberA2", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $dispatchedNumberA2;
    /**
	 * @Column(name="transactedBy", type="string",length=45, nullable=false)
	 * */
	private $transactedBy;
	/**
	 * @Column(name="dateOfReporting", type="string",length=10, nullable=false)
	 * */
	private $dateOfReporting;
	/**
	 * @Column(name="internalFortifiedA2ID", type="integer",length=11, nullable=false)
	 * */
	private $internalFortifiedA2ID;
	/**
	 * @Column(name="lotID", type="integer",length=11, nullable=false)
	 * */
	private $lotID;
	/**
	 * @Column(name="receiptAndQCReview", type="string",length=40, nullable=false)
	 * */
	private $receiptAndQCReview;
	public function getDispatchedNumberA2() {
		return $this -> dispatchedNumberA2;
	}

	public function setDispatchedNumberA2($dispatchedNumberA2) { $this -> dispatchedNumberA2 = $dispatchedNumberA2;
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
	public function getInternalFortifiedA2ID() {
		return $this -> internalFortifiedA2ID;
	}

	public function setInternalFortifiedA2ID($internalFortifiedA2ID) { $this -> internalFortifiedA2ID= $internalFortifiedA2ID;
	}
	public function getLotID() {
		return $this -> lotID;
	}

	public function setLotID($lotID) { $this -> lotID = $lotID;
	}
	public function getReceiptAndQCReview() {
		return $this -> receiptAndQCReview;
	}

	public function setReceiptAndQCReview($receiptAndQCReview) { $this -> receiptAndQCReview = $receiptAndQCReview;
	}
	
	
}	
?>