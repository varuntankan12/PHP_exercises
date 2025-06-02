<?php

// Modify your which_is_larger() function to accept either integers or floats,
// and to return an integer, a float, or NULL if both numbers are the same.

// modifying fn to receive int, float and null
function which_is_larger2(int | float $a, int | float $b): int | float | NULL
{
    if ($a == $b) return NULL;

    return ($a > $b) ? $a : $b;
}
echo which_is_larger2(4, 5.6) . "\n";
echo which_is_larger2(21.478, 19.6) . "\n";
echo which_is_larger2(3, 3) . "\n";