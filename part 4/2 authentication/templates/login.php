<?php
$uname = $GLOBALS['uname'] ?? '';
$password = $GLOBALS['password'] ?? '';
$message = $GLOBALS['message'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <form method="post" action="/?action=login">
        <label for="uname">
            Enter username: <input type="text" value="<?= $uname ?>" name="uname" id="uname"><br>
        </label>
        <label for="pword">
            Enter password: <input type="text" value="<?= $password ?>" name="pword" id="pword"><br>
        </label><br>
        <button type="submit">Login</button>
    </form>
    <p><?= $message ?></p>
    <?PHP
    // print_r($GLOBALS);
    ?>
</body>

</html>