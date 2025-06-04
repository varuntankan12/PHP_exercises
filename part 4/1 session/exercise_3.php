<?php


// Write a script to display a form that has a text box in which the user
// can enter a number, along with two Submit buttons. One Submit button should take the value from the text box and store it in the session.
// The second button should simply display the current value stored in
// the session, or a message stating no value was found in the session,
// as appropriate.

session_start();
$value = '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>simple form to save a value in session and simply show it on UI.</h2><br>
    <form method="post" action="/exercise_3.php">
        <label for="num">
            Enter a Number: <input type="number" name="num" id="num"><br>
        </label>
        <button type="submit">Save</button>
    </form><br>
    <form action="/exercise_3.php">
        <button type="submit">Show</button>
    </form><br><br>

    <?php
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "POST") {
        $value = filter_input(INPUT_POST, 'num');
        $_SESSION['num'] = $value;
        showValue();
    } else {
        showValue();
    }


    function showValue()
    {
        if (isset($_SESSION['num'])) {
            $value = $_SESSION['num'];
            echo "The Stored Value is = $value";
        } else {
            echo "There is no Previously saved value.";
        }
    }
    ?>
</body>

</html>