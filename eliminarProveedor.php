<?php
include_once('conexion.php');

// Obtener el ID del proveedor a eliminar
$idProveedor = $_POST['idProveedor'] ?? '';

// Verificar si se recibió un ID válido
if (!empty($idProveedor)) {
    // Preparar la consulta para eliminar el proveedor con el ID recibido
    $sql = "DELETE FROM Proveedor WHERE idProveedor = $idProveedor";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Eliminación de registro exitosa";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
} else {
    echo "ID de proveedor no válido";
}

$conexion->close();
?>
