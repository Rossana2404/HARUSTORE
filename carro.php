<?php 
	session_start(); 
	require_once "conexion/database.php"; 
	if(isset($_GET['page'])){ 
		 
		$pages=array("producto", "carrito"); 
		 
		if(in_array($_GET['page'], $pages)) { 
			 
			$_page=$_GET['page']; 
			 
		}else{ 
			 
			$_page="producto"; 
			 
		} 
		 
	}else{ 
		 
		$_page="producto"; 
		 
	} 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
   
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link rel="stylesheet" href="css/reset.css" /> 
	<link rel="stylesheet" href="css/style.css" /> 
	 
	<title>Carrito de compras</title> 
 
</head> 
<style>
body { 
	font-family: Verdana; 
	font-size: 12px; 
	color: #444; 
} 
 
a {color: #48577D; text-decoration: none;} 
 
a:hover {text-decoration: underline;} 
 
h1, h2 {margin-bottom: 15px} 
 
h1 {font-size: 18px;} 
h2 {font-size: 16px} 
 
#container { 
	width: 700px; 
	margin: 150px auto; 
	background-color: #eee; 
	padding:15px; 
	overflow: hidden; 
} 
 
	#main { 
		width: 490px; 
		float: left; 
	} 
	 
		#main table { 
			width: 480px; 
		} 
		 
			#main table th { 
				padding: 10px; 
				background-color: #48577D; 
				color: #fff; 
				text-align: left; 
			} 
			 
			#main table td { 
				padding: 5px; 
			} 
			 
			#main table tr { 
				background-color: #d3dcf2; 
			} 
	 
	#sidebar { 
		width: 200px; 
		float: left; 
	}



 </style>
<body>
    <h1>Carrito de Compras</h1>

    <?php
    if (empty($carrito)) {
        echo "<p>El carrito de compras está vacío.</p>";
    } else {
        // Itera a través de los productos en el carrito y muéstralos
        echo "<table>
                <tr>
                    <th>Nombre del Producto</th>
                    <th>Cantidad</th>
                    <th>Precio Unitario</th>
                    <th>Subtotal</th>
                </tr>";

				foreach ($carrito as $producto) {
					echo "<tr>
							<td>{$producto['nombre']}</td>
							<td>{$producto['cantidad']}</td>
							<td>{$producto['precio']}</td>
							<td>{$producto['cantidad'] :: $producto['precio']}</td>
						</tr>";  // Añade un punto y coma al final de esta línea
				}
				echo "</table>";
			}
			?>
		
			<a href="catalogo.php">Volver al Catálogo</a>
		</body>
		</html>