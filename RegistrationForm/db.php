<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "Practice";
$con = mysqli_connect($sname, $unmae, $password, $db_name);
if (!$con) {
echo "Connection failed!";
}