<?php

// 2. Write a foreach loop to print each of the colors from your array in
// Exercise 1 on a new line, in the following form:
// color 0 = blue
// color 1 = red
// ...

$colors = array('blue', 'black', 'green', 'white', 'red');

foreach ($colors as $index => $color) {
    echo "Color $index = $color\n";
}
