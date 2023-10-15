<?php 

class producto
{
    // ... Otras funciones existentes ...

    public function agregaSubcategoria($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $fecha = date('Y-m-d');

        $sql = "INSERT into subcategorias (categoria_id,
                                          nombre,
                                          fechaCaptura)
                        values ('$datos[0]',
                                '$datos[1]',
                                '$fecha')";
        return mysqli_query($conexion, $sql);
    }

    public function obtenSubcategorias($idCategoria)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "SELECT id_subcategoria, 
                        nombre
                from subcategorias
                where categoria_id='$idCategoria'";
        $result = mysqli_query($conexion, $sql);

        $subcategorias = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $subcategorias[] = $row;
        }

        return $subcategorias;
    }

    public function actualizaSubcategoria($datos)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "UPDATE subcategorias set nombre='$datos[1]'
                        where id_subcategoria='$datos[0]'";

        return mysqli_query($conexion, $sql);
    }

    public function eliminaSubcategoria($idSubcategoria)
    {
        $c = new conectar();
        $conexion = $c->conexion();

        $sql = "DELETE from subcategorias 
                    where id_subcategoria='$idSubcategoria'";

        return mysqli_query($conexion, $sql);
    }
}

?>