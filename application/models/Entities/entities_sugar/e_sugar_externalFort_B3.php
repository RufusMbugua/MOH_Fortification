<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_externalfortb3")
 */
 class E_Sugar_externalFort_B3{
 	/**
* @Id
* @Column(name="sugar_externalfortB3ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_externalfortB3ID;
/**
* @Column(name="inspectionRegistry", type="string",length=45, nullable=false)
* */
private $inspectionRegistry;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;
/**
* @Column(name="dates", type="string",length=45, nullable=false)
* */
private $dates;
/**
* @Column(name="areasVisited", type="string",length=100, nullable=true)
* */
private $areasVisited;
/**
* @Column(name="nonCompliances", type="string",length=45, nullable=true)
* */
private $nonCompliances;
/**
* @Column(name="suggestionsForImprovement", type="string",length=45, nullable=true)
* */
private $suggestionsForImprovement;
/**
* @Column(name="publicHealthOfficer", type="string",length=45, nullable=true)
* */
private $publicHealthOfficer;
/**
* @Column(name="receivedBy", type="string",length=45, nullable=true)
* */
private $receivedBy;
/**
* @Column(name="inspectorDate", type="string",length=45, nullable=true)
* */
private $inspectorDate;
/**
* @Column(name="receivedDate", type="string",length=45, nullable=true)
* */
private $receivedDate;
/**
* @Column(name="supervisorName", type="string",length=45, nullable=true)
* */
private $supervisorName;
/**
* @Column(name="supervisorDate", type="string",length=45, nullable=true)
* */
private $supervisorDate;

public function getSugar_externalfortB3ID() {
		return $this -> sugar_externalfortB3ID;
}

public function setSugar_externalfortB3ID($sugar_externalfortB3ID) { $this -> sugar_externalfortB3ID = $sugar_externalfortB3ID;
}
public function getInspecionRegistry() {
		return $this -> inspectionRegistry;
}

public function setInspectionRegistry($inspectionRegistry) { $this -> inspectionRegistry = $inspectionRegistry;
}
public function getFactoryName() {
		return $this -> factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getAreasVisited() {
		return $this -> areasVisited;
}

public function setAreasVisited($areasVisited) { $this -> areasVisited = $areasVisited;
}
public function getNonCompliances() {
		return $this -> nonCompliances;
}

public function setNonCompliances($nonCompliances) { $this -> nonCompliances = $nonCompliances;
}
public function getSuggestionsForImprovement() {
		return $this -> suggestionsForImprovement;
}

public function setSuggestionsForImprovement($suggestionsForImprovement) { $this -> suggestionsForImprovement = $suggestionsForImprovement;
}
public function getPublicHealthOfficer() {
		return $this -> publicHealthOfficer;
}

public function setPublicHealthOfficer($publicHealthOfficer) { $this -> publicHealthOfficer = $publicHealthOfficer;
}
public function getReceivedBy() {
		return $this -> receivedBy;
}

public function setReceivedBy($receivedBy) { $this -> receivedBy = $receivedBy;
}
public function getInspecorDate() {
		return $this -> inspectorDate;
}

public function setInspectorDate($inspectorDate) { $this -> inspectorDate = $inspectorDate;
}
public function getReceivedDate() {
		return $this -> receivedDate;
}

public function setReceivedDate($receivedDate) { $this -> receivedDate = $receivedDate;
}
public function getSupervisorName() {
		return $this -> supervisorName;
}

public function setSupervisorName($supervisorName) { $this -> supervisorName = $supervisorName;
}
public function getSupervisorDate() {
		return $this -> supervisorDate;
}

public function setSupervisorDate($supervisorDate) { $this -> supervisorDate = $supervisorDate;
}
 }
?>