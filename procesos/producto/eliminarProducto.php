<?php 
require_once "conexion/database.php";
require_once "clases/Producto.php";

$idprod=$_POST['idProducto'];

	$obj=new producto();

	echo $obj->eliminaProducto($idprod);

 ?>