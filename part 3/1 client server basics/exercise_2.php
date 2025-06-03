<?php

// Write a “pure” PHP script, all in a single PHP block of code, to do the
// following:
// a. Define a PHP $pageTitle variable containing the string 'Home Page'.
// b. Output <!doctype html><html><head><title>.
// c. Output the value inside the $pageTitle variable.
// d. Output </title></head>.


$pageTitle = "Home Page";


echo "<!doctype html><html><head><title>" . $pageTitle . "</title></head><body><h1>Home Page</h1></body>";


// run: php -S localhost:8080
// then type: ( http://localhost:8080/part%203/exercise_2.php )   in the web browser.