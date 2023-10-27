<?php 

require_once "../../conexion/database.php";
require_once "../../clases/Usuarios.php";


	$obj= new usuario;

	$datos=array(
			$_POST['id_Usuario'],  
		    $_POST['nombreU'] , 
		    $_POST['apellidoU'],  
		    $_POST['usuarioU']
				);  
	echo $obj->actualizaUsuario($datos);


 ?>