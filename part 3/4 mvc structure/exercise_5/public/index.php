<?php

require_once "../src/controllerFunctions.php";


$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $action = filter_input(INPUT_GET, 'action');

    switch ($action) {
        case 'login':
            handleFormRequest();
            break;

        default:
            showLoginError();
            break;
    }
} elseif ($method == "GET") {
    $action = filter_input(INPUT_GET, 'action');
    switch ($action) {
        case "":
            showHome();
            break;

        case 'home':
            showHome();
            break;

        default:
            showError();
            break;
    }
}
