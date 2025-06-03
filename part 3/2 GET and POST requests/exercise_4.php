<?php

// 4. Create a form with radio buttons asking the user whether they would be
// willing to pay more for an environmentally friendly car. If they say yes,
// return an HTML page containing a message recommending they buy
// an electric car. If they say no, recommend a gas car

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/part%203/GET%20and%20POST%20requests/recommendation.php">
        <h2>What would Prefer: </h2><br>
        <input type="radio" name="car" id="ev" value="ev" checked>
        <label for="ev">an Electric Vehical</label><br>
        <input type="radio" name="car" id="nev" value="nev">
        <label for="nev">a non Electric Vehical</label>
        <br><br><br>
        <button type="submit">Send</button>
    </form>
</body>

</html>