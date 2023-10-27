<?php
require_once "../../conexion/database.php";
require_once "../../clases/Categorias.php";

if (isset($_POST['idcategoria']) && isset($_POST['categoriaU'])) {
    $idCategoria = $_POST['idcategoria'];
    $categoriaNueva = $_POST['categoriaU'];
    
    $obj = new Categoria();
    $datos = array($idCategoria, $categoriaNueva);
    
    $resultado = $obj->actualizaCategoria($datos);
    
    if ($resultado === true) {
        echo "Categoría actualizada con éxito";
    } else {
        echo "Error al actualizar la categoría: " . $resultado;
    }
} else {
    echo "Datos insuficientes para actualizar la categoría.";
}
?>
