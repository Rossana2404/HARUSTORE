<?php
class Usuario{
    public function registroUsuario($datos){
        $c = new Conectar();
        $conexion = $c->conexion();

        $fecha = date('Y-m-d');

        $sql = "INSERT INTO usuario (nombre, apellido, email, password, fechaCaptura, id_cliente, tipo_usuario)
                VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', '$fecha', $datos[4], '$datos[5]')";

        return mysqli_query($conexion, $sql);
    }

    public function loginUser($datos){
        $c = new Conectar();
        $conexion = $c->conexion();
        $password = sha1($datos[1]);

        $_SESSION['usuario'] = $datos[0];
        $_SESSION['iduser'] = self::traeID($datos);

        $sql = "SELECT * 
                FROM usuario
                WHERE email = '$datos[0]'
                AND password = '$password'";

        $result = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($result) > 0){
            return 1;
        } else {
            return 0;
        }
    }

    public function traeID($datos){
        $c = new Conectar();
        $conexion = $c->conexion();
        $password = sha1($datos[1]);

        $sql = "SELECT id_usuario 
                FROM usuario
                WHERE email = '$datos[0]'
                AND password = '$password'";

        $result = mysqli_query($conexion, $sql);

        return mysqli_fetch_row($result)[0];
    }

	public function obtenDatosUsuario($idusuario) {
		$c = new Conectar();
		$conexion = $c->conexion();
	
		// Validar y limpiar el valor de id_usuario
		$idusuario = mysqli_real_escape_string($conexion, $idusuario);
	
		$sql = "SELECT id_usuario, nombre, apellido, email
				FROM usuario
				WHERE id_usuario = ?";
	
		$stmt = mysqli_prepare($conexion, $sql);
		mysqli_stmt_bind_param($stmt, "i", $idusuario); // "i" indica un entero (integer)
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
	
		// Verificar si la consulta encontró resultados
		if ($result && $ver = mysqli_fetch_row($result)) {
			$datos = array(
				'id_usuario' => $ver[0],
				'nombre' => $ver[1],
				'apellido' => $ver[2],
				'email' => $ver[3]
			);
		} else {
			// Manejar el caso en que no se encontraron resultados
			$datos = array(
				'id_usuario' => null,
				'nombre' => null,
				'apellido' => null,
				'email' => null
			);
		}
	
		mysqli_stmt_close($stmt);
	
		return $datos;
	}
	
	
    public function actualizaUsuario($datos){
        $c = new Conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE usuario
                SET nombre = '$datos[1]',
                    apellido = '$datos[2]',
                    email = '$datos[3]'
                WHERE id_usuario = '$datos[0]'";

        return mysqli_query($conexion, $sql);
    }

    public function eliminaUsuario($idusuario){
        $c = new Conectar();
        $conexion = $c->conexion();

        $sql = "DELETE FROM usuario
                WHERE id_usuario = '$idusuario'";

        return mysqli_query($conexion, $sql);
    }
}
