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
//$pwd = password_hash($_POST["password"], PASSWORD_DEFAULT ); -> For insert
$pwd = $_POST["password"];

if ($mysqli->query("DROP TABLE login_credentials") === FALSE) {
    echo "DROP TABLE failed";
}
if ($mysqli->query("CREATE TABLE login_credentials ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(30) NOT NULL, password VARCHAR(255) NOT NULL)") === FALSE) {
    echo "CREAT TABLE failed";
}
if ($mysqli->query("INSERT INTO login_credentials VALUES (0, 'sander', '" . password_hash("Test123", PASSWORD_DEFAULT ) ."' )") === FALSE) {
    echo "INSERT failed";
}

$result = $mysqli->query("SELECT password FROM login_credentials WHERE username = '" . $login . "'");
$pwd_to_check = $result->fetch_object()->password;
$num_rows = $result->num_rows;

if ($result === FALSE) {
    echo "Unknown error";
} else if ($num_rows != 1) {
    echo "Unknown user";
} else if (password_verify($pwd, $pwd_to_check)) {
    header("Location: content.php");
} else {
    echo "Wrong password";
}

?>
