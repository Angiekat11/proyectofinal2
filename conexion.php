<?php
class Conexion {
    private $host = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $bd = "taller_db";
    public $conn;

    public function __construct(){
        $this->conn = new mysqli($this->host, $this->usuario, $this->clave, $this->bd);
        if($this->conn->connect_error){
            die("Error de conexión: " . $this->conn->connect_error);
        }
    }
}
?>
