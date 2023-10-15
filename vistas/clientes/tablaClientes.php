<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <title>Haru Store</title>
    <base href="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" href="assentes/img/item4.jpg" type="">
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="javaScript/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="javaScript/jquery-3.2.1.min.js"></script>
    <script src="javaScript/alertifyjs/alertify.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style_index.css">
    <link rel="stylesheet" type="text/css" href="assents\styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


</head>


<?php
require_once "../../conexion/database.php";
$c = new conectar();
$conexion = $c->conexion();

$sql = "SELECT id_cliente, 
        nombre,
        apellido,
        direccion,
        correo,
        contrasena,
        telefono,
        fecha_nacimiento
        FROM clientes";
$result = mysqli_query($conexion, $sql);

if ($result) {
    // La consulta se ejecutó correctamente, puedes continuar con mysqli_fetch_row()
    ?>

    <div class="table-responsive">
    <table class="table table-bordered table-striped" style="text-align: center;">
            <caption><label>Clientes :)</label></caption>
            <tr>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Direccion</td>
                <td>Correo</td>
                <td>Contraseña</td>
                <td>Teléfono</td>
                <td>Fecha de Nacimiento</td>
                <td>Editar</td>
                <td>Eliminar</td>
            </tr>

            <?php while ($ver = mysqli_fetch_array($result)): ?>

                <tr>
                    <td><?php echo $ver['nombre']; ?></td>
                    <td><?php echo $ver['apellido']; ?></td>
                    <td><?php echo $ver['direccion']; ?></td>
                    <td><?php echo $ver['correo']; ?></td>
                    <td><?php echo $ver['contraseña']; ?></td>
                    <td><?php echo $ver['telefono']; ?></td>
                    <td><?php echo $ver['fecha_nacimiento']; ?></td>
                    <td>
                        <span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalClientesUpdate" onclick="agregaDatosCliente('<?php echo $ver['id_cliente']; ?>')">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </span>
                    </td>
                    <td>
                        <span class="btn btn-danger btn-xs" onclick="eliminarCliente('<?php echo $ver['id_cliente']; ?>')">
                            <span class="glyphicon glyphicon-remove"></span>
                        </span>
                    </td>
                </tr>

            <?php endwhile; ?>

        </table>
    </div>

    <?php
} else {
    // Hubo un error en la consulta, puedes mostrar un mensaje de error
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
