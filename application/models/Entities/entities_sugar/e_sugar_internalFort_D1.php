<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalfortd1")
 */
 class E_Sugar_InternalFort_D1{
/**
* @Id
* @Column(name="sugar_internalfortD1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalfortD1ID;
/**
* @Column(name="lotsID", type="integer", nullable=true)
* */
private $lotsID;
/**
* @Column(name="productionDate", type="string",length=45, nullable=true)
* */
private $productionDate;
/**
* @Column(name="samplesDate", type="string",length=45, nullable=true)
* */
private $samplesDate;
/**
* @Column(name="laboratoryReport", type="string",length=45, nullable=true)
* */
private $laboratoryReport;
/**
* @Column(name="reportDate", type="string",length=45, nullable=true)
* */
private $reportDate;
/**
* @Column(name="vitaminA", type="decimal",nullable=true)
* */
private $vitaminA;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="transactedBy", type="string",length=45, nullable=true)
* */
private $transactedBy;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;

public function getSugar_internalfortD1ID() {
		return $this -> sugar_internalfortD1ID;
}

public function setSugar_internalfortD1ID($sugar_internalfortBD1ID) { $this ->sugar_internalfortD1ID= $sugar_internalfortD1ID;
}
public function getLotsID() {
		return $this -> lotsID;
}

public function setLotsID($lotsID) { $this -> lotsID = $lotsID;
}

public function getProductionDate() {
		return $this ->productionDate;
}

public function setProductionDate($productionDate) { $this -> productionDate = $productionDate;
}
public function getSamplesDate() {
		return $this -> samplesDate;
}

public function setSamplesDate($samplesDate) { $this ->samplesDate= $samplesDate;
}
public function getLaboratoryReport() {
		return $this -> laboratoryReport;
}

public function setLaboratoryReport($laboratoryReport) { $this -> laboratoryReport = $laboratoryReport;
}
public function getReportDate() {
		return $this -> reportDate;
}

public function setReportDate($reportDate) { $this ->reportDate= $reportDate;
}
public function getVitaminA() {
		return $this -> vitaminA;
}

public function setVitaminA($vitaminA) { $this -> vitaminA = $vitaminA;
}
public function getObservatoions() {
		return $this -> observations;
}

public function setObservations($observations) { $this ->sobservations= $observations;
}
public function getTransactedBy() {
		return $this -> transactedBy;
}

public function setTransactedBy($transactedBy) { $this -> transactedBy = $transactedBy;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
 }
?>