<?php
namespace models\Entities;

	/**
	 * @Entity
	 * @Table(name="vehicle_type")
	 */
 class E_VehicleType{
 	
   /**
	* @Id
	* @Column(name="vehicleId", type="integer", length=11, nullable=false)
	* @GeneratedValue(strategy="AUTO")
	* */
	private $vehicleId;
	
   /**
	* @Column(name="vehicleName", type="string",length=100, nullable=false)
	* */
	private $vehicleName;
	 
	public function getVehicleId() {
			return $this -> vehicleId;
	}
	
	public function setVehicleId($vehicleId) { $this -> vehicleId = $vehicleId;
	}
	 
	public function getVehicleName() {
			return $this -> vehicleName;
	}
	
	public function setVehicleName($vehicleName) { $this -> vehicleName = $vehicleName;
	}
}