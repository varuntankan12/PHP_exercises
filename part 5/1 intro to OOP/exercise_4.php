<?php

require_once __DIR__ . '/class.php';

// For the following properties and types, write their corresponding accessor (getter/setter) method names:
// age // integer
// houseNumber // integer
// color // string
// length // float
// heavy // bool



$newObj = new Devices();

$newObj->setAge(4);
$newObj->setHouseNumber(344);
$newObj->setColor('blue');
$newObj->setLength(34.23);
$newObj->setIsHeavy(true);

$age = $newObj->getAge();
$houseNumber = $newObj->getHouseNumber();
$color = $newObj->getColor();
$length = $newObj->getLength();
$isHeavy = $newObj->getIsHeavy();


echo "Object age: {$age}\n";
echo "Object houseNumber: {$houseNumber}\n";
echo "Object color: {$color}\n";
echo "Object length: {$length}\n";
echo "Object isHeavy: {$isHeavy}\n";
