<?php
namespace models\Entities\entities_salt;

/**
 * @Entity
 * @Table(name="smallscalea1dispatched")
 */
 class E_SmallScaleA1Dispatched{
/**
* @Id
* @Column(name="smallScaleA1DispatchedID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $smallScaleA1DispatchedID;
/**
* @Column(name="harvestYear", type="decimal", nullable=false)
* */
private $harvestYear;
/**
* @Column(name="amountUsed", type="decimal", nullable=false)
* */
private $amountUsed;
/**
* @Column(name="smallScaleA1ID", type="integer",length=11, nullable=false)
* */
private $smallScaleA1ID;
/**
* @Column(name="amountOfPremixProduced", type="decimal", nullable=false)
* */
private $amountOfPremixProduced;
public function getSmallScaleA1DispatchedID() {
		return $this -> smallScaleA1DispatchedID;
}

public function setSmallScaleA1DispatchedID($smallScaleDispatchedID) { $this -> smallScaleDispatchedID = $smallScaleDispatchedID;
}
public function getHarvestYear(){
	return $this -> harvestYear;
}
public function setHarvestYear($harvestYear){ $this -> harvestYear =$harvestYear;
      
}
public function getAmountUsed() {
		return $this -> amountUsed;
}

public function setAmountUsed($amountUsed) { $this -> amountUsed = $amountUsed;
}
public function getSmallScaleA1ID() {
		return $this -> smallScaleA1ID;
}

public function setSmallScaleA1ID($smallScaleA1ID) { $this -> smallScaleA1ID = $smallScaleA1ID;
}
public function getAmountOfPremixProduced() {
		return $this -> amountOfPremixProduced;
}

public function setAmountOfPremixProduced($amountOfPremixProduced) { $this -> amountOfPremixProduced = $amountOfPremixProduced;
}
 }

?>