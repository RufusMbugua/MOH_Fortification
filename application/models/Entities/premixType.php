<?php
namespace models;

/**
 * @Entity
 * @Table(name="premixtype")
 */
 class premixType{
 		/*
* @Id
* @Column(name="productId", type="int", length=11, nullable=false)
* */
private $productId;
/*
* @Column(name="productName", type="varchar",length=10, nullable=true)
* */
private $productName;
 
public function getProductId() {
		return $this -> productId;
}

public function setProductId($productId) { $this -> productId = $productId;
}
 
public function getProductName() {
		return $this -> manufacturerFortId;
}

public function setProductName($productName) { $this -> productName = $productName;
}
}
?>