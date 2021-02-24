<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "suivi_dsn";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}