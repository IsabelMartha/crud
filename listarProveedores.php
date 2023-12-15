<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include_once('conexion.php');

    $sql = "SELECT idProveedor,nombre,apellido,telefono,observaciones
    FROM Proveedor";

    $resultado = $conexion->query($sql);


    // validación para mostrar los datos

    if ($resultado->num_rows > 0) {

        // hay información que mostrar

        while ($row = $resultado->fetch_assoc()) {

            echo "<hr> ID Asociado: " . $row["idProveedor"] . "<br>";
            echo "Nombre Usuario: " . $row["nombre"] . " " . $row["apellido"] . "<br>";
            echo "Teléfono: " . $row["telefono"] . "<br>";
            echo "Observaciones: " . $row["observaciones"] . "<br>";
            echo "<hr>";

        }
    } else {

        echo "Sin información ingresada aún";
    }

    $conexion->close();

    ?>

</body>

</html>