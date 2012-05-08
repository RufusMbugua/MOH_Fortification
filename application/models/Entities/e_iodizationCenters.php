<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="iodizationcenters")
 */
 class E_IodizationCenters {  
  
   /**
	* @Id
	* @Column(name="iodizationCentreNumber", type="integer", length=11, nullable=false)
    * @GeneratedValue(strategy="AUTO")
	* */
	private $iodizationCentreNumber;
	
   /**
    * @OneToMany(targetEntity="ManucDevices", mappedby="manufacturerCompName")
	* @Column(name="iodizationCentreName", type="string",length=45, nullable=true)
	* */
	private $iodizationCentreName;
	
   /**
	* @Column(name="location", type="string", length=45, nullable=true)
	* */
	private $location;
	
   /**
	* @Column(name="address", type="string", length=45, nullable=true)
	* */
	private $address;
	
	 
   /**
	* @Column(name="phoneNumber", type="string",lengthg=45, nullable=true)
	* */
	private $phoneNumber;
	
   /**
	* @Column(name="manufacturerFortName", type="string", length=45, nullable=true)
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