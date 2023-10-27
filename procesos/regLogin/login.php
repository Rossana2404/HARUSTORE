<?php
session_start();
require_once "../../conexion/database.php";
require_once "../../clases/Usuarios.php";

$obj = new Usuario();

if (isset($_POST['usuario']) && isset($_POST['password'])) {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $datos = array(
        $usuario,
        $password
    );

    $resultadoLogin = $obj->loginUser($datos);

    if ($resultadoLogin === true) {
        // El usuario inició sesión exitosamente, redirige a una página de bienvenida u realiza otras acciones.
        header("Location: bienvenida.php");
        exit;
    } else {
        // El inicio de sesión falló, puedes manejar el mensaje de error de acuerdo a tus necesidades.
        echo "Inicio de sesión fallido. Por favor, verifica tus credenciales.";
    }
} else {
    // Maneja el caso en el que 'usuario' o 'password' no estén definidos en los datos POST.
    echo "Datos de entrada no válidos.";
}
?>
