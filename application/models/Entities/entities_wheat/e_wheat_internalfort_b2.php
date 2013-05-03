<?php
namespace models\Entities\entities_wheat;

/**
 * @Entity
 * @Table(name="wheat_internalfortb2")
 */
 class E_Wheat_InternalFort_B2{
 	/**
* @Id
* @Column(name="wheat_internalFortB2ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $wheat_internalFortB2ID;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;
/**
* @Column(name="shiftTime", type="string",length=45, nullable=true)
* */
private $shiftTime;
/**
* @Column(name="flourProduced", type="decimal",nullable=true)
* */
private $flourProduced;
/**
* @Column(name="lotID", type="string",length=45, nullable=true)
* */
private $lotID;
/**
* @Column(name="premixUsed", type="decimal", nullable=true)
* */
private $premixUsed;
/**
* @Column(name="responsible", type="string",length=45, nullable=true)
* */
private $responsible;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="dates", type="date",length=45, nullable=true)
* */
private $dates;

public function getWheat_internalFortB2ID() {
		return $this -> wheat_internalFortB2ID;
}

public function setWheat_internalFortB2ID($wheat_internalForB2ID) { $this -> wheat_internalFortB2ID = $wheat_internalFortB2ID;
}
public function getFactoryName() {
		return $this -> factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
}
public function getShiftTime() {
		return $this -> shiftTime;
}

public function setShiftTime($shiftTime) { $this -> shiftTime = $shiftTime;
}
public function getFlourProduced() {
		return $this -> flourProduced;
}

public function setFlourProduced($flourProduced) { $this -> flourProduced = $flourProduced;
}
public function getLotID() {
		return $this -> lotID;
}

public function setLotID($lotID) { $this -> lotID = $lotID;
}
public function getPremixUsed() {
		return $this ->premixUsed;
}

public function setPremixUsed($premixUsed) { $this -> premixUsed = $premixUsed;
}
public function getResponsible() {
		return $this -> responsible;
}

public function setResponsible($responsible) { $this -> responsible = $responsible;
}
public function getObservations() {
		return $this -> observations;
}

public function setObservations($observations) { $this -> observations = $observations;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
 }
?>