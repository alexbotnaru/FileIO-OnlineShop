<?php
namespace Module\ProcuctModule\Application\Contract;

use Module\ProcuctModule\Domain\Product;
use Module\ProcuctModule\Domain\ProductSearchCriteria;
use Module\ProcuctModule\Domain\ProductCollection;

interface ProductCatalogServiceInterface {
	 
    # CRUD
    public function getProductByCode(string $productCode): Product;
    public function searchProduct(ProductSearchCriteria $criteria): ProductCollection;
    public function createProduct(Product $product): bool;
    public function updateProduct(Product $product): bool;
    public function deleteProductByCode(string $productCode): bool;
}