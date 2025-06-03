<?php

// Create a sticky form using the HTTP POST method that prompts for an
// email address. If the address is valid, a confirmation message is displayed; if it’s not valid, the form is redisplayed with an error message
// stating that the email address is invalid. Think about the requirements
// for a valid email address.



$email = '';
$emailErr = '';
$isValidMail = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_input(INPUT_POST, 'email');

    if (empty($email)) {
        $emailErr = "Email field cannot be empty.";
        $isValidMail = false;
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $email)) {
        $emailErr = "Invalid email";
        $isValidMail = false;
    } else {
        $isValidMail = true;
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
    <form method="post" action="/part%203/3%20form%20validation/exercise_3.php">
        <label for="mail">
            Enter Email: <input type="text" name="email" id="mail" value="<?php echo $email ?>">
        </label>
        <br>
        <p><?php echo $emailErr ?></p>
        <br>
        <button type="submit">Send</button><br><br>
    </form>


    <?php
    if ($isValidMail) echo "Entered email is correct in format.";
    // var_dump($age);
    ?>
</body>

</html>