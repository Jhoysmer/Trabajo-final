<?php
$nom = $_POST["name"];
$user = $_POST[""];
$pais = $_POST["country"];
$city = $_POST["city"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$pass = $_POST["password"];


 $con = include "../modelo/user.php";
if (registrar($nom,$user,$pais,$city,$phone,$email,$pass)) {
	header('Location: ../sitie/inicio2.php');
	exit();
} else {
	echo "Error en el registro";
}
?>
