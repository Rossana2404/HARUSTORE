<?php 
require_once "conexion/database.php";
require_once "../../clases/Producto.php";

	$obj= new producto();


	$idprod=$_POST['prod'];

	echo json_encode($obj->obtenDatosProducto($prod));

 ?>