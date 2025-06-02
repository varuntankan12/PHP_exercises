<?php require_once __DIR__ . '/file2.php' ?>

<?php


// Create a project with separate main.php and file2.php scripts. The file2
// .php script should print out the string '456'. In your main.php script, first
// print out '123', then read in and execute file2.php, then print out '789'.
// The overall output should be 123456789, but the middle 456 has been
// printed from file2.php.



echo "123";
print456();
echo "789\n";