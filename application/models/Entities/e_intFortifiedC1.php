<?php
namespace models;

/**
 * @Entity
 * @Table(name="internalfortifiedc1")
 */
 class E_IntFortifiedC1{
 		/*
* @Id
* @Column(name="transactionNumber", type="int", length=11, nullable=false)
* */
private $transactionNumber;

/*
* @Column(name="dates", type="date", nullable=true)
* */
private $dates;

/*
* @Column(name="shiftTime", type="datetime", nullable=true)
* */
private $shiftTime;

/*
* @Column(name="saltProducedMT", type="double", nullable=true)
* */
private $saltProducedMT;

/*
* @Column(name="premixUsed", type="double", nullable=true)
* */
private $premixUsed;

/*
* @Column(name="saltFortVsPremixUsed", type="double", nullable=true)
* */
private $saltFortVsPremixUsed;

/*
* @Column(name="notes", type="varchar", length=100, nullable=true)
* */
private $notes;

/*
* @Column(name="comments", type="varchar", length=100, nullable=true)
* */
private $comments;

/*
* @Column(name="transactedBy", type="int",length=11, nullable=true)
* */
private $transactedBy;

/*
* @Column(name="manufacturerCompName", type="varchar", length=45, nullable=true)
* */
private $manufacturerCompName;
	
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

public function setShiftTime($cshiftTime) { $this -> shiftTime = $shiftTime;
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
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName ){ $this -> manufacturerCompName = $manufacturerCompName;
}



}
 
?>