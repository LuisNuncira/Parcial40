<?php

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
        $stmt = $conn->prepare("INSERT INTO employees (name, base_salary, commission_pct) VALUES (?, ?, ?)");
        $stmt->bind_param("sdd", $this->name, $this->baseSalary, $this->commissionPct);
        return $stmt->execute();
    }

    public static function getAll() {
        $db = new Database();
        $conn = $db->connect();
        $result = $conn->query("SELECT * FROM employees");
        $employees = [];
        while ($row = $result->fetch_assoc()) {
            $employee = new Employee($row['name'], $row['base_salary'], $row['commission_pct']);
            $employee->setId($row['id']);
            $employees[] = $employee;
        }
        return $employees;
    }
}