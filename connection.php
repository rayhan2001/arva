<?php 

$host ="localhost";
$usr ="root";
$pass ="";
$db_name ="curd_app";

$connaction =mysqli_connect($host,$usr,$pass,$db_name);
if (!$connaction) {
	die("error".mysqli_connect_error());
}


 ?>
