<?php
// Database connection variables
$servername = "localhost:3306";
$username = "root"; // Default XAMPP username
$password = "30Labcut1:30"; // Default XAMPP password (empty)
$dbname = "Studentform"; // Database name

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 

?>
