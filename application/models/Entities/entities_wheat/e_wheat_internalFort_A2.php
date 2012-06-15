<?php
namespace models\Entities\entities_wheat;
	/**
	 * @Entity
	 * @Table(name="wheat_internalforta2")
	 */
class E_Wheat_InternalFort_A2 {

	/**
	 * @Id
	 * @Column(name="wheat_internalFortA2ID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $wheat_internalFortA2ID;
	
	/**
	 * @Column(name="dates", type="string", length=45, nullable=true)
	 * */
	private $dates;
	
	/**
	 * @Column(name="shiftTime", type="string", length=45, nullable=true)
	 * */
	private $shiftTime;
	
	/**
	 * @Column(name="quantity", type="decimal",  nullable=true)
	 * */
	private $quantity;
	
	/**
	 * @Column(name="lotID0", type="string", length=45, nullable=true)
	 * */
	private $lotID0;
	
	/**
	 * @Column(name="expiryDate", type="string", length=45, nullable=true)
	 * */
	private $expiryDate;
	
	/**
	 * @Column(name="dispatchedQuantity", type="decimal",  nullable=true)
	 * */
	private $dispatchedQuantity;
	
	/**
	 * @Column(name="lotID1", type="string", length=45, nullable=true)
	 * */
	private $lotID1;
	
	/**
	 * @Column(name="reportingDate", type="date", length=45, nullable=true)
	 * */
	private $reportingDate;
	
	/**
	 * @Column(name="transactedBy", type="string", length=45, nullable=true)
	 * */
	private $transactedBy;
	
	/**
	 * @Column(name="manufacturerCompName", type="string", length=45, nullable=true)
	 * */
	private $manufacturerCompName;
	
	
	public function getWheat_internalFortA2ID() {
		return $this -> wheat_internalFortA2ID;
	}

	public function setWheat_internalFortA2ID($wheat_internalFortA2ID) { $this -> wheat_internalFortA2ID = $wheat_internalFortA2ID;
	}
	public function getDates() {
		return $this -> dates;
	}

	public function setDates($dates) { $this -> dates = $dates;
	}
	public function getShiftTime() {
		return $this -> shiftTime;
	}

	public function setShiftTime($shiftTime) { $this -> shiftTime = $shiftTime;
	}
	public function getQuantity() {
		return $this -> quantity;
	}

	public function setQuantity($quantity) { $this -> quantity = $quantity;
	}
	public function getLotID0() {
		return $this -> lotID0;
	}

	public function setLotID0($lotID0) { $this -> lotID0 = $lotID0;
	}
	public function getExpiryDate() {
		return $this -> expiryDate;
	}

	public function setExpiryDate($expiryDate) { $this -> expiryDate = $expiryDate;
	}
	public function getDispatchedQuantity() {
		return $this -> dispatchedQuantity;
	}

	public function setDispatchedQuantity($dispatchedQuantity) { $this -> dispatchedQuantity = $dispatchedQuantity;
	}
	public function getLotID1() {
		return $this -> lotID1;
	}

	public function setLotID1($lotID1) { $this -> lotID1 = $lotID1;
	}
	
	public function getReportingDate() {
		return $this -> reportingDate;
	}

	public function setReportingDate($reportingDate) { $this -> reportingDate = $reportingDate;
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