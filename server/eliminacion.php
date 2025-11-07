<?php
    include("../modelo/conexion.php");
    $con = conexion();

    $id = $_GET['id'];
    
    $sql = "DELETE FROM usuarios WHERE id=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    
    if ($query){
        header("Location: ../sitie/newinicio.php");
        exit();
    };
?>