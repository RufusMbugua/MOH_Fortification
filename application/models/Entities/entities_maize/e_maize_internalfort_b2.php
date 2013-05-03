<?php
namespace models\Entities\entities_maize;

	/**
	 * @Entity
	 * @Table(name="maize_internalfortb2")
	 */
	 class E_Maize_internalFort_B2{
	 	/**
	* @Id
	* @Column(name="maize_internalfortb2ID", type="integer", length=11, nullable=false)
	* @GeneratedValue(strategy="AUTO")
	* */
	private $maize_internalfortb2ID;
	/**
	* @Column(name="factoryName", type="string",length=45, nullable=true)
	* */
	private $factoryName;
	/**
	* @Column(name="dates", type="string",length=45, nullable=true)
	* */
	private $dates;
	/**
	* @Column(name="shiftTime", type="string",length=45, nullable=true)
	* */
	private $shiftTime;
	/**
	* @Column(name="flourProducedMT", type="decimal", nullable=true)
	* */
	private $flourProducedMT;
	/**
	* @Column(name="lotID", type="decimal",length=45, nullable=true)
	* */
	private $lotID;
	/**
	* @Column(name="premixUsed", type="decimal", nullable=true)
	* */
	private $premixUsed;
	/**
	* @Column(name="observations", type="string",length=45, nullable=true)
	* */
	private $observations;
	/**
	* @Column(name="responsible", type="string",length=45, nullable=true)
	* */
	private $responsible;
	
	public function getMaize_internalfortb2ID() {
			return $this -> maize_internalfortb2ID;
	}
	
	public function setMaize_internalfortb2ID($maize_internalfortb2ID) { $this -> maize_internalfortb2ID = $maize_internalfortb2ID;
	}
	
	public function getIodizationCenter() {
			return $this -> factoryName;
	}
	
	public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
	}
	
	public function getDates() {
			return $this -> dates;
	}
	
	public function setDates($dates) { $this -> dates = $dates;
	}
	
	public function getShiftTime() {
			return $this -> shiftTime;
	}
	
	public function setShiftTime($shiftTime) { $this -> shiftTime = $shiftTime;
	}
	
	public function getFlourProducedMT() {
			return $this -> flourProducedMT;
	}
	
	public function setFlourProducedMT($flourProducedMT) { $this -> flourProducedMT = $flourProducedMT;
	}
	
	public function getLotID() {
			return $this -> lotID;
	}
	
	public function setLotID($lotID) { $this -> lotID = $lotID;
	}
	
	public function getPremixUsed() {
			return $this -> premixUsed;
	}
	
	public function setPremixUsed($premixUsed) { $this -> premixUsed = $premixUsed;
	}
	
	public function getObservations() {
			return $this -> observations;
	}
	
	public function setObservations($observations) { $this -> observations = $observations;
	}
	
	public function getResponsible() {
			return $this -> responsible;
	}
	
	public function setResponsible($responsible) { $this -> responsible = $responsible;
	}
 }

?>