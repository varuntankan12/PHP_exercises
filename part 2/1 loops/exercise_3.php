<?php

// Use a continue statement in a for loop to print out all the multiples of 3
// up to 21 (3, 6, 9, and so on).

$upto = 21;

for ($i = 1; $i <= $upto; $i++) {
    if ($i % 3 != 0) {
        continue;
    }

    echo "$i, ";
}

echo "\n";
