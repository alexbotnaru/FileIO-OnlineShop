<?php

namespace Module\ProcuctModule\tests;
use Module\ProcuctModule\Domain\Product;


$test1 = new Product('test', "1x", 20, 'tests');


echo $test1->getName();


?>

