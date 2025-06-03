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
    <form action="/part%203/GET%20and%20POST%20requests/exercise_6.php">

        <p>Hii, please select the features you want in your new car.</p><br>

        <input type="checkbox" id="fl" name="feature[]" value="fog light" checked><label for="fl">Fog Light</label><br>
        <input type="checkbox" id="mp" name="feature[]" value="metalic paint"><label for="mp">Metalic paint</label><br>
        <input type="checkbox" id="rc" name="feature[]" value="reverse camera"><label for="rc">Reverse Camera</label><br>
        <input type="checkbox" id="dc" name="feature[]" value="dash camera"><label for="dc">Dash Ceamera</label><br>

        <br>
        <button type="submit">Send</button>
    </form>



    <?php
    $features = filter_input(INPUT_GET, 'feature', options: FILTER_REQUIRE_ARRAY);
    // var_dump($features);
    if ($features) {
        echo "You have Selected: ";
        foreach ($features as $feature) {
            echo "$feature,";
        }
    }
    ?>
</body>

</html>