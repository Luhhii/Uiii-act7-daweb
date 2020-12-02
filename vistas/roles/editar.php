<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['NoSerie']));
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Tecnico</title>
</head>
<body>
	<header>
		<h1>Datos de tecnico</h1>
		<h2>Editar</h2>
	</header>
	<form action="../../controladores/Roles.php" method="post">
		<input type="hidden" name="NoSerie" value="<?= $_GET['NoSerie'] ?>" />
		<input name="Precio" placeholder="Precio" value="<?= $rol[1] ?>" required autofocus />
		<input name="Material" placeholder="Material" value="<?= $rol[2] ?>" required autofocus />
		<input name="TipoMueble" placeholder="TipoMueble" value="<?= $rol[3] ?>" required autofocus />
		<input name="Marca" placeholder="Marca" value="<?= $rol[4] ?>" required autofocus />
		<input name="Color" placeholder="Color" value="<?= $rol[5] ?>" required autofocus />
		<a href="index.php"><input name="Regresar" type="submit" value="Regresar"/></a>
		<input name="a" type="submit" value="Confirmar edicion" />
	</form>
</body>
</html>