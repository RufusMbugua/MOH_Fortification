<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalfortc2")
 */
 class E_Sugar_internalFort_C2{
 	
 	/**
* @Id
* @Column(name="sugar_internalfortB2ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalfortB2ID;
/**
* @Column(name="vitaminABalance", type="decimal",nullable=true)
* */
private $vitaminABalance;
/**
* @Column(name="vitaminAReceived", type="decimal",nullable=true)
* */
private $vitaminAReceived;
/**
* @Column(name="vitaminA1", type="decimal",nullable=true)
* */
private $vitaminA1;
/**
* @Column(name="vitaminA2", type="decimal",nullable=true)
* */
private $vitaminA2;
/**
* @Column(name="vitaminA3", type="decimal",nullable=true)
* */
private $vitaminA3;
/**
* @Column(name="vitaminA4", type="decimal",nullable=true)
* */
private $vitaminA4;
/**
* @Column(name="vitaminA5", type="decimal",nullable=true)
* */
private $vitaminA5;
/**
* @Column(name="vitaminA6", type="decimal",nullable=true)
* */
private $vitaminA6;
/**
* @Column(name="sugarBalance", type="decimal",nullable=true)
* */
private $sugarBalance;
/**
* @Column(name="sugarReceived", type="decimal",nullable=true)
* */
private $sugarReceived;
/**
* @Column(name="sugar1", type="decimal",nullable=true)
* */
private $sugar1;
/**
* @Column(name="sugar2", type="decimal",nullable=true)
* */
private $sugar2;
/**
* @Column(name="sugar3", type="decimal",nullable=true)
* */
private $sugar3;
/**
* @Column(name="sugar4", type="decimal",nullable=true)
* */
private $sugar4;
/**
* @Column(name="sugar5", type="decimal",nullable=true)
* */
private $sugar5;
/**
* @Column(name="sugar6", type="decimal",nullable=true)
* */
private $sugar6;
/**
* @Column(name="vegetableOilBalance", type="decimal",nullable=true)
* */
private $vegetableOilBalance;
/**
* @Column(name="vegetableOilReceived", type="decimal",nullable=true)
* */
private $vegetableOilReceived;
/**
* @Column(name="vegetableOil1", type="decimal",nullable=true)
* */
private $vegetableOil1;
/**
* @Column(name="vegetableOil2", type="decimal",nullable=true)
* */
private $vegetableOil2;
/**
* @Column(name="vegetableOil3", type="decimal",nullable=true)
* */
private $vegetableOil3;
/**
* @Column(name="vegetableOil4", type="decimal",nullable=true)
* */
private $vegetableOil4;
/**
* @Column(name="vegetableOil5", type="decimal",nullable=true)
* */
private $vegetableOil5;
/**
* @Column(name="vegetableOil6", type="decimal",nullable=true)
* */
private $vegetableOil6;
/**
* @Column(name="ronoxanBalance", type="decimal",nullable=true)
* */
private $ronoxanBalance;
/**
* @Column(name="ronoxanReceived", type="decimal",nullable=true)
* */
private $ronoxanReceived;
/**
* @Column(name="ronoxan1", type="decimal",nullable=true)
* */
private $ronoxan1;
/**
* @Column(name="ronoxan2", type="decimal",nullable=true)
* */
private $ronoxan2;
/**
* @Column(name="ronoxan3", type="decimal",nullable=true)
* */
private $ronoxan3;
/**
* @Column(name="ronoxan4", type="decimal",nullable=true)
* */
private $ronoxan4;
/**
* @Column(name="ronoxan5", type="decimal",nullable=true)
* */
private $ronoxan5;
/**
* @Column(name="ronoxan6", type="decimal",nullable=true)
* */
private $ronoxan6;
/**
* @Column(name="nitrogenBalance", type="decimal",nullable=true)
* */
private $nitrogenBalance;
/**
* @Column(name="nitrogenReceived", type="decimal",nullable=true)
* */
private $nitrogenReceived;
/**
* @Column(name="nitrogen1", type="decimal",nullable=true)
* */
private $nitrogen1;
/**
* @Column(name="nitrogen2", type="decimal",nullable=true)
* */
private $nitrogen2;
/**
* @Column(name="nitrogen3", type="decimal",nullable=true)
* */
private $nitrogen3;
/**
* @Column(name="nitrogen4", type="decimal",nullable=true)
* */
private $nitrogen4;
/**
* @Column(name="nitrogen5", type="decimal",nullable=true)
* */
private $nitrogen5;
/**
* @Column(name="nitrogen6", type="decimal",nullable=true)
* */
private $nitrogen6;
/**
* @Column(name="polythyleneBalance", type="decimal",nullable=true)
* */
private $polythyleneBalance;
/**
* @Column(name="polythyleneReceived", type="decimal",nullable=true)
* */
private $polythyleneReceived;
/**
* @Column(name="polythylene1", type="decimal",nullable=true)
* */
private $polythylene1;
/**
* @Column(name="polythylene2", type="decimal",nullable=true)
* */
private $polythylene2;
/**
* @Column(name="polythylene3", type="decimal",nullable=true)
* */
private $polythylene3;
/**
* @Column(name="polythylene4", type="decimal",nullable=true)
* */
private $polythylene4;
/**
* @Column(name="polythylene5", type="decimal",nullable=true)
* */
private $polythylene5;
/**
* @Column(name="polythylene6", type="decimal",nullable=true)
* */
private $polythylene6;
/**
* @Column(name="polypropyleneBalance", type="decimal",nullable=true)
* */
private $polypropyleneBalance;
/**
* @Column(name="polypropyleneReceived", type="decimal",nullable=true)
* */
private $polypropyleneReceived;
/**
* @Column(name="polypropylene1", type="decimal",nullable=true)
* */
private $polypropylene1;
/**
* @Column(name="polypropylene2", type="decimal",nullable=true)
* */
private $polypropylene2;
/**
* @Column(name="polypropylene3", type="decimal",nullable=true)
* */
private $polypropylene3;
/**
* @Column(name="polypropylene4", type="decimal",nullable=true)
* */
private $polypropylene4;
/**
* @Column(name="polypropylene5", type="decimal",nullable=true)
* */
private $polypropylene5;
/**
* @Column(name="polypropylene6", type="decimal",nullable=true)
* */
private $polypropylene6;
/**
* @Column(name="sewingThreadBalance", type="decimal",nullable=true)
* */
private $sewingThreadBalance;
/**
* @Column(name="sewingThreadReceived", type="decimal",nullable=true)
* */
private $sewingThreadReceived;
/**
* @Column(name="sewingThread1", type="decimal",nullable=true)
* */
private $sewingThread1;
/**
* @Column(name="sewingThread2", type="decimal",nullable=true)
* */
private $sewingThread2;
/**
* @Column(name="sewingThread3", type="decimal",nullable=true)
* */
private $sewingThread3;
/**
* @Column(name="sewingThread4", type="decimal",nullable=true)
* */
private $sewingThread4;
/**
* @Column(name="sewingThread5", type="decimal",nullable=true)
* */
private $sewingThread5;
/**
* @Column(name="sewingThread6", type="decimal",nullable=true)
* */
private $sewingThread6;
/**
* @Column(name="observations", type="string", length=45,nullable=true)
* */
private $observations;
/**
* @Column(name="dates", type="string", length=45,nullable=true)
* */
private $dates;
/**
* @Column(name="responsible", type="string", length=45,nullable=true)
* */
private $responsible;
/**
* @Column(name="manufacturerCompName", type="string", length=45,nullable=true)
* */
private $manufacturerCompName;

public function getSugar_internalfortB2ID() {
		return $this -> sugar_internalfortB2ID;
}

public function setSugar_internalfortB2ID($sugar_internalfortB2ID) { $this -> sugar_internalfortB2ID = $sugar_internalfortB2ID;
}

public function getVitaminABalance() {
		return $this -> vitaminABalance;
}

public function setVitaminABalance($vitaminABalance) { $this -> vitaminABalance = $vitaminABalance;
}
public function getVitaminAReceived() {
		return $this -> vitaminAReceived;
}

public function setVitaminAReceived($vitaminAReceived) { $this -> vitaminAReceived = $vitaminAReceived;
}
public function getVitaminA1() {
		return $this -> vitaminA1;
}

public function setVitaminA1($vitaminA1) { $this -> vitaminA1 = $vitaminA1;
}
public function getVitaminA2() {
		return $this -> vitaminA2;
}

public function setVitaminA2($vitaminA2) { $this -> vitaminA2 = $vitaminA2;
}
public function getVitaminA3() {
		return $this -> vitaminA3;
}

public function setVitaminA3($vitaminA3) { $this -> vitaminA3 = $vitaminA3;
}
public function getVitaminA4() {
		return $this -> vitaminA4;
}

public function setVitaminA4($vitaminA4) { $this -> vitaminA4 = $vitaminA4;
}
public function getVitaminA5() {
		return $this -> vitaminA5;
}

public function setVitaminA5($vitaminA5) { $this -> vitaminA5 = $vitaminA5;
}
public function getVitaminA6() {
		return $this -> vitaminA6;
}

public function setVitaminA6($vitaminA6) { $this -> vitaminA6 = $vitaminA6;
}
public function getSugarBalance() {
		return $this -> sugarBalance;
}

public function setSugarBalance($sugarBalance) { $this -> sugarBalance = $sugarBalance;
}
public function getSugarReceived() {
		return $this -> sugarReceived;
}

public function setSugarReceived($sugarReceived) { $this -> sugarReceived = $sugarReceived;
}
public function getSugar1() {
		return $this -> sugar1;
}

public function setSugar1($sugar1) { $this -> sugar1 = $sugar1;
}
public function getSugar2() {
		return $this -> sugar2;
}

public function setSugar2($sugar2) { $this -> sugar2 = $sugar2;
}
public function getSugar3() {
		return $this -> sugar3;
}

public function setSugar3($sugar3) { $this -> sugar3 = $sugar3;
}
public function getSugar4() {
		return $this -> sugar4;
}

public function setSugar4($sugar4) { $this -> sugar4 = $sugar4;
}
public function getSugar5() {
		return $this -> sugar5;
}

public function setSugar5($sugar5) { $this -> sugar5 = $sugar5;
}
public function getSugar6() {
		return $this -> sugar6;
}

public function setSugar6($sugar6) { $this -> sugar6 = $sugar6;
}
public function getVegetableOilBalance() {
		return $this -> vegetableOilBalance;
}

public function setVegetableOilBalance($vegetableOilBalance) { $this -> vegetableOilBalance = $vegetableOilBalance;
}
public function getVegetableOilReceived() {
		return $this -> vegetableOilReceived;
}

public function setVegetableOilReceived($vegetableOilReceived) { $this -> vegetableOilReceived = $vegetableOilReceived;
}
public function getVegetableOil1() {
		return $this -> vegetableOil1;
}

public function setVegetableOil1($vegetableOil1) { $this -> vegetableOil1 = $vegetableOil1;
}
public function getVegetableOil2() {
		return $this -> vegetableOil2;
}

public function setVegetableOil2($vegetableOil2) { $this -> vegetableOil2 = $vegetableOil2;
}
public function getVegetableOil3() {
		return $this -> vegetableOil3;
}

public function setVegetableOil3($vegetableOil3) { $this -> vegetableOil3 = $vegetableOil3;
}
public function getVegetableOil4() {
		return $this -> vegetableOil4;
}

public function setVegetableOil4($vegetableOil4) { $this -> vegetableOil4= $vegetableOil4;
}
public function getVegetableOil5() {
		return $this -> vegetableOil5;
}

public function setVegetableOil5($vegetableOil5) { $this -> vegetableOil5 = $vegetableOil5;
}
public function getVegetableOil6() {
		return $this -> vegetableOil6;
}

public function setVegetableOil6($vegetableOil6) { $this -> vegetableOil6 = $vegetableOil6;
}
public function getRonoxanBalance() {
		return $this -> ronoxanBalance;
}

public function setRonoxanBalance($ronoxanBalance) { $this -> ronoxanBalance = $ronoxanBalance;
}
public function getRonoxanReceived() {
		return $this -> ronoxanReceived;
}

public function setRonoxanReceived($ronoxanReceived) { $this -> ronoxanReceived = $ronoxanReceived;
}
public function getRonoxan1() {
		return $this -> ronoxan1;
}

public function setRonoxan1($ronoxan1) { $this -> ronoxan1 = $ronoxan1;
}
public function getRonoxan2() {
		return $this -> ronoxan2;
}

public function setRonoxan2($ronoxan2) { $this -> ronoxan2 = $ronoxan2;
}
public function getRonoxan3() {
		return $this -> ronoxan3;
}

public function setRonoxan3($ronoxan3) { $this -> ronoxan3 = $ronoxan3;
}
public function getRonoxan4() {
		return $this -> ronoxan4;
}

public function setRonoxan4($ronoxan4) { $this -> ronoxan4 = $ronoxan4;
}
public function getRonoxan5() {
		return $this -> ronoxan5;
}

public function setRonoxan5($ronoxan5) { $this -> ronoxan5 = $ronoxan5;
}
public function getRonoxan6() {
		return $this -> ronoxan6;
}

public function setRonoxan6($ronoxan6) { $this -> ronoxan6 = $ronoxan6;
}
public function getNitrogenBalance() {
		return $this -> nitrogenBalance;
}

public function setNitrogenBalance($nitrogenBalance) { $this -> nitrogenBalance = $nitrogenBalance;
}
public function getNitrogenReceived() {
		return $this -> nitrogenReceived;
}

public function setNitrogenReceived($nitrogenReceived) { $this -> nitrogenReceived = $nitrogenReceived;
}
public function getNitrogen1() {
		return $this -> nitrogen1;
}

public function setNitrogen1($nitrogen1) { $this -> nitrogen1 = $nitrogen1;
}
public function getNitrogen2() {
		return $this -> nitrogen2;
}

public function setNitrogen2($nitrogen2) { $this -> nitrogen2 = $nitrogen2;
}
public function getNitrogen3() {
		return $this -> nitroge3;
}

public function setNitrogen3($nitrogen3) { $this -> nitrogen3 = $nitrogen3;
}
public function getNitrogen4() {
		return $this -> nitrogen4;
}

public function setNitrogen4($nitrogen4) { $this -> nitrogen4 = $nitrogen4;
}
public function getNitrogen5() {
		return $this -> nitrogen5;
}

public function setNitrogen5($nitrogen5) { $this -> nitrogen5 = $nitrogen5;
}
public function getNitrogen6() {
		return $this -> nitrogen6;
}

public function setNitrogen6($nitrogen6) { $this -> nitrogen6 = $nitrogen6;
}
public function getPolythyleneBalance() {
		return $this -> polythyleneBalance;
}

public function setPolythyleneBalance($polythyleneBalance) { $this -> polythyleneBalance = $polythyleneBalance;
}
public function getPolythyleneReceived() {
		return $this -> polythyleneReceived;
}

public function setPolythyleneReceived($polythyleneReceived) { $this -> polythyleneReceived = $polythyleneReceived;
}
public function getPolythylene1() {
		return $this -> polythylene1;
}

public function setPolythylene1($polythylene1) { $this -> polythylene1 = $polythylene1;
}
public function getPolythylene2() {
		return $this -> polythylene2e;
}

public function setPolythylene2($polythylene2) { $this -> polythylene2 = $polythylene2;
}
public function getPolythylene3() {
		return $this -> polythylene3;
}

public function setPolythylene3($polythylene3) { $this -> polythylene3 = $polythylene3;
}
public function getPolythylene4() {
		return $this -> polythylene4;
}

public function setPolythylene4($polythylene4) { $this -> polythylene4 = $polythylene4;
}
public function getPolythylene5() {
		return $this -> polythylene5;
}

public function setPolythylene5($polythylene5) { $this -> polythylene5 = $polythylene5;
}
public function getPolythylene6() {
		return $this -> polythylene6;
}

public function setPolythylene6($polythylene6) { $this -> polythylene6 = $polythylene6;
}
public function getPolypropyleneBalance() {
		return $this -> polypropyleneBalance;
}

public function setPolypropyleneBalance($polypropyleneBalance) { $this -> polypropyleneBalance = $polypropyleneBalance;
}
public function getPolypropyleneReceived() {
		return $this -> polypropyleneReceived;
}

public function setPolypropyleneReceived($polypropyleneReceived) { $this -> polypropyleneReceived = $polypropyleneReceived;
}
public function getPolypropylene1() {
		return $this -> polypropylene1;
}

public function setPolypropylene1($polypropylene1) { $this -> polypropylene1 = $polypropylene1;
}
public function getPolypropylene2() {
		return $this -> polypropylene2;
}

public function setPolypropylene2($polypropylene2) { $this -> polypropylene2 = $polypropylene2;
}
public function getPolypropylene3() {
		return $this -> polypropylene3;
}

public function setPolypropylene3($polypropylene3) { $this -> polypropylene3 = $polypropylene3;
}
public function getPolypropylene4() {
		return $this -> polypropylene4;
}

public function setPolypropylene4($polypropylene4) { $this -> polypropylene4 = $polypropylene4;
}
public function getPolypropylene5() {
		return $this -> polypropylene5;
}

public function setPolypropylene5($polypropylene5) { $this -> polypropylene5 = $polypropylene5;
}
public function getPolypropylene6() {
		return $this -> polypropylene6;
}

public function setPolypropylene6($polypropylene6) { $this -> polypropylene6 = $polypropylene6;
}
public function getSewingThreadBalance() {
		return $this -> sewingThreadBalance;
}

public function setSewingThreadBalance($sewingThreadBalance) { $this -> sewingThreadBalance = $sewingThreadBalance;
}
public function getSewingThreadReceived() {
		return $this -> sewingThreadReceived;
}

public function setSewingThreadReceived($sewingThreadReceived) { $this -> sewingThreadReceived = $sewingThreadReceived;
}
public function getSewingThread1() {
		return $this -> sewingThread1;
}

public function setSewingThread1($sewingThread1) { $this -> sewingThread1 = $sewingThread1;
}
public function getSewingThread2() {
		return $this -> sewingThread2;
}

public function setSewingThread2($sewingThread2) { $this -> sewingThread2 = $sewingThread2;
}
public function getSewingThread3() {
		return $this -> sewingThread3;
}

public function setSewingThread3($sewingThread3) { $this -> sewingThread3 = $sewingThread3;
}
public function getSewingThread4() {
		return $this -> sewingThread4;
}

public function setSewingThread4($sewingThread4) { $this -> sewingThread4 = $sewingThread4;
}
public function getSewingThread5() {
		return $this -> sewingThread5;
}

public function setSewingThread5($sewingThread5) { $this -> sewingThread5 = $sewingThread5;
}
public function getSewingThread6() {
		return $this -> sewingThread6;
}

public function setSewingThread6($sewingThread6) { $this -> sewingThread6 = $sewingThread6;
}
public function getObservations() {
		return $this -> observations;
}

public function setObservations($observations) { $this -> observations = $observations;
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