<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Datos del Cliente</title>
</head>
<body>
    <h1>Actualizar Datos del Cliente</h1>
    <form action="actualizarCliente.php" method="post">
        <label for="idCliente">ID Cliente:</label><br>
        <input type="text" id="idCliente" name="idCliente"><br>

        <label for="telefono">Nuevo Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono"><br>

        <label for="direccion">Nueva Direccion</label><br>
        <input type="text" id="direccion" name="direccion"><br>

        <input type="submit" value="Actualizar Teléfono">
    </form>
</body>
</html>