<?php 

require_once "conexion/database.php";
require_once "clases/Producto.php";

$obj= new producto();

$datos=array(
		$_POST['idProducto'],
	    $_POST['descripcionU'],
	    $_POST['nombreU'],
	    $_POST['fotoU'],
	    $_POST['valorU'],
	    $_POST['codigoU'],
		$_POST['dimensionesU'],
	    $_POST['ofertaU'],
	    $_POST['promocionU'],
	    $_POST['tallaU'],
	    $_POST['colorU'],
		$_POST['categoriaU'],
	    
			);

    echo $obj->actualizaProducto($datos);

 ?>