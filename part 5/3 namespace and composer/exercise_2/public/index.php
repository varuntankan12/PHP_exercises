<?php

require_once __DIR__ . "/../vendor/autoload.php";

use myProduct\Product;
use myProduct\Second;

$newprod = new Product(7, "hammer", 99.9);

var_dump($newprod);


$S = new Second();

var_dump($S);
