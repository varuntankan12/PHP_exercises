<?php
$preferedCar = filter_input(INPUT_GET, 'car');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($preferedCar == 'ev') {
        echo "<p>You Should buy a tesla</p>";
    } else {
        echo "<p>You Should buy a BMW</p>";
    }
    ?>
</body>

</html>