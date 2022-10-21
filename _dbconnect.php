<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "users_db";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    
    die("Error".mysqli_connect_error());
}

?>