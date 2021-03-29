<?php
namespace Module\ProductModule\Application\Contract;

use Module\ProductModule\Domain\Product;
use Module\ProductModule\Domain\ProductSearchCriteria;
use Module\ProductModule\Domain\ProductCollection;

interface ProductCatalogServiceInterface {
	 
    # CRUD
    public function getProductByCode(string $productCode): Product;
    public function createProduct(Product $product): bool;
    public function updateProduct(Product $product): bool;
    public function deleteProductByCode(string $productCode): bool;
    public function searchProduct(ProductSearchCriteria $criteria): ProductCollection;
}