<?php
$name = $_POST["name"];
$petuser = $_POST["petuser"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$dni = $_POST["dni"];


 $con = include "../modelo/user.php";
if (registrar($name,$petuser,$phone,$email,$dni)) {
	header('Location: ../sitie/newinicio.php');
	exit();
} else {
	echo "Error en el registro";
}
?>
