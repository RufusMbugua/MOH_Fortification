<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="manufacturerfortified")
 */
 class E_ManufacturerFortified {
 	
	/**
	* @Id
	* @Column(name="manufacturerFortId", type="integer", length=11, nullable=false)
	* */
	protected $manufacturerFortId;
	
	/**
	* @Column(name="manufactuerFortName", type="string",length=45, nullable=true)
	* */
	protected $manufactuerFortName;
	
	/**
	* @Column(name="address", type="string",  length=45,nullable=true)
	* */
	private $address;
	
	/**
	* @Column(name="location", type="string",  length=45,nullable=true)
	* */
	private $location;
	
	/**
	* @Column(name="phoneNumber", type="string",length=45, nullable=true)
	* */
	private $phoneNumber;
	
	/**
	* @ManyToOne(targetEntity="vehicle_type",inversedBy="vehicleName")
	* @Column(name="vehicleName", type="string",length=100, nullable=false)
	* */
	private $vehicleName;

	public function getManufacturerFortId() {
			return $this -> manufacturerFortId;
	}
	
	public function setManufacturerFortId($manufacturerFortId) { $this -> manufacturerFortId = $manufacturerFortId;
	}
	
	public function getManufacturerFortName() {
			return $this -> manufactuerFortName;
	}
	
	public function setManufacturerFortName($manufacturerFortName) { $this -> manufactuerFortName = $manufacturerFortName;
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
	
	public function getVehicleName() {
			return $this -> vehicleName;
	}
	
	public function setVehicleName($vehicleName) { $this -> vehicleName = $vehicleName;
	}

 }
?>