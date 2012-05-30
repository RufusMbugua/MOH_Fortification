<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalqca1")
 */
 class E_Sugar_internalQC_A1{
 	
/**
* @Id
* @Column(name="sugar_internalQCA1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalQCA1ID;
 /**
* @Column(name="harvestYear", type="string",length=45, nullable=true)
* */
private $harvestYear;
/**
* @Column(name="dates", type="date",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="shiftTime", type="string",length=45, nullable=true)
* */
private $shiftTime;
/**
* @Column(name="numberOfBags", type="decimal", nullable=true)
* */
private $numberOfBags;
/**
* @Column(name="lotID0", type="decimal", nullable=true)
* */
private $lotID0;
/**
* @Column(name="productionDate", type="string",length=45, nullable=true)
* */
private $productionDate;
/**
* @Column(name="dispatchedBags", type="decimal", nullable=true)
* */
private $dispatchedBags;
/**
* @Column(name="lotID1", type="decimal", nullable=true)
* */
private $lotID1;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="receivedBy", type="string",length=45, nullable=true)
* */
private $receivedBy;
/**
* @Column(name="receivedDate", type="string",length=45, nullable=true)
* */
private $receivedDate;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;

public function getSugar_internalQCA1ID() {
		return $this -> sugar_internalQCA1ID;
}

public function setSugar_internalQCA1ID($sugar_internalQCA1ID) { $this -> sugar_internalQCA1ID = $sugar_internalQCA1ID;
}
public function getHarvestYear() {
		return $this -> harvestYear;
}

public function setHarvestYear($harvestYear) { $this -> harvestYear = $harvestYear;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getShiftTime() {
		return $this ->shiftTime;
}

public function setShiftTime($shiftTime) { $this -> shiftTime = $shiftTime;
}
public function getNumberOfBags() {
		return $this -> numberOfBags;
}

public function setNumberOfBags($numberOfBags) { $this -> numberOfBags = $numberOfBags;
}
public function getLotID0() {
		return $this -> lotID0;
}

public function setLotID0($lotID0) { $this -> lotID0 = $lotID0;
}
public function getProductionDate() {
		return $this ->productionDate;
}

public function setProductionDate($productionDate) { $this ->productionDate = $productionDate;
}
public function getDispatchedBags() {
		return $this -> dispatchedBags;
}

public function setDispatchedBags($dispatchedBags) { $this -> dispatchedBags = $dispatchedBags;
}
public function getLotID1() {
		return $this -> lotID1;
}

public function setLotID1($lotID1) { $this -> lotID1 = $lotID1;
}
public function getObservations() {
		return $this -> observations;
}

public function setObservations($observations) { $this -> observations = $observations;
}
public function getReceivedBy() {
		return $this ->receivedBy;
}

public function setReceivedBy($receivedBy) { $this -> receivedBy = $receivedBy;
}
public function getReceivedDate() {
		return $this ->receivedDate;
}

public function setReceivedDate($receivedDate) { $this -> receivedDate = $receivedDate;
}
public function getManufacturerCompName() {
		return $this ->manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
 }
?>