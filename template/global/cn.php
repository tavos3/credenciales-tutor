<?php
$db_host = "localhost";
$db_name = "colmextu_qrtutores";
$db_user = "colmextu_qrtutores";
$db_pass = "qrtutores2022*+";

define('DB_SERVER',$db_host);
define('DB_USER',$db_user);
define('DB_PASS',$db_pass);
define('DB_NAME',$db_name);
// Create connection
$mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
    $mysqli->close();
}
//echo "Connected successfully";
?>