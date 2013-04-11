<?php
namespace models\Entities\entities_statistics;
/**
 * @Entity
 * @Table(name="household_level_results")
 */
class E_House_Level_Results {
 	/**
* @Id
* @Column(name="id", type="integer", length=11, nullable=false)
* @GeneratedValue(strategy="AUTO")
* */
private $id;

	/**
	 * @Column(name="province", type="string", length=10, nullable=true)
	 * */
	private $province;

	/**
	 * @Column(name="district", type="string", length=45, nullable=false)
	 * */
	private $district;

	/**
	 * @Column(name="code", type="string", length=45, nullable=true)
	 * */
	private $code;

	/**
	 * @Column(name="school", type="string", length=11, nullable=true)
	 * */
	private $school;

	/**
	 * @Column(name="sampleNumber", type="string", nullable=true)
	 * */
	private $sampleNumber;

	/**
	 * @Column(name="weight", type="decimal", length=45, nullable=true)
	 * */
	private $weight;

	/**
	 * @Column(name="brand", type="string", length=45, nullable=false)
	 * */
	private $brand;

	/**
	 * @Column(name="iodate", type="decimal", length=11, nullable=true)
	 * */
	private $iodate;

	public function getProvince() {
		return $this -> province;
	}

	public function setProvince($province) { $this -> province = $province;
	}

	public function getDistrict() {
		return $this -> district;
	}

	public function setDistrict($district) { $this -> district = $district;
	}

	public function getCode() {
		return $this -> code;
	}

	public function setCode($code) { $this -> code = $code;
	}

	public function getSchool() {
		return $this -> school;
	}

	public function setSchool($school) { $this -> school = $school;
	}

	public function getSampleNumber() {
		return $this -> sampleNumber;
	}

	public function setSampleNumber($sampleNumber) { $this -> sampleNumber = $sampleNumber;
	}

	public function getWeight() {
		return $this -> weight;
	}

	public function setWeight($weight) { $this -> weight = $weight;
	}

	public function getBrand() {
		return $this -> brand;
	}

	public function setBrand($brand) { $this -> brand = $brand;
	}

	public function getIodate() {
		return $this -> iodate;
	}

	public function setIodate($iodate) { $this -> iodate = $iodate;
	}

}
?>