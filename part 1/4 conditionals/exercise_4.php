<?php


// Write a script that prints the message You are now logged in if both
// $userNameCorrect and $passwordCorrect are true. Otherwise, print Invalid
// credentials, please try again.


$userNameCorrect = true;
$userPasswordMatches = true;

if ($userNameCorrect && $userPasswordMatches) {
    echo "You are Lgged In. \n\n----------WELCOME.----------\n";
} else {
    echo "\nInvalid Crediantials.\n";
}





$userPasswordMatches = false;

if ($userNameCorrect && $userPasswordMatches) {
    echo "You are Lgged In. \n\n----------WELCOME.----------\n";
} else {
    echo "\nInvalid Crediantials.\n";
}
