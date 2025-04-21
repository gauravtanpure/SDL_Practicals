<?php
// Person.php - Parent Class
class Person {
    // Properties
    public $firstName;
    public $lastName;
    
    // Constructor to initialize the Person object
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // Method to get full name
    public function getFullName() {
        return $this->firstName . " " . $this->lastName;
    }
    
    // Method to display basic information
    public function displayInfo() {
        echo "Full Name: " . $this->getFullName() . "<br>";
    }
}
?>
