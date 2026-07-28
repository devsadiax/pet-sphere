<?php
$servername = getenv("MYSQLHOST") ?: "localhost";
$username   = getenv("MYSQLUSER") ?: "root";
$password   = getenv("MYSQLPASSWORD") ?: "";
$dbname     = getenv("MYSQLDATABASE") ?: "pet_sphere";
$dbport     = getenv("MYSQLPORT") ?: 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $dbport);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
