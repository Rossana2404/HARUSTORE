<?php
require_once "../../conexion/database.php";
require_once "../../clases/Usuarios.php";

$obj = new Usuario();

// Verifica que se hayan enviado todos los datos esperados.
if (isset($_POST['nombre'], $_POST['apellido'], $_POST['email'], $_POST['password'])) {
    $pass = sha1($_POST['password']);

    $datos = array(
        $_POST['nombre'],
        $_POST['apellido'],
        $_POST['email'],
        $pass,
        null, // Deja el campo 'id_cliente' como NULL para que sea manejado por la base de datos.
        'tipo_de_usuario' // Establece un valor adecuado para 'tipo_usuario'.
    );

    $resultado = $obj->registroUsuario($datos);

    if ($resultado) {
        // Registro exitoso, redirige o muestra un mensaje de éxito.
        header("Location: registro_exitoso.php"); // Cambia "registro_exitoso.php" por la página que desees.
        exit;
    } else {
        // Manejo de errores en el registro.
        echo "Hubo un problema en el registro. Por favor, inténtalo nuevamente.";
    }
} else {
    // Manejo de campos faltantes.
    echo "Por favor, complete todos los campos del formulario.";
}
?>
