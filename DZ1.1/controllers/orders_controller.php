<?php
class OrdersController {
    public function index() {
        // Fetch all orders from the Orders table
        $orders = Orders::all();

        // Load the view for displaying the orders
        require_once('views/orders/index.php');
    }

    public function show() {
        // Check if an ID is provided in the URL
        if (!isset($_GET['id'])) {
            // Redirect to error page if ID is not provided
            return call('pages', 'error');
        }

        // Fetch customer by ID from the Orders table
        $order = Orders::find($_GET['id']);

        // Load the view for displaying the order details
        require_once('views/order/show.php');
    }
}
?>
