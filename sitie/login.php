<?php
// 1. CONEXIÓN Y CONSULTA
include("../modelo/conexion.php"); // <-- Error 1: Faltaba ;
$con = conexion();
$sql = "SELECT * FROM users"; // (Es buena práctica dejar espacio: SELECT * FROM)
$query = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/login.css"/>
  <title>Gestión de Usuarios</title>
</head>
<body>

  <div> 
    <form action="agregar_usuario.php" method="POST">
      <h1>Crear usuario</h1>
      <input type="text" name="name" id="name" placeholder="Nombre *" required>
      <input type="text" name="lastname" id="lastname" placeholder="Apellido *" required>
      <input type="text" name="username" id="username" placeholder="Usuario" required>
      <input type="password" name="password" id="password" placeholder="Contraseña" required>
      <input type="email" name="email" id="email" placeholder="Email *" required>

      <input type="submit" value="Agregar usuario">
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
          <th>Email</th>
          <th colspan="2">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row = mysqli_fetch_array($query)): ?>
          <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['lastname'] ?></td>
            <td><?= $row['username'] ?></td>
            <td><?= $row['email'] ?></td>
            
            <td><a href="modificar.php?id=<?= $row['id'] ?>">MODIFICAR</a></td>
            <td><a href="eliminar.php?id=<?= $row['id'] ?>">ELIMINAR</a></td>
          </tr>
        <?php endwhile; ?> </tbody>
    </table>
  </div> 

</body>
</html>