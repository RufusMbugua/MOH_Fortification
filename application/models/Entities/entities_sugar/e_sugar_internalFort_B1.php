<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalfortb1")
 */
 class E_Sugar_internalFort_B1{
 	/**
* @Id
* @Column(name="sugar_internalfortB1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalfortB1ID;
/**
* @Column(name="harvestYear", type="string",length=45, nullable=true)
* */
private $harvestYear;
/**
* @Column(name="premixQuantity", type="decimal",nullable=true)
* */
private $premixQuantity;
/**
* @Column(name="sugarProduction", type="decimal", nullable=true)
* */
private $sugarProduction;
/**
* @Column(name="sugarInventory", type="decimal", nullable=true)
* */
private $sugarInventory;
/**
* @Column(name="sugarCost", type="decimal", nullable=true)
* */
private $sugarCost;
/**
* @Column(name="vitaminAInventory", type="decimal", nullable=true)
* */
private $vitaminAInventory;
/**
* @Column(name="vitaminACost", type="decimal", nullable=true)
* */
private $vitaminACost;
/**
* @Column(name="antioxidantInventory", type="decimal", nullable=true)
* */
private $antioxidantInventory;
/**
* @Column(name="antioxidantCost", type="decimal", nullable=true)
* */
private $antioxidantCost;
/**
* @Column(name="vegetableOilInventory", type="decimal", nullable=true)
* */
private $vegetableOilInventory;
/**
* @Column(name="vegetableOilCost", type="decimal", nullable=true)
* */
private $vegetableOilCost;
/**
* @Column(name="polythyleneInventory", type="decimal", nullable=true)
* */
private $polythyleneInventory;
/**
* @Column(name="polythyleneCost", type="decimal", nullable=true)
* */
private $polythyleneCost;
/**
* @Column(name="polypropyleneInventory", type="decimal", nullable=true)
* */
private $polypropyleneInventory;
/**
* @Column(name="polypropyleneCost", type="decimal", nullable=true)
* */
private $polypropyleneCost;
/**
* @Column(name="nitrogenInventory", type="decimal", nullable=true)
* */
private $nitrogenInventory;
/**
* @Column(name="nitrogenCost", type="decimal", nullable=true)
* */
private $nitrogenCost;
/**
* @Column(name="preparedBy", type="string",length=45, nullable=true)
* */
private $preparedBy;
/**
* @Column(name="preparedDate", type="string",length=45, nullable=true)
* */
private $preparedDate;
/**
* @Column(name="approvedBy", type="string",length=45, nullable=true)
* */
private $approvedBy;
/**
* @Column(name="approvedDate", type="string",length=45, nullable=true)
* */
private $approvedDate;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;

public function getSugar_internalfortB1ID() {
		return $this -> sugar_internalfortB1ID;
}

public function setSugar_internalfortB1ID($sugar_internalfortB1ID) { $this -> sugar_internalfortB1ID = $sugar_internalfortB1ID;
}
public function getHarvestYear() {
		return $this -> harvestYear;
}

public function setHarvestYear($harvestYear) { $this -> harvestYear = $harvestYear;
}
public function getPremixQuantity() {
		return $this -> premixQuantity;
}

public function setPremixQuantity($premixQuantity) { $this -> premixQuantity = $premixQuantity;
}
public function getSugarProduction() {
		return $this -> sugarProduction;
}

public function setSugarProduction($sugarProduction) { $this -> sugarProduction = $sugarProduction;
}
public function getSugarInventory() {
		return $this ->sugarInventory;
}

public function setSugarInventory($sugarInventory) { $this -> sugarInventory = $sugarInventory;
}
public function getSugarCost() {
		return $this -> sugarCost;
}

public function setSugarCost($sugarCost) { $this -> sugarCost = $sugarCost;
}
public function getVitaminAInventory() {
		return $this -> vitaminAInventory;
}

public function setVitaminAInventory($vitaminAInventory) { $this -> vitaminAInventory = $vitaminAInventory;
}
public function getVitaminACost() {
		return $this -> vitaminACost;
}

public function setVitaminACost($vitaminACost) { $this -> vitaminACost = $vitaminACost;
}
public function getAntioxidantInventory() {
		return $this -> antioxidantInventory;
}

public function setAntioxidantInventory($antioxidantInventory) { $this -> antioxidantInventory = $antioxidantInventory;
}
public function getAntioxidantCost() {
		return $this -> antioxidantCost;
}

public function setAntioxidantCost($antioxidantCost) { $this -> antioxidantCost = $antioxidantCost;
}
public function getPVegetableOilInventory() {
		return $this -> vegetableOilInventory;
}

public function setVegetableOilInventory($vegetableOilInventory) { $this -> vegetableOilInventory = $vegetableOilInventory;
}
public function getVegetableOilCost() {
		return $this -> vegetableOilCost;
}

public function setVegetableOilCost($vegetableOilCost) { $this -> vegetableOilCost = $vegetableOilCost;
}
public function getPolythyleneInventory() {
		return $this -> polythyleneInventory;
}

public function setPolythyleneInventory($polythyleneInventory) { $this -> polythyleneInventory = $polythyleneInventory;
}
public function getPolythyleneCost() {
		return $this -> polythyleneCost;
}

public function setPolythyleneCost($polythyleneCost) { $this -> polythyleneCost = $polythyleneCost;
}
public function getPolypropyleneInventory() {
		return $this -> polypropyleneInventory;
}

public function setPolypropyleneInventory($polypropyleneInventory) { $this -> polypropyleneInventory = $polypropyleneInventory;
}
public function getPolypropyleneCost() {
		return $this -> polypropyleneCost;
}

public function setPolypropyleneCost($polypropyleneCost) { $this -> polypropyleneCost= $polypropyleneCost;
}
public function getNitrogenInventory() {
		return $this -> nitrogenInventory;
}

public function setNitrogenInventory($nitrogenInventory) { $this -> nitrogenInventory = $nitrogenInventory;
}
public function getNitrogenCost() {
		return $this -> nitrogenCost;
}

public function setNitrogenCost($nitrogenCost) { $this -> nitrogenCost = $nitrogenCost;
}
public function getPreparedBy() {
		return $this -> preparedBy;
}

public function setPreparedBy($preparedBy) { $this -> preparedBy = $preparedBy;
}
public function getPreparedDate() {
		return $this -> preparedDate;
}

public function setPreparedDate($preparedDate) { $this -> preparedDate = $preparedDate;
}
public function getApprovedBy() {
		return $this -> approvedBy;
}

public function setApprovedBy($approvedBy) { $this -> approvedBy = $approvedBy;
}
public function getApprovDate() {
		return $this -> approveDate;
}

public function setApprovedDate($approvedDate) { $this -> approvedDate = $approvedDate;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
 }
?>