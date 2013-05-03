<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalforta2")
 */
 class E_Sugar_internalFort_A2{
 	/**
* @Id
* @Column(name="sugar_internalfortA2ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalfortA2ID;
/**
* @Column(name="generalCleanUp", type="string",length=45, nullable=false)
* */
private $generalCleanUp;
/**
* @Column(name="generalCleanUpCondition", type="string",length=45, nullable=false)
* */
private $generalCleanUpCondition;
/**
* @Column(name="generalCleanUpObservation", type="string",length=45, nullable=false)
* */
private $generalCleanUpObservation;
/**
* @Column(name="lubrication", type="string",length=45, nullable=false)
* */
private $lubrication;
/**
* @Column(name="lubricationCondition", type="string",length=45, nullable=false)
* */
private $lubricationCondition;
/**
* @Column(name="lubricationObservation", type="string",length=45, nullable=false)
* */
private $lubricationObservation;
/**
* @Column(name="oilAspertion", type="string",length=45, nullable=false)
* */
private $oilAspertion;
/**
* @Column(name="oilAspertionCondition", type="string",length=45, nullable=false)
* */
private $oilAspertionCondition;
/**
* @Column(name="oilAspertionObservation", type="string",length=45, nullable=false)
* */
private $oilAspertionObservation;
/**
* @Column(name="other", type="string",length=45, nullable=false)
* */
private $other;
/**
* @Column(name="otherCondition", type="string",length=45, nullable=false)
* */
private $otherCondition;
/**
* @Column(name="otherObservation", type="string",length=45, nullable=false)
* */
private $otherObservation;
/**
* @Column(name="scalesCleanUp", type="string",length=45, nullable=false)
* */
private $scalesCleanUp;
/**
* @Column(name="scalesCleanUpCondition", type="string",length=45, nullable=false)
* */
private $scalesCleanUpCondition;
/**
* @Column(name="scalesCleanUpObservation", type="string",length=45, nullable=false)
* */
private $scalesCleanUpObservation;
/**
* @Column(name="scalesCalibrated", type="string",length=45, nullable=false)
* */
private $scalesCalibrated;
/**
* @Column(name="scalesCalibratedCondition", type="string",length=45, nullable=false)
* */
private $scalesCalibratedCondition;
/**
* @Column(name="scalesCalibratedObservation", type="string",length=45, nullable=false)
* */
private $scalesCalibratedObservation;
/**
* @Column(name="bathCleanUp", type="string",length=45, nullable=false)
* */
private $bathCleanUp;
/**
* @Column(name="bathCleanUpCondition", type="string",length=45, nullable=false)
* */
private $bathCleanUpCondition;
/**
* @Column(name="bathCleanUpObservation", type="string",length=45, nullable=false)
* */
private $bathCleanUpObservation;
/**
* @Column(name="bathTemperature", type="string",length=45, nullable=false)
* */
private $bathTemperature;
/**
* @Column(name="bathTemperatureCondition", type="string",length=45, nullable=false)
* */
private $bathTemperatureCondition;
/**
* @Column(name="bathTemperatureObservation", type="string",length=45, nullable=false)
* */
private $bathTemperatureObservation;
/**
* @Column(name="stirrerPerformance", type="string",length=45, nullable=false)
* */
private $stirrerPerformance;
/**
* @Column(name="stirrerPerformanceCondition", type="string",length=45, nullable=false)
* */
private $stirrerPerformanceCondition;
/**
* @Column(name="stirrerPerformanceObservation", type="string",length=45, nullable=false)
* */
private $stirrerPerformanceObservation;
/**
* @Column(name="nitrogenPerformance", type="string",length=45, nullable=false)
* */
private $nitrogenPerformance;
/**
* @Column(name="nitrogenPerformanceCOndition", type="string",length=45, nullable=false)
* */
private $nitrogenPerformanceCondition;
/**
* @Column(name="nitrogenPerformanceObservation", type="string",length=45, nullable=false)
* */
private $nitrogenPerformanceObservation;
/**
* @Column(name="cartsCleanUp", type="string",length=45, nullable=false)
* */
private $cartsCleanUp;
/**
* @Column(name="cartsCleanUpCondition", type="string",length=45, nullable=false)
* */
private $cartsCleanUpCondition;
/**
* @Column(name="cartsCleanUpObservation", type="string",length=45, nullable=false)
* */
private $cartsCleanUpObservation;
/**
* @Column(name="mobility", type="string",length=45, nullable=false)
* */
private $mobility;
/**
* @Column(name="mobilityCondition", type="string",length=45, nullable=false)
* */
private $mobilityCondition;
/**
* @Column(name="mobilityObservation", type="string",length=45, nullable=false)
* */
private $mobilityObservation;
/**
* @Column(name="integrity", type="string",length=45, nullable=false)
* */
private $integrity;
/**
* @Column(name="integrityCondition", type="string",length=45, nullable=false)
* */
private $integrityCondition;
/**
* @Column(name="integrityObservation", type="string",length=45, nullable=false)
* */
private $integrityObservation;
/**
* @Column(name="sewingPerformance", type="string",length=45, nullable=false)
* */
private $sewingPerformance;
/**
* @Column(name="sewingPerformanceCondition", type="string",length=45, nullable=false)
* */
private $sewingPerformanceCondition;
/**
* @Column(name="sewingPerformanceObservation", type="string",length=45, nullable=false)
* */
private $sewingPerformanceObservation;
/**
* @Column(name="cylinderCleanUp", type="string",length=45, nullable=false)
* */
private $cylinderCleanUp;
/**
* @Column(name="cylinderCleanUpCondition", type="string",length=45, nullable=false)
* */
private $cylinderCleanUpCondition;
/**
* @Column(name="cylinderCleanUpObservation", type="string",length=45, nullable=false)
* */
private $cylinderCleanUpObservation;
/**
* @Column(name="flaskCleanUp", type="string",length=45, nullable=false)
* */
private $flaskCleanUp;
/**
* @Column(name="flaskCleanUpCondition", type="string",length=45, nullable=false)
* */
private $flaskCleanUpCondition;
/**
* @Column(name="flaskCleanUpObservation", type="string",length=45, nullable=false)
* */
private $flaskCleanUpObservation;
/**
* @Column(name="spatulaCleanUp", type="string",length=45, nullable=false)
* */
private $spatulaCleanUp;
/**
* @Column(name="spatulaCleanUpCondition", type="string",length=45, nullable=false)
* */
private $spatulaCleanUpCondition;
/**
* @Column(name="spatulaCleanUpObservation", type="string",length=45, nullable=false)
* */
private $spatulaCleanUpObservation;
/**
* @Column(name="dates", type="string",length=45, nullable=false)
* */
private $dates;
/**
* @Column(name="transactedBy", type="string",length=45, nullable=false)
* */
private $transactedBy;
/**
* @Column(name="deviceCompNumber", type="string",length=45, nullable=false)
* */
private $deviceCompNumber;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=false)
* */
private $manufacturerCompName;

