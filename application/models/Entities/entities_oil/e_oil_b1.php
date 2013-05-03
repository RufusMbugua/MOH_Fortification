<?php
namespace models\Entities\entities_oil;

/**
 * @Entity
 * @Table(name="oil_tableb1")
 */
class E_Oil_B1{
		/**
* @Id
* @Column(name="fortifiedoilb1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $fortifiedoilb1ID;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="batchNumber", type="string",length=45, nullable=true)
* */
private $batchNumber;
/**
* @Column(name="batchSize", type="decimal", nullable=true)
* */
private $batchSize;
/**
* @Column(name="vitaminAAmount", type="decimal", nullable=true)
* */
private $vitaminAAmount;
/**
* @Column(name="premixStart", type="string",length=8, nullable=true)
* */
private $premixStart;
/**
* @Column(name="premixEnd", type="string",length=48, nullable=true)
* */
private $premixEnd;
/**
* @Column(name="transactedBy", type="string",length=45, nullable=true)
* */
private $transactedBy;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;

public function getFortifiedoilb1ID() {
		return $this -> fortifiedoilb1ID;
}

public function setFortifiedoilb1ID($fortifiedoilb1ID) { $this -> fortifiedoilb1ID = $fortifiedoilb1ID;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getBatchNumber() {
		return $this -> batchNumber;
}

public function setBatchNumber($batchNumber) { $this -> batchNumber = $batchNumber;
}
public function getBatchSize() {
		return $this -> batchSize;
}

public function setBatchSize($batchSize) { $this -> batchSize = $batchSize;
}
public function getVitaminAAmount() {
		return $this -> vitaminAAmount;
}

public function setVitaminAAmount($vitaminAAmount) { $this -> vitaminAAmount = $vitaminAAmount;
}
public function getPremixStart() {
		return $this -> premixStart;
}

public function setPremixStart($premixStart) { $this -> premixStart = $premixStart;
}
public function getPremixEnd() {
		return $this -> premixEnd;
}

public function setPremixEnd($premixEnd) { $this -> premixEnd = $premixEnd;
}
public function getTransactedBy() {
		return $this -> transactedBy;
}

public function setTransactedBy($transactedBy) { $this -> transactedBy = $transactedBy;
}
public function getFactoryName() {
		return $this -> factoryName;
}

public function setFactoryName($factoryName) { $this ->factoryName = $factoryName;
}
}
?>