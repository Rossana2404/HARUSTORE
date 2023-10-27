<?php 

	require_once "../../conexion/database.php";
	require_once "../../Clientes.php";

	$obj= new clientes();

	echo json_encode($obj->obtenDatosCliente($_POST['idcliente']));

 ?>