public function getSugar_internalfortA2ID() {
		return $this -> sugar_internalfortA2ID;
}

public function setSugar_internalfortA2ID($sugar_internalfortA2ID) { $this -> sugar_internalfortA2ID = $sugar_internalfortA2ID;
}
public function getGeneralCleanUp() {
		return $this -> generalCleanUp;
}

public function setGeneralCleanUp($generalCleanUp) { $this -> generalCleanUp = $generalCleanUp;
}
public function getGeneralCleanUpCondition() {
		return $this -> generalCleanUpCondition;
}

public function setGeneralCleanUpCondition($generalCleanUpCondition) { $this -> generalCleanUpCondition = $generalCleanUpCondition;
}
public function getGeneralCleanUpObservation() {
		return $this -> generalCleanUpObservation;
}

public function setGeneralCleanUpObservation($generalCleanUpObservation) { $this -> generalCleanUpObservation = $generalCleanUpObservation;
}
public function getLubrication() {
		return $this -> lubrication;
}

public function setLubrication($lubrication) { $this -> lubrication = $lubrication;
}
public function getLubricationCondition() {
		return $this -> lubricationCondition;
}

public function setLubricationCondition($lubricationCondition) { $this -> lubricationCondition = $lubricationCondition;
}
public function getLubricationObservation() {
		return $this -> lubricationObservation;
}

public function setLubricationObservation($lubricationObservation) { $this -> lubricationObservation = $lubricationObservation;
}
public function getOilAspertion() {
		return $this -> oilAspertion;
}

public function setOilAspertion($oilAsperrtion) { $this -> oilAspertion = $oilAspertion;
}
public function getOilAspertionCondition() {
		return $this -> oilAspertionCondition;
}

public function setOilAspertionCondition($oilAsperrtionCondition) { $this -> oilAspertionCondition = $oilAspertionCondition;
}
public function getOilAspertionObservation() {
		return $this -> oilAspertionObservation;
}

public function setOilAspertionObservation($oilAsperrtionObservation) { $this -> oilAspertionObservation = $oilAspertionObservation;
}
public function getOther() {
		return $this -> other;
}

public function setOther($other) { $this -> other = $other;
}
public function getOtherCondition() {
		return $this -> otherCondition;
}

