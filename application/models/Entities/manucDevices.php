<?php
namespace models;
/**
 * @Entity
 * @Table(name="manucdevices")
 */
 class manucDevices{
 		/*
* @Id
* @Column(name="manufacturerCompName", type="varchar", length=45, nullable=false)
* */
private $manufacturerCompName;

/*
* @Column(name="deviceCompNumber", type="varchar",length=45, nullable=false)
* */
private $deviceCompNumber;

/*
* @Column(name="remarks", type="varchar",length=45, nullable=true)
* */
private $remarks;

public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
public function getDeviceCompNumber() {
		return $this -> deviceCompNumber;
}

public function setDeviceCompNumber($deviceCompNumber) { $this -> deviceCompNumber = $deviceCompNumber;
}
public function getRemarks() {
		return $this -> remarks;
}

public function setRemarks($remarks) { $this -> remarks = $remarks;
}


 }

?>