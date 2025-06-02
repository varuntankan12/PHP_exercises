<?php

// 1. Use an array with string keys to store the following pairs of names and
// heights in meters:
// Fred 1.82
// Joelle 1.55
// Robin 1.70
// Write a foreach loop to iterate through the array elements and print
// them out.


$dataArray = [
    "Fred" => 1.82,
    "Joelle" => 1.55,
    "Robin" => 1.70
];


foreach ($dataArray as $key => $value) {
    echo "$key's score = $value\n";
}
