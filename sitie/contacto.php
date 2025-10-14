<!DOCTYPE html>
<html lang="es">
<head>
  <img src="Avatar-Usuario.png" alt="Avatar" style="width:300px; height:auto; margin-top:10px;">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pantalla de contacto</title>
  <link rel="stylesheet" href="..css/contacto.css">
</head>
<body>

  <div class="register-container">
   
    <form id="registerForm" method="POST" action="../server/contacto.php">
      <input type="text" name="name" id="name" placeholder="Nombre *" required>
      <input type="tel" name="phone" id="phone" placeholder="Telefono *" required>
      <input type="email" name="email" id="email" placeholder="Email *" required>
      <input type="email" id="confirmEmail" placeholder="Confirmar email *" required>
     
      <div class="terms">
        <input type="checkbox" id="terms">
        <label for="terms">Acepto términos y condiciones</label>
      </div>
     
      <button type="submit">Enviar consulta</button>
    </form>
  </div>


  <script>
  
      const name = document.getElementById("name").value;
      const phone = document.getElementById("phone").value;
      const email = document.getElementById("email").value;
      const confirmEmail = document.getElementById("confirmEmail").value;
      const terms = document.getElementById("terms").checked;


      if(email !== confirmEmail){
        alert("Los emails no coinciden");
        return;
      }


      alert(` Mensaje eviado con exito
      \nNombre: ${name}
      \nTeléfono: ${phone}
      \nEmail: ${email}
      \nAceptó términos: ${terms ? "Sí" : "No"}`);
    
     </script>


</body>
</html>
