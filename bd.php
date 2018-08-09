<?php 
class bd{

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "pruebadev";

    public function conexion()
    {
        $conexion = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        $conexion->query("SET NAMES 'utf8'");

        return $conexion;
    }



}

?>