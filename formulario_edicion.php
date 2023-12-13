<?php
include 'Usuario.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = new Usuario();
    $usuarios = $usuario->listarUsuarios();

    // Buscar el usuario en el array de usuarios
    $usuarioSeleccionado = null;
    foreach ($usuarios as $u) {
        if ($u['id'] == $id) {
            $usuarioSeleccionado = $u;
            break;
        }
    }

    if ($usuarioSeleccionado === null) {
        // Manejar el caso de que no se encuentre el usuario
        echo "Usuario no encontrado.";
        exit;
    }
} else {
    // Manejar el caso de que no se haya proporcionado un ID
    echo "ID de usuario no proporcionado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Edición</title>
</head>
<body>
    <h2>Formulario de Edición</h2>
    <form action="procesar_edicion.php" method="post">
        <input type="hidden" name="id" value="<?= $usuarioSeleccionado['id'] ?>">
        Nombre: <input type="text" name="nombre" value="<?= $usuarioSeleccionado['nombre'] ?>" required><br>
        Email: <input type="email" name="email" value="<?= $usuarioSeleccionado['email'] ?>" required><br>
        Teléfono: <input type="tel" name="telefono" value="<?= $usuarioSeleccionado['telefono'] ?>" required><br>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>

