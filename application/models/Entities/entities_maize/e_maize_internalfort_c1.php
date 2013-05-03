<?php
namespace models\Entities\entities_maize;

/**
 * @Entity
 * @Table(name="maize_internalfortc1")
 */
 class E_Maize_internalFort_C1{
 	/**
* @Id
* @Column(name="maize_internalfortc1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $maize_internalfortc1ID;
/**
* @Column(name="dates", type="date",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="shiftTime", type="string",length=45, nullable=true)
* */
private $shiftTime;
/**
* @Column(name="maizeFlourProduced", type="decimal", nullable=true)
* */
private $maizeFlourProduced;
/**
* @Column(name="premixUsed", type="decimal", nullable=true)
* */
private $premixUsed;
/**
* @Column(name="maizeFlourVSPremix", type="decimal", nullable=true)
* */
private $maizeFlourVSPremix;
/**
* @Column(name="notes", type="string",length=45, nullable=true)
* */
private $notes;
/**
* @Column(name="compositeSample", type="string",length=45, nullable=true)
* */
private $compositeSample;
/**
* @Column(name="transactedBy", type="string",length=45, nullable=true)
* */
private $transactedBy;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;

public function getMaize_internalfortc1ID() {
		return $this -> maize_internalfortc1ID;
}

public function setMaize_internalfortc1ID($maize_internalfortc1ID) { $this -> maize_internalfortc1ID = $maize_internalfortc1ID;
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
public function getMaizeFlourProduced() {
		return $this -> maizeFlourProduced;
}

public function setMaizeFlourProduced($maizeFlourProduced) { $this -> maizeFlourProduced = $maizeFlourProduced;
}
public function getPremixUsed() {
		return $this -> premixUsed;
}

public function setPremixUsed($premixUsed) { $this -> premixUsed = $premixUsed;
}
public function getMaizeFlourVSPremix() {
		return $this -> maizeFlourVSPremix;
}

public function setMaizeFlourVSPremix($maizeFlourVSPremix) { $this -> maizeFlourVSPremix = $maizeFlourVSPremix;
}
public function getNotes() {
		return $this -> notes;
}

public function setNotes($notes) { $this -> notes = $notes;
}
public function getCompositeSample() {
		return $this -> compositeSample;
}

public function setCompositeSample($compositeSample) { $this -> compositeSample = $compositeSample;
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
 }
?>