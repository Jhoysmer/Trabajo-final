<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="carga.css">
</head>
<body>
    <?php
header("refresh:5;url=sitie/inicio.php");
exit();
?>
<div>
    <div class="loader"></div>
    <p class="loading-text">cargando</p>
    <div class="progress-bar">
    <div class="progress"></div>
    </div>
</div>
<script src="carga.js"><script>
</body>
</html>
