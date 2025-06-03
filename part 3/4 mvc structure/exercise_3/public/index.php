<?php

require_once "../src/controllerFunctions.php";


$method = $_SERVER["REQUEST_METHOD"];

if ($method == "POST") {
    $action = filter_input(INPUT_GET, 'action');

    switch ($action) {
        case 'loginAsStaff':
            handleStaffFormRequest();
            break;

        case 'loginAsClient':
            handleClientFormRequest();
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

        case 'loginStaff':
            showStaffLoginPage();
            break;

        case 'loginClient':
            showClientLoginPage();
            break;

        default:
            showError();
            break;
    }
}
