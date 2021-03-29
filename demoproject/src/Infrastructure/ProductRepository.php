<?php
namespace Module\ProductModule\Infrastructure;

use Module\ProductModule\Application\Contract\ProductCatalogServiceInterface;
use Module\ProductModule\Domain\Exception\ProductCodeDuplicateException;
use Module\ProductModule\Domain\Exception\ProductNotFoundException;
use Module\ProductModule\Domain\Exception\SearchCriteriaInvalidPageException;
use Module\ProductModule\Domain\Product;
use Module\ProductModule\Domain\ProductCollection;
use Module\ProductModule\Domain\ProductSearchCriteria;

class ProductRepository implements ProductCatalogServiceInterface{
    private string $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function load():array{
        $dataJson = file_get_contents($this->path);

        return json_decode($dataJson,true);
    }

    public function save(array $productsList)
    {
        $save = json_encode(array_values($productsList));
        file_put_contents($this->path, $save);
    }
    public function getProductByCode(string $productCode): Product{
        $productsList = $this->load();
        foreach ($productsList as $product) {
            if ($product['code'] == $productCode) {
                return Product::fromArrToObj($product);
            }
        }
        throw new ProductNotFoundException("A product with this code does not exist");
    }

     public function createProduct(Product $product): bool{
        $productList = $this->load();
        foreach ($productList as $key => $prod) {
            if ($prod['code'] == $product->getCode()) {

                throw new ProductCodeDuplicateException("A product with this code already exists !");
            }
        }
            $productList[] = Product::fromObjToArr($product);
            $this->save($productList);
         return true;
    }
    //public function searchProduct(ProductSearchCriteria $criteria){};
    public function updateProduct(Product $product): bool{
        $productsList = $this->load();

        foreach ($productsList as $key => $prod){
            if ($prod['code'] === $product->getCode()){
                $productsList[$key] = Product::fromObjToArr($product);
            }
        }
        $this->save($productsList);
        return true;
    }
    public function deleteProductByCode(string $productCode): bool{

    $productList = $this->load();
    foreach ($productList as $key => $prod) {
        if ($prod['code'] == $productCode) {
            unset($productList[$key]);
        }
    }
    $this->save($productList);
    return true;
    }


    public function searchProduct(ProductSearchCriteria $criteria): ProductCollection
    {
       // if ($criteria->getPage() <= 0) throw new SearchCriteriaInvalidPageException();
        $productList = $this->load();

        if(!empty($criteria->getName())){
            $productList = array_filter($productList, fn($product) => $this -> searchByColumn($product, 'name', $criteria->getName()));
        }
        if(!empty($criteria->getCategory())){
            $productList = array_filter($productList, fn($product) => $this->searchByColumn($product,'category', $criteria->getCategory()));
        }

        $offset = ($criteria->getPage() - 1) * $criteria-> getLimit();
        $productList = array_slice($productList, $offset, $criteria->getLimit());

        $productList = array_map([Product::class, 'fromArrToObj'],$productList);

        return new ProductCollection(...$productList);
    }

    private function searchByColumn($product, string $column, string $name) : bool{
        if (strpos($product[$column], $name) !== false) return true;
        else return false;
    }
}

