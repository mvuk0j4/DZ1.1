<?php
class EmployeesController {
    public function index() {
        // Fetch all employees from the Employees table
        $employees = Employee::all();

        // Load the view for displaying the employees
        require_once('views/employees/index.php');
    }

    public function show() {
        // Check if an ID is provided in the URL
        if (!isset($_GET['id'])) {
            // Redirect to error page if ID is not provided
            return call('pages', 'error');
        }

        // Fetch customer by ID from the Employees table
        $employee = Employee::find($_GET['id']);

        // Load the view for displaying the employee details
        require_once('views/employee/show.php');
    }
}
?>
