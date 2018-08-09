<?php 



require ('bd.php');
session_start();


$r = $_SESSION['u_usuario'];
    $obj = new bd ();
$conexion = $obj->conexion();
$sql = mysqli_query($conexion, "SELECT id_usuario FROM login WHERE usuario='$r'");
while ($mostrar = mysqli_fetch_row($sql)) {
  $is= $mostrar[0];
    
 
}
$id=$is;

$fechaActual = date('d-m-Y H:i:s');

echo $fechaActual;

?>





