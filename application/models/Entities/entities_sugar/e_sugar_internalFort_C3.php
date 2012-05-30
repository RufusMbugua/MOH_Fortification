<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalfortc3")
 */
 class E_Sugar_internalFort_C3{
 	/**
* @Id
* @Column(name="sugar_internalfortC3ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalfortC3ID;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="lotID", type="decimal", nullable=true)
* */
private $lotID;
/**
* @Column(name="bagsProduced", type="decimal", nullable=true)
* */
private $bagsProduced;
/**
* @Column(name="deliveryNumber", type="string",length=45, nullable=true)
* */
private $deliveryNumber;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;
/**
* @Column(name="dispatchedLotID", type="decimal", nullable=true)
* */
private $dispatchedLotID;
/**
* @Column(name="dispatchedBags", type="decimal", nullable=true)
* */
private $dispatchedBags;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="transactedBy", type="string",length=45, nullable=true)
* */
private $transactedBy;
/**
* @Column(name="transactionDate", type="string",length=45, nullable=true)
* */
private $transactionDate;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;
public function getSugar_internalfortC3ID() {
		return $this -> sugar_internalfortC3ID;
}

public function setSugar_internalfortC3ID($sugar_internalfortC3ID) { $this -> sugar_internalfortC3ID = $sugar_internalfortC3ID;
}

public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getLotID() {
		return $this -> lotID;
}

public function setLotID($lotID) { $this -> lotID = $lotID;
}
public function getBagsProduced() {
		return $this -> bagsProduced;
}

public function setBagsProduced($bagsProduced) { $this -> bagsProduced = $bagsProduced;
}
public function getDeliveryNumber() {
		return $this -> deliveryNumber;
}

public function setDeliveryNumber($deliveryNumber) { $this -> deliveryNumber = $deliveryNumber;
}
public function getFactoryName() {
		return $this -> factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
}
public function getDispatchedLotID() {
		return $this -> dispatchedLotID;
}

public function setDispatchedLotID($dispatchedLotID) { $this -> dispatchedLotID = $dispatchedLotID;
}
public function getDispatchedBags() {
		return $this -> dispatchedBags;
}

public function setDispatchedBags($dispatchedBags) { $this -> dispatchedBags = $dispatchedBags;
}
public function getObservations() {
		return $this -> observations;
}

public function setObservations($observations) { $this -> observations = $observations;
}
public function getTransactedBy() {
		return $this -> transactedBy;
}

public function setTransactedBy($transactedBy) { $this -> transactedBy = $transactedBy;
}
public function getTransactionDate() {
		return $this -> transactionDate;
}

public function setTransactionDate($transactionDate) { $this -> transactionDate = $transactionDate;
}
public function getManufacturerCompName() {
		return $this ->manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
 }
?>