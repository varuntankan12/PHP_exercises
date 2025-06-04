<?php

function showHome()
{
    require_once "../templates/home.php";
}

function showStaffSuccessLoginPage()
{
    require_once "../templates/successStff.php";
}

function showClientSuccessLoginPage()
{
    require_once "../templates/successClient.php";
}

function showLoginError()
{
    require_once "../templates/loginError.php";
}

function handleFormRequest()
{
    $uname = filter_input(INPUT_POST, 'uname');
    $password = filter_input(INPUT_POST, 'pword');
    $asClient = filter_has_var(INPUT_POST, 'asClient');
    $asStaff = filter_has_var(INPUT_POST, 'asStaff');

    var_dump($asClient);
    var_dump($asStaff);

    if ($asClient) {
        if ($uname == "customer" && $password == "paying") {
            showClientSuccessLoginPage();
        } else {
            showLoginError();
        }
    } elseif ($asStaff) {
        if ($uname == "author" && $password == "words") {
            showStaffSuccessLoginPage();
        } else {
            showLoginError();
        }
    } else {
        showLoginError();
    }
}

function showError()
{
    require_once "../templates/error.php";
}
