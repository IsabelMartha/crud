<?php
include_once('conexion.php');

// Obtener el ID del vendedor a eliminar
$idVendedor = $_POST['idVendedor'] ?? '';

// Verificar si se recibió un ID válido
if (!empty($idVendedor)) {
    // Preparar la consulta para eliminar el vendedor con el ID recibido
    $sql = "DELETE FROM Vendedor WHERE idVendedor = $idVendedor";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "Eliminación de registro exitosa";
    } else {
        echo "Error al eliminar el registro: " . $conexion->error;
    }
} else {
    echo "ID de vendedor no válido";
}

$conexion->close();
?>
