<?php

namespace models\Entities\entities_salt;

/**
 * @Entity
 * @Table(name="externalfortifiedb1")
 */

class E_ExtFortifiedB1 {

	/**
	 * @Id
	 * @Column(name="transactionNumber", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $transactionNumber;

    /**
	 * @Column(name="dates", type="date", nullable=true)
	 * */
	private $dates;
	
	/**
	 * @Column(name="factoryName", type="string", length=45, nullable=false)
	 * @ManyToOne(targetEntity="factories", inversedBy="factoryName")
	 * */
	private $factoryName;
	
	/**
	 * @Column(name="publicHealthOfficer", type="string", length=45, nullable=true)
	 * */
	private $publicHealthOfficer;
	
	/**
	 * @Column(name="name", type="string", length=45, nullable=false)	 *
	 * */
	private $name;
	
	/**
	 * @Column(name="position", type="string", length=45, nullable=false)	 *
	 * */
	private $position;
	
	/**
	 * @Column(name="signature", type="string", length=15, nullable=false)	 *
	 * */
	private $signature;
	
	/**
	 * @Column(name="opening", type="string", length=45, nullable=true)	 *
	 * */
	 
	private $opening;
	/**
	 * @Column(name="closing", type="string", length=45, nullable=true)	 *
	 * */
	private $closing;

	public function getTransactionNumber() {
		return $this -> transactionNumber;
	}

	public function setTransactionNumber($transactionNumber) { $this -> transactionNumber = $transactionNumber;
	}

	public function getDates() {
		return $this -> dates;
	}

	public function setDates($dates) { $this -> dates = $dates;
	}

	public function getFactoryName() {
		return $this -> factoryName;
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