<?php 
	require_once "conexion/database.php";
	require_once "../../clases/Categorias.php";
	$id=$_POST['idcategoria'];

	$obj= new categoria();
	echo $obj->eliminaCategoria($id);

 ?>