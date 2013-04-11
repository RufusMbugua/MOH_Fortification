<?php
namespace models\Entities\entities_oil;

/**
 * @Entity
 * @Table(name="oil_tablea1")
 */
 class E_Oil_A1{
 	/**
* @Id
* @Column(name="fortifiedOilA1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $fortifiedOilA1ID;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="supplierCOANumber", type="string", length=45, nullable=true)
* */
private $supplierCOANumber;
/**
* @Column(name="numberOfCans", type="decimal", nullable=true)
* */
private $numberOfCans;
/**
* @Column(name="lotID", type="string",length=45, nullable=true)
* */
private $lotID;
/**
* @Column(name="expirationDate", type="string",length=45, nullable=true)
* */
private $expirationDate;
/**
* @Column(name="dispatchedLotID", type="string",length=45, nullable=true)
* */
private $dispatchedLotID;
/**
* @Column(name="transactedBy", type="string",length=45, nullable=true)
* */
private $transactedBy;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;
/**
* @Column(name="status", type="string",length=45, nullable=true)
* */
private $status;
 

public function getFortifiedOilA1ID() {
		return $this -> fortifiedOilA1ID;
}

public function setFortifiedOilA1ID($fortifiedOilA1ID) { $this -> fortifiedOilA1ID = $fortifiedOilA1ID;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getSupplierCOANumber() {
		return $this -> supplierCOANumber;
}

public function setSupplierCOANumber($supplierCOANumber) { $this -> supplierCOANumber = $supplierCOANumber;
}
public function getNumberOfCans() {
		return $this -> numberOfCans;
}

public function setNumberOfCans($numberOfCans) { $this -> numberOfCans = $numberOfCans;
}
public function getLotID() {
		return $this -> lotID;
}

public function setLotID($lotID) { $this -> lotID = $lotID;
}
public function getExpirationDate() {
		return $this -> expirationDate;
}

public function setExpirationDate($expirationDate) { $this -> expirationDate = $expirationDate;
}
public function getDispatchedLotID() {
		return $this -> dispatchedLotID;
}

public function setDispatchedLotID($dispatchedLotID) { $this -> dispatchedLotID = $dispatchedLotID;
}
public function getTransactedBy() {
		return $this -> transactedBy;
}

public function setTransactedBy($transactedBy) { $this -> transactedBy = $transactedBy;
}
public function getFactoryName() {
		return $this -> factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
}
public function getStatus() {
		return $this -> status;
}

public function setFactoryName($status) { $this -> status = $status;
}
}