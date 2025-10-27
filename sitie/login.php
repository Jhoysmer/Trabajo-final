<!DOCTYPE html> 
<html lang="es"> 
<head> 
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Inicio de Sesión</title> 
  <link rel="stylesheet" href="../css/login.css"/> 
</head> 
<body> 
  <div class="login-container"> 
    <h2>Iniciar Sesión</h2> 
    <form id="loginForm"> 
      <div class="input-group"> 
        <label for="username">Usuario</label> 
        <input type="text" id="username" placeholder="Ingresa tu usuario" required> 
      </div> 
 
      <div class="input-group"> 
        <label for="password">Contraseña</label> 
        <input type="password" id="password" placeholder="Ingresa tu contraseña" required> 
      </div> 
 
      <button type="submit">Entrar</button> 
    </form> 
    <p id="message"></p> 
  </div> 
 
  <script src="login.js"></script> 
</body> 
</html> 
