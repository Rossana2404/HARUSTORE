
<?php
class producto
{
	public function agregaImagen($datos)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$fecha = date('Y-m-d');

		$sql = "INSERT into imagenes (categoria_id,
										nombre,
										ruta,
										fechaSubida)
							values ('$datos[0]',
									'$datos[1]',
									'$datos[2]',
									'$fecha')";
		$result = mysqli_query($conexion, $sql);

		return mysqli_insert_id($conexion);
	}
	public function insertaProducto($datos)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$fecha = date('Y-m-d');

		$sql = "INSERT into producto(categoria_id,
										id_imagen,
										id_usuario,
										nombre,
										descripcion,
										cantidad,
										precio,
										fechaCaptura) 
							values ('$datos[0]',
									'$datos[1]',
									'$datos[2]',
									'$datos[3]',
									'$datos[4]',
									'$datos[5]',
									'$datos[6]',
									'$fecha')";
		return mysqli_query($conexion, $sql);
	}

	public function obtenDatosProducto($idProducto)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "SELECT id_producto, 
						categoria_id, 
						nombre,
						descripcion,
						cantidad,
						precio 
				from producto
				where id_producto='$idProducto'";
		$result = mysqli_query($conexion, $sql);

		$ver = mysqli_fetch_row($result);

		$datos = array(
			"id_producto" => $ver[0],
			"categoria_id" => $ver[1],
			"nombre" => $ver[2],
			"descripcion" => $ver[3],
			"cantidad" => $ver[4],
			"precio" => $ver[5]
		);

		return $datos;
	}

	public function actualizaProducto($datos)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "UPDATE producto set categoria_id='$datos[1]', 
										nombre='$datos[2]',
										descripcion='$datos[3]',
										cantidad='$datos[4]',
										precio='$datos[5]'
						where id_producto='$datos[0]'";

		return mysqli_query($conexion, $sql);
	}

	public function eliminaProducto($idProducto)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$idimagen = self::obtenIdImg($idProducto);

		$sql = "DELETE from producto 
					where id_producto='$idProducto'";
		$result = mysqli_query($conexion, $sql);

		if ($result) {
			$ruta = self::obtenRutaImagen($idimagen);

			$sql = "DELETE from imagenes 
						where id_imagen='$idimagen'";
			$result = mysqli_query($conexion, $sql);
			if ($result) {
				if (unlink($ruta)) {
					return 1;
				}
			}
		}
	}

	public function obtenIdImg($idProducto)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "SELECT id_imagen 
					from producto
					where id_producto='$idProducto'";
		$result = mysqli_query($conexion, $sql);

		return mysqli_fetch_row($result)[0];
	}

	public function obtenRutaImagen($idImg)
	{
		$c = new conectar();
		$conexion = $c->conexion();

		$sql = "SELECT ruta 
					from imagenes 
					where id_imagen='$idImg'";

		$result = mysqli_query($conexion, $sql);

		return mysqli_fetch_row($result)[0];
	}
}

?>