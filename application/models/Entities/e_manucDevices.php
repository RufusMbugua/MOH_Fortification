<?php
namespace models\Entities;

	/**
	 * @Entity
	 * @Table(name="manucdevices")
	 */
 class E_ManucDevices{

   /**
	* @Id
    * @ManyToOne(targetEntity="IodizationCenters",inversedBy="iodizationCentreName")
	* @Column(name="manufacturerCompName", type="string", length=45, nullable=false)
	* */
	protected $manufacturerCompName;
	
   /**
    * @OneToOne(targetEntity="Devices",mappedBy="deviceSerialNumber")
	* @Column(name="deviceCompNumber", type="string",length=45, nullable=false)
	* */
	protected $deviceCompNumber;
	
   /**
	* @Column(name="remarks", type="string",length=45, nullable=true)
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