<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <title>Tienda</title>
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
    <script src="script.js"></script>
    
</head>


<div class="header-container1">
    <div class="welcome-text">HOLAAAAA</div>
    <div class="logo-container">
        <img src="assents/img/Logo3.jpg" title="Haru Store" alt="Haru Store" style="width: 300px; height: auto;">
    </div>
    <div class="login-registro">
        <img src="assents/img/descarga.png" alt="" style="width: 50px; height: 50px;">
        <a href="loginusuario.php">Ingresa /</a>
        <a href="registro.php">Registrate</a>

    </div>
</div>

<body>

    <div class="menu-container">
        <!-- Menú horizontal con fondo celeste y letras café -->
        <div class="menu">
            <a href="">Perro</a>
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
        <div class="menu">
            <a href="#" data-toggle="modal" data-target="#contactModal">Contacto</a>
        </div>
        <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">Formulario de Contacto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Info! Si tienes alguna pregunta no dudes en contactarnos.</p>
                        <form>
                            <div class="form-group">
                                <label for="fullName">Nombre Completo</label>
                                <input type="text" class="form-control" id="fullName" placeholder="Nombres Apellidos">
                            </div>
                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="message">Mensaje</label>
                                <textarea class="form-control" id="message" rows="4" placeholder="Mensaje"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Formulario para la Búsqueda -->
        <div class="search-container">
            <!-- Campo de entrada para la búsqueda -->
            <input type="text" class="search-input" placeholder="Buscar...">
            <!-- Botón de búsqueda con icono -->
            <button class="search-button"><i class="fas fa-search"></i></button>
        </div>
    </div>


