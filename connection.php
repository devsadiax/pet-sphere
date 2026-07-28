<?php
session_start();

$servername = getenv("MYSQLHOST") ?: "localhost";
$dbusername = getenv("MYSQLUSER") ?: "root";
$dbpassword = getenv("MYSQLPASSWORD") ?: "";
$dbname     = getenv("MYSQLDATABASE") ?: "pet_sphere";
$dbport     = getenv("MYSQLPORT") ?: 3306;

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname, $dbport);
$a = mysqli_select_db($conn, $dbname);
/*if($a==true){
    echo "database is connected";
}*/
?>
