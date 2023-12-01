<?php
$dbhost = "localhost";
$dbuser = "id21602704_luis";
$dbpass = "Bachilleres19@";
$dbname = "id21602704_guarderia";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexión: ".mysqli_connect_error());
}
/*echo "conectado";*/
?>