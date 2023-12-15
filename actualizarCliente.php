<?php
include_once('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $idCliente = $_POST['idCliente'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $direccion = $_POST['direccion'] ?? '';

    // Validar que se hayan recibido los datos necesarios
    if (!empty($idCliente) && !empty($telefono) && !empty($direccion)) {
        // Preparar la consulta para actualizar el teléfono del proveedor
        $sql = "UPDATE Cliente SET telefono = '$telefono', direccion = '$direccion' WHERE idCliente = $idCliente";

        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            echo "Registro actualizado correctamente";
        } else {
            echo "Error al actualizar el registro: " . $conexion->error;
        }
    } else {
        echo "Por favor, ingresa el ID del cliente, la nueva direccion  y el nuevo teléfono";
    }
} else {
    echo "Acceso denegado";
}

$conexion->close();
?>
