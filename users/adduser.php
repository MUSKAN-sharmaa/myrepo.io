<?php
include "../required/connection.php";  


if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
         $message1 = "Data submitted successfully!";
        
        header("Location:index.php?message=".$message1);//it shows our data in header
       
    } else {
       echo  "Error: " . $sql . "<br>" . $conn->error;
        
    }


}



include "html/adduser.php";

?>

        
