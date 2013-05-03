<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalforta3")
 */
 class E_Sugar_internalFort_A3{
 	/**
* @Id
* @Column(name="sugar_internalfortA3ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalfortA3ID;
/**
* @Column(name="blenderDate", type="string",length=45, nullable=true)
* */
private $blenderDate;
/**
* @Column(name="blenderMaintenance", type="string",length=45, nullable=true)
* */
private $blenderMaintenance;
/**
* @Column(name="blenderCalibration", type="string",length=45, nullable=true)
* */
private $blenderCalibration;
/**
* @Column(name="blenderObservation", type="string",length=45, nullable=true)
* */
private $blenderObservation;
/**
* @Column(name="blenderNextCalibration", type="string",length=45, nullable=true)
* */
private $blenderNextCalibration;
/**
* @Column(name="scalesDate", type="string",length=45, nullable=true)
* */
private $scalesDate;
/**
* @Column(name="scalesMaintenance", type="string",length=45, nullable=true)
* */
private $scalesMaintenance;
/**
* @Column(name="scalesCalibration", type="string",length=45, nullable=true)
* */
private $scalesCalibration;
/**
* @Column(name="scalesObservation", type="string",length=45, nullable=true)
* */
private $scalesObservation;
/**
* @Column(name="scalesNextCalibration", type="string",length=45, nullable=true)
* */
private $scalesNextCalibration;
/**
* @Column(name="balanceDate", type="string",length=45, nullable=true)
* */
private $balanceDate;
/**
* @Column(name="balanceMaintenance", type="string",length=45, nullable=true)
* */
private $balanceMaintenance;
/**
* @Column(name="balanceCalibration", type="string",length=45, nullable=true)
* */
private $balanceCalibration;
/**
* @Column(name="balanceObservation", type="string",length=45, nullable=true)
* */
private $balanceObservation;
/**
* @Column(name="balanceNextCalibration", type="string",length=45, nullable=true)
* */
private $balanceNextCalibration;
/**
* @Column(name="heatingBathDate", type="string",length=45, nullable=true)
* */
private $heatingBathDate;
/**
* @Column(name="heatingBathMaintenance", type="string",length=45, nullable=true)
* */
private $heatingBathMaintenance;
/**
* @Column(name="heatingBathCalibration", type="string",length=45, nullable=true)
* */
private $heatingBathCalibration;
/**
* @Column(name="heatingBathObservation", type="string",length=45, nullable=true)
* */
private $heatingBathObservation;
/**
* @Column(name="heatingBathNextCalibration", type="string",length=45, nullable=true)
* */
private $heatingBathNextCalibration;
/**
* @Column(name="electricStirrerDate", type="string",length=45, nullable=true)
* */
private $electricStirrerDate;
/**
* @Column(name="electricStirrerMaintenance", type="string",length=45, nullable=true)
* */
private $electricStirrerMaintenance;
/**
* @Column(name="electricStirrerCalibration", type="string",length=45, nullable=true)
* */
private $electricStirrerCalibration;
/**
* @Column(name="electricStirrerObservation", type="string",length=45, nullable=true)
* */
private $electricStirrerObservation;
/**
* @Column(name="electricStirrerNextCalibration", type="string",length=45, nullable=true)
* */
private $electricStirrerNextCalibration;
/**
* @Column(name="nitrogenDeviceDate", type="string",length=45, nullable=true)
* */
private $nitrogenDeviceDate;
/**
* @Column(name="nitrogenDeviceMaintenance", type="string",length=45, nullable=true)
* */
private $nitrogenDeviceMaintenance;
/**
* @Column(name="nitrogenDeviceCalibration", type="string",length=45, nullable=true)
* */
private $nitrogenDeviceCalibration;
/**
* @Column(name="nitrogenDeviceObservation", type="string",length=45, nullable=true)
* */
private $nitrogenDeviceObservation;
/**
* @Column(name="nitrogenDeviceNextCalibration", type="string",length=45, nullable=true)
* */
private $nitrogenDeviceNextCalibration;
/**
* @Column(name="cartsDate", type="string",length=45, nullable=true)
* */
private $cartsDate;
/**
* @Column(name="cartsMaintenance", type="string",length=45, nullable=true)
* */
private $cartsMaintenance;
/**
* @Column(name="cartsCalibration", type="string",length=45, nullable=true)
* */
private $cartsCalibration;
/**
* @Column(name="cartsObservation", type="string",length=45, nullable=true)
* */
private $cartsObservation;
/**
* @Column(name="cartsNextCalibration", type="string",length=45, nullable=true)
* */
private $cartsNextCalibration;
/**
* @Column(name="sewingMachineDate", type="string",length=45, nullable=true)
* */
private $sewingMachineDate;
/**
* @Column(name="sewingMachineMaintenance", type="string",length=45, nullable=true)
* */
private $sewingMachineMaintenance;
/**
* @Column(name="sewingMachineCalibration", type="string",length=45, nullable=true)
* */
private $sewingMachineCalibration;
/**
* @Column(name="sewingMachineObservation", type="string",length=45, nullable=true)
* */
private $sewingMachineObservation;
/**
* @Column(name="sewingMachineNextCalibration", type="string",length=45, nullable=true)
* */
private $sewingMachineNextCalibration;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="responsible", type="string",length=45, nullable=true)
* */
private $responsible;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;
public function getSugar_internalfortA3ID() {
		return $this -> sugar_internalfortA3ID;
}

