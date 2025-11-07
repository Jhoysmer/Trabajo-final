<?php
include("../modelo/conexion.php");
$con = conexion();

$id = null;
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (id, name, lastname, username, password, email) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($stmt, "ssssss", $id, $name, $lastname, $username, $password, $email);
mysqli_stmt_execute($stmt);

if ($query){
    header("Location: ../sitie/newinicio.php");
    exit();
};
?>