<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <!-- Incluye tus estilos CSS personalizados -->
    <link rel="stylesheet" type="text/css" href="assents/styles.css">
    <!-- Incluye los estilos de Bootstrap (si no los has incluido ya) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
/* Estilos personalizados */
.table {
    background-color: #f7f7f7;
}

.btn {
    margin: 5px;
}

</style>




<body>
    <div class="container">
<?php
require_once "../../conexion/database.php";
$c = new conectar();
$conexion = $c->conexion();

$sql = "SELECT id_cliente, 
        Nombre,
        Apellido,
        Direccion,
        Correo,
        Contrasena,
        Telefono,
        Fecha_nacimiento
        FROM clientes";
$result = mysqli_query($conexion, $sql);

if ($result) {
    // La consulta se ejecutó correctamente, puedes continuar con mysqli_fetch_row()
    ?>





<div class="table-responsive">
    <table class="table table-bordered table-striped" style="text-align: center;">
        <caption><label>Clientes :)</label></caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
                <th>Correo</th>
                <th>Contraseña</th>
                <th>Teléfono</th>
                <th>Fecha de Nacimiento</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
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
                    <td>
    <span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#abremodalClientesUpdate" onclick="abrirModalEditar('<?php echo $ver['id_cliente']; ?>')">
        <span class="glyphicon glyphicon-pencil"></span> Editar
    </span>
</td>
<td>
    <span class="btn btn-danger btn-xs" onclick="eliminarCliente('<?php echo $ver['id_cliente']; ?>')">
        <span class="glyphicon glyphicon-remove"></span> Eliminar
    </span>
</td>

                        <span class="btn btn-danger btn-xs" onclick="eliminarCliente('<?php echo $ver['id_cliente']; ?>')">
                            <span class="glyphicon glyphicon-remove"></span> Eliminar
                        </span>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php
} else {
    // Hubo un error en la consulta, puedes mostrar un mensaje de error
    echo "Error en la consulta: " . mysqli_error($conexion);
}
?>
<script>
    // Función para abrir el modal de edición con los datos del cliente seleccionado
    function abrirModalEditar(id_cliente) {
    // Hacer una solicitud AJAX para obtener los datos del cliente por su ID
    $.ajax({
        type: "GET",
        url: "get_cliente_data.php", // Debes crear un archivo PHP para manejar esta solicitud
        data: { id_cliente: id_cliente },
        success: function(data) {
            // Llena el formulario de edición en el modal con los datos del cliente
            $("#editClientModal .modal-body").html(data);
            // Abre el modal
            $("#editClientModal").modal("show");
        },
        error: function() {
            alert("Error al obtener los datos del cliente.");
        }
    });
}

        

function eliminarCliente(id_cliente) {
    if (confirm("¿Estás seguro de que deseas eliminar este cliente?")) {
        // Hacer una solicitud AJAX para eliminar el cliente por su ID
        $.ajax({
            type: "POST",
            url: "eliminar_cliente.php", // Debes crear un archivo PHP para manejar esta solicitud
            data: { id_cliente: id_cliente },
            success: function(response) {
                if (response === "success") {
                    alert("Cliente eliminado exitosamente.");
                    // Puedes realizar alguna acción adicional, como eliminar la fila de la tabla.
                    $("#row_" + id_cliente).remove();
                } else {
                    alert("Error al eliminar el cliente.");
                }
            },
            error: function() {
                alert("Error al eliminar el cliente.");
            }
        });
    }
}

</script>
