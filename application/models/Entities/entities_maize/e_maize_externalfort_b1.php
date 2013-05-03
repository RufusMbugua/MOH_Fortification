<?php
namespace models\Entities\entities_maize;

/**
 * @Entity
 * @Table(name="maize_externalfortb1")
 */
class E_Maize_externalFort_B1{
 	/**
* @Id
* @Column(name="maize_externalfortB1ID", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $maize_externalfortB1ID;
/**
* @Column(name="dates", type="date",length=45, nullable=true)
* */
private $dates;
/**
* @Column(name="factoryName", type="string",length=45, nullable=true)
* */
private $factoryName;
/**
* @Column(name="publicHealthOfficer", type="string",length=45, nullable=true)
* */
private $publicHealthOfficer;
/**
* @Column(name="name", type="string",length=45, nullable=true)
* */
private $name;
/**
* @Column(name="position", type="string",length=45, nullable=true)
* */
private $position;
/**
* @Column(name="signature", type="string",length=45, nullable=true)
* */
private $signature;
/**
* @Column(name="opening", type="string",length=45, nullable=true)
* */
private $opening;
/**
* @Column(name="closing", type="string",length=45, nullable=true)
* */
private $closing;

public function getMaize_externalfortB1ID() {
		return $this -> maize_externalfortB1ID;
}

public function setMaize_externalfortB1ID($maize_externalfortB1ID) { $this -> maize_externalfortB1ID = $maize_externalfortB1ID;
}
public function getDates() {
		return $this -> dates;
}

public function setDates($dates) { $this -> dates = $dates;
}
public function getFactoryName() {
		return $this ->factoryName;
}

public function setFactoryName($factoryName) { $this -> factoryName = $factoryName;
}
public function getPublicHealthOfficer() {
		return $this -> publicHealthOfficer;
}

public function setPublicHealthOfficer($publicHealthOfficer) { $this -> publicHealthOfficer = $publicHealthOfficer;
}
public function getName() {
		return $this -> name;
}

public function setName($name) { $this -> name = $name;
}
public function getPosition() {
		return $this -> position;
}

public function setPosition($position) { $this -> position = $position;
}
public function getSignature() {
		return $this -> signature;
}

public function setSignature($signature) { $this -> signature = $signature;
}
public function getOpening() {
		return $this -> opening;
}

public function setOpening($opening) { $this -> opening = $opening;
}
public function getClosing() {
		return $this -> closing;
}

public function setClosing($closing) { $this -> closing = $closing;
}
}
?>