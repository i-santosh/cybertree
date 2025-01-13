<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybertree";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {



die("error in connecting". $conn->connect_error);

}
else{

    echo "db connected";
    }?>