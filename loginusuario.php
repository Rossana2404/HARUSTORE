<?php
require_once "./conexion/database.php";
$obj = new conectar();
$conexion = $obj->conexion();

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["usuario"];
    $password = $_POST["password"];
  // Consulta preparada para evitar la inyección SQL
  $sql = "SELECT * FROM clientes WHERE email = ? LIMIT 1";
  $stmt = mysqli_prepare($conexion, $sql);
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  
  if (!$result) {
      $error_message = "Error en la consulta: " . mysqli_error($conexion);
  } else {
      $row = mysqli_fetch_assoc($result);
      if ($row && password_verify($password, $row["password"])) {
          // Iniciar sesión o redirigir al usuario a la página deseada
          header("Location: vistas/inicio.php");
          exit();
      } else {
          $error_message = "Credenciales incorrectas";
      }
  }
}

// Determinar si el botón de registro debe mostrarse o no
$mostrarBotonRegistro = !isset($error_message);
?>

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
                            <form id="frmLogin">
                                <p><label>Bienvenido a Haru Store</label></p>
                                <p><label>Usuario</label></p>
                                <input type="text" class="form-control input-sm" name="usuario" id="usuario">
                                <p><label>Contraseña</label></p>
                                <input type="password" name="password" id="password" class="form-control input-sm">
                                <p></p>
                                <a href="#" class="btn btn-danger btn-sm btn-registro">Entrar</a>
                                <a href="registro.php" class="btn btn-danger btn-sm btn-registro">Registrar</a>
                                <div><a href="#" class="btn btn-danger btn-sm btn-entarSistema">Olvido su contraseña?</a></div>
                            
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </div>
</body>

</html>

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
                url: "loginusuario.php",
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