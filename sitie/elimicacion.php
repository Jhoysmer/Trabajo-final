<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div class="form">
	<h3 class="bajaTitulo" style="text-align: center;">FORMULARIO DE BAJA</h3>
	<form class="bajaInput" action="../server/.php" method="POST">
		<div class="grupoInputs">
			<label for="userName">Seleccione un nombre de usuario:</label>
			<div class="container-select">
				<?php
				include("../modelo/user.php");
				echo ('');
				?>
				<div id="modal" class=""></div>
			</div>
		</div>

		<div class="btn-baja">
			<input type="submit" value="Eliminar"><br>
		</div>
	</form>
</div>
<script> </script>
</body>
</html>