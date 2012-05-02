<?php
namespace models;

/**
 * @Entity
 * @Table(name="manufacturerfortified")
 */
 class manufacturerFortified{
 		/*
* @Id
* @Column(name="manufacturerFortId", type="int", length=11, nullable=false)
* */
private $manufacturerFortId;

/*
* @Column(name="manufacturerFortName", type="varchar",length=45, nullable=true)
* */
private $manufacturerFortName;

/*
* @Column(name="address", type="varchar",  length=45,nullable=true)
* */
private $address;

/*
* @Column(name="location", type="varchar",  length=45,nullable=true)
* */
private $location;

/*
* @Column(name="phoneNumber", type="varchar",length=45, nullable=true)
* */
private $phoneNumber;

public function getManufacturerFortId() {
		return $this -> manufacturerFortId;
}

public function setManufacturerFortId($manufacturerFortId) { $this -> manufacturerFortId = $manufacturerFortId;
}
public function getAddress() {
		return $this -> address;
}

public function setAddress($address) { $this -> address = $address;
}
public function getLocation() {
		return $this -> location;
}

public function setLocation($location) { $this -> location = $location;
}
public function getPhoneNumber() {
		return $this -> phoneNumber;
}

public function setPhoneNumber($phoneNumber) { $this -> phoneNumber = $phoneNumber;
}

 }
?>