<!-- Agrega el código HTML para el menú de cabecera -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Resto del código para el menú de cabecera -->
  </div>
</nav>

<style type="text/css">
  @page {
    margin-top: 0.3em;
    margin-left: 0.6em;
  }
</style>

<script type="text/javascript">
  // Agrega un ID o selector al elemento que deseas que tenga el evento click
  $('#miBoton').click(function () {
    // Resto del código para el evento click y AJAX
    var datos = $('#miFormulario').serialize();
    $.ajax({
      type: "POST",
      data: datos,
      url: "../procesos/",
      success: function (r) {
        // Resto del código de la función de éxito
      }
    });
  });

  // Agrega una función para validar datos vacíos
  function validarFormVacio(formulario) {
    var datos = $('#' + formulario).serialize();
    var d = datos.split('&');
    var vacios = 0;
    for (var i = 0; i < d.length; i++) {
      var controles = d[i].split("=");
      if (controles[1] == "A" || controles[1] == "") {
        vacios++;
      }
    }
    return vacios;
  }
</script>

<script type="text/javascript">
  // Agrega un ID o selector al elemento que debe tener el evento click
  $('#miOtroBoton').click(function () {
    var formData = new FormData(document.getElementById("miFormulario"));

    $.ajax({
      url: "../procesos/productos/insertaArchivo.php",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data) {
        if (data == 1) {
          $('#miFormulario')[0].reset();
          $('#tablaArticulos').load('productos/tablaArticulos.php');
          alertify.success("Agregado con éxito :D");
        } else {
          alertify.error("Fallo al subir el archivo :(");
        }
      }
    });
  });
</script>
