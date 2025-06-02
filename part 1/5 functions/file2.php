<?php
function print456()
{
    echo "456";
}



function which_is_larger(int $a, int $b): int | NULL
{
    if ($a === $b) return NULL;
    return ($a > $b) ? $a : $b;
}