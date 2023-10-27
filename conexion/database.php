<?php 
class conectar {
    private $servidor = "localhost";
    private $usuario = "root";
    private $password = "";
    private $bd = "haru_db";

    public function conexion(){
        $conexion = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->bd);
        return $conexion;
    }
}

// Crear una instancia de la clase conectar
$conexionBD = new conectar();

// Utilizar la función de la clase para obtener la conexión
$conexion = $conexionBD->conexion();

$query = "SELECT * FROM clientes";

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Valor de prueba</font> </td> 
          
      </tr>';

if ($result = $conexion->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["nombre"];

        echo '<tr> 
                  <td>'.$field1name.'</td> 
              </tr>';
    }
    $result->free();
}

// Cerrar la conexión
$conexion->close();
?>
</body>
</html>
