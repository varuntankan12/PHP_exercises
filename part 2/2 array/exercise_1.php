<?php

// Create a $colors array containing the string names of five colors. Print a
// random color from the array.



$colors = array('blue', 'black', 'green', 'white', 'red');

// Method 1
echo $colors[rand(0, 4)] . "\n";

// method 2
echo $colors[array_rand($colors)] . "\n";
