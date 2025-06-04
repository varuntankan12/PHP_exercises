<?php

session_start();

require_once "../src/controllerFunctions.php";

$loggedIn = false;
$uname = $password = $message = '';
// var_dump($GLOBALS);

$action = filter_input(INPUT_GET, 'action');

switch ($action) {
    case "":
        showHome();
        break;

    case 'home':
        showHome();
        break;

    case 'login':
        $method = $_SERVER['REQUEST_METHOD'];

        if ($method == "POST") {
            handleLoginFormRequest();
        } else {
            if (isset($_SESSION['loggedIn'])) {
                showAuthenticatedPage('securedPage');
            } else {
                showLoginPage();
            }
        }
        break;

    case 'logOut':
        session_unset();
        showHome();
        break;

    case 'kill':
        session_unset();
        session_destroy();
        showHome();
        break;

    case 'securedPage':
        if (isset($_SESSION['loggedIn'])) {
            showAuthenticatedPage('securedPage');
        } else {
            showLoginWarning();
        }
        break;

    case 'secondSecuredPage':
        if (isset($_SESSION['loggedIn'])) {
            showAuthenticatedPage('secondSecuredPage');
        } else {
            showLoginWarning();
        }
        break;

    default:
        showError();
        break;
}



// open public folder in the terminal and run php -S localhost:8080
// visit http://localhost:8080