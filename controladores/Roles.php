<?php require_once '../modelos/Rol.php';

$accion = $_POST['a'] ?? $_GET['a'] ?? '';

if ($accion != '') {
	$rol = new Rol();

	switch ($accion) {
		case 'Ingresar':
			$rol->Precio = $_POST['Precio'];
			$rol->Material = $_POST['Material'];
			$rol->TipoMueble = $_POST['TipoMueble'];
			$rol->Marca = $_POST['Marca'];
			$rol->Color = $_POST['Color'];
			$rol->ingresar();
			break;
		case 'Confirmar edicion':
			$rol->NoSerie= base64_decode($_POST['NoSerie']);
			$rol->Precio = $_POST['Precio']; 
			$rol->Material = $_POST['Material'];
			$rol->TipoMueble = $_POST['TipoMueble'];
			$rol->Marca = $_POST['Marca'];
			$rol->Color = $_POST['Color'];



			$rol->editar();
			break;
		case 'elim':
			$rol->NoSerie = base64_decode($_GET['NoSerie']);
			$rol->eliminar();
			break;
	}
}

header('Location: ../vistas/roles');