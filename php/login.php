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
$login = filter_input(INPUT_POST, "username");
$pwd = password_hash($_POST["password"], PASSWORD_DEFAULT );
$mysqli->query("DROP TABLE login_credentials");
$mysqli->query("CREATE TABLE login_credentials ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, password VARCHAR(255) NOT NULL)");
$mysqli->query("INSERT INTO login_credentials (0, 'Sander', '" . password_hash("Test123", PASSWORD_DEFAULT ) ."' )");

$pwd_to_check = $mysqli->query("SELECT password FROM login_credentials WHERE username = $login");
if ($pwd_to_check === FALSE) {
    echo "Unknown user";
} else if ($pwd === $pwd_to_check) {
    echo "Login succesfull!";
} else {
    echo "Wrong password";
}

?>
