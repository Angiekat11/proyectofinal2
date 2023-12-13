<?php
include 'conexion.php';

class Usuario {
    private $conexion;

    public function __construct(){
        $this->conexion = new Conexion();
    }

    public function insertarUsuario($nombre, $email, $telefono){
        $query = "INSERT INTO usuarios (nombre, email, telefono) VALUES ('$nombre', '$email', '$telefono')";
        $resultado = $this->conexion->conn->query($query);
        return $resultado;
    }

    public function modificarUsuario($id, $nombre, $email, $telefono){
        $query = "UPDATE usuarios SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id=$id";
        $resultado = $this->conexion->conn->query($query);
        return $resultado;
    }

    public function listarUsuarios(){
        $query = "SELECT * FROM usuarios";
        $resultado = $this->conexion->conn->query($query);
        $usuarios = array();
        while($fila = $resultado->fetch_assoc()){
            $usuarios[] = $fila;
        }
        return $usuarios;
    }

    public function eliminarUsuario($id){
        $query = "DELETE FROM usuarios WHERE id=$id";
        $resultado = $this->conexion->conn->query($query);
        return $resultado;
    }
}
?>
