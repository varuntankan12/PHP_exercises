<?php


// 2. Create a basic login form using the HTTP POST method, with <input>
// elements for a username (using the default text type) and a password
// (use the password type). Use your browser’s developer tools to inspect the
// form data when it’s submitted.


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costume rentals</title>
</head>

<body>
    <form method="post" action="/part%203/GET%20and%20POST%20requests/exercise_2.php">
        <label for="username">
            Enter Name: <input type="text" id="username" name="name">
        </label>
        <br><br>
        <label for="pssword">
            Enter Password: <input type="password" id="password" name="password">
        </label>
        <br><br>
        <button type="submit">Submit</button>
    </form>
<br><br><br>

    <?php
    $name = filter_input(INPUT_POST, 'name');
    $password = filter_input(INPUT_POST, 'password');
    ?>

    <p>Your Name: <?= $name ?></p>
    <p>Your Password: <?= $password ?></p>
</body>

</html>


<?php
// run php -S localhost:8080 in PHP_exercises directory. 
// visit this to view page http://localhost:8080/part%203/2%20GET%20and%20POST%20requests/exercise_2.php
?>