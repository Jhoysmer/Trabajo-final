<?php
 

function registrar($name,$petuser,$phone,$email,$dni) {
    $con = include "conexion.php";
    $query = "INSERT INTO usuarios (nombre, mascota, telefono, email, dni) VALUES ('$name', '$user', '$phone', '$email', '$dni')";
    $resultado = mysqli_query($con, $query);

    if($resultado){
        return true;
    } else {
        return false;
    }
}
?>