
       <!-- Welcome <?php echo $_POST["name"];?><br>
        Your email address is: <?php echo $_POST["email"];?><br>
        Your Contact number is: <?php echo $_POST["phone"];?><br>-->
        <?php
        include "connection.php";
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

if($name && $email && $phone){
    echo"Data submitted successfully!";
}
else{
    echo"Error: Please fill the form";
}
?>

        
