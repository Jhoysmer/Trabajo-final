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
            <a href="registro.php">Registrarse</a>
            <a href="eliminacion.php">Borrar cuenta</a>
            <a href="modificacion.php">Editar cuenta</a>
        </div>
      </button>
      <div class="profile-menu">
    </div>
  </nav>

<?php if ($isLogged): ?>
    
    <section>
        <h1>Bienvenido, <?php echo $_SESSION['usuario']['nombre']; ?> 👋</h1>
        <a href="../server/logout.php">Cerrar sesión</a>
    </section>

    <section>
        <p>Accede a tus servicios, tu perfil o tus actividades.</p>
        <a href="servicios.php">Ir a Servicios</a>
    </section>

<?php else: ?>
   
    <header>
        <h1>Bienvenido a nuestra plataforma</h1>
        
    
    </header>

    <main>
        <p>Descubre los servicios que ofrecemos. Crea tu cuenta para acceder a más funciones.</p>
    </main>

<?php endif; ?>



<script src="../js/inicio.js"></script>
</body>
</html>
