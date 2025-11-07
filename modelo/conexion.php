<?php
/**
 * Función para establecer la conexión a la base de datos.
 *
 * @return mysqli|bool Objeto de conexión MySQLi o false si hay un error.
 */
function conexion() { // <-- Se añade el nombre de la función: 'conexion'
    
    // Credenciales de la Base de Datos
    $server = "localhost";
    $usuario = "root";
    $clave = "";
    $db = "trabajo_final";

    // 1. Establecer la conexión
    // El cuarto parámetro ($db) selecciona la base de datos automáticamente.
    $conexion = mysqli_connect($server, $usuario, $clave, $db);

    // 2. Verificar si la conexión falló
    if (!$conexion) {
        // En un entorno de producción, nunca muestres el error, solo regístralo.
        die("Error de conexión: " . mysqli_connect_error());
    }
    
    // 3. Devolver el objeto de conexión
    return $conexion;
}

// Nota: Si usas este archivo con 'include', 
// puedes llamar a la función en tu script principal así:
// $con = conexion();
?>