public function setSugar_internalfortA3ID($sugar_internalfortA3ID) { $this -> sugar_internalfortA3ID = $sugar_internalfortA3ID;
}
public function getBlenderDate() {
		return $this -> blenderDate;
}

public function setBlenderDate($blenderDate) { $this -> blenderDate = $blenderDate;
}
public function getBlenderMaintenance() {
		return $this -> blenderMaintenance;
}

public function setBlenderMaintenance($blenderMaintenance) { $this -> blenderMaintenance = $blenderMaintenance;
}
public function getBlenderCalibration() {
		return $this -> blenderCalibration;
}

public function setBlenderCalibration($blenderCalibration) { $this -> blenderCalibration = $blenderCalibration;
}
public function getBlenderObservation() {
		return $this -> blenderObservation;
}

public function setBlenderObservation($blendeObservation) { $this -> blenderObservation = $blenderObservation;
}
public function getBlenderNextCalibration() {
		return $this -> blenderNextCalibration;
}

public function setBlenderNextCalibration($blenderNextCalibration) { $this -> blenderNextCalibration= $blenderNextCalibration;
}
public function getScalesDate() {
		return $this -> scalesDate;
}

public function setScalesDate($scalesDate) { $this -> scalesDate = $scalesDate;
}
public function getScalesMaintenance() {
		return $this -> scalesMaintenance;
}

public function setScalesMaintenance($scalesMaintenance) { $this -> scalesMaintenance = $scalesMaintenance;
}
public function getScalesCalibration() {
		return $this -> scalesCalibration;
}

public function setScalesCalibration($scalesCalibration) { $this -> scalesCalibration = $scalesCalibration;
}
public function getScalesObservation() {
		return $this -> scaleObservation;
}

public function setScalesObservation($scalesObservation) { $this -> scalesObservation = $scalesObservation;
}
public function getScalesNextCalibration() {
		return $this -> scalesNextCalibration;
}

public function setScalesNextCalibration($scalesNextCalibration) { $this -> scalesNextCalibration = $scalesNextCalibration;
}
public function getBalanceDate() {
		return $this -> balanceDate;
}

public function setBalanceDate($balanceDate) { $this -> balanceDate = $balanceDate;
}
public function getBalanceMaintenance() {
		return $this -> balanceMaintenance;
}

public function setBalanceMaintenance($balanceMaintenance) { $this -> balanceMaintenance = $balanceMaintenance;
}
public function getBalanceCalibration() {
		return $this -> balanceCalibration;
}

public function setBalanceCalibration($balanceCalibration) { $this -> balanceCalibration = $balanceCalibration;
}
public function getBalanceObservation() {
		return $this -> balanceObservation;
}

public function setBalanceObservation($balanceObservation) { $this -> balanceObservation = $balanceObservation;
}
public function getBalanceNextCalibration() {
		return $this -> balanceNextCalibration;
}

public function setBalanceNextCalibration($balanceNextCalibration) { $this -> balanceNextCalibration = $balanceNextCalibration;
}
public function getHeatingBathDate() {
		return $this -> heatingBathDate;
}

public function setHeatingBathDate($heatingBathDate) { $this -> heatingBathDate = $heatingBathDate;
}
public function getHeatingBathMaintenance() {
		return $this -> heatingBathMaintenance;
}

public function setHeatingBathMaintenance($heatingBathMaintenance) { $this -> heatingBathMaintenance = $heatingBathMaintenance;
}
public function getHeatingBathCalibration() {
		return $this -> heatingBathCalibration;
}

public function setHeatingBathCalibration($heatingBathCalibration) { $this -> heatingBathCalibration = $heatingBathCalibration;
}
public function getHeatingBathObservation() {
		return $this -> heatingBathObservation;
}

public function setHeatingBathObservation($heatingBathObservation) { $this -> heatingBathObservation = $heatingBathObservation;
}
public function getHeatingBathNextCalibration() {
		return $this -> heatingBathNextCalibration;
}

