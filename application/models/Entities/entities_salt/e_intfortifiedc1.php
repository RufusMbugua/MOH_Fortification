<?php
namespace models\Entities\entities_salt;

/**
 * @Entity
 * @Table(name="internalfortifiedc1")
 */
 class E_IntFortifiedC1{
	/**
	* @Id
	* @Column(name="transactionNumber", type="int", length=11, nullable=false)
	* @GeneratedValue(strategy="AUTO")
	* */
	private $transactionNumber;
	
   /**
	* @Column(name="dates", type="date", nullable=false)
	* */
	private $dates;
	
   /**
	* @Column(name="shiftTime", type="string",length=8, nullable=false)
	* */
	private $shiftTime;
	
   /**
	* @Column(name="saltProducedMT", type="decimal", nullable=true)
	* */
	private $saltProducedMT;
	
   /**
	* @Column(name="premixUsed", type="decimal", nullable=true)
	* */
	private $premixUsed;
	
   /**
	* @Column(name="saltFortVsPremixUsed", type="decimal", nullable=true)
	* */
	private $saltFortVsPremixUsed;
	
   /**
	* @Column(name="notes", type="string", length=100, nullable=true)
	* */
	private $notes;
	
   /**
	* @Column(name="comments", type="string", length=100, nullable=true)
	* */
	private $comments;
	
   /**
	* @Column(name="transactedBy", type="string",length=45, nullable=true)
	* */
	private $transactedBy;
	
   /**
    * @ManyToOne(targetEntity="factories", inversedBy="factoryName")
	* @Column(name="factoryName", type="string", length=45, nullable=false)
	* */
	private $factoryName;
		
	public function getTransactionNumber() {
			return $this -> transactionNumber;
	}
	
	public function setTransactionNumber($transactionNumber) { $this -> transactionNumber = $transactionNumber;
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
	public function getSaltProducedMT() {
			return $this -> saltProducedMT;
	}
	
	public function setSaltProducedMT($saltProducedMT) { $this -> saltProducedMT = $saltProducedMT;
	}
	public function getPremixUsed() {
			return $this -> premixUsed;
	}
	
	public function setPremixUsed($premixUsed) { $this -> premixUsed = $premixUsed;
	}
	public function getSaltFortVsPremixUsed() {
			return $this -> saltFortVsPremixUsed;
	}
	
	public function setSaltFortVsPremixUsed($saltFortVsPremixUsed) { $this -> saltFortVsPremixUsed = $saltFortVsPremixUsed;
	}
	public function getNotes() {
			return $this -> notes;
	}
	
	public function setNotes($notes ){ $this -> notes = $notes;
	}
	public function getComments() {
			return $this -> comments;
	}
	
	public function setComments($comments ){ $this -> comments = $comments;
	}
	public function getTransactedBy() {
			return $this -> transactedBy;
	}
	
	public function setTransactedBy($transactedBy ){ $this -> transactedBy = $transactedBy;
	}
	public function getFactoryName() {
			return $this -> factoryName;
	}
	
	public function setFactoryName($factoryName )
	{
		 $this -> factoryName = $factoryName;
	}



}
 
?>