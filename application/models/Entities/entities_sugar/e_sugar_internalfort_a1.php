<?php
namespace models\Entities\entities_sugar;

/**
 * @Entity
 * @Table(name="sugar_internalforta1")
 */
 class E_Sugar_internalFort_A1{
 	
 	/**
* @Id
* @Column(name="sugar_internalfortA1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $sugar_internalfortA1ID;
/**
* @Column(name="dates", type="string",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="clean", type="string",length=45, nullable=true)
* */
private $clean;
/**
* @Column(name="observations", type="string",length=45, nullable=true)
* */
private $observations;
/**
* @Column(name="responsible", type="string",length=45, nullable=true)
* */
private $responsible;
/**
* @Column(name="reportingDate", type="date",length=45, nullable=true)
* */
private $reportingDate;
/**
* @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
* */
private $manufacturerCompName;

public function getSugar_internalfortA1ID() {
		return $this -> sugar_internalfortA1ID;
}

public function setSugar_internalfortA1ID($sugar_internalfortA1ID) { $this -> sugar_internalfortA1ID = $sugar_internalfortA1ID;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getClean() {
		return $this -> clean;
}

public function setClean($clean) { $this -> clean = $clean;
}
public function getObservations() {
		return $this -> observations;
}

public function setObservations($observations) { $this -> observations = $observations;
}
public function getResponsible() {
		return $this -> responsible;
}

public function setResponsible($responsible) { $this -> responsible = $responsible;
}
public function getReportingDate() {
		return $this -> reportingDate;
}

public function setReportingDate($reportingDate) { $this -> reportingDate = $reportingDate;
}
public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
}

public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
}
 }
?>