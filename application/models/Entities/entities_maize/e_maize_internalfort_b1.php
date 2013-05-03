<?php
namespace models\Entities\entities_maize;

/**
 * @Entity
 * @Table(name="maize_internalfortb1")
 */
 class E_Maize_internalFort_B1{
 	/**
* @Id
* @Column(name="maize_internalfortb1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $maize_internalfortb1ID;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="shiftTime", type="string",length=45, nullable=true)
* */
private $shiftTime;
/**
* @Column(name="productionRate", type="decimal", nullable=true)
* */
private $productionRate;
/**
* @Column(name="theoreticFeederFlow", type="decimal", nullable=true)
* */
private $theoreticFeederFlow;
/**
* @Column(name="feederFlow1", type="decimal", nullable=true)
* */
private $feederFlow1;
/**
* @Column(name="feederFlow2", type="decimal", nullable=true)
* */
private $feederFlow2;
/**
* @Column(name="feederFlow3", type="decimal", nullable=true)
* */
private $feederFlow3;
/**
* @Column(name="CV", type="string",length=45, nullable=true)
* */
private $CV;
/**
* @Column(name="adjusted", type="string",length=45, nullable=true)
* */
private $adjusted;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="responsible", type="string",length=45, nullable=true)
* */
private $responsible;

public function getMaize_internalfortb1ID() {
		return $this -> maize_internalfortb1ID;
}

public function setMaize_internalfortb1ID($maize_internalfortb1ID) { $this -> maize_internalfortb1ID = $maize_internalfortb1ID;
}
public function getFactoryName() {
		return $this -> factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
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
public function getProductionRate() {
		return $this -> productionRate;
}

public function setProductionRate($productionRate) { $this -> productionRate = $productionRate;
}
public function getTheoreticFeederFlow() {
		return $this -> theoreticFeederFlow;
}

public function setTheoreticFeederFlow($theoreticFeederFlow) { $this -> theoreticFeederFlow = $theoreticFeederFlow;
}
public function getFeederFlow1() {
		return $this -> feederFlow1;
}

public function setFeederFlow1($feederFlow1) { $this -> feederFlow1 = $feederFlow1;
}
public function getFeederFlow2() {
		return $this -> feederFlow2;
}

public function setFeederFlow2($feederFlow2) { $this -> feederFlow2 = $feederFlow2;
}
public function getFeederFlow3() {
		return $this -> feederFlow3;
}

public function setFeederFlow3($feederFlow3) { $this -> feederFlow3 = $feederFlow3;
}
public function getCV() {
		return $this -> CV;
}

public function setCV($CV) { $this -> CV = $CV;
}
public function getAdjusted() {
		return $this -> adjusted;
}

public function setAdjusted($adjusted) { $this -> adjusted = $adjusted;
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