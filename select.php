<?php
include "conexion.php";


$consulta="select id,nombre,telefono from persona";
$resultado=$conexion->query($consulta);

while($fila=$resultado->fetch_array())
{
	$personas[]=array_map('utf8_encode', $fila);
}

echo json_encode($personas);
$resultado->close();
?>