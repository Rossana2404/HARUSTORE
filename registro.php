
<!DOCTYPE html>
<html lang="es">

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haru Store</title>
    <link rel="stylesheet" href="bootstrap.min.css">

    <style>
        body {
            background-color: gray;
        }

        /* Estilos para el contenedor principal */
        #contenedor {
            display: flex;
            justify-content: center;
            /* Centrar horizontalmente */
            align-items: center;
            /* Centrar verticalmente */
            min-height: 100vh;
            /* Altura mínima de la ventana gráfica */
        }

        .panel-heading {
            text-align: center;
            font-size: 50px;
        }

        img.logo {
            display: block;
            margin: 0 auto;
        }

        .btn-registro {
            display: <?php echo $validar ? 'none' : 'block'; ?>;
        }

        /* Estilos para centrar el formulario */
        .center-form {
            background-color: white;
            padding: 100px; /* Reduce el espacio entre elementos del formulario */
        }

        /* Estilos para la lista vertical */
        ul {
            list-style: none;
            padding: 0;
            text-align: left;
        }

        ul li {
            margin-bottom: 10px; /* Espacio entre elementos de la lista */
        }
    </style>
</head>

<body>
    <!-- Contenedor principal -->
    <div id="contenedor">
        <div class="container">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                    <!-- Aplica la clase "center-form" al div que contiene el formulario -->
                    <div class="panel panel-primary center-form">
                        <div class="panel-heading">Haru Store</div>
                        <div class="panel-body">
                            <img src="assents/img/logo1.jpg" class="logo" height="190" alt="Logo Haru Store">
                            <!-- Cambia los elementos de párrafo (p) a una lista no ordenada (ul) -->
                            <ul>
                                <li><label>Registrate aquí</label></li>
                                <li><label>Nombre</label></li>
                                <li><input type="text" class="form-control input-sm" id="nombre" name="nombre"></li>
                                <li><label>Apellido</label></li>
                                <li><input type="text" class="form-control input-sm" id="apellidos" name="apellidos"></li>
                                <li><label>Dirección</label></li>
                                <li><input type="text" class="form-control input-sm" id="direccion" name="direccion"></li>
                                <li><label>Email</label></li>
                                <li><input type="text" class="form-control input-sm" id="email" name="email"></li>
                                <li><label>Teléfono</label></li>
                                <li><input type="text" class="form-control input-sm" id="telefono" name="telefono"></li>
                                <li><label>Contraseña</label></li>
                                <li><input type="password" name="password" id="password1" class="form-control input-sm"></li>
                                <li><label>Repite tu contraseña</label></li>
                                <li><input type="password" name="password" id="password2" class="form-control input-sm"></li>
                            </ul>
                            <!-- Fin de la lista -->
                            <span class="btn btn-primary btn-sm" id="entrarSistema">Entrar</span>
                            <a href="registro.php" class="btn btn-danger btn-sm btn-registro">Registrar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
</body>
</html>

