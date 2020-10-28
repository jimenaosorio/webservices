<?php
include "conexion.php";
/*
$nombre=$_GET['nombre'];

$consulta="select * from persona where nombre = '$nombre'";
*/
$idpersona=$_GET['idpersona'];
$consulta="select id,nombre,telefono from persona where id = $idpersona";

$resultado=$conexion->query($consulta);

while($fila=$resultado->fetch_array())
{
	$personas[]=array_map('utf8_encode', $fila);
}

echo json_encode($personas);
$resultado->close();
?>