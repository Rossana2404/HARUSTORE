
<?php
require_once "../../conexion/database.php";
$c = new conectar();
$conexion = $c->conexion();

// Modifica la consulta para seleccionar categorías y subcategorías correspondientes a perros y gatos
        $sql = "SELECT subproductos.id_subprod, subproductos.nombre_producto, categorias.id_categoria, categorias.nombre_categoria
        FROM subproductos
        JOIN categorias ON subproductos.categoria_id = categorias.id_categoria
        ORDER BY categorias.nombre_categoria ASC;";


$result = mysqli_query($conexion, $sql);

if ($result) {
    // La consulta se ejecutó correctamente, puedes continuar con mysqli_fetch_row()
    ?>
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Categorías :D</label></caption>
        <tr>
            <td>Categoría</td>
            <td>subproductos</td>
        </tr>

        <?php
        while ($ver = mysqli_fetch_row($result)):
        ?>

        <tr>
            <td><?php echo $ver[0] ?></td>
            <td><?php echo $ver[1] ?></td>
        </tr>

        <?php endwhile; ?>
    </table>
    <?php
} else {
    // Hubo un error en la consulta, puedes mostrar un mensaje de error
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
