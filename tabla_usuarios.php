<?php
include 'Usuario.php';

$usuario = new Usuario();
$usuarios = $usuario->listarUsuarios();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
    <meta charset="UTF-8">
    <title>Tabla de Usuarios</title>
</head>
<body>
    <h2>Usuarios Registrados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($usuarios as $u): ?>
            <tr>
                <td><?= $u['id'] ?></td>
                <td><?= $u['nombre'] ?></td>
                <td><?= $u['email'] ?></td>
                <td><?= $u['telefono'] ?></td>
                <td>
                    <a href="formulario_edicion.php?id=<?= $u['id'] ?>">Editar</a>
                    <a href="procesar_eliminar.php?id=<?= $u['id'] ?>">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

      <!-- Enlace para ir a formulario_registro.php -->
      <p><a href="formulario_registro.php">Registrar nuevo usuario</a></p>
</body>
</html>

