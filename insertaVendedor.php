<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Vendedor</title>
</head>
<body>
    <h1>Formulario de Vendedor</h1>
    <form action="insertarVendedor.php" method="post">
        <label for="idVendedor">ID Vendedor:</label><br>
        <input type="text" id="idVendedor" name="idVendedor"><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono"><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido"><br>

        <label for="observaciones">Observaciones:</label><br>
        <input type="text" id="observaciones" name="observaciones"><br>

        <input type="submit" value="Agregar Vendedor">
    </form>
</body>
</html>
