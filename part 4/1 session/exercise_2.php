<?php

// Write a PHP script that looks in the $_SESSION array for a value with the
// key 'guess'. If it isn’t found, store 0 for this key and display a message
// to the user stating no previous value was found. If a value is found in
// the session, add a random number from 1 to 10 to that value. Store the
// result back in the $_SESSION array and display it to the user.

session_start();
$value = $newValue = $pageHit = '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?php
        if (isset($_SESSION['guess'])) {
            $value = $_SESSION['guess'];
            $newValue = rand(0, 10);
            echo "Previous value = $value<br>New value = $newValue";

            $_SESSION['guess'] = $newValue;
        } else {
            $newValue = rand(0, 10);
            echo "No previous value found.<br>New value = $newValue";

            $_SESSION['guess'] = $newValue;
        }

        ?>
    </h1>
    <p>
        <?php
        $pageHit = isset($_SESSION['hit']) ? $_SESSION['hit'] : 1;
        echo "Page hit = $pageHit <br>";
        $pageHit += 1;
        $_SESSION['hit'] = $pageHit;

        ?>
        <a href="/exercise_2.php">Re hit page</a>
    </p>
</body>

</html>