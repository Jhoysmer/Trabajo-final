<?php
include("../modelo/conexion.php");
$con = conexion();

$id=$_GET['id'];

$sql = "SELECT * FROM usuarios WHERE id=$id";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form action="modificacion.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="<?php echo $row['name']; ?>" required>
        <label for="lastname">Apellido:</label>
        <input type="text" name="lastname" id="lastname" value="<?php echo $row['lastname']; ?>" required>
        <label for="username">Usuario:</label>
        <input type="text" name="username" id="username" value="<?php echo $row['username']; ?>">
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" value="<?php echo $row['password']; ?>">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo $row['email']; ?>" required>
        <input type="submit" value="Actualizar">
    </form>
</body>
</html>