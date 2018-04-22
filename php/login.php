<?php
$servername = "127.0.0.1:3306";
$username = "sander";
$password = "sander";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>