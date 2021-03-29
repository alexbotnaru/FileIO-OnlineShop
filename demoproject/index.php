<?php

use Module\ProductModule\Domain\Product;
use Module\ProductModule\Domain\ProductSearchCriteria;
use Module\ProductModule\Infrastructure\ProductRepository;

require_once 'C:\Learning\php\tasks\PHP projects\demoproject\vendor\autoload.php';

$path= 'C:\Learning\php\tasks\PHP projects\demoproject\data.json';
//test
//$test1 = new Product('test', "1x", 20, 'tests');
//echo($test1->getName());


$rep = new ProductRepository($path);

//getByCode
//print_r($rep->getProductByCode('2b'));

//createProduct
//$kiwi = new Product('kiwi','21',30.5,'fruits');
//$rep->createProduct($kiwi);
//
//$apple = new Product('apple','26',10.5,'fruits');
//$rep->createProduct($apple);
//
//$potato = new Product('potato','102',8.5,'vegetables');
//$rep->createProduct($potato);

//print_r($rep->getProductByCode('22'));

//updateProduct
//$pear = new Product('pear','25',32,'fruits');
//$rep->updateProduct($pear);
//print_r($rep->getProductByCode('101'));


//deleteProdByCode
//$rep->deleteProductByCode("300");

//search
$criteria = new ProductSearchCriteria('', 'fruits',20,0);
print_r($rep->searchProduct($criteria));






