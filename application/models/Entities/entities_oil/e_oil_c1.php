<?php
namespace models\Entities\entities_oil;
/**
 * @Entity
 * @Table(name="oil_tablec1")
 */
class E_Oil_C1{
		/**
* @Id
* @Column(name="fortifiedOilC1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $fortifiedOilC1ID;
/**
* @Column(name="shiftTime", type="string",length=8, nullable=true)
* */
private $shiftTime;
/**
* @Column(name="oilProduced", type="decimal", nullable=true)
* */
private $oilProduced;
/**
* @Column(name="premixUsed", type="decimal", nullable=true)
* */
private $premixUsed;
/**
* @Column(name="oilFortified", type="decimal", nullable=true)
* */
private $oilFortified;
/**
* @Column(name="notes", type="string",length=100, nullable=true)
* */
private $notes;
/**
* @Column(name="comments", type="string",length=100, nullable=true)
* */
private $comments;
/**
* @Column(name="dates", type="date",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="responsible", type="string",length=45, nullable=true)
* */
private $responsible;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;

public function getFortifiedOilC1ID() {
		return $this -> fortifiedOilC1ID;
}

public function setFortifiedOilC1ID($fortifiedOilC1ID) { $this -> fortifiedOilC1ID = $fortifiedOilC1ID;
}
public function getShiftTime() {
		return $this -> shiftTime;
}

public function setShiftTime($shiftTime) { $this -> shiftTime = $shiftTime;
}
public function getOilProduced() {
		return $this -> oilProduced;
}

public function setOilProduced($oilProduced) { $this -> oilProduced = $oilProduced;
}
public function getPremixUsed() {
		return $this -> premixUsed;
}

public function setPremixUsed($premixUsed) { $this -> premixUsed = $premixUsed;
}
public function getOilFortified() {
		return $this -> oilFortified;
}

public function setOilFortified($oilFortified) { $this -> oilFortified = $oilFortified;
}
public function getNotes() {
		return $this -> notes;
}

public function setNotes($notes) { $this -> notes = $notes;
}
public function getComments() {
		return $this -> comments;
}

public function setComments($comments) { $this -> comments = $comments;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getResponsible() {
		return $this -> responsible;
}

public function setResponsible($responsible) { $this -> responsible = $responsible;
}
public function getFactoryName() {
		return $this ->factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
}
}
?>