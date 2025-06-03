<?php

function showHome()
{
    require_once "../templates/home.php";
}

function showStaffLoginPage()
{
    require_once "../templates/loginStaff.php";
}

function showClientLoginPage()
{
    require_once "../templates/loginClient.php";
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

function handleStaffFormRequest()
{
    $uname = filter_input(INPUT_POST, 'uname');
    $password = filter_input(INPUT_POST, 'pword');

    if ($uname == "author" && $password == "words") {
        showStaffSuccessLoginPage();
    } else {
        showLoginError();
    }
}

function handleClientFormRequest()
{
    $uname = filter_input(INPUT_POST, 'uname');
    $password = filter_input(INPUT_POST, 'pword');

    if ($uname == "customer" && $password == "paying") {
        showClientSuccessLoginPage();
    } else {
        showLoginError();
    }
}


function showError()
{
    require_once "../templates/error.php";
}
