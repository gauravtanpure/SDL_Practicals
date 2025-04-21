<?php
// Employee.php - Child Class inheriting from Person
include('Person.php');

class Employee extends Person {
    // Additional property for Employee
    public $jobTitle;

    // Constructor to initialize Employee object
    public function __construct($firstName, $lastName, $jobTitle) {
        // Call the parent constructor
        parent::__construct($firstName, $lastName);
        $this->jobTitle = $jobTitle;
    }

    // Overriding the displayInfo method to include job title
    public function displayInfo() {
        // Call the parent method to display the name
        parent::displayInfo();
        echo "Job Title: " . $this->jobTitle . "<br>";
    }
}
?>
