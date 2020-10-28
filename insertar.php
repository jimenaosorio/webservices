<?php
include "conexion.php";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];

$consulta = "insert into persona(nombre,telefono) values('".$nombre."','".$telefono."')";

mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));
mysqli_close($conexion);

?>
