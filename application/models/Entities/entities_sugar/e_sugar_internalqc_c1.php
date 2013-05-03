<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalqcc1")
 */
 class E_Sugar_internalQC_C1{
 	/**
* @Id
* @Column(name="sugar_internalQCC1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalQCC1ID;
/**
* @Column(name="shiftTime", type="string",length=45, nullable=true)
* */
private $shiftTime;
/**
* @Column(name="sugarProduced", type="decimal", nullable=true)
* */
private $sugarProduced;
/**
* @Column(name="premixUsed0", type="decimal", nullable=true)
* */
private $premixUsed0;
/**
* @Column(name="fortifiedSugar", type="string",length=45, nullable=true)
* */
private $fortifiedSugar;
/**
* @Column(name="premixUsed1", type="decimal", nullable=true)
* */
private $premixUsed1;
/**
* @Column(name="sugarPremix", type="decimal", nullable=true)
* */
private $sugarPremix;
/**
* @Column(name="comments", type="string",length=45, nullable=true)
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

public function getSugar_internalQCC1ID() {
		return $this -> sugar_internalQCC1ID;
}

public function setSugar_internalQCC1ID($sugar_internalQCC1ID) { $this -> sugar_internalQCC1ID = $sugar_internalQCC1ID;
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
public function getPremixUsed0() {
		return $this -> premixUsed0;
}

public function setPremixUsed0($premixUsed0) { $this -> premixUsed0 = $premixUsed0;
}
public function getFortifiedSugar() {
		return $this -> fortifiedSugar;
}

public function setFortifiedSugar($fortifiedSugar) { $this -> fortifiedSugar = $fortifiedSugar;
}
public function getPremixUsed1() {
		return $this -> premixUsed1;
}

public function setPremixUsed1($premixUsed1) { $this -> premixUsed1 = $premixUsed1;
}
public function getSugarPremix() {
		return $this -> sugarPremix;
}

public function setSugarPremix($sugarPremix) { $this -> sugarPremix = $sugarPremix;
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
		return $this -> factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
}
 }
?>