public function setOtherCondition($otherCondition) { $this -> otherCondition = $otherCondition;
}
public function getOtherObservation() {
		return $this -> otherObservation;
}

public function setOtherObservation($otherObservation) { $this -> otherObservation = $otherObservation;
}
public function getScalesCleanUp() {
		return $this -> scalesCleanUp;
}

public function setScalesCleanUp($scalesCleanUp) { $this -> scalesCleanUp = $scalesCleanUp;
}
public function getScalesCleanUpCondition() {
		return $this -> scalesCleanUpCondition;
}

public function setScalesCleanUpCondition($scalesCleanUpCondition) { $this -> scalesCleanUpCondition = $scalesCleanUpCondition;
}
public function getScalesCleanUpObservation() {
		return $this -> scalesCleanUpObservation;
}

public function setScalesCleanUpObservation($scalesCleanUpObservation) { $this -> scalesCleanUpObservation = $scalesCleanUpObservation;
}
public function getScalesCalibrated() {
		return $this -> scalesCalibrated;
}

public function setScalesCalibrated($scalesCalibrated) { $this -> scalesCalibrated = $scalesCalibrated;
}
public function getScalesCalibratedCondition() {
		return $this -> scalesCalibratedCondition;
}

public function setScalesCalibratedCondition($scalesCalibratedCondition) { $this -> scalesCalibratedCondition = $scalesCalibratedCondition;
}
public function getScalesCalibratedObservation() {
		return $this -> scalesCalibratedObservation;
}

public function setScalesCalibratedObservation($scalesCalibratedObservation) { $this -> scalesCalibratedObservation = $scalesCalibratedObservation;
}
public function getBathCleanUp() {
		return $this -> bathCleanUp;
}

public function setBathCleanUp($bathCeanUp) { $this -> bathCleanUp = $bathCleanUp;
}
public function getBathCleanUpCondition() {
		return $this -> bathCleanUpCondition;
}

public function setBathCleanUpCondition($bathCeanUpCondition) { $this -> bathCleanUpCondition = $bathCleanUpCondition;
}
public function getBathCleanUpObservation() {
		return $this -> bathCleanUpObservation;
}

public function setBathCleanUpObservation($bathCeanUpObservation) { $this -> bathCleanUpObservation = $bathCleanUpObservation;
}
public function getBathTemperature() {
		return $this -> bathTemperature;
}

public function setBathTemperature($bathTemperature) { $this -> bathTemperature = $bathTemperature;
}
public function getBathTemperatureCondition() {
		return $this -> bathTemperatureCondition;
}

public function setBathTemperatureCondition($bathTemperatureCondition) { $this -> bathTemperatureCondition = $bathTemperatureCondition;
}
public function getBathTemperatureObservation() {
		return $this -> bathTemperatureObservation;
}

public function setBathTemperatureObservation($bathTemperatureObservation) { $this -> bathTemperatureObservation = $bathTemperatureObservation;
}
public function getStirrerPerformance() {
		return $this -> stirrerPerformance;
}

public function setStirrerPerformance($stirrerPerformance) { $this -> stirrerPerformance = $stirrerPerformance;
}
public function getStirrerPerformanceCondition() {
		return $this -> stirrerPerformanceCondition;
}

public function setStirrerPerformanceCondition($stirrerPerformanceCondition) { $this -> stirrerPerformanceCondition = $stirrerPerformanceCondition;
}
public function getStirrerPerformanceObservation() {
		return $this -> stirrerPerformanceObservation;
}

public function setStirrerPerformanceObservation($stirrerPerformanceObservation) { $this -> stirrerPerformanceObservation = $stirrerPerformanceObservation;
}
public function getNitrogenPerformance() {
		return $this -> nitrogenPerformance;
}

public function setNitrogenPerformance($nitrogenPerformance) { $this -> nitrogenPerformance = $nitrogenPerformance;
}
public function getNitrogenPerformanceCondition() {
		return $this -> nitrogenPerformanceCondition;
}

public function setNitrogenPerformanceCondition($nitrogenPerformanceCondition) { $this -> nitrogenPerformanceCondition = $nitrogenPerformanceCondition;
}
public function getNitrogenPerformanceObservation() {
		return $this -> nitrogenPerformanceObservation;
}

public function setNitrogenPerformanceObservation($nitrogenPerformanceObservation) { $this -> nitrogenPerformanceObservation = $nitrogenPerformanceObservation;
}
public function getCartsCleanUp() {
		return $this -> cartsCleanUp;
}

public function setCartsCleanUp($cartsCleanUp) { $this -> cartsCleanUp = $cartsCleanUp;
}
public function getCartsCleanUpCondition() {
		return $this -> cartsCleanUpCondition;
}

