<?php
session_start();// Inicia la sesión si aún no está iniciada

require_once "../../conexion/database.php";
require_once "../../clases/Categorias.php";

$fecha=date("Y-m-d");
$idusuario=$_SESSION['iduser'];
$categoria=$_POST['categoria'];

$datos=array(
    $idusuario,
    $categoria,
    $fecha
            );

$obj= new categoria();

echo $obj->agregaCategoria($datos);


?>