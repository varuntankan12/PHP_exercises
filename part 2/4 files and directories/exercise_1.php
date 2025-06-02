<?php

// 1. Find a limerick online or write your own. Here’s one I found:
// A magazine writer named Bing
// Could make copy from most anything
// But the copy he wrote
// 174   Chapter 9
// of a ten-dollar note
// Was so good he now lives in Sing Sing
// Write a script that declares an array; each element of the array is a
// line from the limerick. Then write those lines to a text file named
// limerick.txt.


$filePath = __DIR__ . "/file1.txt";

$fileArray = file($filePath);
var_dump($fileArray);

foreach ($fileArray as $key => $fileLine) {
    echo "$key.  $fileLine\n";
}
