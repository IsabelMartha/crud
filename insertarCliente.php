<?php
include_once('conexion.php');

// Obtener datos del formulario con valores predeterminados si no se envían desde el formulario
$idCliente = $_POST['idCliente'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$direccion = $_POST['direccion'] ?? '';

// Insertar datos en la tabla 'Proveedor'
$sql = "INSERT INTO cliente (idCliente, Telefono, Nombre, Apellido, Direccion) 
        VALUES ('$idCliente', '$telefono', '$nombre', '$apellido', '$direccion')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro ingresado correctamente.";
} else {
    echo "Error al ingresar el registro: " . $conexion->error;
}

$conexion->close();
?>