public function setCartsCleanUpCondition($cartsCleanUpCondition) { $this -> cartsCleanUpCondition = $cartsCleanUpCondition;
}
public function getCartsCleanUpObservation() {
		return $this -> cartsCleanUpObservation;
}

public function setCartsCleanUpObservation($cartsCleanUpObservation) { $this -> cartsCleanUpObservation = $cartsCleanUpObservation;
}
public function getMobility() {
		return $this -> mobility;
}

public function setMobility($mobility) { $this -> mobility = $mobility;
}
public function getMobilityCondition() {
		return $this -> mobilityCondition;
}

public function setMobilityCondition($mobilityCondition) { $this -> mobilityCondition = $mobilityCondition;
}
public function getMobilityObservation() {
		return $this -> mobilityObservation;
}

public function setMobilityObservation($mobilityObservation) { $this -> mobilityObservation = $mobilityObservation;
}
public function getIntegrity() {
		return $this -> integrity;
}

public function setIntegrity($integrity) { $this -> integrity = $integrity;
}
public function getIntegrityCondition() {
		return $this -> integrityCondition;
}

public function setIntegrityCondition($integrityCondition) { $this -> integrityCondition = $integrityCondition;
}
public function getIntegrityObservation() {
		return $this -> integrityObservation;
}

public function setIntegrityObservation($integrityObservation) { $this -> integrityObservation = $integrityObservation;
}
public function getSewingPerformance() {
		return $this -> sewingPerformance;
}

public function setSewingPerformance($sewingPerformance) { $this -> sewingPerformance = $sewingPerformance;
}
public function getSewingPerformanceCondition() {
		return $this -> sewingPerformanceCondition;
}

public function setSewingPerformanceCondition($sewingPerformanceCondition) { $this -> sewingPerformanceCondition = $sewingPerformanceCondition;
}
public function getSewingPerformanceObservation() {
		return $this -> sewingPerformanceObservation;
}

public function setSewingPerformanceObservation($sewingPerformanceObservation) { $this -> sewingPerformanceObservation = $sewingPerformanceObservation;
}
public function getCylinderCleanUp() {
		return $this -> cylinderCleanUp;
}

public function setCylinderCleanUp($cylinderCleanUp) { $this -> cylinderCleanUp = $cylinderCleanUp;
}
public function getCylinderCleanUpCondition() {
		return $this -> cylinderCleanUpCondition;
}

public function setCylinderCleanUpCondition($cylinderCleanUpCondition) { $this -> cylinderCleanUpCondition = $cylinderCleanUpCondition;
}
public function getCylinderCleanUpObservation() {
		return $this -> cylinderCleanUpObservation;
}

public function setCylinderCleanUpObservation($cylinderCleanUpObservation) { $this -> cylinderCleanUpObservation = $cylinderCleanUpObservation;
}
public function getFlaskCleanUp() {
		return $this -> flaskCleanUp;
}

public function setFlaskCleanUp($flaskCleanUp) { $this -> flaskCleanUp = $flaskCleanUp;
}
public function getFlaskCleanUpCondition() {
		return $this -> flaskCleanUpCondition;
}

public function setFlaskCleanUpCondition($flaskCleanUpCondition) { $this -> flaskCleanUpCondition = $flaskCleanUpCondition;
}
public function getFlaskCleanUpObservation() {
		return $this -> flaskCleanUpObservation;
}

public function setFlaskCleanUpObservation($flaskCleanUpObservation) { $this -> flaskCleanUpObservation = $flaskCleanUpObservation;
}
public function getSpatulaCleanUp() {
		return $this -> spatulaCleanUp;
}

public function setSpatulaCleanUp($spatulaCleanUp) { $this -> spatulaCleanUp = $spatulaCleanUp;
}
public function getSpatulaCleanUpCondition() {
		return $this -> spatulaCleanUpCondition;
}

public function setSpatulaCleanUpCondition($spatulaCleanUpCondition) { $this -> spatulaCleanUpCondition = $spatulaCleanUpCondition;
}
public function getSpatulaCleanUpObservation() {
		return $this -> spatulaCleanUpObservation;
}

public function setSpatulaCleanUpObservation($spatulaCleanUpObservation) { $this -> spatulaCleanUpObservation = $spatulaCleanUpObservation;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getTransactedBy() {
		return $this -> transactedBy;
}

public function setTransactedBy($transactedBy) { $this -> transactedBy = $transactedBy;
}
public function getDeviceCompNumber() {
		return $this -> deviceCompNumber;
}

public function setDeviceCompNumber($deviceCompNumber) { $this -> deviceCompNumber = $deviceCompNumber;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
 }
?>