<?php
    $servername = "mysql:3306";
    $username = "sander";
    $password = "$@nd3r";
    $dbname = "homepage";

    try {
        $mysqli = new mysqli($servername, $username, $password, $dbname);
        echo "Connected successfully";
    } catch(mysqli_sql_exception $e) {
        echo "Connection failed: " . $e->getMessage();
    }

?>
