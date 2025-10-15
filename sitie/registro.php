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
     <input type="text" name="petname" id="petname" placeholder="Nombre de su mascota *" required>
     <input type="text" name="dni" id="dni" placeholder="DNI*" require>
     <input type="tel" name="phone" id="phone" placeholder="Telefono *" required>
     <input type="email" name="email" id="email" placeholder="Email *" required>
     <div class="terms">
      
     </div>
    
     <button type="submit">REGISTRARSE</button>
   </form>
 </div>


 <script>
 
     const name = document.getElementById("name").value;
     const username = document.getElementById("petname").value;
     const country = document.getElementById("dni").value;
     const phone = document.getElementById("phone").value;
     const email = document.getElementById("email").value;
     

     


     alert(` COnsulta exitosa
     \nNombre: ${name}
     \nMascota: ${petnamername}
     \nDNI: ${dni}
     \nTeléfono: ${phone}
     \nEmail: ${email}`);
   
    /*Cuando se registre correctamente hay que hacer que el boton
     con un "if" redireccione al usuario al HTML: tp_F2*/
  </script>
     </script>


</body>
</html>