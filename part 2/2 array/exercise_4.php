<?php

// 4. Create an array containing integer ages 23, 31, and 55. Use built-in functions to calculate and print out the number of items in the array and
// their average



$age = array(23, 25, 32, 21, 17, 29, 26, 28, 24, 16, 54);

$count = sizeof($age);

echo "Number of items in age array are: $count\n";

$average = (int) (array_sum($age) / $count);
echo "Average of array Elements is: $average\n";
