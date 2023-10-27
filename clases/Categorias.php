
<?php 
	class categoria{
		public function agregaCategoria($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="INSERT into categoria(id_usuario,
										nombre,
										fechaCaptura)
						values ('$datos[0]',
								'$datos[1]',
								'$datos[2]')";

			return mysqli_query($conexion,$sql);
		}

		public function actualizaCategoria($datos){
			$c= new conectar();
			$conexion=$c->conexion();

			$sql="UPDATE categoria set nombre='$datos[1]'
								where categoria_id='$datos[0]'";
			echo mysqli_query($conexion,$sql);
		}

		public function eliminaCategoria($idcategoria){
			$c= new conectar();
			$conexion=$c->conexion();
			$sql="DELETE from categoria 
					where categoria_id='$idcategoria'";
			return mysqli_query($conexion,$sql);
		}

	}

 ?>