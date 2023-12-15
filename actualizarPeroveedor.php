<?php
include_once('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $idProveedor = $_POST['idProveedor'] ?? '';
    $telefono = $_POST['telefono'] ?? '';

    // Validar que se hayan recibido los datos necesarios
    if (!empty($idProveedor) && !empty($telefono)) {
        // Preparar la consulta para actualizar el teléfono del proveedor
        $sql = "UPDATE Proveedor SET telefono = '$telefono' WHERE idProveedor = $idProveedor";

        // Ejecutar la consulta
        if ($conexion->query($sql) === TRUE) {
            echo "Registro actualizado correctamente";
        } else {
            echo "Error al actualizar el registro: " . $conexion->error;
        }
    } else {
        echo "Por favor, ingresa el ID del proveedor y el nuevo teléfono";
    }
} else {
    echo "Acceso denegado";
}

$conexion->close();
?>
