<?php
$loggedIn = $_SESSION['loggedIn'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <nav>
        <a href="/?action=login">Go to login page</a><br><br>
        <a href="/?action=logOut">Log out</a><br>
        <a href="/?action=kill">Kill Session</a><br><br>
    </nav>
    <section>
        <h2><a href="/?action=securedPage">goto: Secured page 1</a></h2>
        <h2><a href="/?action=secondSecuredPage">goto: Secured page 2</a></h2><br>
    </section>
    <br>
    <h1>This Page requires no login.</h1>
    <p>is Logged in = <?= $loggedIn ? "true" : "false" ?></p>
</body>

</html>