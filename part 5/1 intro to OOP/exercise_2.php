<?php

// Write a PHP class declaration for a Pet class, with a private name property
// and public get and set accessor methods for this name variable. Then write
// an index.php file to read in the class declaration and create a Pet object
// referenced by a variable named $pet1. Use the setter to set its name to
// 'Fifi', and add a statement to print the name stored in this object.




require_once __DIR__ . "/class.php";

$petObj = new Pet();
$petObj->setName("Fifi");
$petName = $petObj->getName();


echo "Pet name: \t{$petName}\n";
