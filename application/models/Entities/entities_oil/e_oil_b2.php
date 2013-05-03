<?php
namespace models\Entities\entities_oil;

/**
 * @Entity
 * @Table(name="oil_tableb2")
 */
 class E_Oil_B2{
/**
* @Id
* @Column(name="fortifiedoilb2ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $fortifiedoilb2ID;
/**
* @Column(name="dates", type="string",length=45, nullable=false)
* */
private $dates;
/**
* @Column(name="deviceCondition", type="integer",length=1, nullable=false)
* */
private $deviceCondition;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="checkedBy", type="string",length=45, nullable=true)
* */
private $checkedBy;
/**
* @Column(name="deviceCompNumber", type="string",length=45, nullable=true)
* */
private $deviceCompNumber;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;

public function getFortifiedoilb2ID() {
		return $this -> fortifiedoilb2ID;
}

public function setFortifiedoilb2ID($fortifiedoilb2ID) { $this -> fortifiedoilb2ID = $fortifiedoilb2ID;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getDeviceCondition() {
		return $this -> deviceCondition;
}

public function setDeviceCondition($deviceCondition) { $this -> deviceCondition = $deviceCondition;
}
public function getObservations() {
		return $this -> observations;
}

public function setObservations($observations) { $this -> observations = $observations;
}
public function getCheckedBy() {
		return $this -> checkedBy;
}

public function setCheckedBy($checkedBy) { $this -> checkedBy = $checkedBy;
}
public function getDeviceCompNumber() {
		return $this -> deviceCompNumber;
}

public function setDeviceCompNumber($deviceCompNumber) { $this -> deviceCompNumber = $deviceCompNumber;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
 }
?>