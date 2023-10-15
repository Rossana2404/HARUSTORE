<?php 
	require_once "conexion/database.php";
	require_once "cl";
	$id=$_POST['idcategoria'];

	$obj= new categorias();
	echo $obj->eliminaCategoria($id);

 ?>