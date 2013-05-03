<?php
namespace models\Entities;

	/**
	 * @Entity
	 * @Table(name="premixtype")
	 */
 class E_PremixType{
 	
   /**
	* @Id
	* @Column(name="productId", type="integer", length=11, nullable=false)
	* @GeneratedValue(strategy="AUTO")
	* */
	private $productId;
	
   /**
	* @Column(name="productName", type="string",length=55, nullable=true)
	* */
	private $productName;
	 
	public function getProductId() {
			return $this -> productId;
	}
	
	public function setProductId($productId) { $this -> productId = $productId;
	}
	 
	public function getProductName() {
			return $this -> productName;
	}
	
	public function setProductName($productName) { $this -> productName = $productName;
	}
}
?>