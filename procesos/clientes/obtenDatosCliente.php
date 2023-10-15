<?php 

	require_once "Conexion.php";
	require_once "..clases/Clientes.php";

	$obj= new clientes();

	echo json_encode($obj->obtenDatosCliente($_POST['idcliente']));

 ?>