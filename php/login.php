<?php
$servername = "mysql:3306";
$username = "sander";
$password = "$@nd3r";
$dbname = "homepage";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    $result = $conn->query("SHOW DATABASES");
    echo $result;
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