</body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="assents/img/nueva/Bannerinicioperro1400x500.png" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assents/img/nueva/Banneriniciogato1400x500.png" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="assents/img/nueva/Banneraccesorios.png" alt="Slide 3">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- Galería de imágenes -->
<div class="image-gallery" style="display: flex; justify-content: space-between; align-items: center;">
    <a href="./vistas/perro.php" class="image-link">
        <img src="assents/img/nueva/4inicio.perro.jpg" alt="Imagen 1">
    </a>
    <div class="divider"></div> <!-- División -->
    <a href="./vistas/gato.php" class="image-link">
        <img src="assents/img/nueva/4inicio.gato.jpg" alt="Imagen 2">
    </a>
    <div class="divider"></div> <!-- División -->
    <a href="./vistas/cuidados.php" class="image-link">
        <img src="assents/img/cuidado.png" alt="Imagen 3">
    </a>
    <div class="divider"></div> <!-- División -->
    <a href="./vistas/adopcion.php" class="image-link">
        <img src="assents/img/nueva/adpop.png" alt="Imagen 4">
    </a>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="text-color"> Destacados</h1>
        </div>
        <div class="col-lg-3 col-md-6 col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="img-fluid"><img src="assents/img/img1.jpg" alt="Imagen 1"></h5>
                    <p class="card-text">
                        <label>Sobre champion cachorro 100gr</label><br>
                        $500<br>
                    </p>
                    <p class="collapse" id="collapseExample1">
                        Informacion del producto<br>
                        Los Trocitos en Salsa Champion Dog han sido delicadamente cocinados al horno, con un sabor
                        irresistible para tu perrito cachorro.
                        deshuesado de pollo, deshuesado de cerdo, hígado de cerdo, ave y vacuno, vitaminas (A, D,
                        E), cloruro de sodio, fosfatos, carragenina, goma guar, goma lacustre, colorantes.
                        Puedes dárselo solo o mezclándolo con el alimento seco, ya que su exquisita salsa le dará un
                        sabor muy delicioso a su comida habitual, con lo que le demostrarás toda la entrega y cariño
                        que tienes hacia él por verlo feliz
                    <p class="card-text text-right">
                        <a data-toggle="modal" data-target="#exampleModal3" href="vistas/categoria_vista.php" class="btn btn-sm btn-primary">Añadir al Carrito</a>
                        <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn btn-sm btn-danger">Más >></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="img-fluid"><img src="assents/img/img2.jpg" alt="Imagen 2"></h5>
                    <p class="card-text"><label>Cama para mascotas acolchada</label><br>$13.990<br></p>
                    <p class="collapse" id="collapseExample2">
                        Información del producto<br>
                        Material: Forro polar + algodón
                        medidas: 46 x 46 x 21 cm
                        Fácil de cuidar
                        Lavable a máquina
                        Diseñado para darle a tus mascotas como perros y gatos un dulce sueño
                        Hecha de material de alta calidad, esta cama para mascotas es duradera y práctica durante mucho
                        tiempo.
                    </p>
                    <p class="card-text text-right">
                        <a data-toggle="modal" data-target="#exampleModal3" href="vistas/ventas.php" class="btn btn-sm btn-primary">Añadir al Carrito</a>
                        <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn btn-sm btn-danger">Más >></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title"><img id="img_obs" src="assents/img/imga3.jpg"></h5>
                    <p class="card-text text-sm"><label>Ropa Post-Quirúrgica y Protectora Pet Med</label><br>$18.990<br>
                    </p>
                    <p class="collapse" id="collapseExample3">
                        Informacion del producto<br>
                        Tecnología Dry UV antimicrobiana: Confort térmico, secado rápido, ligero y flexible,
                        protección UV 50+ (protege la piel
                        de los animales y disminuye los efectos nocivos de la radiación), tecnología antimicrobiana,
                        libre de metales pesados,
                        no afecta la piel y 100% orgánico.
                        Tamaño aproximado: los parámetros de medidas aproximadas de este producto son: el peso y la
                        raza del perro, debido a la
                        variación acentuada del porte físico.
                        Ajuste anatómico y fácil de usar: Vista a la mascota por las cuatro patas, cerrando el
                        cierre en el dorso (de la cola
                        hasta el cuello). Si el perro es peludo, es necesario proteger el pelo con el dedo para que
                        el cierre no se enganche.
                        Color: Verde.
                        No utilizar para castración de machos.
                        Lavar a mano, no usar lejía.
                        30 días de garantía por falla de fábrica.
                    </p>
                    <p class="card-text text-right">
                        <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-sm btn-primary">Añadir al Carrito</a>
                        <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn btn-sm btn-danger">Más >></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title"><img id="img_obs" src="assents/img/imga4.jpg"></h5>
                    <p class="card-text text-sm"><label>Peluche para perrito</label><br>$9.990<br></p>
                    <p class="collapse" id="collapseExample4">
                        Informacion del producto<br>
                        Juguete interactivo electrónico de peluche para mascotas, pelota de salto que rebota,
                        juguete
                        parlante
                        para perros,
                        regalo para mascotas, recarga USB, nuevo
                    </p>
                    <p class="card-text text-right">
                        <a data-toggle="modal" data-target="#exampleModal3" href="vistas/categoria_vista.php" class="btn btn-sm btn-primary">Añadir al Carrito</a>
                        <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn btn-sm btn-danger">Más >></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-color"> Nuevos productos</h1>
                    </div>
                    <!-- Tarjeta 1 -->
                    <div class="col-lg-3 col-md-6 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"><img id="img_obs" src="assents/img/img2.png" class="img-fluid" alt="Imagen de Arena sanitaria café"></h5>
                                <p class="card-text"><label id="">Arena sanitaria café</label><br>$14.990<br></p>
                                <p class="collapse" id="collapseExample5">
                                    Información del producto<br>
                                    Control natural de olores La bentonita encapsula olores.Liviana y absorbente Absorbe
                                    hasta dos veces su peso.Seguro para su mascota y casa
                                    No es tóxico. 99% libre de polvo.Ultra aglutinante Aglutinación instantánea.
                                </p>
                                <p class="card-text text-right">
                                    <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-sm btn-primary">Añadir al Carrito</a>
                                    <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn btn-sm btn-danger">Más >></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 2 -->
                    <div class="col-lg-3 col-md-6 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"><img id="img_obs" src="assents/img/imag6.png" class="img-fluid" alt="Imagen de Rascador Para Gatos Con Una Casita (Felix) GO">
                                </h5>
                                <p class="card-text"><label id="desayuno">Rascador Para Gatos Con Una Casita (Felix)
                                        GO</label><br>$29.990<br></p>
                                <p class="collapse" id="collapseExample6">
                                    Información del producto<br>
                                    Los rascadores de gatos tipo árbol de 1,11 metros de altura (4 niveles) de Olina
                                    permite:
                                    Mantener a nuestros gatos activos y evitar posibles problemas de salud, gracias a
                                    los juguetes que incorpora, nuestra mascota podrá mantenerse ocupada de manera
                                    entretenida.
                                    Ser utilizado como escondite, juguete y colgador, aliviando el estrés acumulado.
                                    Transportarlo fácilmente gracias a su diseño ligero y portátil.
                                    Crear su refugio y tener su espacio propio dentro del hogar.
                                    Sus postes con cuerdas de sisal permiten que nuestros gatos arañen con tranquilidad
                                    y seguridad, dándoles la oportunidad de desarrollar y liberar su instinto natural,
                                    manteniéndolos activos físicamente y con sus uñas sanas y fuertes.
                                    Ser limpiado de manera fácil y cómoda.
                                    Ser un espacio de confort y suavidad, gracias a su tela de terciopelo.
                                    Porque todos queremos una casa propia, ¡¡Regálale un rascador!!
                                </p>
                                <p class="card-text text-right">
                                    <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-sm btn-secondary">Añadir al Carrito</a>
                                    <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn btn-sm btn-danger">Más >></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 3 -->
                    <div class="col-lg-3 col-md-6 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"><img id="img_obs" src="assents/img/img7.jpg" class="img-fluid" alt="Imagen de capucha para gatos"></h5>
                                <p class="card-text"><label id="desayuno">Capucha para gatos</label><br>$9.990<br></p>
                                <p class="collapse" id="collapseExample7">
                                    Información del producto<br>
                                    Material de alta calidad: la ropa para mascotas está hecha de materiales de alta
                                    calidad, la capa interior es suave y cálida.
                                    Cómodo movimiento de articulaciones: tela suave que mantiene a tus mascotas
                                    calientes y cómodas toda la noche, corte más alto en el vientre para facilitar el
                                    orinal, el diseño del suéter hace que sea fácil de poner y quitar.
                                </p>
                                <p class="card-text text-right">
                                    <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-sm btn-primary">Añadir al Carrito</a>
                                    <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn btn-sm btn-danger">Más >></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 4 -->
                    <div class="col-lg-3 col-md-6 col-md-4">
                        <div class="card">
                            <div class="card-body text-center">
                                <h5 class="card-title text-center"><img id="img_obs" src="assents/img/img8 (2).jpg" class="img-fluid" alt="Imagen de Juguete de Sisal para gato y gatito"></h5>
                                <p class="card-text"><label id="desayuno">Juguete de Sisal para gato y
                                        gatito</label><br>$3.990<br></p>
                                <p class="collapse" id="collapseExample8">
                                    Información del producto<br>
                                    Juguete de Sisal para gato y gatito, Bola de rascado para mascotas, Bola de vaso,
                                    juguete de plumas.
                                </p>
                                <p class="card-text text-right">
                                    <a data-toggle="modal" data-target="#exampleModal3" href="#" class="btn btn-sm btn-primary">Añadir al Carrito</a>
                                    <a data-toggle="collapse" href="#collapseExample6" role="button" aria-expanded="false" aria-controls="collapseExample" href="#" class="btn btn-sm btn-danger">Más >></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Registro de Clientes</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h6>Nombre Completo</h6>
                                    <div class="input-group mb-3">

                                        <div class="input-group-prepend">

                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="completo" placeholder="Nombres Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <h6>Dirección</h6>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-home"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="dir" placeholder="Pje Calle Block Av." aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <h6>Email</h6>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                        </div>
                                        <input type="email" id="email" class="form-control" placeholder="Correo Electrónico" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <h6>Telefono</h6>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                                        </div>
                                        <input type="text" id="tel" class="form-control" placeholder="+56 9" aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                    <h6>Password</h6>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">

                                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                                        </div>
                                        <input type="password" minlength="6" id="pass1" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                                        <input type="password" minlength="6" id="pass2" class="form-control" placeholder="Confirmación" aria-label="Username" aria-describedby="basic-addon1">

                                    </div>
                                    <h6 id="min">Mínimo 6 Caracteres</h6>
                                </div>
                                <div id="boton" class="modal-footer text-left">

                                    <input type="submit" value="Registrarse" id="registrar" class="btn btn-primary" data-dismiss="modal" />
                                </div>
                            </div>
                        </div>
                    </div>

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
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
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
                                <div id="boton" class="modal-footer text-left">

                                    <input type="submit" value="Contactar" id="contactar" class="btn btn-primary" data-dismiss="modal" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade col-12" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content col-12">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Detalles de tu compra</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body col-12" id="cuerpo">
                                    <div class="col-sm-6">
                                        <i class="fa fa-shopping-cart" style="font-size:36px"></i>
                                    </div>
                                    <div class="col-sm-6 text-left">
                                        <p>
                                            <i class="icon fa fa-check-square-o"></i>Cantidad<br>
                                            <i class="icon fa fa-check-square-o"></i>total<br>
                                            <i class="icon fa fa-check-square-o"></i>Forma de pago<br>

                                        </p>
                                    </div>

                                </div>
                                <div id="boton" class="modal-footer text-left">
                                    <input type="submit" value="Volver" id="añadir al Carrito" class="btn btn-primary" data-dismiss="modal" />
                                    <input type="submit" value="Añadir al Carrito" id="" class="btn btn-primary" data-dismiss="modal" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="cont2" class="container col-12">
                        <div class="row"></div>

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
                        </footer>

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
