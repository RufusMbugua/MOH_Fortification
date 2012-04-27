<?php

namespace models;

/**
 * @Entity
 * @Table(name="externalfortifiedb1")
 */

class ExtFortifiedB1 {

	/*
	 * @Id
	 * @Column(name="transactionNumber", type="int", length=11, nullable=false)	 *
	 * */
	private $transactionNumber;

	/*
	 * @Column(name="dates", type="date", nullable=true)	 *
	 * */

	private $dates;
	/*
	 * @Column(name="manufacturerCompName", type="varchar", length=45, nullable=true)	 *
	 * */
	private $manufacturerCompName;
	/*
	 * @Column(name="publicHealthOfficer", type="varchar", length=45, nullable=true)	 *
	 * */
	private $publicHealthOfficer;
	/*
	 * @Column(name="name", type="varchar", length=45, nullable=false)	 *
	 * */
	private $name;
	/*
	 * @Column(name="position", type="varchar", length=45, nullable=false)	 *
	 * */
	private $position;
	/*
	 * @Column(name="signature", type="varchar", length=15, nullable=false)	 *
	 * */
	private $signature;
	/*
	 * @Column(name="opening", type="varchar", length=45, nullable=true)	 *
	 * */
	private $opening;
	/*
	 * @Column(name="closing", type="varchar", length=45, nullable=true)	 *
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

	public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
	}

	public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
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