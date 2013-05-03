<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="factories")
 */
 class E_Factories {  
  
   /**
	* @Id
	* @Column(name="factoryNumber", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $factoryNumber;
	
   /**
	* @Column(name="factoryName", type="string",length=45, nullable=true)
	* */
	private $factoryName;
	
   /**
	* @Column(name="location", type="string", length=45, nullable=true)
	* */
	private $location;
	
   /**
	* @Column(name="address", type="string", length=45, nullable=true)
	* */
	private $address;
	
	 
   /**
	* @Column(name="phoneNumber", type="string",length=45, nullable=true)
	* */
	private $phoneNumber;
	
   /**
    * @OneToMany(targetEntity="manufacturerfortified", mappedBy="manufactuerFortName")
	* @Column(name="manufacturerFortName", type="string", length=45, nullable=true)
	* */
	private $manufacturerFortName;
	
	public function getFactoryNumber() {
			return $this -> factoryNumber;
	}
	
	public function setFactoryNumber($factoryNumber) { $this -> factoryNumber = $factoryNumber;
	}
	public function getFactoryName() {
			return $this -> factoryName;
	}
	
	public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
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