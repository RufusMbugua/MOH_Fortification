<?php
namespace models;

/**
 * @Entity
 * @Table(name="manufacturercompound")
 */
 class manufacturerCompound{
 		/*
* @Id
* @Column(name="manufacturerId", type="int", length=11, nullable=false)
* */
private $manufacturerId;
/*
* @Column(name="manufacturerCompName", type="varchar", length=45, nullable=true)
* */
private $manufacturerCompName;
/*
* @Column(name="address", type="varchar", length=45, nullable=true)
* */
private $address;
/*
* @Column(name="phoneNumber", type="varchar",length=45, nullable=true)
* */
private $phoneNumber;
/*
* @Column(name="location", type="varchar", length=45,nullable=true)
* */
private $location;

public function getManufacturerId() {
		return $this -> manufacturerId;
}

public function setManufacturerId($manufacturerId) { $this -> manufacturerId = $manufacturerId;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this ->manufacturerCompName= $manufacturerCompName;
}
public function getAddress() {
		return $this -> address;
}

public function setAddress($address) { $this -> address = $address;
}
public function getPhoneNumber() {
		return $this -> phoneNumber;
}

public function setPhoneNumber($phoneNumber) { $this -> phoneNumber = $phoneNumber;
}
public function getLocation() {
		return $this -> location;
}

public function setLocation($loation) { $this -> location = $location;
}

 }
?>