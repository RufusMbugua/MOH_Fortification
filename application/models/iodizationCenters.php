<?php
namespace models;

/**
 * @Entity
 * @Table(name="iodizationcenters")
 */
 class iodizationCenters{
 		/*
* @Id
* @Column(name="iodizationCentreNumber", type="int", length=11, nullable=false)
* */
private $iodizationCentreNumber;

/*
* @Column(name="iodizationCentreName", type="varchar",length=45, nullable=true)
* */
private $iodizationCentreName;

/*
* @Column(name="location", type="varchar", length=45, nullable=true)
* */
private $location;

/*
* @Column(name="address", type="varchar", length=45, nullable=true)
* */
private $address;

/*
* @Column(name="phoneNumber", type="varchar",lengthg=45, nullable=true)
* */
private $phoneNumber;

/*
* @Column(name="manufacturerFortName", type="varchar", length=45, nullable=true)
* */
private $manufacturerFortName;

public function getIodizationCentreNumber() {
		return $this -> iodizationCentreNumber;
}

public function setIodizationCentreNumber($iodizationCentreNumber) { $this -> iodizationCentreNumber = $iodizationCentreNumber;
}
public function getIodizationCentreName() {
		return $this -> iodizationCentreName;
}

public function setIodizationCentreName($iodizationCentreName) { $this -> iodizationCentreName = $iodizationCentreName;
}
public function getLocation() {
		return $this -> location;
}

public function setLocation($location) { $this -> location = $location;
}
public function getAddress() {
		return $this -> address;
}

public function setAddress($address) { $this -> address = $address;
}
public function getPhoneNumber() {
		return $this -> phoneNumber;
}

public function setPhoneNumber($phoneNumber) { $this ->phoneNumber = $phoneNumber;
}
public function getManufacturerFortName() {
		return $this -> manufacturerFortName;
}

public function setManufacturerFortName($manufacturerFortName) { $this -> manufacturerFortName = $manufacturerFortName;
}


}
?>