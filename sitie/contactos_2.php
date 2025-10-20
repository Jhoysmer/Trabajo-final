<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Formulario</title>
    <link rel="stylesheet" href="tp_F.css"/>
    
</head>
<body>
<nav class="navbar">
    <div class="container nav-container">
<img src="../SRC/vetex.png" alt="Logo de tu empresa" width="100" height="100">
<h4>Cuidamos la vida de tu mascota con 
    responsabilidad y dedicacion</h4>
      <ul class="nav-links">
        <li><a href="#">Inicio</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="Contactos_2.php">Contacto - Formulario</a></li>
      </ul>
      <button class="nav-toggle" aria-label="Abrir menú">
        ☰
      </button>
  </nav>
<script src="../js/menu.js"></script>
<script src="contactos.js">
    /*Crear JS de contactos para las conecciones entre los HTML´s (tp_F y tp_F2) y el Contactos.js*/
</script>
<script>
    document.getElementById("registerForm").addEventListener("submit", function(e){
      e.preventDefault();

      const Telefono = document.getElementById("Telefono").value;
      const Whatsapp = document.getElementById("Whatsapp").value;
    });
    /*Arreglar esta seccion*/
      </script>
</body>
</html>