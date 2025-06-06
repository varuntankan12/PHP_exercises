<?php

require_once __DIR__ . "/class.php";

$catObj = new Cat();
$catObj->name = "Mr. Fluffy";
$catObj->breed = "long-haired mix";
$catObj->age = 2;


echo "Cat name: \t{$catObj->name}\nCat Breed: \t{$catObj->breed}\nCat age: \t{$catObj->age}\n";
