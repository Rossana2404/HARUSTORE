<?php 
session_start();
if(isset($_SESSION['usuario'])){

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Productos</title>
		<?php require_once "menu.php"; ?>
		<?php require_once "conexion/database.php"; 
		$c= new conectar();
		$conexion=$c->conexion();
		$sql="SELECT categoria_id,nombre
		from categorias";
		$result=mysqli_query($conexion,$sql);
		?>
	</head>
	<body>
		<div class="container">
			<h1>Productos</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmProductos" enctype="multipart/form-data">
						<label>Categoria</label>
						<select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect">
							<option value="A">Selecciona Categoria</option>
							<?php while($ver=mysqli_fetch_row($result)): ?>
								<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
							<?php endwhile; ?>
						</select>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Descripcion</label>
						<input type="text" class="form-control input-sm" id="descripcion" name="descripcion">
						<label>Cantidad</label>
						<input type="text" class="form-control input-sm" id="cantidad" name="cantidad">
						<label>Precio</label>
						<input type="text" class="form-control input-sm" id="precio" name="precio">
						<label>Imagen</label>
						<input type="file" id="imagen" name="imagen">
						<p></p>
						<span id="btnAgregaProducto" class="btn btn-primary">Agregar</span>
					</form>
				</div>
				<div class="col-sm-8">
					<div id="tablaProductoLoad"></div>
				</div>
			</div>
		</div>

		<!-- Button trigger modal -->
		
		<!-- Modal -->
		<div class="modal fade" id="abremodalUpdateProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza Producto</h4>
					</div>
					<div class="modal-body">
						<form id="frmProducto" enctype="multipart/form-data">
							<input type="text" id="idProducto" hidden="" name="idProducto">
							<label>Categoria</label>
							<select class="form-control input-sm" id="categoriaSelectU" name="categoriaSelectU">
								<option value="A">Selecciona Categoria</option>
								<?php 
								$sql="SELECT categoria_id,nombre
								from categorias";
								$result=mysqli_query($conexion,$sql);
								?>
								<?php while($ver=mysqli_fetch_row($result)): ?>
									<option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
								<?php endwhile; ?>
							</select>
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" id="nombreU" name="nombreU">
							<label>Descripcion</label>
							<input type="text" class="form-control input-sm" id="descripcionU" name="descripcionU">
							<label>Cantidad</label>
							<input type="text" class="form-control input-sm" id="cantidadU" name="cantidadU">
							<label>Precio</label>
							<input type="text" class="form-control input-sm" id="precioU" name="precioU">
							
						</form>
					</div>
					<div class="modal-footer">
						<button id="btnActualizaproducto" type="button" class="btn btn-warning" data-dismiss="modal">Actualizar</button>

					</div>
				</div>
			</div>
		</div>

	</body>
	</html>

	<script type="text/javascript">
		function agregaDatosProducto(idproducto){
			$.ajax({
				type:"POST",
				data:"prod=" + idproducto,
				url:"../procesos/",
				success:function(r){
					
					dato=jQuery.parseJSON(r);
					$('#idproducto').val(dato['id_producto']);
					$('#categoriaSelectU').val(dato['categoria_id']);
					$('#nombreU').val(dato['nombre']);
					$('#descripcionU').val(dato['descripcion']);
					$('#cantidadU').val(dato['cantidad']);
					$('#precioU').val(dato['precio']);

				}
			});
		}

		function eliminaproducto(idproducto){
			alertify.confirm('¿Desea eliminar este producto?', function(){ 
				$.ajax({
					type:"POST",
					data:"idproducto=" + idproducto,
					url:"../procesos/productos/eliminarproducto.php",
					success:function(r){
						if(r==1){
							$('#tablaproductosLoad').load("productos/tablaproductos.php");
							alertify.success("Eliminado con exito!!");
						}else{
							alertify.error("No se pudo eliminar :(");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelo !')
			});
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#btnActualizaproducto').click(function(){

				datos=$('#frmproductosU').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/productos/actualizaproductos.php",
					success:function(r){
						if(r==1){
							$('#tablaproductosLoad').load("productos/tablaproductos.php");
							alertify.success("Actualizado con exito :D");
						}else{
							alertify.error("Error al actualizar :(");
						}
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tablaproductosLoad').load("productos/tablaproductos.php");

			$('#btnAgregaproducto').click(function(){

				vacios=validarFormVacio('frmproductos');

				if(vacios > 0){
					alertify.alert("Debes llenar todos los campos!!");
					return false;
				}

				var formData = new FormData(document.getElementById("frmproductos"));

				$.ajax({
					url: "../procesos/productos/insertaproductos.php",
					type: "post",
					dataType: "html",
					data: formData,
					cache: false,
					contentType: false,
					processData: false,

					success:function(r){
						
						if(r == 1){
							$('#frmproductos')[0].reset();
							$('#tablaproductosLoad').load("productos/tablaproductos.php");
							alertify.success("Agregado con exito :D");
						}else{
							alertify.error("Fallo al subir el archivo :(");
						}
					}
				});
				
			});
		});
	</script>

	<?php 
}else{
	header("location:../index.php");
}
?>