<?php
namespace models;

/**
 * @Entity
 * @Table(name="internalfortifiedb2")
 */
 
 class intFortifiedB2{
 	/*
* @Id
* @Column(name="checkNumber", type="int", length=11, nullable=false)
* */
private $checkNumber;

/*
* @Column(name="dates", type="date", nullable=false)
* */
private $dates;

/*
* @Column(name="condition", type="tinyint", length=1, nullable=false)
* */
private $condition;

/*
* @Column(name="observations", type="varchar", length=45, nullable=true)
* */
private $observations;

/*
* @Column(name="checkedBy", type="varchar", length=45, nullable=true)
* */
private $checkedBy;

/*
* @Column(name="deviceCompNumber", type="varchar", length=45, nullable=true)
* */
private $deviceCompNumber;

/*
* @Column(name="manufacturerCompName", type="varchar", length=45, nullable=true)
* */
private $manufacturerCompName;

public function getCheckNumber() {
		return $this -> checkNumber;
}

public function setCheckNumber($checkNumber) { $this -> checkNumber = $checkNumber;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getCondition() {
       return $this -> condition;
}

public function setCondition($condition) { $this -> condition = $condition;
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