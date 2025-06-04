<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
</head>

<body>
    <section>
        <h1>User Login</h1>
        <form method="post" action="/?action=login">
            <label for="uname">
                Enter username: <input type="text" name="uname" id="uname"><br>
            </label>
            <label for="pword">
                Enter password: <input type="text" name="pword" id="pword"><br>
            </label><br>
            <p>
                <input type="submit" value="Login as Client" name="asClient">
                <input type="submit" value="Login as Staff" name="asStaff">
            </p>
        </form>
    </section>
</body>

</html>