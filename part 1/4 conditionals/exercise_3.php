<?php

// Use a switch statement or a match statement to test the value of the
// $vehicle variable and print an appropriate message based on that value.
// Use the following value/message combinations:
// bus "Beep beep"
// train "Runs on tracks"
// car "Has at least three wheels"
// helicopter "Can fly"
// bicycle "You never forget once you've learned"
// (None of the above) "You've chosen the road less traveled"



// using switch statement to check.

$vehical = "bicycle";

switch ($vehical) {
    case 'bus':
        echo "Beep Beep\n";
        break;

    case 'train':
        echo "Runs on rock, 10 min late...\n";
        break;

    case 'car':
        echo "It need fuel to keep running\n";
        break;

    case 'helicopter':
        echo "Can fly in the sky.\n";
        break;

    case 'bicycle':
        echo "Needs human power to operate.\n";
        break;

    default:
        echo "Wrong vehical selected....\n";
        break;
}








// using Match statement to compare

$vehical = 'bus';

echo match ($vehical) {
    'bus'=> "Beep Beep\n",

    'train'=>"Runs on rock, 10 min late...\n",

    'car' =>"It need fuel to keep running\n",

    'helicopter'=>"Can fly in the sky.\n",

    'bicycle'=>"Needs human power to operate.\n",

    default=>"Wrong vehical selected....\n",
};