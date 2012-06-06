<?php
namespace models\Entities;

	/**
	 * @Entity
	 * @Table(name="manucdevices")
	 */
 class E_ManucDevices{

   /**
	* @Id
    * @ManyToOne(targetEntity="factories",inversedBy="factoryName")
	* @Column(name="manufacturerCompName", type="string", length=45, nullable=false)
	* */
	protected $manufacturerFortName;
	
   /**
    * @OneToOne(targetEntity="Devices",mappedBy="deviceSerialNumber")
	* @Column(name="deviceCompNumber", type="string",length=45, nullable=false)
	* */
	protected $deviceCompNumber;
	
   /**
	* @Column(name="remarks", type="string",length=45, nullable=true)
	* */
	private $remarks;
	
	public function getManufacturerFortName() {
			return $this -> manufacturerFortName;
	}
	
	public function setManufacturerFortName($manufacturerFortName) { $this -> manufacturerFortName = $manufacturerFortName;
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