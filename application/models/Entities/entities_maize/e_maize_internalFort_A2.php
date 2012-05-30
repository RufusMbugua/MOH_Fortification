<?php
namespace models\Entities\entities_maize;

/**
 * @Entity
 * @Table(name="maize_internalforta2")
 */
 class E_Maize_internalFort_A2{
 	/**
* @Id
* @Column(name="maize_internalforta2ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $maize_internalforta2ID;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="shiftTime", type="string",length=45, nullable=true)
* */
private $shiftTime;
/**
* @Column(name="quantityReceived", type="string",length=45, nullable=true)
* */
private $quantityReceived;
/**
* @Column(name="lotID", type="decimal", nullable=true)
* */
private $lotID;
/**
* @Column(name="expiryDate", type="string",length=45, nullable=true)
* */
private $expiryDate;
/**
* @Column(name="dispatchedQuantity", type="decimal", nullable=true)
* */
private $dispatchedQuantity;
/**
* @Column(name="reportingDate", type="date",length=45, nullable=true)
* */
private $reportingDate;
/**
* @Column(name="signature", type="string",length=45, nullable=true)
* */
private $signature;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;

public function getMaize_internalforta2ID() {
		return $this -> maize_internalforta2ID;
}

public function setMaize_internalforta2ID($maize_internalforta2ID) { $this -> maize_internalforta2ID = $maize_internalforta2ID;
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
public function getQuantityReceived() {
		return $this -> quantityReceived;
}

public function setQuantityReceived($quantityReceived) { $this -> quantityReceived = $quantityReceived;
}
public function getLotID() {
		return $this -> lotID;
}

public function setLotID($lotID) { $this -> lotID = $lotID;
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
public function getReportingDate() {
		return $this -> reportingDate;
}

public function setReportingDate($reportingDate) { $this -> reportingDate = $reportingDate;
}
public function getSignature() {
		return $this -> signature;
}

public function setSignature($signature) { $this -> signature = $signature;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}

 }
?>