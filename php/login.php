<?php
$servername = "mysql";
$serverport = 3306;
$username = "sander";
$password = "$@nd3r";
$dbname = "homepage";

$mysqli = new mysqli($servername, $username, $password, $dbname, $serverport);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

echo $mysqli->host_info . "\n";
?>
