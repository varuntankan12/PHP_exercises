<?php

// 1. Create a sticky form using the HTTP POST method that prompts for an
// integer age and redisplays the form populated with the submitted value
// each time.


$age = '';
$ageErr = '';
$isValid = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = filter_input(INPUT_POST, 'age');

    if (empty($age)) {
        $ageErr = "Age field cannot be empty.";
        $isValid = false;
    } else {
        if (!is_numeric($age)) {
            $ageErr = "Age is not numeric.";
            $isValid = false;
        } elseif ($age <= 0 || $age > 150) {
            $ageErr = "Age cannot be negative or zero or above 150.";
            $isValid = false;
        } else {
            $isValid = true;
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="/part%203/3%20form%20validation/exercise_1.php">
        <label for="age">
            Enter Age: <input type="text" name="age" id="age" value="<?php echo $age ?>">
        </label>
        <br>
        <p><?php echo $ageErr ?></p>
        <br>
        <button type="submit">Send</button><br><br>
    </form>


    <?php
    if ($isValid) echo "Your age is: $age";
    // var_dump($age);
    ?>
</body>

</html>