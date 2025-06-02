<?php require_once __DIR__ . '/file2.php' ?>

<?php


// 2. Write a project declaring a which_is_larger() function that returns the
// larger of two integers. Your main.php script should read in and execute
// the file declaring your function, and then print out the results of calling the function with the following arguments:
// 4 and 5
// 21 and 19
// 3 and 3
// Notice What happens in the last case, where the parameters are the same?


echo which_is_larger(4, 5) . "\n";
echo which_is_larger(21, 19) . "\n";
echo which_is_larger(3, 3) . "\n";