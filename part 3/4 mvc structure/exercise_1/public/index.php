<?php
// var_dump(__DIR__ . '/../src/controllerFunction.php');

require_once __DIR__ . '/../src/controllerFunctions.php';

$method = $_SERVER['REQUEST_METHOD'];

if ($method == "POST") {
    showError();
} else {
    $action = filter_input(INPUT_GET, 'action');

    switch ($action) {
        case "home":
            showHome();
            break;
        case "about":
            showAbout();
            break;
        case "contact":
            showContact();
            break;
        case "recommendations":
            showRecommendation();
            break;
        default:
            showError();
            break;
    }
}
