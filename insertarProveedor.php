<?php
include_once('conexion.php');

// Obtener datos del formulario con valores predeterminados si no se envían desde el formulario
$idProveedor = $_POST['idProveedor'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$observaciones = $_POST['observaciones'] ?? '';

// Insertar datos en la tabla 'Proveedor'
$sql = "INSERT INTO Proveedor (idProveedor, Telefono, Nombre, Apellido, Observaciones) 
        VALUES ('$idProveedor', '$telefono', '$nombre', '$apellido', '$observaciones')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro ingresado correctamente.";
} else {
    echo "Error al ingresar el registro: " . $conexion->error;
}

$conexion->close();
?>
