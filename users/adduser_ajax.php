<?php
include "../required/connection.php";  

$response['message']= "Error :";
$response['error']= true; 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


        // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

    if ($conn->query($sql) === TRUE) {
         $response['message']= "Data submitted successfully!";
         $response['error']= false;
       // header("Location:index.php?message=".$message1);//it shows our data in header
       
    } else {
        $er= "Error: " . $sql . "<br>" . $conn->error;
        $response['message']= "Data not submitted! :". $er;
        $response['error']= true;
    }


}

echo json_encode($response);


?>

        
