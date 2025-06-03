<?php

// 1. Create a form for a costume-rental company that enables the user to submit the name of the superhero costume they want. Make the form submit
// data via the HTTP GET method to a PHP script called costumeSearch.php,
// and use hero for the name of the text value entered by the user. Visit the
// form through your web server and submit the value superman. You should
// see costumeSearch.php?hero=superman in the resulting URL.


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Costume rentals</title>
</head>

<body>
    <form method="get" action="/part%203/GET%20and%20POST%20requests/costumeSearch.php">
        <label for="costumename">
            Enter Costume's Hero Name you want: <input type="text" id="costumename" name="hero">
        </label>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>


<?php
// run php -S localhost:8080 in php_exercises directory. 
// visit this to view page http://localhost:8080/part%203/2%20GET%20and%20POST%20requests/exercise_1.php 
?>