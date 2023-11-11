<?php
require_once 'controller/controllers.php';
require_once 'controller/functions.php';
require_once 'controller/config.php';


$url = $_GET['url'] ?? '/web-judol';
switch ($url) {
    case '':
            GlobalController::home();
        break;
    case 'admin':
        $action = $_GET['loggedIn'] ?? '';
        if ($action === 'true') {
            GlobalController::admin();
        }else{
            GlobalController::admin();
        }
        break;
    case 'dashboard':
            GlobalController::dashboard();
        break;
    case 'login':
        $action = $_GET['status'] ?? '';
        if ($action === 'true') {
            GlobalController::login();
        }else{
            GlobalController::login();
        }
        break;
    case 'register':
        $action = $_GET['action'] ?? '';
        if ($action === 'save') {
            GlobalController::register();
        }else{
            GlobalController::register();
        }
        break;
    case 'profile':
        $action = $_GET['action'] ?? '';
        if ($action === 'edited') {
            GlobalController::profile();
        }else{
            GlobalController::profile();
        }
        break;
    case 'cart':
            GlobalController::cart();
        break;
    case 'contact':
            GlobalController::contact();
        break;
    case 'item':
        $action = $_GET['id'] ?? '';
        if ($action === '1') {
            GlobalController::item();
        }else{
            GlobalController::item();
        }
        break;
    case 'order':
        $action = $_GET['id'] ?? '';
        if ($action === '1') {
            GlobalController::order();
        }else{
            GlobalController::order();
        }
        break;
    default:
            GlobalController::home();
        break;

}

