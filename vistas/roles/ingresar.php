<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Tecnico</title>
</head>
<body>
	<header>
		<h1>Datos de tecnico</h1>
		<h2>Ingresar</h2>
	</header>

	<form action="../../controladores/Roles.php" method="post">
		<input type="text" name="Precio" placeholder="Precio" required autofocus />
		<input type="text" name="Material" placeholder="Material" required autofocus />
		<input type="text" name="TipoMueble" placeholder="TipoMueble" required autofocus />
		<input type="text" name="Marca" placeholder="Marca" required autofocus />
		<input type="text" name="Color" placeholder="Color" required autofocus />

		<a href="index.php" ><button type="submit" >Regresar</button></a>
		<input name="a" type="submit" value="Ingresar" />
	</form>
</body>
</html>