<?php
class Conexion {
    private $host = "localhost";
    private $usuario = "root";
    private $clave = "";
    private $db = "trabajo_final";
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave, $this->db);
        
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
        
        $this->conexion->set_charset("utf8");
    }

    public function getConexion() {
        return $this->conexion;
    }

    public function cerrar() {
        $this->conexion->close();
    }

    public function query($sql) {
        return $this->conexion->query($sql);
    }

    public function prepare($sql) {
        return $this->conexion->prepare($sql);
    }

    public function escape($valor) {
        return $this->conexion->real_escape_string($valor);
    }
}
?>