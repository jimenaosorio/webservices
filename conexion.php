<?php
$hostname="localhost";
$database="agenda";
$user="agenda";
$pass="agenda1234";

$conexion=new mysqli($hostname,$user,$pass,$database);
if($conexion->connect_errno){
	echo "Error de conexion";
}


?>
