<?php 

require ('bd.php');
session_start();

////////////////////////////////////////////////////////////////////////////


$fc = date("Y-m-d H:i:s");

//////////////////////////////////////////////////////////////////////////////////

$tc=0;
$ip=getenv('REMOTE_ADDR');

//********************************************************************* */
$r = $_SESSION['u_usuario'];
$obj = new bd();
$conexion = $obj->conexion();
$sql = mysqli_query($conexion, "SELECT id_usuario FROM login WHERE usuario='$r'");
while ($mostrar = mysqli_fetch_row($sql)) {
    $is = $mostrar[0];


}
$ids = $is;


//********************************************************************** */

$c = new bd();
$conexion = $c->conexion();
$conexion->query("INSERT INTO acceso(fecha,tipo_acceso,ip,id_usuario) 
VALUES ('$fc','$tc','$ip','$ids')");
mysqli_close($conexion); 



