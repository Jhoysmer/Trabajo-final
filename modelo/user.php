<?php
 

function registrar($name,$user,$pais,$city,$phone,$email,$pass) {
    $con = include "conexion.php";
    $query = "INSERT INTO usuarios (nombre, usuario, pais, ciudad, telefono, email, password) VALUES ('$name', '$user', '$pais', '$city', '$phone', '$email', '$pass')";
    $resultado = mysqli_query($con, $query);

    if($resultado){
        return true;
    } else {
        return false;
    }
}
?>