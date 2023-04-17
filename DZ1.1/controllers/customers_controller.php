<?php
class CustomersController {
    public function index() {
        // Fetch all customers from the Customers table
        $customers = Customer::all();

        // Load the view for displaying the customers
        require_once('views/customers/index.php');
    }

    public function show() {
        // Check if an ID is provided in the URL
        if (!isset($_GET['id'])) {
            // Redirect to error page if ID is not provided
            return call('pages', 'error');
        }

        // Fetch customer by ID from the Customers table
        $customer = Customer::find($_GET['id']);

        // Load the view for displaying the customer details
        require_once('views/customer/show.php');
    }
}
?>
