<?php 
class metodoUs{
    public function mostrarReg($sql)
    {
        $c = new bd();
        $conexion = $c->conexion();
        $result = mysqli_query($conexion, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}
    ?>