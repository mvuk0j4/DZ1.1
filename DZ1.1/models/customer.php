<?php
class Customer {
    private $customerNumber;
    private $customerName;
    private $contactLastName;

    // Constructor
    public function __construct($customerNumber, $customerName, $contactLastName) {
        $this->customerNumber = $customerNumber;
        $this->customerName = $customerName;
        $this->contactLastName = $contactLastName;
    }

    // Getters and Setters
    public function getCustomerNumber() {
        return $this->customerNumber;
    }

    public function getCustomerName() {
        return $this->customerName;
    }

    public function getContactLastName() {
        return $this->contactLastName;
    }

    // Static method to create a new customer
    public static function create($customerNumber, $customerName, $contactLastName) {
        // Perform basic data validation
        if (empty($customerNumber) || empty($customerName) || empty($contactLastName)) {
            throw new Exception("All fields are required.");
        }

        // Implement database query to insert new customer into the database
        // ...

        // Create and return a new Customer object
        return new Customer($customerNumber, $customerName, $contactLastName);
    }
}

?>
