<?php
// typcast int to float divide it by any number and limit to 2 number after decimal



$integerNumber = 256;
$floatNumber = (float) $integerNumber;

$floatNumber /= 21;

echo "value in integer = $integerNumber (" . gettype($integerNumber) . ")\n";
echo "value in Float = $floatNumber (" . gettype($floatNumber) . ")\n";
echo "\n\n";

// rounding float number to 2 decimal points,
$floatNumber = ceil($floatNumber * 100) / 100;
echo "value in Float Rounded to 2 decimal points = " . $floatNumber . " (" . gettype($floatNumber) . ")\n";
