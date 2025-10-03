<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pantalla de Login</title>
  <link rel="stylesheet" href="../css/ingreso.css"/>
</head>
<body>
<body>
<nav class="navbar">
    <div class="container nav-container">
<img src="../SRC/vetex.png" alt="Logo de tu empresa" width="100" height="100">
      <ul class="nav-links">
        <li><a href="#">Inicio</a></li>
        <li><a href="../nosotros.php">Nosotros</a></li>
        <li><a href="Contactos_2.php">Contacto - Formulario</a></li>
       </ul>
      <button class="nav-toggle" aria-label="Abrir menú">
        ☰
      </button>
      <div class="profile-menu">
  <button class="profile-icon" aria-label="Menú de perfil">👤</button>
  <div class="dropdown" id="dropdown-menu">
    <a href="Ingresar.php">Iniciar Sesión</a>
    <a href="registrarse.php">Registrarse</a>
  </div>
</div>
    </div>
  </nav>

  <div class="login-container">
      <img src="Avatar-Usuario.png" alt="Avatar" style="width:300px; height:auto; margin-top:40px;">

    <form id="loginForm">
      <input type="email" id="email" placeholder="Email ID" required>
      <input type="password" id="password" placeholder="contraseña" required>
      
      <div class="login-options">
        <label><input type="checkbox" id="remember"> Recordar</label>
        <a href="#">Olvidaste la contraseña?</a>
      </div>

      <button type="submit">Acceder</button>
    </form>
  </div>

  <script>
    document.getElementById("loginForm").addEventListener("submit", function(e){
      e.preventDefault();

      const email = document.getElementById("email").value;
      const password = document.getElementById("contraseña").value;
      const remember = document.getElementById("recordarme").checked;

      alert(`Email: ${email}\nContraseña: ${password}\nRecordarme: ${remember}`);
    });
    /*Cuando se inicie sesión correctamente hay que hacer que el boton
     con un "if" redireccione al usuario al HTML: tp_F2*/
  </script>

</body>
</html>