<?php

// 3. Create a form to input the user’s age and a script to process the received
// age. The processing script should return an HTML page containing a
// message stating how old the user will be on their next birthday.

$yearOld = "'xyz'";

$dob = filter_input(INPUT_GET, 'dob');
$birthYear = (int) explode('-', $dob)[0];
$birthMonth = (int) explode('-', $dob)[1];

$currYear = (int) date('Y');
$currMonth = (int) date('m');

if ($dob != NULL) {
    if ($birthMonth < $currMonth) {
        $yearOld = ($currYear - $birthYear) + 1;
    } else {
        $yearOld = ($currYear - $birthYear);
    }
} else {
    $yearOld = "'xyz'";
}

// $yearOld = ($dob != NULL) ? (($currYear - $birthYear) + 1) : "'xyz'";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/part%203/GET%20and%20POST%20requests/exercise_3.php">
        <input type="date" name="dob" id="dateofbirth" value="<?= $dob ?>" max="<?php echo date('Y-m-d') ?>" required>
        <br><br>
        <button type="submit">Send</button>
    </form>

    <p>You will be <?= $yearOld ?> years old on your next birthday.</p>
    <?php
    // var_dump($birthYear);

    // echo "<br>$currYear<br>"
    ?>
</body>

</html>