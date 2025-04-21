<?php
// index.php - Main file to demonstrate inheritance

// Include the Employee class which also includes Person class
include('Employee.php');

// Create an Employee object
$employee = new Employee("John", "Doe", "Software Engineer");

// Display the full information using the displayInfo method of the Employee class
echo "<h2>Employee Information:</h2>";
$employee->displayInfo();
?>
