<?php 

	require_once "conexion/database.php";
	require_once "clases/Clientes.php";

	$obj= new clientes();

	
	echo $obj->eliminaCliente($_POST['idcliente']);
 ?>