<?php
session_start(); 

// --- 1. Lógica de Sesión ---
// Determinar si el usuario ha iniciado sesión
$isLogged = isset($_SESSION['usuario']);

// --- 2. Lógica de Conexión a DB (código FALTANTE, asumiendo que lo incluirás) ---
// **DEBES DESCOMENTAR Y AJUSTAR ESTO**
/*
include("../modelo/conexion.php"); 
$con = conexion(); // Asumiendo que esta función está definida y funciona
$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
*/

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de inicio</title>
    <link rel="stylesheet" href="../css/inicio.css">
</head>
<body style="background-image: url('../SRC/newfondo.png'); background-size: cover; background-position: center">
  
<nav class="navbar">
    <div class="container nav-container">
        <img src="../SRC/vetex.png" alt="Logo de tu empresa" width="100" height="100">
        <ul class="nav-links">
            <li><a href="newinicio.php">Inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li><a href="contacto-formulario.php">Contacto - Formulario</a></li>
        </ul>
        
        <button class="profile-icon" onclick="mostrarBotonesRegistro(event)" aria-label="Menú de perfil">👤</button>
        
        <div class="dropdown" id="dropdown-menu">
            <?php if ($isLogged): ?>
                <a href="modificacion.php">Editar cuenta</a>
                <a href="eliminacion.php">Borrar cuenta</a>
                <a href="logout.php">Cerrar Sesión</a> 
            <?php else: ?>
                <a href="login.php">Iniciar Sesión</a>
                <a href="registro.php">Registrarse</a> 
            <?php endif; ?>
        </div>
        
    </div>
</nav>

<div>
    <table>
        <h2>Usuarios registrados</h2>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Usuario</th>
                <th>Email</th>
                <th colspan="2">Acciones</th> </tr>
        </thead>
        <tbody>
            <?php 
            // Usar un if para asegurar que $query existe (si no se incluyó la conexión)
            if (isset($query) && $query):
                while($row = mysqli_fetch_array($query)): 
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['lastname'] ?></td>
                    <td><?= $row['username'] ?></td>
                    <td><?= $row['email'] ?></td>

                    <td><a href="modificacion.php?id=<?= $row['id'] ?>">MODIFICAR</a></td>
                    <td><a href="eliminacion.php?id=<?= $row['id'] ?>">ELIMINAR</a></td>
                </tr>
            <?php 
                endwhile; 
            endif;
            ?>
        </tbody>
    </table>
</div>

<script src="../js/inicio.js"></script>
</body>
</html>