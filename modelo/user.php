<?php
 

function registrar($name,$petuser,$phone,$email,$dni) {
    $con = include "conexion.php";
    $query = "INSERT INTO usuarios (nombre, petuser, dni, email, telefono) VALUES ('$name', '$petuser', '$dni', '$email', '$phone')";
    $resultado = mysqli_query($con, $query);

    if($resultado){
        return true;
    } else {
        return false;
    }
}
?>