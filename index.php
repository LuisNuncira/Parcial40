<?php

require_once 'app/controllers/EmployeeController.php';

$controller = new EmployeeController();

$action = $_GET['action'] ?? 'list';

switch ($action) {
    case 'register':
        $controller->registerEmployee();
        break;
    case 'list':
    default:
        $controller->listEmployees();
        break;
}