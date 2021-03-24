<?php
namespace Module\ProcuctModule;

interface ProductCatalogServiceInterface {
	 
    # CRUD
    public function getProductByCode(string $productCode): Product;
    public function searchProduct(ProductSearchCriteria $criteria): ProductCollection;
    public function createProduct(Product $product): bool;
    public function updateProduct(Product $product): bool;
    public function deleteProductByCode(string $productCode): bool;
}