<?php
include 'Usuario.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    $usuario = new Usuario();
    $resultado = $usuario->eliminarUsuario($id);

    if ($resultado) {
        // Redirigir a tabla_usuarios.php después de eliminar
        header("Location: tabla_usuarios.php");
        exit;
    } else {
        echo "Error al eliminar el usuario.";
    }
}
?>
