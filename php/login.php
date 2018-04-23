<?php
$servername = "mysql:3306";
$username = "sander";
$password = "$@nd3r";

try {
    $conn = new PDO("mysql:host=$servername;dbname=homepage", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>
