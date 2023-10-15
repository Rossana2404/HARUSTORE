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

<style>
    /* Estilos para el primer encabezado */
    .header-container1 {
        background-color: #f5f5f5;
        /* Color de fondo del primer encabezado */
        padding: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 20px;
        /* Tamaño de fuente aumentado */
    }

    .welcome-text {
        font-size: 30px;
        color: brown;

    }

    .logo-container {
        text-align: center;
        /* Centra el logotipo horizontalmente */
        flex-grow: 1;
        /* Hace que el logotipo ocupe todo el espacio disponible */
    }

    .logo-container img {
        max-width: 200px;
        /* Ajusta el ancho del logotipo al contenedor */
        height: auto;

    }

    .login-registro {
        display: flex;
        align-items: center;
    }

    .login-registro a {
        text-decoration: none;
        color: brown;
        margin: 0 10px;
    }

    /* Estilos para el segundo encabezado */
    header.menu-container1 {
        background-color: #e0766d;
        /* Color de fondo del segundo encabezado */
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 5px;

    }

    /* Estilos para los íconos de redes sociales */
    .redes-sociales {
        text-align: center;
        /* Centra los íconos horizontalmente */
        margin-top: 10px;
        /* Agrega un espacio entre el botón y los íconos de redes sociales */
    }

    .redes-sociales a {
        text-decoration: none;
        color: #333;
        font-size: 24px;
        /* Tamaño de los íconos de redes sociales */
        margin: 0 10px;
        /* Espacio entre los íconos de redes sociales */

    }

    /* Estilos para el contenedor principal */
    .container-fluid {
    display: flex;
    justify-content: center;
        }
        .img {
    width: 350px;
        }  
    
</style>

<!-- Primer encabezado -->
<header>
    <div class="header-container1">
        <div class="welcome-text">Categoría Productos para gatos</br></div>
        <div class="logo-container">
            <img src="./../assents/img/logo1.jpg" title="Haru Store" alt="Haru Store">
        </div>
        <div class="login-registro">
            <img src="./../assents/img/logopata.jpeg" alt="" style="width: 50px; height: 50px;">
            <a href="/loginusuario.php">Ingresa /</a>
            <a href="/registro.php">Regístrate</a>
        </div>
        <div class="redes-sociales">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <!-- Agrega más íconos de redes sociales según sea necesario -->
        </div>
    </div>
</header>

<!-- Segundo encabezado -->
<header class="menu-container1">
    <div class="menu-item">
        <a href="/../Harustore//index.php">
            <i class="fas fa-home"></i> Haru Store
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <i class="fas fa-home"></i> Adopcion
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <i class="fas fa-home"></i> Informacion de Mascotas
        </a>
    </div>
    <div class="menu-item">
        <button class="buscarCategorias">
            <i class="fas fa-search"></i> Buscar Categorías
        </button>
    </div>
    <div class="menu-item">
        <button class="carrito">
            <i class="fas fa-shopping-cart"></i> <!-- Icono de carrito de compra -->
        </button>
    </div>
</header>

