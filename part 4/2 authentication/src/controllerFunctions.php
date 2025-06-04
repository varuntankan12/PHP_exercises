<?php

function showHome()
{
    require_once "../templates/home.php";
}

function showLoginPage()
{
    require_once "../templates/login.php";
}

function showAuthenticatedPage($pageName)
{
    require_once "../templates/$pageName.php";
}

function showLoginWarning()
{
    require_once "../templates/loginWarning.php";
}

function handleLoginFormRequest()
{
    $GLOBALS['uname'] = filter_input(INPUT_POST, 'uname');
    $GLOBALS['password'] = filter_input(INPUT_POST, 'pword');
    $isAuthenticated = false;

    $userArray = [
        ["user" => "user", "password" => "pass"],
        ["user" => "user1", "password" => "pass1"],
        ["user" => "user2", "password" => "pass2"],
        ["user" => "user3", "password" => "pass3"],
        ["user" => "user4", "password" => "pass4"]
    ];

    foreach ($userArray as $user) {
        if ($user['user'] === $GLOBALS['uname'] && $user['password'] === $GLOBALS['password']) {
            $isAuthenticated = true;
            break;
        }
    }

    if ($isAuthenticated) {
        $_SESSION['loggedIn'] = true;
        showAuthenticatedPage('securedPage');
    } else {
        $GLOBALS['message'] = "Invalid Credentials.";
        showLoginPage();
    }
}

function showError()
{
    require_once "../templates/error.php";
}
