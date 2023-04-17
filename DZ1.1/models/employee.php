<?php
class Employee {
    private $employeeNumber;
    private $lastName;
    private $firstName;

    // Constructor
    public function __construct($employeeNumber, $lastName, $firstName) {
        $this->employeeNumber = $employeeNumber;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
    }

    // Getters and Setters
    public function getEmployeeNumber() {
        return $this->employeeNumber;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function setEmployeeNumber($employeeNumber) {
        $this->employeeNumber = $employeeNumber;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    // Static method to retrieve all employees
    public static function getAll() {
        // Implement database query to retrieve all employees
        // ...

        // Create and return an array of Employee objects
        $employees = array();
        while ($row = $result->fetch_assoc()) {
            $employee = new Employee($row['employeeNumber'], $row['lastName'], $row['firstName']);
            $employees[] = $employee;
        }
        return $employees;
    }

    // Static method to retrieve an employee by ID
    public static function getById($id) {
        // Implement database query to retrieve employee by ID
        // ...

        // If the employee is found, create and return an Employee object
        if ($row = $result->fetch_assoc()) {
            $employee = new Employee($row['employeeNumber'], $row['lastName'], $row['firstName']);
            return $employee;
        } else {
            return null;
        }
    }
}
?>
