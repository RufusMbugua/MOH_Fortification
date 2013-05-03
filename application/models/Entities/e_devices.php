<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="devices")
 */

class E_Devices{

	/**
	 * @Id
	 * @Column(name="deviceSerialNumber", type="string", length=50, nullable=false)
	 * */
	private $deviceSerialNumber;

	/**
	 *  @Column(name="deviceType", type="string", length=45, nullable=true)
	 * */
	private $deviceType;

	/**
	 * @Column(name="remarks", type="string", length=45, nullable=true)
	 * */
	private $remarks;

    /**
	 * Device Serial Number
	 * */
	public function getDeviceSerialNumber() {
		return $this -> deviceSerialNumber;
	}

	public function setDeviceSerialNumber($deviceSerialNumber) {
		$this -> deviceSerialNumber = $deviceSerialNumber;
	}

    /*
	 * Device Type
	 * */
	public function getDeviceType() {
		return $this -> deviceType;
	}

	public function setDeviceType($deviceType) { $this -> deviceType = $deviceType;
	}

    /*
	 * Remarks
	 * */
	public function getRemarks() {
		return $this -> remarks;
	}

	public function setRemarks($remarks) { $this -> remarks = $remarks;
	}

}
?>