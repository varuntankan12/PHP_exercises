<?php

// Improve your answer to Exercise 1 so that after a valid (numeric) submission is received, a confirmation message displays, stating the user’s
// age after their next birthday.



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
    <form method="post" action="/part%203/3%20form%20validation/exercise_2.php">
        <label for="age">
            Enter Age: <input type="text" name="age" id="age" value="<?php echo $age ?>">
        </label>
        <br>
        <p><?php echo $ageErr ?></p>
        <br>
        <button type="submit">Send</button><br><br>
    </form>


    <?php
    if ($isValid) echo "You will be " . ($age + 1) . " years old on your next birthday.";
    // var_dump($age);
    ?>
</body>

</html>