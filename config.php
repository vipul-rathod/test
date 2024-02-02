<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dog_license";
$table = "applicants";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_errno){
    echo "Error: " . $conn->connect_error;
}

?>