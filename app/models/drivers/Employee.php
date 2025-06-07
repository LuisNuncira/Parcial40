<?php
require_once __DIR__ . '/Database.php';

class Employee {
    private $id;
    private $name;
    private $baseSalary;
    private $commissionPct;

    public function __construct($name, $baseSalary, $commissionPct) {
        $this->name = $name;
        $this->baseSalary = $baseSalary;
        $this->commissionPct = $commissionPct;
    }

    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getName() {
        return $this->name;
    }
    public function getBaseSalary() {
        return $this->baseSalary;
    }
    public function getCommissionPct() {
        return $this->commissionPct;
    }
    public function calculateTotalSalary() {
        return $this->baseSalary + ($this->baseSalary * $this->commissionPct / 100);
    }

    public function save() {
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO empleados (nombre, salario_base, comision_pct) VALUES (?, ?, ?)");
        return $stmt->execute([$this->name, $this->baseSalary, $this->commissionPct]);
    }

    public static function getAll() {
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->query("SELECT * FROM empleados");
        $employees = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $employee = new Employee($row['nombre'], $row['salario_base'], $row['comision_pct']);
            $employee->setId($row['id']);
            $employees[] = $employee;
        }
        return $employees;
    }
}