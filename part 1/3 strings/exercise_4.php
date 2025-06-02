<?php

// In a script, create an $appleJuice variable containing the string 'apple
// juice is made from apples.' Then use the str_replace() function to
// create a new string variable, $grapefruitJuice, containing the string
// 'grapefruit juice is made from grapefruits.' Try using other PHP functions to further transform the string. For example, capitalize the first
// letter of the string so it looks like a grammatically correct sentence.


$statement = "apple juice is made of apples";
echo $statement."\n";

$statement = str_replace("apple","grape",$statement);
echo $statement."\n";

// capitalize first letter only
$statement = ucfirst($statement);
echo $statement."\n";

// capitalize whole string.
echo strtoupper($statement) . "\n";