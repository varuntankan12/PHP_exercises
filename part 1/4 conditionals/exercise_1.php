<?php

// 1. Write a script that assigns a name to the $name variable and then prints
// the message That is a short name if the length of the string is less than
// four characters.

$name = "shi";

if (strlen($name) < 4) {
    echo "Name: '$name' is less than four characters.\n";
} else {
    echo $name . "\n";
}



$name = "shin";

if (strlen($name) < 4) {
    echo "Name: '$name' is less than four characters.\n";
} else {
    echo "Name is '" . $name . "'\n";
}
