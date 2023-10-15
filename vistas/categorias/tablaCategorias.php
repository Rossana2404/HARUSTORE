
<?php
require_once "../../conexion/database.php";
$c = new conectar();
$conexion = $c->conexion();

// Modifica la consulta para seleccionar categorías y subcategorías correspondientes a perros y gatos
$sql = "SELECT c.nombre_categoria, c.nombre_subcategoria
        FROM categorias c
        JOIN animales_categoria ac ON c.id_categoria = ac.id_categoria
        WHERE ac.id_animal = (SELECT id_animal FROM animales WHERE nombre_animal = 'perros' OR nombre_animal = 'gatos')";

$result = mysqli_query($conexion, $sql);

if ($result) {
    // La consulta se ejecutó correctamente, puedes continuar con mysqli_fetch_row()
    ?>
    <table class="table table-hover table-condensed table-bordered" style="text-align: center;">
        <caption><label>Categorías :D</label></caption>
        <tr>
            <td>Categoría</td>
            <td>Subcategoría</td>
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
