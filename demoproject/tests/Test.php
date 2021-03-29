<?php

use Module\ProductModule\Domain\Product;
use Module\ProductModule\Infrastructure\ProductRepository;
require_once 'C:\Learning\php\tasks\PHP projects\demoproject\vendor\autoload.php';

$test1 = new Product('test', "1x", 20, 'tests');
echo($test1->getName());

//$rep = new ProductRepository;
//$rep->getProductByCode("20x");



