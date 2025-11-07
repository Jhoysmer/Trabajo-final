<?php
include("../modelo/conexion.php")
$con=conexion.php();
$sql="SELECT*FROM users";
$query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/login.css"/>
  <title></title>
</head>
<body>
  <div> 
<form action="Agregar usuario">
  <h1>Crear usuario</h1>
     <input type="text" name="name" id="name" placeholder="Nombre *" required>
     <input type="text" name="lastname" id="lastname" placeholder="Apellido *" required>
     <input type="text" name="username" id="username" placeholder="Usuario" require>
     <input type="tel" name="password" id="password" placeholder="Contraseña" required>
     <input type="email" name="email" id="email" placeholder="Email *" required>

    <input type="submit" value="agregar usuario">
</form>
  </div>
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
    <?php while($row=mysqli_fetch_array($query)):?>
    <tr>
    <th><?=$row['id']?></th>
    <th><?=$row['name']?></th>
    <th><?=$row['lastname']?></th>
    <th><?=$row['username']?></th>
    <th><?=$row['password']?></th>
    <th><?=$row['email']?></th>

    <th><a href="">MODIFICAR</a></th>
    <th><a href="">ELIMINAR</a></th>
    </tr>
     endwhile; 
  </tbody>
</table>
</div> 
</body>
</html>