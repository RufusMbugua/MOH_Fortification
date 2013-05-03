<?php
namespace models\Entities\entities_salt;
	/**
	 * @Entity
	 * @Table(name="internalfortifieda1")
	 */
class E_IntFortifiedA1 {

	/**
	 * @Id
	 * @Column(name="receiptNumber", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 * */
	private $receiptNumber;

	/**
	 * @Column(name="productType", type="string", length=10, nullable=true)
	 * @ManyToOne(targetEntity="premixtype", inversedBy="productName")
	 * */
	private $productType;

	/**
	 * @ManyToOne(targetEntity="manufacturerCompound", inversedBy="manufacturerCompName")
	 * @Column(name="manufacturerCompName", type="string", length=45, nullable=false)
	 * */
	private $manufacturerCompName;

	/**
	 * @Column(name="inspectedBy", type="string", length=45, nullable=true)
	 * */
	private $inspectedBy;

	/**
	 * @Column(name="purchaseOrderNumber", type="integer", length=11, nullable=true)
	 * */
	private $purchaseOrderNumber;
	
	/**
	 * @Column(name="dates", type="date", nullable=true)
	 * */
	private $dates;
	
	/**
	 * @Column(name="quantity", type="decimal", length=45, nullable=true)
	 * */
	private $quantity;
	

	/**
	 * @Column(name="integrityObservation", type="string", length=45, nullable=false)
	 * */
	private $integrityObservation;

	/**
	 * @Column(name="lotNumber", type="string", length=11, nullable=true)
	 * */
	private $lotNumber;

	/**
	 * @Column(name="lotObservation", type="string", length=45, nullable=false)
	 * */
	private $lotObservation;

	/**
	 * @Column(name="productionDate", type="string",length=11, nullable=true)
	 * */
	private $productionDate;

	/**
	 * @Column(name="productObservation", type="string", length=45, nullable=false)
	 * */
	private $productObservation;

	/**
	 * @Column(name="expiryDate",type="string",length=11, nullable=true)
	 * */
	private $expiryDate;

	/**
	 * @Column(name="expirationObservation", type="string", length=45, nullable=false)
	 * */
	private $expirationObservation;

	/**
	 * @Column(name="contentClaimedLabel", type="string", length=45, nullable=true)
	 * */
	private $contentClaimLabel;

	/**
	 * @Column(name="contentObservation", type="string", length=45, nullable=false)
	 * */
	private $contentObservation;

	/**
	 * @Column(name="certificateOfAnalysis", type="string", length=45, nullable=true)
	 * */
	private $certificateOfAnalysis;

	/**
	 * @Column(name="certificateObservation", type="string", length=45, nullable=false)
	 * */
	private $certificateObservation;

	/**
	 * @Column(name="other", type="string", length=45, nullable=true)
	 * */
	private $other;

	/**
	 * @Column(name="otherObservation", type="string", length=45, nullable=true)
	 * */
	private $otherObservation;

	/**
	 * @Column(name="accepted", type="integer", length=1, nullable=true)
	 * */
	private $accepted;

	/**
	 * @Column(name="reasonsForRejection", type="string", length=45, nullable=true)
	 * */
	private $reasonsForRejection;

	/**
	 * @Column(name="receivedBy", type="string", length=45, nullable=false)
	 * */
	private $receivedBy;

	public function getReceiptNumber() {
		return $this -> receiptNumber;
	}

	public function setReceiptNumber($receiptNumber) { $this -> receiptNumber = $receiptNumber;
	}

	public function getProductType() {
		return $this -> productType;
	}

	public function setProductType($productType) { $this -> productType = $productType;
	}

	public function getManufacturerCompName() {
		return $this -> manufacturerCompName;
	}

	public function setManufacturerCompName($manufacturerCompName) { $this -> manufacturerCompName = $manufacturerCompName;
	}

	public function getInspectedBy() {
		return $this -> inspectedBy;
	}

	public function setInspectedBy($inspectedBy) { $this -> inspectedBy = $inspectedBy;
	}

	public function getPurchaseOrderNumber() {
		return $this -> purchaseOrderNumber;
	}

	public function setPurchaseOrderNumber($purchaseOrderNumber) { $this -> purchaseOrderNumber = $purchaseOrderNumber;
	}

	public function getDates() {
		return $this -> dates;
	}

	public function setDates($dates) { $this -> dates = $dates;
	}

	public function getQuantity() {
		return $this -> quantity;
	}

	public function setQuantity($quantity) { $this -> quantity = $quantity;
	}

	public function getIntegrityObservation() {
		return $this -> integrityObservation;
	}

	public function setIntegrityObservation($integrityObservation) { $this -> integrityObservation = $integrityObservation;
	}

	public function getLotNumber() {
		return $this -> lotNumber;
	}

	public function setLotNumber($lotNumber) { $this -> lotNumber = $lotNumber;
	}

	public function getLotObservation() {
		return $this -> lotObservation;
	}

	public function setLotObservation($lotObservation) { $this -> lotObservation = $lotObservation;
	}

	public function getProductionDate() {
		return $this -> productionDate;
	}
	
	public function setProductionDate($productionDate) { $this -> productionDate = $productionDate;
	}

	public function getProductObservation() {
		return $this -> productObservation;
	}

	public function setProductObservation($productObservation) { $this -> productObservation = $productObservation;
	}

	public function getExpiryDate() {
		return $this -> expiryDate;
	}

	public function setExpiryDate($expiryDate) { $this -> expiryDate = $expiryDate;
	}

	public function getExpirationObservation() {
		return $this -> expirationObservation;
	}

	public function setExpirationObservation($expirationObservation) { $this -> expirationObservation = $expirationObservation;
	}

	public function getContentClaimLabel() {
		return $this -> contentClaimLabel;
	}

	public function setContentClaimLabel($contentClaimLabel) { $this -> contentClaimLabel = $contentClaimLabel;
	}

	public function getContentObservation() {
		return $this -> contentObservation;
	}

	public function setContentObservation($contentObservation) { $this -> contentObservation = $contentObservation;
	}

	public function getCertificateOfAnalysis() {
		return $this -> certificateOfAnalysis;
	}

	public function setCertificateOfAnalysis($certificateOfAnalysis) { $this -> certificateOfAnalysis = $certificateOfAnalysis;
	}

	public function getCertificateObservation() {
		return $this -> certificateObservation;
	}

	public function setCertificateObservation($certificateObservation) { $this -> certificateObservation = $certificateObservation;
	}

	public function getOther() {
		return $this -> other;
	}

	public function setOther($other) { $this -> other = $other;
	}

	public function getOtherObservation() {
		return $this -> otherObservation;
	}

	public function setOtherObservation($otherObservation) { $this -> otherObservation = $otherObservation;
	}

	public function getAccepted() {
		return $this -> accepted;
	}

	public function setAccepted($accepted) { $this -> accepted = $accepted;
	}

	public function getReasonsForRejection() {
		return $this -> reasonsForRejection;
	}

	public function setReasonsForRejection($reasonsForRejection) { $this -> reasonsForRejection = $reasonsForRejection;
	}

	public function getReceivedBy() {
		return $this -> receivedBy;
	}

	public function setReceivedBy($receivedBy) { $this -> receivedBy = $receivedBy;
	}
}
?>