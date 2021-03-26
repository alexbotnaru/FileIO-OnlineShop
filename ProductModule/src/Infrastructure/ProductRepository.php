<?php
namespace Module\ProcuctModule\Infrastructure;

use Module\ProcuctModule\Domain\Product;
use Module\ProcuctModule\Domain\ProductSearchCriteria;

class ProductRepository implements ProductCatalogServiceInterface{

    public function getProductByCode(string $productCode){};
    public function searchProduct(ProductSearchCriteria $criteria){};
    public function createProduct(Product $product){};
    public function updateProduct(Product $product){};
    public function deleteProductByCode(string $productCode){}
}