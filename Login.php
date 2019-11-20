<?php
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="Estilos.css">

</head>
<body>
	<div class="login">
		<img class="logo" src="cdtkd.jpg">
		<h1>Ingresa a CDTKD Pitbulls</h1>
		<form method="post" action="Index.php">
			<!--Username-->
			<label for="username">Usuario</label>
			<input type="text" name="usuario" placeholder="Ingresa usuario">
			<!--Password-->
			<label for="password">Contraseña</label>
			<input type="password" name="contraseña" placeholder="Ingresa contraseña">

			<input type="submit" value="Entrar">
		</form>
	</div>

</body>
</html>
?>

