<?php

// In a script, create a $fruit variable containing the string 'apple'. Then
// use a double-quoted string and a print statement to output the following message:
//  -- apple juice is made from apples.
// Change your script so that $fruit contains orange, leading to the following output:
//  -- orange juice is made from oranges.


$fruit = "Apple";
echo "$fruit juice is made of {$fruit}s\n";
// we can only escape characters in double quoted string ("")
// We can't use escape characters in single quoted string.

$fruit = "Orange";
echo "$fruit juice is made of {$fruit}s";
