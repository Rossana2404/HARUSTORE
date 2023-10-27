<?php 
require_once "../../conexion/database.php";
$c = new conectar();
$conexion = $c->conexion();
?>

<h4>Carrito de compras</h4>
<div class="row">
	<div class="col-sm-4">
		<form id="frmVentasProductos">
			<label>Selecciona Cliente</label>

			<!-- Código para seleccionar cliente -->
			
			<label>Categoría</label>
			<select class="form-control input-sm" id="categoriaVenta" name="categoriaVenta">
				<option value="A">Selecciona</option>
				<?php
				$sql = "SELECT id_categoria, nombre_categoria FROM categoria";
				$result = mysqli_query($conexion, $sql);
				while ($categoria = mysqli_fetch_assoc($result)):
				?>
					<option value="<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['nombre_categoria'] ?></option>
				<?php endwhile; ?>
			</select>

			<label>Producto</label>
			<select class="form-control input-sm" id="productoVenta" name="productoVenta">
				<option value="A">Selecciona</option>
			</select>

			<label>Cantidad</label>
			<input type="text" class="form-control input-sm" id="cantidadV" name="cantidadV">
			
			<div class="col-sm-4">
		<div id="tablaVentasTempLoad"></div>
		
		<!-- Agregar un elemento para mostrar el total de la compra -->
		<div id="totalCompra">
			<label>Total de la compra:</label>
			<span id="totalCompraValue">$0.00</span>
			
			<input readonly="" type="text" class="form-control input-sm" id="precioV" name="precioV">
		</div>
	</div>
		
			
			<p></p>
			<span class="btn btn-primary" id="btnAgregaVenta">Agregar</span>
			<span class="btn btn-danger" id="btnVaciarVentas">Vaciar ventas</span>
			<span class="btn btn-primary" id="btnComprar">Comprar</span> <!-- Botón para calcular el total de la compra -->
		</form>
	</div>

	<div class="col-sm-3">
		<div id="imgProducto"></div>
	</div>

	<div class="col-sm-4">
		<div id="tablaVentasTempLoad"></div>
		
		
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#categoriaVenta').change(function(){
			// Actualizar la lista de productos en función de la categoría seleccionada
			var categoriaSeleccionada = $(this).val();
			$.ajax({
				type: "POST",
				data: "idcategoria=" + categoriaSeleccionada,
				url: "../procesos/ventas/listarProductos.php", // Implementa esta URL para obtener los productos de la categoría
				success: function(response){
					$('#productoVenta').html(response);
				}
			});
		});

		$('#btnAgregaVenta').click(function(){
			// Código para agregar el producto al carrito y calcular el total de compra
			// Asegúrate de realizar los cálculos necesarios y actualizar el valor en #totalCompraValue
		});

		$('#btnVaciarVentas').click(function(){
			// Código para vaciar el carrito de compras y reiniciar el total
		});

		$('#btnComprar').click(function(){
			// Código para realizar la compra, registra la venta en la base de datos y muestra un mensaje de confirmación
		});
	});
</script>