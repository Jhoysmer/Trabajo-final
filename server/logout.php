<?php
session_start();
session_destroy(); // Borra todos los datos de sesión
header("Location: ../site/inicio.php"); // Redirige al inicio
exit;
?>