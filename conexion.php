<?php
$servidor   = 'localhost';
$usuario    = 'root';
$contrasena = '';
$bd = 'lore';

// se crea la conexión
$conexion = new mysqli($servidor, $usuario, $contrasena, $bd);

// se valida la conexión

if ($conexion->connect_error) {

    die('Huboo un fallo en la conexión ' . $conexion->connect_error);
};