<body>
   <div class="container-fluid">
        <div class="row">

            <!-- Contenedor principal (Tarjeta 1) -->
            <div class="col-lg-12">
                <div class="card mb-4">
                    <img src="./../assents/img/gato/gato.banner-1400x500.jpg" class="card-img-top" alt="Gato">
                    <div class="card-body">
                        <h1 class="card-title">Todo para tus Gatitos</h1>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->

            <div class="col-lg-4 col-md-6 ">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/comida.gato-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Alimento</h3>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/snack.gato-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Snacks</h3>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="col-lg-4 col-md-6">
                <div class="card">


                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/higiene.gato2-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Higiene</h3>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 5-->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/paseo.gato-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Paseo</h3>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 6-->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/juguete.gato2-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Juguetes</h3>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 7-->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/cama.gato-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Camas</h3>
                    </div>
                </div>
            </div>
            <!-- Tarjeta 6-->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/gatocomiendo-1400x500.png" class="img-fluid" alt="">
                        </h5>
                        <h3>Platos</h3>
                    </div>
                </div>
            </div>


            <!-- Tarjeta 7-->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/ropa.gato-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Vestuarios</h3>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 6-->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/transporte.gato-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Transporte</h3>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 7-->
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title text-center"><img id="img_obs" src="./../assents/img/gato/salud.gato2-1400x500.jpg" class="img-fluid" alt="">
                        </h5>
                        <h3>Salud y Bienestar</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Aquí se mostrarán las imágenes de los productos -->

    <div class=container>
        <!-- Menú horizontal con fondo celeste y letras café -->
        <div class="menu">
            <a href="./vistas/perro.php">Perro</a>
            <div class="menu-dropdown">
                <ul class="horizontal-menu">
                    <li><a href="/perro/alimento-para-perros">Alimento</a></li>
                    <li><a href="/perro/snacks-perro">Snacks</a></li>
                    <li><a href="/perro/higiene-perro">Higiene</a></li>
                    <li><a href="/perro/higiene-perro">Paseo</a></li>
                    <li><a href="/perro/higiene-perro">Juguetes</a></li>
                    <li><a href="/perro/higiene-perro">Camas</a></li>
                    <li><a href="/perro/higiene-perro">Platos</a></li>
                    <li><a href="/perro/higiene-perro">Vestuario</a></li>
                    <li><a href="/perro/higiene-perro">Transporte</a></li>
                    <!-- Agrega más elementos del menú aquí -->
                </ul>
            </div>
        </div>
        <div class="menu">
            <a href="#">Gato</a>
            <div class="menu-dropdown">
                <ul class="horizontal-menu">
                    <li><a href="/gato/alimento-para-gato">Alimento</a></li>
                    <li><a href="/gato/snacks-gato">Snacks</a></li>
                    <li><a href="/gato/higiene-gato">Higiene</a></li>
                    <li><a href="/gato/higiene-gato">Paseo</a></li>
                    <li><a href="/gato/higiene-gato">Juguetes</a></li>
                    <li><a href="/gato/higiene-gato">Camas</a></li>
                    <li><a href="/gato/higiene-gato">Platos</a></li>
                    <li><a href="/gato/higiene-gato">Vestuario</a></li>
                    <li><a href="/gato/higiene-gato">Transporte</a></li>
                    <!-- Agrega más elementos del menú aquí -->
                </ul>
            </div>
        </div>
        <div class="menu">
            <a href="#">Salud y Bienestar</a>
            <div class="menu-dropdown">
                <ul class="horizontal-menu">
                    <li><a href="">Comida especial</a></li>
                    <li><a href="">Agua Fresca</a></li>
                    <li><a href="">Ejercicio Regular</a></li>
                    <!-- Agrega más elementos del menú aquí -->
                </ul>
            </div>
        </div>
        <div class="menu">
            <a href="#">Noticias</a>
            <div class="menu-dropdown">
                <ul class="horizontal-menu">
                    <li><a href="/exotico/alimento-exotico"></a></li>
                    <li><a href="/exotico/snacks-exotico"></a></li>
                    <li><a href="/exotico/higiene-exotico"></a></li>
                    <!-- Agrega más elementos del menú aquí -->
                </ul>
            </div>
        </div>
    </div>

    </body>
    <!-- Footer -->
    <style>
        /* Estilo para el footer */
        .footer {
            background-color: #e0766d;
            /* Color de fondo oscuro */
            color: #ffffff;
            /* Color del texto en blanco */
            padding: 10px 0;
            /* Espaciado interior del footer */
        }

        /* Estilo para los enlaces dentro del footer */
        .footer a {
            color: #fff;
            /* Color del texto de los enlaces en blanco */
            text-decoration: none;
            /* Elimina la subrayado de los enlaces */
        }

        /* Estilo para los enlaces al pasar el mouse */
        .footer a:hover {
            text-decoration: underline;
            /* Subrayado al pasar el mouse */
        }
    </style>

    <footer class="footer bg-pink text-brown">
        <div class="container-fluid py-0">
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
    </footer>

    <!-- Copyrights -->
    <div class="bg-light py-4">
        <div class="container text-center">
            <p class="text-muted mb-0 py-2">Haru Store 2023,todos los derechos reservados. </p>
        </div>
    </div>
    </footer>
    <!-- End -->




</html>