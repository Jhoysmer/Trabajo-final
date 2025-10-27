<?php
session_start();
session_destroy(); // Borra todos los datos de sesión
header("Location: ../site/newinicio.php"); // Redirige al inicio
exit;
?>