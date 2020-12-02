<?php
require_once 'Conexion.php';

class Rol {
	public $NoSerie;
	public $Precio;
	public $Material;
	public $TipoMueble;
	public $Marca;
	public $Color;

	
	private $conexion;

	public function __construct () {
		$this->NoSerie = 0;
		$this->Precio = '';
		$this->Material = '';
		$this->TipoMueble = '';
		$this->Marca = '';
		$this->Color = '';
		$this->conexion = new Conexion();
	}

	public static function listar () {
		$conexion = new Conexion ();
		$listado = $conexion->consultar('SELECT * FROM articulos');
		$conexion->cerrar();
		return $listado;
	}

	public static function obtenerPorId ($NoSerie) {
		$conexion = new Conexion ();
		$listado = $conexion->consultar("SELECT * FROM articulos WHERE NoSerie = $NoSerie");
		$conexion->cerrar();
		return $listado[0];
	}

	public function ingresar () {
		$s = "INSERT INTO articulos (Precio,Material,TipoMueble,Marca,Color) 
		VALUES ('$this->Precio','$this->Material','$this->TipoMueble','$this->Marca','$this->Color')";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function eliminar () {
		$s = "DELETE FROM articulos WHERE NoSerie = $this->NoSerie";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}

	public function editar () {
		$s = "UPDATE articulos SET Precio = '$this->Precio',Material = '$this->Material',TipoMueble = '$this->TipoMueble',Marca = '$this->Marca',Color = '$this->Color'
		WHERE NoSerie = $this->NoSerie";
		$resultado = $this->conexion->actualizar($s);
		$this->conexion->cerrar();
		return $resultado;
	}
}