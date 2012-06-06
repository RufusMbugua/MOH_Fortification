<?php
namespace models\Entities\entities_maize;

/**
 * @Entity
 * @Table(name="maize_internalforta1")
 */
 class E_Maize_internalFort_A1{
 	/**
* @Id
* @Column(name="maize_internalforta1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $maize_internalforta1ID;
/**
* @Column(name="productType", type="string",length=45, nullable=true)
* */
private $productType;
/**
* @Column(name="manufacturerCompName", type="string",length=55, nullable=true)
* */
private $manufacturerCompName;
/**
* @Column(name="inspectedBy", type="string",length=45, nullable=true)
* */
private $inspectedBy;
/**
* @Column(name="dates", type="date",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="quantity", type="string",length=45, nullable=true)
* */
private $quantity;

/**
* @Column(name="integrityObservation", type="string",length=45, nullable=true)
* */
private $integrityObservation;
/**
* @Column(name="lotNumber", type="string",length=10, nullable=true)
* */
private $lotNumber;
/**
* @Column(name="lotObservation", type="string",length=45, nullable=true)
* */
private $lotObservation;
/**
* @Column(name="productionDate", type="string",length=10, nullable=true)
* */
private $productionDate;
/**
* @Column(name="productionObservation", type="string",length=45, nullable=true)
* */
private $productionObservation;
/**
* @Column(name="expiryDate", type="string",length=10, nullable=true)
* */
private $expiryDate;
/**
* @Column(name="expiryObservation", type="string",length=45, nullable=true)
* */
private $expiryObservation;
/**
* @Column(name="micronutrientLevels", type="string",length=10, nullable=true)
* */
private $micronutrientLevels;
/**
* @Column(name="micronutrientObservation", type="string",length=45, nullable=true)
* */
private $micronutrientObservation;
/**
* @Column(name="certificateOfAnalysis", type="string",length=10, nullable=true)
* */
private $certificateOfAnalysis;
/**
* @Column(name="certificateOfAnalysisObservation", type="string",length=45, nullable=true)
* */
private $certificateObservation;
/**
* @Column(name="other", type="string",length=45, nullable=true)
* */
private $other;
/**
* @Column(name="otherObservation", type="string",length=45, nullable=true)
* */
private $otherObservation;
/**
* @Column(name="accepted", type="integer",length=1, nullable=true)
* */
private $accepted;
/**
* @Column(name="reasonsForRejection", type="string",length=45, nullable=true)
* */
private $reasonsForRejection;
/**
* @Column(name="receivedBy", type="string",length=45, nullable=true)
* */
private $receivedBy;
/**
* @Column(name="receivedDate", type="string",length=45, nullable=true)
* */
private $receivedDate;


public function getMaize_internalforta1ID() {
		return $this -> maize_internalforta1ID;
}

public function setMaize_internalforta1ID($maize_internalforta1ID) { $this -> maize_internalforta1ID = $maize_internalforta1ID;
}
public function getProductType() {
		return $this -> productType;
}

public function setProductType($productType) { $this -> productType = $productType;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
public function getInspectedBy() {
		return $this -> inspectedBy;
}

public function setInspectedBy($inspectedBy) { $this -> inspectedBy = $inspectedBy;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getQuantity() {
		return $this -> quantity;
}

public function setQuantity($quantity) { $this -> quantity = $quantity;
}
public function getIntegrityObservation() {
		return $this -> integrityObservation;
}

public function setIntegrityObservation($integrityObservation) { $this -> integrityObservation = $integrityObservation;
}
public function getLotNumber() {
		return $this -> lotNumber;
}

public function setLotNumber($lotNumber) { $this -> lotNumber = $lotNumber;
}
public function getLotObservation() {
		return $this -> lotObservation;
}

public function setLotObservation($lotObservation) { $this -> lotObservation = $lotObservation;
}
public function getProductionDate() {
		return $this -> productionDate;
}

public function setProductionDate($productionDate) { $this -> productionDate = $productionDate;
}
public function getProductionObservation() {
		return $this -> productionObservation;
}

public function setProductionObservation($productionObservation) { $this -> productionObservation = $productionObservation;
}
public function getExpiryDate() {
		return $this -> expiryDate;
}

public function setExpiryDate($expiryDate) { $this -> expiryDate = $expiryDate;
}
public function getExpiryObservation() {
		return $this -> expiryObservation;
}

public function setExpiryObservation($expiryObservation) { $this -> expiryObservation = $expiryObservation;
}
public function getMicronutrientLevels() {
		return $this -> micronutrientLevels;
}

public function setMicronutrientLevels($micronutrientLevels) { $this -> micronutrientLevels = $micronutrientLevels;
}
public function getMicronutrientObservation() {
		return $this -> micronutrientObservation;
}

public function setMicronutrientObservation($micronutrientObservation) { $this -> micronutrientObservation = $micronutrientObservation;
}
public function getCertificateOfAnalysis() {
		return $this -> certificateOfAnalysis;
}

public function setCertificateOfAnalysis($certificateOfAnalysis) { $this -> certificateOfAnalysis = $certificateOfAnalysis;
}
public function getCertificateObservation() {
		return $this -> certificateObservation;
}

public function setCertificateObservation($certificateObservation) { $this -> certificateObservation = $certificateObservation;
}
public function getOther() {
		return $this -> other;
}

public function setOther($other) { $this -> other = $other;
}
public function getOtherObservation() {
		return $this -> otherObservation;
}

public function setOtherObservation($otherObservation) { $this -> otherObservation = $otherObservation;
}
public function getAccepted() {
		return $this -> accepted;
}

public function setAccepted($accepted) { $this -> accepted = $accepted;
}
public function getReasonsForRejection() {
		return $this -> reasonsForRejection;
}

public function setReasonsForRejection($reasonsForRejection) { $this -> reasonsForRejection= $reasonsForRejection;
}
public function getReceivedBy() {
		return $this -> receivedBy;
}

public function setReceivedBy($receivedBy) { $this -> receivedBy = $receivedBy;
}
public function getReceivedDate() {
		return $this -> receivedDate;
}

public function setReceivedDate($receivedDate) { $this -> receivedDate = $receivedDate;
}
 }
?>