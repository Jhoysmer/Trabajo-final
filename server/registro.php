<?php
$nom = $_POST["name"];
$user = $_POST["username"];
$pais = $_POST["country"];
$city = $_POST["city"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$pass = $_POST["password"];


 $con = include "../modelo/user.php";
echo registrar($nom,$user,$pais,$city,$phone,$email,$pass);
echo "Registro exitoso";
?>
