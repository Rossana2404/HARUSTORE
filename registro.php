<?php

require_once "conexion/database.php";
$obj = new conectar();
$conexion = $obj->conexion();

$sql = "SELECT * from usuario where email='admin'";
$result = mysqli_query($conexion, $sql);
$validar = 0;
if (mysqli_num_rows($result) > 0) {
    $validar = 1;
}
?>


<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assents/img/logo.jpg">
    <title>Login Usuario</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Alertify CSS -->
    <link rel="stylesheet" type="text/css" href="node_modules/alertifyjs/build/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="node_modules/alertifyjs/build/css/alertify.css">

    <!-- Bootstrap 5 JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Alertify JavaScript -->
    <script src="node_modules/alertifyjs/build/alertify.js"></script>

    <!-- Estilos personalizados -->

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/funciones.js"></script>
    <link href="assents/styles.css" rel="stylesheet">

    <style>
    .container {
        margin-bottom: 20px; /* Ajusta el valor del margen según tus necesidades */
    }
</style>



</head>



<div>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e0766d; font-weight: bold;font-size: 20px;padding: 10px; margin-bottom: 10px;">
    


        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="color: #6f4e37;">
                <img src="assents/img/logo.jpg" alt="Haru Store" width="100" height="100" style="margin-right: 10px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 30px;">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #6f4e37;"></a>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#exampleModal2" href="#" style="color:B4513;">Contacto</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./vistas/perro.php" style="color: #6f4e37;">Perros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./vistas/gato.php" style="color: #6f4e37;">Gatos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #6f4e37;">
                            Categorias
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Alimento</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Snacks</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Paseo</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Camas</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Platos</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Vestuario</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Transporte</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" style="font-size: 30px;">OFERTAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #6f4e37;">
                            Salud y bienestar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Comida especial</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Agua Fresca</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                            <li><a class="dropdown-item" href="#" style="font-size: 20px;">Ejercicio Regular</a></li>

                        </ul>
                    </li>
                </ul>
                <form class="d-flex" id="search-form">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="button" id="search-button" style="background-color: #e0766d; color: #6f4e37; padding: 10px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h0a6.5 6.5 0 0 0 1.397-1.398Zm1.207-1.207h0L14.02 12.02h0l-2.878 2.88h0a1 1 0 0 1-1.32-1.32l2.88-2.88Z" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </nav>


    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Contacto de Clientes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-primary alert-dismissible fade show text-left" role="alert">
                        <strong>Info!</strong> Si tienes alguna pregunta no dudes en contactarnos. Estaremos
                        atentos a
                        responder
                        cualquier inquietud que tengas.

                    </div>
                    <h6>Nombre Completo</h6>
                    <div class="input-group mb-3">

                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="text" id="nombre" class="form-control" placeholder="Nombres Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <h6>Email</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">

                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                        </div>
                        <input type="email" id="mail" class="form-control" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <h6>Mensaje</h6>
                    <div class="input-group">

                        <textarea class="form-control" id="campo" aria-label="With textarea"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

    
    <body style="background-color: #F6DDCC">

        <div class="container">
            <div class="row justify-content-center align-items-center" style="min-height: 100px;">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header bg-primary text-white text-center">
                            <h1>Haru Store</h1>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img src="assents/img/logo.jpg" class="img-fluid" style="max-width: 50%;" alt="Haru Store">
                            </div>
                            <form id="frmClientes" style="font-size: 20px">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="apellidos" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos">
                                </div>
                                <div class="mb-3">
                                    <label for="direccion" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-primary" id="entrarSistema" style="font-size: 24px;">Entrar</button>
                                    <?php if (!$validar) : ?>
                                        <a href="procesos/regLogin/registrarUsuario.php" class="btn btn-danger btn-sm">Registrar</a>
                                    <?php endif; ?>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#entrarSistema').click(function() {


                    vacios = validarFormVacio('frmRLogin');



                    if (vacios > 0) {
                        alert("Debes llenar todos los campos!");
                        return false;
                    }
                    vacios = validarFormVacio('frmLogin');

                    if (vacios > 0) {
                        alert("Debes llenar todos los campos!!");
                        return false;
                    }

                    datos = $('#frmLogin').serialize();
                    $.ajax({
                        type: "POST",
                        data: datos,
                        url: "procesos/regLogin/registrarUsuario.php",
                        success: function(r) {

                            if (r == 1) {
                                window.location = "vistas/inicio.php";
                            } else {
                                alert("No se pudo acceder :(");
                            }
                        }
                    });
                });
            });
        </script>

        <div>
    
   
                     <!-- Footer -->
                     <footer class="footer bg-pink text-brown">
                        <div class="container-fluid py-5">
                            <div class="row py-4">
                                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                                    <h6 class="text-uppercase font-weight-bold mb-4">Información</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><a href="#" class="text-white">Quiénes somos</a></li>
                                        <li class="mb-2"><a href="#" class="text-white">Términos y condiciones</a></li>
                                        <li class="mb-2"><a href="#" class="text-white">Medios de Pago</a></li>
                                        <li class="mb-2"><a href="#" class="text-white">Envíos</a></li>
                                        <li class="mb-2"><a href="#" class="text-white">Adopta</a></li>
                                        <li class="mb-2"><a href="#" class="text-white">Noticias</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                                    <h6 class="text-uppercase font-weight-bold mb-4">Servicio al Cliente</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><a href="#" class="text-white">Contacto</a></li>
                                        <li class="mb-2"><a href="#" class="text-white">Devoluciones</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                                    <h6 class="text-uppercase font-weight-bold mb-4">Extras</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><a href="#" class="text-white">Marcas</a></li>
                                        <li class="mb-2"><a href="#" class="text-white">Vouchers de Regalo</a></li>
                                        <li class="mb-2"><a href="#" class="text-white">Ofertas</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                                    <h6 class="text-uppercase font-weight-bold mb-4">Mi Cuenta</h6>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><a href="#" class="text-white">Olvidé mi contraseña</a></li>
                                        <li class="mb-2"><a href="loginusuario.php" class="text-white">Inicio de sesión</a></li>
                                        <li class="mb-2"><a href="registro.php" class="text-white">Registro</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <h6 class="text-uppercase font-weight-bold mb-4">Escríbenos</h6>
                                    <p class="text-muted mb-4">
                                        <a href="https://wa.me/1234567890" target="_blank" class="btn btn-success">
                                            ¡Contáctanos por WhatsApp! <i class="fab fa-whatsapp"></i>
                                        </a>
                                    </p>
                                    <div class="p-1 rounded border">
                                        <div class="input-group">
                                            <input type="email" placeholder="Envíanos un Mail" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                                            <div class="input-group-append">
                                                <button id="button-addon1" type="submit" class="btn btn-link text-white"><i class="fa fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Copyrights -->
                        <div class="bg-light py-4">
                            <div class="container text-center">
                                <p class="text-muted mb-0 py-2">Haru Store 2023,todos los derechos reservados. </p>
                            </div>
                        </div>
                    </footer>
                    <!-- End -->

    </body>


</html>