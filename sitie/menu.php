<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";

    if ($conexion->query($sql) === TRUE) {
        echo "Cuenta borrada correctamente.";
        header("Location: lista_usuarios.php");
        exit();
    } else {
        echo "Error al borrar la cuenta: " . $conexion->error;
    }
} else {
    echo "ID no especificado.";
}
?>