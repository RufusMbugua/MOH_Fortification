<?php
namespace models\Entities\entities_wheat;

	/**
	 * @Entity
	 * @Table(name="wheat_internalfortc1")
	 */
	 class E_Wheat_InternalFort_C1{
 	
	/**
	* @Id
	* @Column(name="wheat_internalFortC1ID", type="integer", length=11, nullable=false)
	* @GeneratedValue(strategy="AUTO")
	* */
	private $wheat_internalFortC1ID;
	
	/**
	* @Column(name="shiftTime", type="string",length=45, nullable=true)
	* */
	private $shiftTime;
	
	/**
	* @Column(name="wheatProduced", type="decimal", nullable=true)
	* */
	private $wheatProduced;
	
	/**
	* @Column(name="premixUsed", type="decimal", nullable=true)
	* */
	private $premixUsed;
	
	/**
	* @Column(name="wheatFlourVSPremix", type="decimal", nullable=true)
	* */
	private $wheatFlourVSPremix;
	
	/**
	* @Column(name="notes", type="string",length=45, nullable=true)
	* */
	private $notes;
	
	/**
	* @Column(name="comments", type="string",length=45, nullable=true)
	* */
	private $comments;
	
	/**
	* @Column(name="dates", type="date",length=45, nullable=true)
	* */
	private $dates;
	
	/**
	* @Column(name="responsible", type="string",length=45, nullable=true)
	* */
	private $responsible;
	
	
	/**
	* @Column(name="factoryName", type="string",length=45, nullable=true)
	* */
	private $factoryName;
	
	public function getWheat_internalFortc1ID() {
			return $this -> wheat_internalFortc1ID;
	}
	
	public function setWheat_internalFortC1ID($wheat_internalFortC1ID) { $this -> wheat_internalFortC1ID = $wheat_internalFortC1ID;
	}
	
	public function getShiftTime() {
			return $this -> shiftTime;
	}
	
	public function setShiftTime($shiftTime) { $this -> shiftTime = $shiftTime;
	}
	
	public function getWheatProduced() {
			return $this -> wheatProduced;
	}
	
	public function setWheatProduced($wheatProduced) { $this -> wheatProduced = $wheatProduced;
	}
	
	public function getPremixUsed() {
			return $this -> premixUsed;
	}
	
	public function setPremixUsed($premixUsed) { $this -> premixUsed = $premixUsed;
	}
	
	public function getWheatFlourVSPremix() {
			return $this -> wheatFlourVSPremix;
	}
	
	public function setWheatFlourVSPremix($wheatFlourVSPremix) { $this -> wheatFlourVSPremix = $wheatFlourVSPremix;
	}
	
	public function getNotes() {
			return $this -> notes;
	}
	
	public function setNotes($notes) { $this -> notes = $notes;
	}
	
	public function getComments() {
			return $this -> comments;
	}
	
	public function setComments($comments) { $this -> comments = $comments;
	}
	
	public function getDates() {
			return $this -> dates;
	}
	
	public function setDates($dates) { $this -> dates = $dates;
	}
	
	public function getResponsible() {
			return $this -> responsible;
	}
	
	public function setResponsible($responsible) { $this -> responsible = $responsible;
	}
	
	public function getFactoryName() {
			return $this -> factoryName;
	}
	
	public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
	}
 }
?>