<?php
$conexion =  mysqli_connect('localhost', 'root', 'admin');
mysqli_set_charset('utf8',$conexion);
if (!$conexion) {
    die('No pudo conectarse: ' . mysqli_error());
}

$conexion_base = mysqli_select_db($conexion,'company');

//Verificando que la conexión se haya hecho a la BD
if (!$conexion_base) {
    die ('No se encuentra la base de datos seleccionada : ' . mysqli_error());
    
}

?>
