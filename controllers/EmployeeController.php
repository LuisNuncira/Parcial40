<?php
class EmployeeController {
    private $employeeModel;

    public function __construct() {
        $this->employeeModel = new Employee();
    }

    public function registerEmployee() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $baseSalary = $_POST['baseSalary'];
            $commissionPct = $_POST['commissionPct'];

            $this->employeeModel->setName($name);
            $this->employeeModel->setBaseSalary($baseSalary);
            $this->employeeModel->setCommissionPct($commissionPct);
            $this->employeeModel->save();
            
            header('Location: /employees/list');
            exit();
        }

        include '../app/views/employees/register.php';
    }

    public function listEmployees() {
        $employees = $this->employeeModel->getAll();
        include '../app/views/employees/list.php';
    }
}
?>