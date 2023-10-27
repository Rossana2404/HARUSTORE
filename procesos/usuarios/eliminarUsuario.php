<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Usuarios.php";

	$obj= new usuario;

	echo $obj->eliminaUsuario($_POST['idusuario']);

 ?>