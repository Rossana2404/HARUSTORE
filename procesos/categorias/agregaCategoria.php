<?php
if(isset($_SESSION['usuario'])) // Inicia la sesión si aún no está iniciada

require_once "../../conexion/database.php";
require_once "../../clases/Categorias.php";

if (isset($_SESSION['iduser']) && isset($_POST['categoria'])) {
    $fecha = date("Y-m-d");
    $idusuario = $_SESSION['iduser'];
    $categoria = $_POST['categoria'];

    $datos = array(
        $idusuario,
        $categoria,
        $fecha
    );

    $obj = new Categorias();
    $resultado = $obj->agregaCategoria($datos);

    if ($resultado === true) {
        echo "Categoría agregada con éxito";
    } else {
        echo "Error al agregar la categoría: " . $resultado;
    }
} else {
    echo "Datos insuficientes para agregar la categoría.";
}
?>
