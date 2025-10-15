<!DOCTYPE html>
<html lang="es">
<head>
<img src="Avatar-Usuario.png" alt="Avatar" style="width:300px; height:auto; margin-top:10px;">
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Pantalla de Registro</title>
 <link rel="stylesheet" href="..css/registro.css">
</head>
<body>

 <div class="register-container">
  
   <form id="registerForm" method="POST" action="../server/registro.php">
     <input type="text" name="name" id="name" placeholder="Nombre *" required>
     <input type="text" name="username" id="username" placeholder="Nombre de Usuario *" required>
     <input type="text" name="country" id="country" placeholder="Pais">
     <input type="text" name="city" id="city" placeholder="Ciudad">
     <input type="tel" name="phone" id="phone" placeholder="Telefono *" required>
     <input type="email" name="email" id="email" placeholder="Email *" required>
     <input type="password" name="password" id="password" placeholder="Contraseña *" required>
     <input type="password" id="confirmPassword" placeholder="Confirmar contraseña *" required>
    
     <div class="terms">
       <input type="checkbox" id="terms">
       <label for="terms">Acepto términos y condiciones</label>
     </div>
    
     <button type="submit">REGISTRARSE</button>
   </form>
 </div>


 <script>
 
     const name = document.getElementById("name").value;
     const username = document.getElementById("username").value;
     const country = document.getElementById("country").value;
     const city = document.getElementById("city").value;
     const phone = document.getElementById("phone").value;
     const email = document.getElementById("email").value;
     const password = document.getElementById("password").value;
     const confirmPassword = document.getElementById("confirmPassword").value;
     const terms = document.getElementById("terms").checked;


     if(password !== confirmPassword){
       alert(" Las contraseñas no coinciden");
       return;
     }


     alert(` Registro exitoso
     \nNombre: ${name}
     \nUsuario: ${username}
     \nPaís: ${country}
     \nCiudad: ${city}
     \nTeléfono: ${phone}
     \nEmail: ${email}
     \nAceptó términos: ${terms ? "Sí" : "No"}`);
   
    /*Cuando se registre correctamente hay que hacer que el boton
     con un "if" redireccione al usuario al HTML: tp_F2*/
  </script>
     </script>


</body>
</html>