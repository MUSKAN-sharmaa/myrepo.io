<?php
include "../required/connection.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
   
  
  
  
  /*  $stmt = $conn->prepare("update * users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $res = $stmt->get_res();
    $user = $res->fetch_assoc();*/
}

if(isset($_POST['submit'])){


    // Collect form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Insert data into the database
$sql = "update users set name='$name', email='$email', phone='$phone' where id=$id";

if ($conn->query($sql) === TRUE) {
    $message1= "Data updated successfully!";
    header("Location:index.php?message=".$message1);//it shows our data in header
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


}else{
    $sql = "SELECT * from  users where id =$id";

 $res =$conn->query($sql) ;
  
 $row=$res->fetch_assoc();
}




include "html/edituser.php";

?>
