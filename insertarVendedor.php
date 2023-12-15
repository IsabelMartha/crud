<?php
include_once('conexion.php');

// Obtener datos del formulario con valores predeterminados si no se envían desde el formulario
$idVendedor = $_POST['idVendedor'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$nombre = $_POST['nombre'] ?? '';
$apellido = $_POST['apellido'] ?? '';
$observaciones = $_POST['observaciones'] ?? '';

// Insertar datos en la tabla 'Vendedor'
$sql = "INSERT INTO Vendedor (idVendedor, Telefono, Nombre, Apellido, Observaciones) 
        VALUES ('$idVendedor', '$telefono', '$nombre', '$apellido', '$observaciones')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro ingresado correctamente.";
} else {
    echo "Error al ingresar el registro: " . $conexion->error;
}

$conexion->close();
?>
