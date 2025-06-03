<?php

// Create a form offering the user several options for a new car, each represented with a uniquely named checkbox. For example, offer options
// such as metallic paint, fog lights, and a reversing camera. Write a script
// that processes the form data and returns an HTML page containing a
// message confirming each selected option.

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/part%203/GET%20and%20POST%20requests/exercise_5.php">

        <p>Hii, please select the features you want in your new car.</p><br>

        <input type="checkbox" id="fl" name="fl" value="fog light" checked><label for="fl">Fog Light</label><br>
        <input type="checkbox" id="mp" name="mp" value="metalic paint"><label for="mp">Metalic paint</label><br>
        <input type="checkbox" id="rc" name="rc" value="reverse camera"><label for="rc">Reverse Camera</label><br>
        <input type="checkbox" id="dc" name="dc" value="dash camera"><label for="dc">Dash Ceamera</label><br>

        <br>
        <button type="submit">Send</button>
    </form>



    <?php
    $fogl = filter_input(INPUT_GET, 'fl');
    $metp = filter_input(INPUT_GET, 'mp');
    $revc = filter_input(INPUT_GET, 'rc');
    $dasc = filter_input(INPUT_GET, 'dc');
    if ($fogl || $metp || $revc || $dasc) {
        echo "<p>You have selected: $fogl , $metp , $revc , $dasc</p>";
    }
    ?>
</body>

</html>