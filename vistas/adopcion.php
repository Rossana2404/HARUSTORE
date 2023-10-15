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
    .container {
        display: flow-root;
        justify-content: flex-end;
    }

    /* Estilos para el encabezado */
    .menu-container1 {
        text-align: right;

    }

    /* Estilos para los elementos del menú */
    .menu-item {
        display: inline-block;

    }


    /* Estilos para las tarjetas (cambiar el ancho según tus necesidades) */
    .col-lg-18 {
        width: 100%;
        /* Ancho del contenedor principal */

        margin-left: auto;
    }

    .with-right-margin {
        margin-left: auto;
        margin-right: 0;
        /* Asegúrate de que no haya margen derecho adicional */
        text-align: center;
        /* Para alinear el texto a la derecha dentro de la tarjeta */
    }

    /* Estilos para las tarjetas individuales */
    .card {
        margin-bottom: 20px;
        /* Espaciado entre tarjetas */
        width: 100%;
        border-radius: 8px;
    }

    .newspaper {
        -webkit-column-count: 1;
        /* Chrome, Safari, Opera */
        -moz-column-count: 1;
        /* Firefox */
        column-count: 1;
        -webkit-column-gap: 40px;
        /* Chrome, Safari, Opera */
        -moz-column-gap: 40px;
        /* Firefox */
        column-gap: 40px;
        -webkit-column-rule-style: solid;
        /* Chrome, Safari, Opera */
        -moz-column-rule-style: solid;
        /* Firefox */
        column-rule-style: solid;
    }
</style>

<!-- Primer encabezado -->
<header>
    <div class="header-container1">
        <div class="welcome-text">Adopción de Mascotas</br></div>
        <div class="logo-container">
            <img src="./../assents/img/logo1.jpg" title="Haru Store" alt="Haru Store">
        </div>
        <div class="login-registro">
            <img src="./../assents/img/logopata.jpeg" alt="" style="width: 50px; height: 50px;">
            <a href="/../Harustore///loginusuario.php">Ingresa /</a>
            <a href="/../Harustore///registro.php">Regístrate</a>
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
            <i class="fas fa-home"></i> Inicio
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <i class="fas fa-home"></i> Adopción
        </a>
    </div>
    <div class="menu-item">
        <a href="">
            <i class="fas fa-home"></i> Informacion de Mascotas
        </a>
    </div>
    
            <!-- Agrega un elemento select para seleccionar la categoría -->
<select id="categoria">
    <option value="todos">Todos</option>
    <option value="perro">Perros</option>
    <option value="gato">Gatos</option>
</select>

        </button>
    </div>
    <div class="menu-item">
        <button id="carrito">
            <i class="fas fa-shopping-cart"></i> <!-- Icono de carrito de compra -->
        </button>
    </div>
</header>


<body>
    <header>
        <h1>Adopción de Perros y Gatos</h1>
        <p>¡Encuentra a tu nuevo amigo peludo!</p>
    </header>
    <div class="container">
    <div class="col-lg-8 with-right-margin">
                <div class="card mb-4">
       
            <img src="./../assents/img/adopcion/descarga.jpeg" alt="Perro 1">
            <h2>Baltazar</h2>
            <p>Edad: 10 meses</p>
            <p>Descripción: Este adorable perro está en busca de un hogar cariñoso.</p>
            <button>Contactar</button>
        </div>
        
        <div class="col-lg-8 with-right-margin">
                <div class="card mb-4">
            <img src="./../assents/img/adopcion/gato.jpeg" alt="Gato 1">
            <h2>Lulu</h2>
            <p>Edad: 2 años</p>
            <p>Descripción: Este tierno gato está buscando un lugar para llamar hogar.</p>
            <button>Contactar</button>
        </div>
        <!-- Puedes agregar más tarjetas de mascotas aquí -->
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


<script>
document.addEventListener("DOMContentLoaded", function () {
    // Encuentra el botón de búsqueda por su ID
    var btnBuscar = document.getElementById("btnBuscar");

    // Agrega un manejador de eventos al botón
    btnBuscar.addEventListener("click", function () {
        // Obtiene el valor de la categoría seleccionada (puedes agregar más categorías si es necesario)
        var categoria = document.getElementById("categoria").value;

        // Filtra las tarjetas de mascotas según la categoría seleccionada
        var petCards = document.querySelectorAll(".pet-card");
        petCards.forEach(function (card) {
            if (categoria === "todos" || card.classList.contains(categoria)) {
                card.style.display = "block";
            } else {
                card.style.display = "none";
            }
        });
    });
});
</script>
