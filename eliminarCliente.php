<?php
include_once('conexion.php');

// Obtener el ID del proveedor a eliminar
$idCliente = $_POST['idCliente'] ?? '';

// Verificar si se recibió un ID válido
if (!empty($idCliente)) {
    // Preparar la consulta para eliminar el proveedor con el ID recibido
    $sql = "DELETE FROM Cliente WHERE idCliente = $idCliente";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Eliminación de registro exitosa";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
} else {
    echo "ID de Cliente no válido";
}

$conexion->close();
?>
