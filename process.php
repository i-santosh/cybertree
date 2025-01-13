<?php

include ("dbconnect.php");

if (isset($_POST["submit"])) {


    $username= $_POST["name"];
    $contact= $_POST["phone"];
    $email= $_POST["email"];
    $message= $_POST["messages"];

    $sql = "INSERT INTO userdetails( username,contact,email,message) Values('$username','$contact','$email','$message') ";



    if (mysqli_query($conn, $sql)) {
        echo '<script>alert("new record inserted")</script>';
    
    echo '<script>window.open('index.php','_self')</script>';
    }
    
        else {  echo "error";
            mysqli_close(($conn));
        }

}

    
    ?>