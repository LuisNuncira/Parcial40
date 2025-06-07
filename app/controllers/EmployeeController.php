<?php
require_once __DIR__ . '/../models/drivers/Employee.php';

class EmployeeController {
    public function registerEmployee() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $baseSalary = $_POST['baseSalary'];
            $commissionPct = $_POST['commissionPct'];

            $employee = new Employee($name, $baseSalary, $commissionPct);
            $employee->save();

            header('Location: /Parcial40/index.php?action=list');
            exit();
        }

        include __DIR__ . '/../views/employees/register.php';
    }

    public function listEmployees() {
        $employees = Employee::getAll();
        include __DIR__ . '/../views/employees/list.php';
    }
}