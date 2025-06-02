<?php

// Add a new data file for a game player and their high score in the data
// folder to be processed by the script in Listing 9-18. Run the main script,
// and you should see another line added to the output file and the new
// score added to the high.

$filePath = __DIR__ . "/score.txt";

$currentScore = 356;
$username = "player123";



$fileData = file($filePath, FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

$playername = explode("=", $fileData[0])[1];

if ($playername == $username) {
    $score = explode("=", $fileData[1])[1];
    $high = explode("=", $fileData[2])[1];
    $high = ($high < $currentScore) ? $currentScore : $high;

    $textToAppend = "username=$playername\nscore=$currentScore\n\nHigh=$high";
    $file = fopen($filePath, 'w');
    fwrite($file, $textToAppend);
    fclose($file);
} else {
    echo "Username does not match, user does not exist.";
}
