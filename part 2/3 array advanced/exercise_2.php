<?php

// Create a multidimensional array to represent the following data about
// movies:
// Back to the Future
//  duration 116
//  leadingActor Michael J. Fox
// The Fifth Element
//  duration 126
//  leadingActor Bruce Willis
// Alien
//  duration 117
//  leadingActor Sigourney Weaver


$dataArray = [
    "Back to the future" => [
        "duration" => 116,
        "leadingActor" => "Michael J. Fox"
    ],
    "The Fifth Element" => [
        "duration" => 126,
        "leadingActor" => "Bruce Willis"
    ],
    "Alien" => [
        "duration" => 117,
        "leadingActor" => "Sigourney Weaver"
    ]
];


foreach ($dataArray as $movie => $details) {
    echo "movie: $movie\n";
    echo "\tDuration: {$details['duration']}\n";
    echo "\tActor: {$details['leadingActor']}\n";
}
