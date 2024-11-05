<?php
        include "../required/connection.php";
        if(isset($_GET['message']))
        {
            $message =$_GET["message"];
        }
        else{
            $message="";
        }

 $sql = "SELECT * from  users";

 $res =$conn->query($sql) ;





include "html/index.php";



?>