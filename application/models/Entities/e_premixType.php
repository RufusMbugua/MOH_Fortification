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
<<<<<<< HEAD
	* @Column(name="productName", type="string",length=55, nullable=true)
=======
	* @Column(name="productName", type="string",length=10, nullable=true)
>>>>>>> dc3ecc0e378e5f3460b4eb82531e72d895a3eee2
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