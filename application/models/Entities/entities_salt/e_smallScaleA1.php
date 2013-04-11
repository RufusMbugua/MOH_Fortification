<?php
namespace models\Entities\entities_salt;

/**
 * @Entity
 * @Table(name="smallscalea1")
 */
 class E_SmallScaleA1{
/**
* @Id
* @Column(name="transactionNumber", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $transactonNumber;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="harvestYear", type="integer",length=11, nullable=false)
* */
private $harvestYear;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;
/**
* @Column(name="weightKg", type="decimal", nullable=true)
* */
private $weightKg;
/**4*
* @Column(name="lotNumber", type="string",length=45, nullable=true)
* */
private $lotNumber;

/**
* @Column(name="contentOfIodine", type="decimal", nullable=false)
* */

private $contentOfIodine;

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
public function getHarvestYear() {
		return $this -> harvestYear;
}

public function setHarvestYear($harvestYear) { $this -> harvestYear = $harvestYear;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
public function getWeightKg() {
		return $this -> weightKg;
}

public function setWeightKg($weightKg) { $this -> weightKg = $weightKg;
}
public function getLotNumber() {
		return $this -> lotNumber;
}

public function setLotNumber($lotNumber) { $this -> lotNumber = $lotNumber;
}

public function getContentOfIodine() {
		return $this -> contentOfIodine;
}

public function setContentOfIodine($contentOfIodine) { $this -> contentOfIodine= $contentOfIodine;
}

 
 
 
 }
?>