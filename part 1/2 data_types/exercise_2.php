<?php

// Assign the $age variable the integer 21, and var_dump its value. Then
// assign NULL to this variable, and var_dump it again. Finally, unset the variable and var_dump it once more. Note that the output differs when the
// variable is assigned NULL and when it’s unset.

// comparing the value of NULL variable and value of unset() fn.
$age = 21;

var_dump($age);

$age = NULL;
var_dump($age);

unset($age);
var_dump($age);
