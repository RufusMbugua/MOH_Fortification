<?php
namespace models\Entities\entities_salt;

/**
 * @Entity
 * @Table(name="smallscalea2")
 */
class E_SmallScaleA2 {
	/**
	 * @Id
	 * @Column(name="transactionNumber", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $transactionNumber;
	/**
	 * @Column(name="harvestYear", type="string",length=45, nullable=true)
	 * */
	private $harvestYear;
	/**
	 * @Column(name="dates", type="decimal", nullable=false)
	 * */
	private $dates;
	
	/**
	 * @Column(name="manufacturerCompName", type="string",length=45, nullable=true)
	 * */
	private $manufacturerCompName;
	/**
	 * @Column(name="weightKg", type="decimal", nullable=true)
	 * */
	private $weightKg;
	/**
	 * @Column(name="lotNumber", type="string",length=45, nullable=true)
	 * */
	private $lotNumber;
	/**
	 * @Column(name="contentOfIodine", type="decimal", nullable=true)
	 * */
	private $contentOfIodine;
	
	public function getTransactionNumber() {
		return $this -> transactionNumber;
	}

	public function setTransactionNumber($transactionNumber) { $this -> transactionNumber = $transactionNumber;
	}
	public function getHarvestYear() {
		return $this -> harvestYear;
	}

	public function setHarvestYear($harvestYear) { $this -> harvestYear = $harvestYear;
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

	public function getWeightKg() {
		return $this -> weightKg;
	}

	public function setWeightKg($weightKg) { $this -> weightKg = $weightKg;
	}

	public function getLotNumber() {
		return $this -> lotNumber;
	}

	public function setLotNumber($lotNumber) { $this -> lotNumber = $lotNumber;
	}

	public function getContentOfIodine() {
		return $this -> contentOfIodine;
	}

	public function setContentOfIodine($contentOfIodine) { $this -> contentOfIodine = $contentOfIodine;
	}

}
?>