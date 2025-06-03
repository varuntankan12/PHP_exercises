<?php

require_once "../src/controllerFunctions.php";

$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    handleFormRequest();
} elseif ($method == "GET") {
    $action = filter_input(INPUT_GET, 'action');
    switch ($action) {
        case "":
            showHome();
            break;

        case 'home':
            showHome();
            break;

        case 'loginStaff':
            showLoginPage();
            break;

        default:
            showError();
            break;
    }
}
