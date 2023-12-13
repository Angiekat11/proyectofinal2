<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <title>Formulario de Registro</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="procesar_registro.php" method="post">
        Nombre: <input type="text" name="nombre" required><br>
        Email: <input type="email" name="email" required><br>
        Teléfono: <input type="tel" name="telefono" required><br>
        <input type="submit" value="Registrar">
    </form>


   <p></p> <a href="tabla_usuarios.php">Ver usuarios Registrados</a></p>
</body>
</html>

