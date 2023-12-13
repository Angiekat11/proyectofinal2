<?php
include 'Usuario.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    $usuario = new Usuario();
    $resultado = $usuario->modificarUsuario($id, $nombre, $email, $telefono);

    if ($resultado) {
        // Redirige al usuario a tabla_usuarios.php después de editar exitosamente
        header("Location: tabla_usuarios.php");
        exit;
    } else {
        echo "Error al actualizar el usuario.";
    }
}
?>
