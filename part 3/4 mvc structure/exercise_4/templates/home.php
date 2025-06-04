<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <section>
        <h1>Login as Client</h1>
        <form method="post" action="/?action=loginAsClient">
            <label for="uname">
                Enter username: <input type="text" name="uname" id="uname"><br>
            </label>
            <label for="pword">
                Enter password: <input type="text" name="pword" id="pword"><br>
            </label><br>
            <button type="submit">Login</button>
        </form>
    </section><br><br><br>
    <section>
        <h1>Login as Staff</h1>
        <form method="post" action="/?action=loginAsStaff">
            <label for="uname">
                Enter username: <input type="text" name="uname" id="uname"><br>
            </label>
            <label for="pword">
                Enter password: <input type="text" name="pword" id="pword"><br>
            </label><br>
            <button type="submit">Login</button>
        </form>
    </section>
</body>

</html>