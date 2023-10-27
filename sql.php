<html>
<body>
<?php 

$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "haru_db";


$mysqli = new mysqli("localhost", $username, $password, $dbname); 
$query = "SELECT * FROM cliente;";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Valor de prueba</font> </td> 
          
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["correo"];


        echo '<tr> 
                  <td>'.$field1name.'</td> 
         
              </tr>';
    }
    $result->free();
} 



?>
</body>
</html>