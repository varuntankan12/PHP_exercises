<?php

// Use a do...while loop to keep taking in words input by the user until
// they enter one that begins with a capital letter.

echo "Enter a word that start with a caiptal letter.\n\n";

do {
    $text = readline("Please enter word: ");
} while ($text !== ucfirst($text));

echo "\nyou entered '$text' which starts with a capital letter.\n";
