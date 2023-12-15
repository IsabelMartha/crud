<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Clientes</title>
</head>
<body>
    <h1>Formulario de Clientes</h1>
    <form action="insertarCliente.php" method="post">
        <label for="idCliente">ID Cliente</label><br>
        <input type="text" id="idCliente" name="idCliente"><br>

        <label for="telefono">Teléfono:</label><br>
        <input type="text" id="telefono" name="telefono"><br>

        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>

        <label for="apellido">Apellido:</label><br>
        <input type="text" id="apellido" name="apellido"><br>

        <label for="direccion">Direccion</label><br>
        <input type="text" id="direccion" name="direccion"><br>

        <input type="submit" value="Agregar Cliente">
    </form>
</body>
</html>

