<?php 

session_start();
	require_once "conexion/database.php";
	require_once "clases/Clientes.php";

	$obj= new clientes();


	$datos=array(
			$_POST['idclienteU'],
			$_POST['NombreU'],
			$_POST['apellidoU'],
			$_POST['CorreoU'],
			$_POST['ContrasenaU'],
			$_POST['TelefonoU'],
			$_POST['FechadenacimientoU'],
			$_POST['DireccionU']
				);

	echo $obj->actualizaCliente($datos);
	
 ?>