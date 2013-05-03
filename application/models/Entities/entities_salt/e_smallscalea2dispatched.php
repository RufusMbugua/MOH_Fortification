<?php
namespace models\Entities\entities_salt;
/**
 * @Entity
 * @Table(name="smallscalea2dispatched")
 */
 class E_SmallScaleA2Dispatched{
/**
* @Id
* @Column(name="dispatchedNumber", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $dispatchedNumber;
/**
* @Column(name="harvestYear", type="integer", length= 11, nullable=false)
* */
private $harvestYear;
/**
* @Column(name="contentOfIodine", type="decimal", nullable=false)
* */
private $contentOfIodine;
/**
* @Column(name="amountUsed", type="decimal", nullable=false)
* */
private $amountUsed;
/**
* @Column(name="amountOfSaltProduced", type="decimal", nullable=false)
* */
private $amountOfSaltProduced;
/**
* @Column(name="smallScaleA2ID", type="integer",length=11, nullable=false)
* */
private $smallScaleA2ID;

public function getDispatchedNumnber(){
	return $this -> dispatchedNumber;
}
public function setDispatchedNumber($dispatchedNumber){ $this -> dispatchedNumber =$dispatchedNumber;
      
}
public function getHarvestYear(){
	return $this -> harvestYear;
}
public function setHarvestYear($harvestYear){ $this -> harvestYear =$harvestYear;
      
}
public function getContentOfIodine(){
	return $this -> contentOfIodine;
}
public function setContentOfIodine($contentOfIodine){ $this -> contentOfIodine =$contentOfIodine;
      
}
public function getAmountUsed(){
	return $this -> amountUsed;
}
public function setAmountUsed($amountUsed){ $this -> amountUsed =$amountUsed;
      
}
public function getAmountOfSaltProduced(){
	return $this -> amountOfSaltProduced;
}
public function setAmountOfSaltProduced($amountOfSaltProduced){ $this -> amountOfSaltProduced =$amountOfSaltProduced;
      
}
public function getSmallScaleA2ID(){
	return $this -> smallScaleA2ID;
}
public function setSmallScaleA2ID($smallScaleA2ID){ $this -> smallScaleA2ID =$smallScaleA2ID;
      
}
 }
?>