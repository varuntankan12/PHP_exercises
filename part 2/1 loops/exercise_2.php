<?php

// Use a break statement with a while (true) loop to keep taking in strings
// input by the user until one is numeric.


echo "Enter a numerical value.\n\n";

while (true) {
    $text = readline("Please enter: ");

    if (is_numeric($text)) {
        break;
    }
}

echo "\nyou entered '$text' which is Numerical value.\n";
