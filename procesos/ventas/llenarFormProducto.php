<?php 
	
	require_once "conexion/database.php";
	require_once "../../clases/Ventas.php";

	$obj= new ventas();

	echo json_encode($obj->obtenDatosProducto($_POST['idproducto']))

 ?>