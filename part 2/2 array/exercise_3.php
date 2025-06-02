<?php

// Use array_pop() to print the last element of your array of colors from
// Exercise 1. Then use var_dump() to show that this item has been removed
// from the array.


$colors = array('blue', 'black', 'green', 'white', 'red');

echo "Last color of array is '".array_pop($colors)."' Which is removed from array.\n";

var_dump($colors);

