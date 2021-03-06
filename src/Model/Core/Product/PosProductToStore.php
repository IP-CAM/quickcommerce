<?php

namespace QuickCommerce\Model\Core\Product;

use Doctrine\ORM\Mapping as ORM;

use QuickCommerce\Model\PosAbstractEntity;

/**
 * @ORM\Entity
 */
class PosProductToStore extends PosAbstractEntity {
	/**
	 * @var integer
	 *
	 * @ORM\Column(type="integer", name="product_id")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="NONE")
	 */
	protected $productId;
	
	/**
	 * @var integer
	 *
	 * @ORM\Column(type="integer", name="store_id", options={"default":0})
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="NONE")
	 */
	protected $storeId = '0';
	
	public function getProductId() {
		return $this->productId;
	}
	public function setProductId($productId) {
		$this->productId = $productId;
		return $this;
	}
	public function getStoreId() {
		return $this->storeId;
	}
	public function setStoreId($storeId) {
		$this->storeId = $storeId;
		return $this;
	}
	
}