public function setHeatingBathNextCalibration($heatingBathNextCalibration) { $this -> heatingBathNextCalibration = $heatingBathNextCalibration;
}
public function getElectricStirrerDate() {
		return $this -> electricStirerDate;
}

public function setElectricStirrerDate($electricStirrerDate) { $this -> electricStirrerDate = $electricStirrerDate;
}
public function getElectricStirrerMaintenance() {
		return $this -> electricStirerMaintenance;
}

public function setElectricStirrerMaintenance($electricStirrerMaintenance) { $this -> electricStirrerMaintenance = $electricStirrerMaintenance;
}
public function getElectricStirrerCalibration() {
		return $this -> electricStirerCalibration;
}

public function setElectricStirrerCalibration($electricStirrerCalibration) { $this -> electricStirrerCalibration = $electricStirrerCalibration;
}
public function getElectricStirrerObservation() {
		return $this -> electricStirerObservation;
}

public function setElectricStirrerObservation($electricStirrerObservation) { $this -> electricStirrerObservation = $electricStirrerObservation;
}
public function getElectricStirrerNextCalibration() {
		return $this -> electricStirerNextCalibration;
}

public function setElectricStirrerNextCalibration($electricStirreNextCalibration) { $this -> electricStirrerNextCalibration = $electricStirrerNextCalibration;
}
public function getNitrogenDeviceDate() {
		return $this -> nitrogenDeviceDate;
}

public function setNitrogenDeviceDate($nitrogenDeviceDate) { $this -> nitrogenDeviceDate = $nitrogenDeviceDate;
}
public function getNitrogenDeviceMaintenance() {
		return $this -> nitrogenDeviceMaintenance;
}

public function setNitrogenDeviceMaintenance($nitrogenDeviceMaintenance) { $this -> nitrogenDeviceMaintenance = $nitrogenDeviceMaintenance;
}
public function getNitrogenDeviceCalibration() {
		return $this -> nitrogenDeviceCalibration;
}

public function setNitrogenDeviceCalibration($nitrogenDeviceCalibration) { $this -> nitrogenDeviceCalibration = $nitrogenDeviceCalibration;
}
public function getNitrogenDeviceObservation() {
		return $this -> nitrogenDeviceObservation;
}

public function setNitrogenDeviceObservation($nitrogenDeviceObservation) { $this -> nitrogenDeviceObservation = $nitrogenDeviceObservation;
}
public function getNitrogenDeviceNextCalibration() {
		return $this -> nitrogenDeviceNextCalibration;
}

public function setNitrogenDeviceNextCalibration($nitrogenDeviceNextCalibration) { $this -> nitrogenDeviceNextCalibration = $nitrogenDeviceNextCalibration;
}
public function getCartsDate() {
		return $this -> cartsDate;
}

public function setCartsDate($cartsDate) { $this -> cartsDate = $cartsDate;
}
public function getCartsMaintenance() {
		return $this -> cartsMaintenance;
}

public function setCartsMaintenance($cartsMaintenance) { $this -> cartsMaintenance = $cartsMaintenance;
}
public function getCartsCalibration() {
		return $this -> cartsCalibration;
}

public function setCartsCalibration($cartsCalibration) { $this -> cartsCalibration = $cartsCalibration;
}
public function getCartsObservation() {
		return $this -> cartsObservation;
}

public function setCartsObservation($cartsObservation) { $this -> cartsObservation = $cartsObservation;
}
public function getCartsNextCalibration() {
		return $this -> cartsNextCalibration;
}

public function setCartsNextCalibration($cartsNextCalibration) { $this -> cartsNextCalibration = $cartsNextCalibration;
}
public function getSewingMachineDate() {
		return $this -> sewingMachineDate;
}

public function setSewingMachineDate($sewingMachineDate) { $this -> sewingMachineDate = $sewingMachineDate;
}
public function getSewingMachineMaintenance() {
		return $this -> sewingMachineMaintenance;
}

public function setSewingMachineMaintenance($sewingMachineMaintenance) { $this -> sewingMachineMaintenance = $sewingMachineMaintenance;
}
public function getSewingMachineCalibration() {
		return $this -> sewingMachineCalibration;
}

public function setSewingMachinCalibration($sewingMachineCalibration) { $this -> sewingMachineCalibration = $sewingMachineCalibration;
}
public function getSewingMachineObservation() {
		return $this -> sewingMachineObservation;
}

public function setSewingMachineObservation($sewingMachineObservation) { $this -> sewingMachineObservation = $sewingMachineObservation;
}
public function getSewingMachineNextCalibration() {
		return $this -> sewingMachineNextCalibration;
}

public function setSewingMachineNextCalibration($sewingMachineNextCalibration) { $this -> sewingMachineNextCalibration = $sewingMachineNextCalibration;
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
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
 }
?>