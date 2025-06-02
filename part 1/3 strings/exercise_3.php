<?php

// Write a script that declares a heredoc string variable $happyMessage containing the message with a unicode character (including the newlines):

$message = "PHP is Fun";

echo <<<TEXT
$message
This will print as it is.
no need to add newline character specifically
    indentation will work fine
\u{1F60A}
\u{1F60A}

TEXT;
