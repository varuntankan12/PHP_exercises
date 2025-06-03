<?php

function showHome()
{
    require_once "../templates/home.php";
}

function showLoginPage()
{
    require_once "../templates/loginStaff.php";
}

function showSuccessLogin()
{
    require_once "../templates/successStff.php";
}

function showLoginError()
{
    require_once "../templates/loginError.php";
}

function handleFormRequest()
{
    $uname = filter_input(INPUT_POST, 'uname');
    $password = filter_input(INPUT_POST, 'pword');

    if ($uname == "admin" && $password == "words") {
        showSuccessLogin();
    } else {
        showLoginError();
    }
}

function showError()
{
    require_once "../templates/error.php";
}
