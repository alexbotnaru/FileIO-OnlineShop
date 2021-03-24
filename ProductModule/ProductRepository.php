<?php
namespace Module\ProcuctModule;

class ProductRepository implements ProductCatalogServiceInterface{

    public function getProductByCode(string $productCode){}
    public function searchProduct(ProductSearchCriteria $criteria){}
    public function createProduct(Product $product){}
    public function updateProduct(Product $product){}
    public function deleteProductByCode(string $productCode){}
}