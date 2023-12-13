<?php
include 'Usuario.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];

    $usuario = new Usuario();
    $resultado = $usuario->insertarUsuario($nombre, $email, $telefono);

    if ($resultado) {
        // Redirige a tabla_usuarios.php después de registrar el usuario
        header("Location: tabla_usuarios.php");
        exit;
    } else {
        echo "Error al registrar el usuario.";
    }
}
?>

