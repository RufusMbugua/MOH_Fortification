<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalfortc1")
 */
 class E_Sugar_internalFort_C1{
 	/**
* @Id
* @Column(name="sugar_internalfortC1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalfortC1ID;
/**
* @Column(name="premixType", type="string",length=45, nullable=true)
* */
private $premixType;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="quantity", type="decimal", nullable=true)
* */
private $quantity;
/**
* @Column(name="lotNumber", type="string",length=45, nullable=true)
* */
private $lotNumber;
/**
* @Column(name="expirationDate", type="string",length=45, nullable=true)
* */
private $expirationDate;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;
/**
* @Column(name="COA", type="string",length=45, nullable=true)
* */
private $COA;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="receivedBy", type="string",length=45, nullable=true)
* */
private $receivedBy;

public function getSugar_internalfortC1ID() {
		return $this -> sugar_internalfortC1ID;
}

public function setSugar_internalfortC1ID($sugar_internalfortC1ID) { $this -> sugar_internalfortC1ID = $sugar_internalfortC1ID;
}
public function getPremixType() {
		return $this -> premixType;
}

public function setPremixType($premixType) { $this -> premixType = $premixType;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function geQuantity() {
		return $this -> quantity;
}

public function setQuantity($quantity) { $this -> quantity = $quantity;
}
public function getLotNumber() {
		return $this -> lotNumber;
}

public function setLotNumber($lotNumber) { $this -> lotNumber = $lotNumber;
}
public function getExpirationDate() {
		return $this -> expirationDate;
}

public function setExpirationDate($expirationDate) { $this -> expirationDate = $expirationDate;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
public function getCOA() {
		return $this -> COA;
}

public function setCOA($COA) { $this -> COA = $COA;
}
public function getObservations() {
		return $this -> observations;
}

public function setObservations($observations) { $this -> observations = $observations;
}
public function getReceivedBy() {
		return $this -> receivedBy;
}

public function setReceivedBy($receivedBy) { $this -> receivedBy = $receivedBy;
}
 }
?>