<?php
require_once "../../conexion/database.php";
require_once "../../clases/Usuarios.php";
$obj = new Usuario; // Cambia "usuarios" a "Usuario" con la primera letra en mayúscula

echo json_encode($obj->obtenDatosUsuario($_POST['id_usuario']));
?>
