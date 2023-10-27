<?php 

class producto
{
    // ... Otras funciones existentes ...

    public function agregaSubcategoria($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $fecha = date('Y-m-d');

        $sql = "INSERT into subproductos (categoria_id,
                                          nombre,
                                          fechaCaptura)
                        values ('$datos[0]',
                                '$datos[1]',
                                '$fecha')";
        return mysqli_query($conexion, $sql);
    }

    public function obtenSubcategoria($idCategoria)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "SELECT id_subproductos, 
                        nombre
                from subproductos
                where categoria_id='$idCategoria'";
        $result = mysqli_query($conexion, $sql);

        $subproductos = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $subproductos[] = $row;
        }

        return $subproductos;
    }

    public function actualizaSubcategoria($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE subproductos set nombre='$datos[1]'
                        where id_subproductos='$datos[0]'";

        return mysqli_query($conexion, $sql);
    }

    public function eliminaSubcategoria($idSubcategoria)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "DELETE from subproductos 
                    where id_subproductos='$idSubcategoria'";

        return mysqli_query($conexion, $sql);
    }
}

?>