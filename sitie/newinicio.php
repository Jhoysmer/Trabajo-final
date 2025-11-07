<?php
session_start(); 

$isLogged = isset($_SESSION['usuario']);

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
            <a href="login.php">Iniciar Sesión</a>
            <a href="eliminacion.php">Borrar cuenta</a>
            <a href="modificacion.php">Editar cuenta</a>
        </div>
      </button>
      <div class="profile-menu">
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
      <th>Contraseña</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php while($row=mysqli_fetch_array($query))?>
    <tr>
    <th><?=$row['id'];?></th>
    <th><?=$row['name'];?></th>
    <th><?=$row['lastname'];?></th>
    <th><?=$row['username'];?></th>
    <th><?=$row['password'];?></th>
    <th><?=$row['email'];?></th>

    <th><a href="">MODIFICAR</a></th>
    <th><a href="">ELIMINAR</a></th>
    </tr>
     <?php endwhile; ?>
  </tbody>
</table>
</div>

<script src="../js/inicio.js"></script>
</body>
</html>
