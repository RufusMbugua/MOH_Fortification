<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalqcb2")
 */
 class E_Sugar_internalQC_B2{
 	/**
* @Id
* @Column(name="sugar_internalQCB2ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalQCB2ID;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;
/**
* @Column(name="harvestYear", type="string",length=45, nullable=true)
* */
private $harvestYear;
/**
* @Column(name="shiftTime", type="string",length=45, nullable=true)
* */
private $shiftTime;
/**
* @Column(name="sugarProduced", type="decimal", nullable=true)
* */
private $sugarProduced;
/**
* @Column(name="bagNumbers", type="decimal", nullable=true)
* */
private $bagNumbers;
/**
* @Column(name="lotID", type="string",length=45, nullable=true)
* */
private $lotID;
/**
* @Column(name="sugarPremixRatio", type="decimal", nullable=true)
* */
private $sugarPremixRatio;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="responsible", type="string",length=45, nullable=true)
* */
private $responsible;

public function getSugar_internaQCB2ID() {
		return $this -> sugar_internalQCB2ID;
}

public function setSugar_internalQCB2ID($sugar_internalQCB2ID) { $this -> sugar_internalQCB2ID = $sugar_internalQCB2ID;
}
public function getFactoryName() {
		return $this -> factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
}
public function getHarvestYear() {
		return $this -> harvestYear;
}

public function setHarvestYear($harvestYear) { $this -> harvestYear = $harvestYear;
}
public function getShiftTime() {
		return $this -> shiftTime;
}

public function setShiftTime($shiftTime) { $this -> shiftTime = $shiftTime;
}
public function getSugarProduced() {
		return $this -> sugarProduced;
}

public function setSugarProduced($sugarProduced) { $this -> sugarProduced = $sugarProduced;
}
public function getBagNumbers() {
		return $this -> bagNumbers;
}

public function setBagNumbers($bagNumbers) { $this -> bagNumbers = $bagNumbers;
}
public function getLotID() {
		return $this -> lotID;
}

public function setLotID($lotID) { $this -> lotID = $lotID;
}
public function getSugarPremixRatio() {
		return $this -> sugarPremixRatio;
}

public function setSugarPremixRatio($sugarPremixRatio) { $this -> sugarPremixRatio = $sugarPremixRatio;
}
public function getObservations() {
		return $this -> observations;
}

public function setObservations($observations) { $this -> observations = $observations;
}
public function getResponsible() {
		return $this -> responsible;
}

public function setResponsible($responsible) { $this -> responsible = $responsible;
}
 }
?>