<?php

// Write a script that determines the size of the machine you need for your
// laundry. The script should check the value of the $laundryWeightKg variable and print "Fits in standard machine" if the value is less than 9, or print
// Needs medium to large machine otherwise.


$launderyWeightKg = 22;
if ($launderyWeightKg <= 9) {
    echo "You need a Standard machine.\n";
} elseif ($launderyWeightKg <= 16) {
    echo "You need a Medium Machine.\n";
} else {
    echo "You need a Large Machine.\n";
}



$launderyWeightKg = 12;
if ($launderyWeightKg <= 9) {
    echo "You need a Standard machine.\n";
} elseif ($launderyWeightKg <= 16) {
    echo "You need a Medium Machine.\n";
} else {
    echo "You need a Large Machine.\n";
}



$launderyWeightKg = 6;
if ($launderyWeightKg <= 9) {
    echo "You need a Standard machine.\n";
} elseif ($launderyWeightKg <= 16) {
    echo "You need a Medium Machine.\n";
} else {
    echo "You need a Large Machine.\n";
}
