<?php

// Declare one array containing the odd numbers up to nine (1, 3, 5, 7, 9)
// and another with the even numbers (2, 4, 6, 8). Use the array spread
// operator (...) to combine the two arrays, and then sort them into
// numerical order with PHP’s built-in sort() function.



$arrayOfOdd = [1, 3, 5, 7, 9];
$arrayOfEven = [2, 4, 6, 8];

$combined = [...$arrayOfOdd, ...$arrayOfEven];
sort($combined);
print_r($combined);
